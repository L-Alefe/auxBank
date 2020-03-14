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
		<title>Adicionar - Conta Bancaria</title>
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
	require_once("codigos/codAdcContaBancaria.php");
	require_once("codigos/codRodape.php");
?>
	</body>
<script src="../foundation/js/jquery.js"></script>
<script src="../foundation/js/what-input.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script src="../js/appAdc.js"></script>
<script src="../plugin/jquery.mask.js"></script>
<script src="../plugin/sweet-modal.js"></script>
<script>
	$(document).foundation();
</script>
<?php
	if($_SESSION['resultadoContaBancaria'] == "ok"){
		echo "
			<script>
				$.sweetModal({
				content: 'Conta Bancária cadastrada com sucesso.',
				icon: $.sweetModal.ICON_SUCCESS
				});
			</script>
		";
		unset($_SESSION['resultadoContaBancaria']);
	}else if($_SESSION['resultadoContaBancaria'] == "error"){
		echo "
			<script>
				$.sweetModal({
				content: 'Não estamos conseguindo cadastrar sua conta, tente de novo.',
				title: 'Erro ao cadastrar a sua conta bancária...',
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
		unset($_SESSION['resultadoContaBancaria']);
	}
?>
</html>
