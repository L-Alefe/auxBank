<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	$id = $_GET["id"];
	$comando = "DELETE FROM pagamentoComum WHERE id=?;";
	$execucao = $conexao->getCon()->prepare($comando);
	$execucao->bindParam(1, $id);
	$execucao->execute();
	header("Location: ../visual/consultarContasComuns.php");
?>
