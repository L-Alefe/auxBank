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
		<title>Balanço de finanças</title>
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
	require_once('../controle/Conexao.php');
	$con = new Conexao();
	if (isset($_SESSION['email'])) {
		
		
		$email =$_SESSION['email']; 
		$id = $_SESSION["id"];
		$sql = "SELECT saudo AS Saldo,usuario.renda AS Renda,pagamentoComum.valor AS Valor FROM contaBancaria INNER JOIN usuario ON contaBancaria.id_usuario = usuario.id LEFT JOIN pagamentoComum ON contaBancaria.id_usuario = pagamentoComum.id_usuario;";
		$puxarInfos = "SELECT * FROM auxBank.usuario WHERE id=?;";
		$puxarUsr = $con->getCon()->prepare($puxarInfos);
		$puxarUsr->bindParam(1, $id);
		$puxarUsr->execute();
		$puxei = $puxarUsr->fetch(PDO::FETCH_OBJ);
		
		$puxarGastos = "SELECT * FROM pagamentoComum WHERE id_usuario={$id};";
		$puxandoGastos = $con->getCon()->query($puxarGastos, PDO::FETCH_OBJ);

		$codigosql = "SELECT * FROM usuario WHERE id=?";
		$executando = $con->getCon()->prepare($codigosql);
		$executando->bindParam(1, $id);
		$executando->execute();
		$executei = $executando->fetch(PDO::FETCH_OBJ);
		foreach ($puxandoGastos as $key) {
			$valorNumero = intval($key->valor);
			$gastoTotal = $gastoTotal + $valorNumero;
			
		}
		$sql5 = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is null AND id_usuario={$_SESSION['id']};"; 
		$inforPagamentoComum = $con->getCon()->query($sql5, PDO::FETCH_OBJ);

		$sql6 = "SELECT * FROM auxBank.pagamentoComum WHERE numeroCartao is not null AND id_usuario={$_SESSION['id']};"; 
		$inforPagamentoCartao = $con->getCon()->query($sql6, PDO::FETCH_OBJ);

		$cmd = $con->getCon()->query($sql, PDO::FETCH_OBJ);
		foreach ($cmd as $saldo) {
			$renda = $saldo->Renda;
			$valor = $saldo->Valor +000;
			$vSaldo = $saldo->Saldo;
		}

	}
  	$dataHoje = date("d-m-Y");
	echo "<br /><div class='div-conteudo'>";
if($inforPagamentoComum->rowCount()>0 || $inforPagamentoCartao->rowCount()>0){
echo"

<div class='grid-x'>
	<div style='margin-left: auto; margin-right: auto;' class='cell large-8 medium-8 small-12'>
		<h5 class='textoCentro' style='background-color: #444; color: #eee; padding: 3px;'>Balanço das Contas {$dataHoje}</h5>
		<br />
		<canvas id='canvasSemanal'></canvas>
		<button class='button btnBank' onclick='myFunction()'>Download PDF</button>
	</div>
</div>
	<script type='text/javascript' src='Chart/dist/Chart.bundle.js'></script>
	<script type='text/javascript' src='Chart/utils.js'></script>

	<script>
		var canvasSemanal = document.getElementById('canvasSemanal').getContext('2d');
		var renda = $executei->renda;
		var gasto = $gastoTotal;
		var saldo = renda - gasto;
var chart = new Chart(canvasSemanal, {
 
    type: 'bar',	
    data: {
        labels: ['', '', ''],
        datasets: [{
            label: 'Renda',
            backgroundColor: ['#338833', '#dd2222', '#4444cc'],
            data: [renda,gasto,saldo,0]
        },{
						label: 'Gasto',
						backgroundColor: '#dd2222',
			},{
						label: 'Saldo',
						backgroundColor: '#4444cc'
			}]
    },

    options: {}
    });

	</script>
</div>
</body>
</html>
";
}else{
	echo "<h5>Os gráficos não serão gerados, pois você ainda não inseriu nenhum pagamento!</h5>
		<a href='adcPagamentoComum.php'>Inserir algum pagamento</a>
		";
}
echo "</div>";

?>
<?php	echo "<br /><br />"; require_once("codRodape.php");?>
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
<script type="text/javascript">
  function myFunction() {
	var grafico = document.getElementById("canvasSemanal");
   	window.print();
}
</script>
</html>
