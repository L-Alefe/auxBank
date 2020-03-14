<?php
	require_once("../controle/Conexao.php");
	$conexao = new Conexao();
	$sql = "SELECT * FROM auxBank.cartao WHERE id_usuario={$_SESSION["id"]};"; 
	$inforCartao = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);

	$sql1 = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is not null AND id_usuario={$_SESSION["id"]};"; 
	$saldo = $conexao->getCon()->query($sql1, PDO::FETCH_OBJ);
	foreach($saldo as $q){
		$tomara = $q->valor+$tomara;
	}
	echo "
		<br />
		<div class='div-conteudo'>
			<span class='raizCima'>Consultar</span> > <span class='raiz'>Cartão</span>
			<br />
			<br />
	";
	if($inforCartao->rowCount()==1){
		foreach($inforCartao as $cartao){
			$saldoAtual = $cartao->limite-$tomara;
			echo "
				<div class='div-conteudo' style='background-color: transparent; padding: 20px; border: 3px solid #888;'>
					<h3 style='background-color: #ccc; padding: 5px;'>Cartão 1  <img src='../imgs/cartao.png' width='40px;'></h3>
					<h5>Limite: $cartao->limite</h5>
					<h5>Saldo: $saldoAtual</h5>
					<h6>N°: $cartao->numero</h6>
				</div><br />
			";
		}
	}else{
		echo "<h5>Você não inseriu seu cartão no sistema!</h5>
			<a href='adcCartao.php'>Adicionar Cartão</a>		
";
	}

	echo "</div><br />";
?>
