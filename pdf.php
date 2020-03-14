<?php	

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html("
			<canvas id='canvasSemanal'></canvas>
		");

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
<script type='text/javascript' src='visual/Chart/dist/Chart.bundle.js'></script>
<script type='text/javascript' src='visual/Chart/utils.js'></script>
<script>
		var canvasSemanal = document.getElementById('canvasSemanal').getContext('2d');
		var renda = 1000;
		var gasto = 500;
		var saldo = renda - gasto;
var chart = new Chart(canvasSemanal, {
 
    type: 'bar',	
    data: {
        labels: ['', '', ''],
        datasets: [{
            label: 'Renda',
            backgroundColor: ['#338833', '#dd2222', '#4444cc'],
            borderColor: ['#338833', '#dd2222', '#000'],
            data: [renda,gasto,saldo,0],
        },{
						label: 'Gasto',
						backgroundColor: '#dd2222'
			},{
						label: 'Saldo',
						backgroundColor: '#4444cc'
			}]
    },

    options: {}
    });

	</script>
<script type="text/javascript"> try { this.print(); } catch (e) { window.onload = window.print; } 
</script>
