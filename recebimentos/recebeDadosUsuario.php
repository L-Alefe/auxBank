<?php
	session_start();
	$nomeUsr = $_POST["nomeUsr"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$comSenha = $_POST["comSenha"];
	$renda = $_POST["renda"];	
	require_once("../modelo/Usuario.php");
	require_once("../controle/ControleUsuario.php");
	$usuario = new Usuario();
	$controleUsuario = new ControleUsuario();
	$usuario->setNome($nomeUsr);
	$usuario->setEmail($email);
	$usuario->setSenha($senha);
	$usuario->setRenda($renda);
	if($controleUsuario->cadastrarUsuario($usuario)){
		$_SESSION['resultadoCadastro'] = "ok";
		header("Location: ../");
	}else{
		$_SESSION['resultadoCadastro'] = "error";
		header("Location: ../");
	}
	
?>
