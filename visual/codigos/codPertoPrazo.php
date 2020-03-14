<?php
	session_start();
	require_once("../controle/Conexao.php");
	$conexao = new Conexao();
	$sql = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is null AND id_usuario={$_SESSION["id"]};"; 
	$inforPagamentoComum = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
	echo "
	<br />
<div class='div-conteudo'>
	<span class='raizCima'>Consultar</span> > <span class='raiz'>Perto do prazo</span>
	<br />
	<br />
	<br />
	<h5><b>Tabela de contas sem cartão ";
	if($inforPagamentoComum->rowCount()==0){
		echo "<span style='color: #ff3333;'>(vazia)</span>";
	}
	echo "</b></h5>
	<br />
	<pre style='height: 150px;'><table class='minhaTabela'>
		<thead style='background-color: #eeeeee;'>
			<tr>
			<th>Título</th>
			<th>Prazo</th>
			<th>Valor</th>
			</tr>
		</thead>
		<tbody>
			";
		foreach($inforPagamentoComum as $item){
			$dataNormal = date("d-m-Y", strtotime($item->prazo));
			if($dataNormal < date("d/m/Y") + 2){
			$dataNormal = date("d-m-Y", strtotime($item->prazo));
			echo "
			<tr style='background-color: #ff3333;'>
				<td>$item->titulo</td>
				<td>$dataNormal</td>
				<td>$item->valor</td>";
			}else{
			$dataNormal = date("d-m-Y", strtotime($item->prazo));
			echo "
			<tr style='backgrund-color: #33ff33;'>
				<td>$item->titulo</td>
				<td>$dataNormal</td>
				<td>$item->valor</td>";
			}
			echo "</tr>";
		}
	echo "
		</tbody>
	</table></pre><br />";
	$sql1 = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is not null AND id_usuario={$_SESSION["id"]};"; 
	$inforPagamentoCartao = $conexao->getCon()->query($sql1, PDO::FETCH_OBJ);
	echo "
	<br />
	<br />
	<h5><b>Tabela de contas com cartão ";
	if($inforPagamentoCartao->rowCount()==0){
		echo "<span style='color: #ff3333;'>(vazia)</span>";
	}
	echo "</b></h5>
	<br />
	<pre style='height: 150px;'><table class='minhaTabela'>
		<thead style='background-color: #eeeeee;'>
			<tr>
			<th>Título</th>
			<th>Prazo</th>
			<th>Valor</th>
			</tr>
		</thead>
		<tbody>
		";
		foreach($inforPagamentoCartao as $item){
			$dataNormal1 = date("d-m-Y", strtotime($item->prazo));
			if($dataNormal1 < date("d/m/Y") +2){
			echo "
			<tr style='background-color: #ff3333;'>
				<td>$item->titulo</td>
				<td>$dataNormal1</td>
				<td>$item->valor</td>";
			}else{
			echo "
			<tr style='backgrund-color: #33ff33;'>
				<td>$item->titulo</td>
				<td>$dataNormal1</td>
				<td>$item->valor</td>";
			}
			echo "</tr>";
		}
	echo "
		</tbody>
	</table></pre>
</div>
<br />
	";
?>
