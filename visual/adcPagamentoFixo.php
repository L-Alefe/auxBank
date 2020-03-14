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
		<title>Contas</title>
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
	require_once("codigos/codAdcPagamentoFixo.php");
	require_once("codigos/codRodape.php");
?>
	</body>
<script src="../foundation/js/jquery.js"></script>
<script src="../foundation/js/what-input.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script src="../js/appContasFixas.js"></script>
<script src="../js/ajaxOficial.js"></script>
<script src="../plugin/jquery.mask.js"></script>
<script src="../plugin/sweet-modal.js"></script>
<script>
	$(document).foundation();
</script>
</html>
