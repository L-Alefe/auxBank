<?php
	require_once("Conexao.php");
	class ControleContaBancaria{
		public function cadastrarContaBancaria($contaBancaria){
			try{
				$conexao = new Conexao();
				$sql = "INSERT INTO contaBancaria(numero, tipo, saudo, banco, id_usuario) VALUES(?,?,?,?,?);";
				// PREPARA A STRING PARA MODIFICAR USANDO VALORES
				$comando = $conexao->getCon()->prepare($sql);
				// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
				$comando->bindParam(1, $contaBancaria->getNumero());
				$comando->bindParam(2, $contaBancaria->getTipo());
				$comando->bindParam(3, $contaBancaria->getSaldo());
				$comando->bindParam(4, $contaBancaria->getBanco());
				$comando->bindParam(5, $contaBancaria->getIdUsr());
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
	}
?>
