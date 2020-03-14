<div class="div-conteudo">
	<span class="raizCima">Adicionar</span> / <span class="raiz">Conta Bancária</span>
	<br />
	<br /	>
	<div class="formAdcConta" style="height: 450px;">
		<h5 class="textoCentro"><b>Conta Bancária</b></h5>
		<form action="../recebimentos/recebeContaBancaria.php" method="post">
			<label for="numero">Número</label>
			<input type="text" data-toggle-focus="form-callout" name="numero" data-mask="0000-0" data-mask-selectonfocus="true" id="inputNumeroBancaria" placeholder="0000-0" required>

			<label for="tipo">Tipo</label>
			<select name="tipo">
				<option value="poupanca" selected>Conta poupança</option>
				<option value="corrente">Conta corrente</option>
			</select>

			<label for="saudo">Sáudo</label>
			<input type="number" data-toggle-focus="form-callout" name="saldo" placeholder="R$0,00" id="inputSaudo" data-mask="00000" data-mask-selectonfocus="true" required>

			<label for="banco">Banco</label>
			<input type="text" data-toggle-focus="form-callout" name="banco" id="inputBanco" placeholder="Ex: Bradesco" required>
			<button class="btnBank button">Adicionar</button>
		</form>
	</div>
</div>
