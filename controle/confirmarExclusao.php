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
		<link rel="stylesheet" href="../plugin/sweet-modal.css" />
	</head>
	<body>
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
	$id = $_GET["id"];
	echo "
		<script>
$.sweetModal.confirm('Deseja realmente excluir?', function() {
	window.location.href = 'excluirPagamento.php?id=$id';
}, function(){
	window.location.href = '../visual/consultarContasComuns.php?id=$id';
});
		</script>
	";
?>
</html>
