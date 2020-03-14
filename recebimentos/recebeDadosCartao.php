<?php
	session_start();
	$numero = $_POST["numero"];
	$limite = $_POST["limite"];
	require_once("../modelo/Cartao.php");
	
	require_once("../controle/ControleCartao.php");
	$cartao = new Cartao();
	$controleCartao = new ControleCartao();
	$cartao->setNumero($numero);
	$cartao->setLimite($limite);
	$cartao->setIdUsr($_SESSION["id"]);
	
	if($controleCartao->cadastrarCartao($cartao)){
		$_SESSION['resultadoCadastroCartao'] = "ok";
		header("Location: ../visual/adcCartao.php");
	}else{
		$_SESSION['resultadoCadastroCartao'] = "error";
		header("Location: ../visual/adcCartao.php");
	}
?>
