<br />
<div class="div-conteudo">
	<span class="raizCima">Adicionar</span> / <span class="raiz">Pagamento fixo</span>
	<br />
	<br />
	<div class="formAdcConta" style="height: auto;">
		<h5 class="textoCentro"><b>Pagamento fixo</b></h5>
		<form action="#" method="post">
			<label for="titulo">Título</label>
			<input type="text" data-toggle-focus="form-callout" name="titulo" placeholder="Ex: Conta de água">
			<div class="secondary callout is-hidden" id="form-callout" data-toggler="is-hidden">
				<p>Tomaremos por referência o título do pagamento.</p>
			</div>

			<label for="valor">Valor</label>
			<input type="number" name="valor" placeholder="Ex: R$0,00">

			<label for="valor">N° cartão</label>
			<input type="text" name="valor" placeholder="0000 0000 0000 0000" id="inputNumeroCartao" data-mask="0000 0000 0000 0000" data-mask-selectonfocus="true">

			Semanal
			<div class="switch">
				<input class="switch-input" id="exampleRadioSwitch1" type="radio"  name="testGroup">
				<label class="switch-paddle" for="exampleRadioSwitch1">
					<span class="show-for-sr">Bulbasaur</span>
				</label>
			</div>
			Mensal
			<div class="switch">
				<input class="switch-input" id="exampleRadioSwitch2" type="radio" checked name="testGroup">
				<label class="switch-paddle" for="exampleRadioSwitch2">
					<span class="show-for-sr">Bulbasaur</span>
				</label>
			</div>
		
			<div id="divAjax">
				<label for="prazo">Dia de vencimento mensal</label>
				<input name="prazo" type="number" placeholder="Ex: 30">
			</div>

			<button class="btnBank button">Adicionar</button>
		</form>
	</div>
</div>
<br />
