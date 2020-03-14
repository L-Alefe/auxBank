<?php
	session_start();
	if(!isset($_SESSION['nome'])){
		header("Location: ../");
	}
?>
<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Adicionar - Adicionar Cartão</title>
		<link rel="stylesheet" href="../foundation/css/foundation.css" />
		<link rel="stylesheet" href="../css/appHome.css" />
		<link rel="stylesheet" href="../css/appGeral.css" />
		<link rel="stylesheet" href="../css/contaAdcPagamento.css" />
		<link rel="stylesheet" href="../plugin/sweet-modal.css" />
		<link rel="icon" type="image/x-icon" href="../imgs/moeda2ph.png" />
	</head>
	<body>
<?php
	require_once("codigos/codMenu.php");
	require_once("codigos/codAdcCartao.php");
	require_once("codRodape.php");
?>
	</body>
<script src="../foundation/js/jquery.js"></script>
<script src="../foundation/js/what-input.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script src="../js/appAdcCartao.js"></script>
<script src="../js/appAdc.js"></script>
<script src="../plugin/jquery.mask.js"></script>
<script src="../plugin/sweet-modal.js"></script>
<script>
	$(document).foundation();
</script>
<?php
	if($_SESSION['resultadoCadastroCartao'] == "ok"){
		echo "
			<script>
				$.sweetModal({
				content: 'Cartão cadastrado com sucesso.',
				icon: $.sweetModal.ICON_SUCCESS
				});
			</script>
		";
		unset($_SESSION['resultadoCadastroCartao']);
		
	}else if($_SESSION['resultadoCadastroCartao'] == "error"){
		echo "
			<script>
				$.sweetModal({
				content: 'Não estamos conseguindo cadastrar seu cartão, tente de novo.',
				title: 'Erro ao cadastrar o cartão...',
				icon: $.sweetModal.ICON_ERROR,

				buttons: [
					{
						label: 'OK',
						classes: 'redB'
					}
				]
				});
			</script>
		";
		unset($_SESSION['resultadoCadastroCartao']);
	}
?>
</html>
