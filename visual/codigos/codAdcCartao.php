<br />
<div class="div-conteudo">
	<span class="raizCima">Adicionar</span> / <span class="raiz">Cartão</span>
	<br />
	<br /	>
	<div class="formAdcConta" style="height: 450px;">
		<h5 class="textoCentro"><b>Adicionar Cartão</b></h5>
		<form action="../recebimentos/recebeDadosCartao.php" method="post">
			<label for="numero">Número</label>
			<input type="text" data-toggle-focus="form-callout" name="numero" data-mask="0000 0000 0000 0000" data-mask-selectonfocus="true" id="inputNumeroCartao" placeholder="0000 0000 0000 0000" required>

			<label for="limite">Limite</label>
			<input type="text" data-toggle-focus="form-callout" name="limite" data-mask="00000" data-mask-selectonfocus="true" placeholder="R$0,00" id="inputLimiteCartao" required>

			<label for="saudo">Código do cartão</label>
			<input type="number" data-toggle-focus="form-callout" name="codigo" placeholder="000" id="inputCodigoCartao" data-mask="000" data-mask-selectonfocus="true" required>
			<button class="btnBank button">Adicionar</button>
		</form>
	</div>
</div>
<br />
