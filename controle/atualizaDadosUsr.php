<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$renda = $_POST["renda"];
	$id = $_SESSION["id"];
	
	$comando = "UPDATE auxBank.usuario SET nome=?, email=?, senha=?, renda=? WHERE id=?;";
	$execucao = $conexao->getCon()->prepare($comando);
	$execucao->bindParam(1, $nome);
	$execucao->bindParam(2, $email);
	$execucao->bindParam(3, $senha);
	$execucao->bindParam(4, $renda);
	$execucao->bindParam(5, $id);
	$execucao->execute();
	
	$_SESSION['dadosAlterados'] = "ok";
	header('Location: ../visual/config.php');
?>
