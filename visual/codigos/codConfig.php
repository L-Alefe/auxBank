<?php
	require_once("../controle/Conexao.php");
	$conexao = new Conexao();
	$sql = "SELECT * FROM auxBank.usuario WHERE id=?;";
	$comando = $conexao->getCon()->prepare($sql);
	$comando->bindParam(1, $_SESSION["id"]);
	$comando->execute();
	$dadosUsr = $comando->fetch(PDO::FETCH_OBJ);
echo "
<br />
<div class='div-conteudo'>
	<span class='raiz'>Configurações</span>
	<br />
	<br />
	<div>
		<form action='../controle/atualizaDadosUsr.php' method='post'>
			<label>Mude seu nome</label>
		        <input type='text' name='nome' value='{$dadosUsr->nome}' placeholder='Nome'>

			<label>Mude seu email</label>
		        <input type='text' name='email' value='{$dadosUsr->email}' placeholder='Email'>
			
			<label>Mude sua senha</label>
		        <input type='password' name='senha' value='{$dadosUsr->senha}' placeholder='Nova senha'>
			
			<label>Mude sua renda</label>
			<input type='number' name='renda' value='{$dadosUsr->renda}' placeholder='R$0,00'>
			
			<button class='btnBank button'>Atualizar</button>
		</form>
	</div>
</div>
<br />
";
?>
