<?php
	session_start();
?>
<!doctype html>
<html class="no-js" lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Aux' Bank auxiliador</title>
		<link rel="stylesheet" href="foundation/css/foundation.css" />
		<link rel="stylesheet" href="css/cadastraLoga.css" />
		<link rel="stylesheet" href="css/appGeral.css" />
		<link rel="stylesheet" href="css/appHome.css" />
		<link rel="stylesheet" href="plugin/sweet-modal.css" />
		<link rel="icon" type="image/x-icon" href="imgs/moeda2ph.png" />
	</head>
	<body>
<?php
	require_once("visual/cadastraLoga.php");
	require_once("codRodapePrimeiro.php");
?>
	</body>
<script src="foundation/js/jquery.js"></script>
<script src="foundation/js/what-input.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script src="plugin/sweet-modal.js"></script>
<script src="js/app.js"></script>
<script>
	$(document).foundation();
</script>
<?php
		if($_SESSION['resultadoCadastro'] == "ok"){
			echo "
				<script>
					$.sweetModal({
					content: 'Cadastrado com sucesso. Faça seu login.',
					icon: $.sweetModal.ICON_SUCCESS
					});
				</script>
			";
			session_destroy();
		}else if($_SESSION['resultadoCadastro'] == "error"){
			echo "
				<script>
					$.sweetModal({
					content: 'Não estamos conseguindo lhe cadastrar, tente de novo.',
					title: 'Erro ao cadastrar...',
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
			session_destroy();
		}
		if(isset($_SESSION["errorLogin"])){
			echo "
				<script>
					$.sweetModal({
					content: 'Tente de novo mais tarde...',
					title: 'Erro ao tentar logar...',
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
			session_destroy();
		}
	?>
</html>
