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
		<link rel="stylesheet" href="../css/config.css" />
		<link rel="icon" type="image/x-icon" href="../imgs/moeda2ph.png" />
	</head>
	<body>
<?php
	require_once("codigos/codMenu.php");
	require_once("codigos/codConfig.php");
	require_once("codRodape.php");
?>
	</body>
<script src="../plugin/sweet-modal.js"></script>
<script src="../foundation/js/jquery.js"></script>
<script src="../foundation/js/what-input.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
<?php
	if($_SESSION['dadosAlterados'] == "ok"){
		echo "
			<script>
				$.sweetModal({
				content: 'Dados alterados com sucesso.',
				icon: $.sweetModal.ICON_SUCCESS
				});
			</script>
		";
		unset($_SESSION['dadosAlterados']);
	}
?>
</html>
