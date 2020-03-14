<?php
	session_start();
	$numero = $_POST["numero"];
	$tipo = $_POST["tipo"];
	$banco = $_POST["banco"];
	$saldo = $_POST["saldo"];
	
	require_once("../modelo/ContaBancaria.php");
	
	require_once("../controle/ControleContaBancaria.php");
	
	$contaBancaria = new ContaBancaria();
	$controleContaBancaria = new ControleContaBancaria();

	$contaBancaria->setNumero($numero);
	$contaBancaria->setTipo($tipo);
	$contaBancaria->setSaldo($saldo);
	$contaBancaria->setBanco($banco);
	$contaBancaria->setIdUsr($_SESSION["id"]);
	
	if($controleContaBancaria->cadastrarContaBancaria($contaBancaria)){
		$_SESSION['resultadoContaBancaria'] = "ok";
		header("Location: ../visual/adcContaBancaria.php");
	}else{
		$_SESSION['resultadoCadastroCartao'] = "error";
		header("Location: ../visual/adcContaBancaria.php");
	}
?>
