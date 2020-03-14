<?php
	require_once("Conexao.php");
	session_start();
	class ControleUsuario{
		public function cadastrarUsuario($usuario){
			try{
				$conexao = new Conexao();
				$sql = "INSERT INTO usuario(nome,email,senha,renda) VALUES(:nome,:email,:senha,:renda);";
				// PREPARA A STRING PARA MODIFICAR USANDO VALORES
				$comando = $conexao->getCon()->prepare($sql);
				// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
				$comando->bindParam("nome", $usuario->getNome());
				$comando->bindParam("email", $usuario->getEmail());
				$comando->bindParam("senha", $usuario->getSenha());
				$comando->bindParam("renda", $usuario->getRenda());
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

		public function logarUsuario($usuario){
			try{
				$conexao = new Conexao();
				$sql = "SELECT * FROM usuario WHERE email=?;";

				$verificar = $conexao->getCon()->prepare($sql);
				$verificar->bindParam(1, $usuario->getEmail());
				$verificar->execute();

				if($verificar->rowCount() > 0){
					$sql1 = "SELECT senha FROM usuario WHERE email=?;";
					$verificar1 = $conexao->getCon()->prepare($sql1);
					$verificar1->bindParam(1, $usuario->getEmail());
					$verificar1->execute();
					$array = $verificar1->fetch(PDO::FETCH_ASSOC);
					$StringSenha = implode($array);
					if($usuario->getSenha() == $StringSenha){
						$dados = $verificar->fetch(PDO::FETCH_OBJ);
						$_SESSION["id"] = $dados->id;
						$_SESSION['nome'] = $dados->nome;
						$_SESSION['senha'] = $dados->senha;
						$_SESSION['email'] = $dados->email;
						$_SESSION['renda'] = $dados->renda;
						return true;
					}else{
						return false;
					}
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
