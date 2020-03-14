<?php
	session_start();
	$email = $_POST["email"];
	$senha = $_POST["senha"];	
	require_once("../modelo/Usuario.php");
	require_once("../controle/ControleUsuario.php");
	$usuario = new Usuario();
	$controleUsuario = new ControleUsuario();
	$usuario->setEmail($email);
	$usuario->setSenha($senha);
	if($controleUsuario->logarUsuario($usuario)){
		header("Location: ../visual/home.php");
	}else{
		$_SESSION["errorLogin"] = "error";
		header("Location: ../");
	}
?>
