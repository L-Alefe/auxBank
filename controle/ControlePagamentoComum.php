<?php
	require_once("Conexao.php");
	class ControlePagamentoComum{
		public function cadastrarPagamentoComum($pagamentoComum){
			try{
				$conexao = new Conexao();
				$sql = "INSERT INTO pagamentoComum(titulo,prazo,valor,importante,id_usuario) VALUES(?,?,?,?,?);";
				// PREPARA A STRING PARA MODIFICAR USANDO VALORES
				$comando = $conexao->getCon()->prepare($sql);
				// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
				$comando->bindParam(1, $pagamentoComum->getTitulo());
				$comando->bindParam(2, $pagamentoComum->getPrazo());
				$comando->bindParam(3, $pagamentoComum->getValor());
				$comando->bindParam(4, $pagamentoComum->getImportante());
				$comando->bindParam(5, $pagamentoComum->getIdUsr());
				// EXECUTA NO PREPARED STATEMENT
				$comando->execute();
				return true;
			}catch(PDOException $ex){
				echo $ex->getMessage();
				return false;
			}catch(Exception $ex){
				echo $ex->getMessage();
				return false;
			}
		}

		public function cadastrarPagamentoCartao($pagamentoComum){
			try{
				$conexao = new Conexao();
				$sql = "SELECT * FROM cartao WHERE id_usuario=?;";

				$verificar = $conexao->getCon()->prepare($sql);
				$verificar->bindParam(1, $_SESSION["id"]);
				$verificar->execute();
				$dados = $verificar->fetch(PDO::FETCH_OBJ);
				if($dados->numero == $pagamentoComum->getNumeroCartao()){
					$sql = "INSERT INTO pagamentoComum(titulo,prazo,valor,importante,id_usuario,numeroCartao) VALUES(?,?,?,?,?,?);";
					// PREPARA A STRING PARA MODIFICAR USANDO VALORES
					$comando = $conexao->getCon()->prepare($sql);
					// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
					$comando->bindParam(1, $pagamentoComum->getTitulo());
					$comando->bindParam(2, $pagamentoComum->getPrazo());
					$comando->bindParam(3, $pagamentoComum->getValor());
					$comando->bindParam(4, $pagamentoComum->getImportante());
					$comando->bindParam(5, $pagamentoComum->getIdUsr());
					$comando->bindParam(6, $pagamentoComum->getNumeroCartao());
					// EXECUTA NO PREPARED STATEMENT
					$comando->execute();
					return true;
				}else{
					return false;
				}
			}catch(PDOException $ex){
				echo $ex->getMessage();
				return false;
			}catch(Exception $ex){
				echo $ex->getMessage();
				return false;
			}
		}
	}
?>
