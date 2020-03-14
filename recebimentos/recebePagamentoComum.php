<?php
	session_start();
	if(!isset($_POST["numeroCartao"])){
		$titulo = $_POST["titulo"];
		$prazo = $_POST["prazo"];
		$valor = $_POST["valor"];
		$importante = $_POST["importante"];
		require_once("../modelo/PagamentoComum.php");
		$pagamentoComum = new PagamentoComum();
		require_once("../controle/ControlePagamentoComum.php");
		$controlePagamentoComum = new ControlePagamentoComum();
	
		$pagamentoComum->setTitulo($titulo);
		$pagamentoComum->setPrazo($prazo);
		$pagamentoComum->setValor($valor);
		$pagamentoComum->setImportante($importante);
		$pagamentoComum->setIdUsr($_SESSION["id"]);
		if($controlePagamentoComum->cadastrarPagamentoComum($pagamentoComum)){
			$_SESSION['resultadoPagamentoComum'] = "ok";
			header("Location: ../visual/adcPagamentoComum.php");
		}else{
			$_SESSION['resultadoPagamentoComum'] = "error";
			header("Location: ../visual/adcPagamentoComum.php");
		}
		
		
	}else{
		
		$titulo = $_POST["titulo"];
		$prazo = $_POST["prazo"];
		$valor = $_POST["valor"];
		$numeroCartao = $_POST["numeroCartao"];
		$importante = $_POST["importante"];
		require_once("../modelo/PagamentoComum.php");
		$pagamentoComum = new PagamentoComum();
		require_once("../controle/ControlePagamentoComum.php");
		$controlePagamentoComum = new ControlePagamentoComum();
		
		$pagamentoComum->setTitulo($titulo);
		$pagamentoComum->setPrazo($prazo);
		$pagamentoComum->setValor($valor);
		$pagamentoComum->setImportante($importante);
		$pagamentoComum->setNumeroCartao($numeroCartao);
		$pagamentoComum->setIdUsr($_SESSION["id"]);
		if($controlePagamentoComum->cadastrarPagamentoCartao($pagamentoComum)){
			$_SESSION['resultadoPagamentoComum'] = "ok";
			header("Location: ../visual/adcPagamentoComum.php");
		}else{
			$_SESSION['resultadoPagamentoComum'] = "error";
			header("Location: ../visual/adcPagamentoComum.php");
		}
	}
?>
