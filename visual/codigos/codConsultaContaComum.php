<?php
	require_once("../controle/Conexao.php");
	$conexao = new Conexao();
	$sql = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is null AND id_usuario={$_SESSION["id"]};"; 
	$inforPagamentoComum = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
	echo "
<br />
<div class='div-conteudo'>
	<span class='raizCima'>Consultar</span> > <span class='raiz'>Contas Comuns</span>
	<br />
	<br />
	<br />
	<h5><b>Tabela de contas sem cartão ";
	if($inforPagamentoComum->rowCount()==0){
		echo "<span style='color: #ff3333;'>(vazia)</span>";
	}
	echo "
	</b></h5>
	<br />
	<pre style='height: 150px;'><table class='minhaTabela'>
		<thead style='background-color: #eeeeee;'>
			<tr>
			<th>Título</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			";
		foreach($inforPagamentoComum as $item){
			$contador = $contador + 1;
			$dataNormal = date("d-m-Y", strtotime($item->prazo));
			echo "
			<tr>
				<td>$item->titulo</td>
				<td>$dataNormal</td>
				<td>$item->valor</td>
				<td><a href='../controle/confirmarExclusao.php?id=$item->id'><button class='button btnBank'>Excluir</button></a></td>
			</tr>
			";
			$totalValor = $totalValor + $item->valor;
		}
	echo "
		</tbody>
	</table></pre>";
	echo '<b style="color: #ff3333;">TOTAL: R$'; echo"{$totalValor},00</b><br /><br /><br />";
	
	$sql1 = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is not null AND id_usuario={$_SESSION["id"]};;"; 
	$inforPagamentoCartao = $conexao->getCon()->query($sql1, PDO::FETCH_OBJ);
	echo "
	<hr />
	<br />
	<h5><b>Tabela de contas com cartão ";
	if($inforPagamentoCartao->rowCount()==0){
		echo "<span style='color: #ff3333;'>(vazia)</span>";
	} echo "</b></h5>
	<br />
	<pre style='height: 150px;'><table class='minhaTabela'>
		<thead style='background-color: #eeeeee;'>
			<tr>
			<th>Título</th>
			<th>Prazo</th>
			<th>Valor</th>
			<th>Cartão</th>
			<th>Editar</th>
			</tr>
		</thead>
		<tbody>
		";
		foreach($inforPagamentoCartao as $item){
			$dataNormal = date("d-m-Y", strtotime($item->prazo));
			echo "
			<tr>
				<td>$item->titulo</td>
				<td>$dataNormal</td>
				<td>$item->valor</td>
				<td>$item->numeroCartao</td>
				<td><a href='../controle/confirmarExclusao.php?id=$item->id'><button class='button btnBank'>Excluir</button></a></td>
			</tr>
			";
		$totalValorCom = $totalValorCom + $item->valor;
		}
	echo "
		</tbody>
	</table></pre>";
	echo '<b style="color: #ff3333;">TOTAL: R$'; echo"{$totalValorCom},00</b><br /><br /><br />";
echo "
</div>
<br />
	";
?>
