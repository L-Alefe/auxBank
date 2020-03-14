<?php
	require_once("Conexao.php");
	class ControleCartao{
		public function cadastrarCartao($cartao){
			try{
				$conexao = new Conexao();
				$teste = "SELECT * FROM cartao;";
				$seCartao = $conexao->getCon()->query($teste, PDO::FETCH_OBJ);
				if($seCartao->rowCount()>=2){
					return false;
				}else{
					$sql = "INSERT INTO cartao(numero,limite, id_usuario) VALUES(?,?,?);";
					// PREPARA A STRING PARA MODIFICAR USANDO VALORES
					$comando = $conexao->getCon()->prepare($sql);
					// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
					$comando->bindParam(1, $cartao->getNumero());
					$comando->bindParam(2, $cartao->getLimite());
					$comando->bindParam(3, $cartao->getIdUsr());
					// EXECUTA NO PREPARED STATEMENT
					$comando->execute();
					return true;
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
