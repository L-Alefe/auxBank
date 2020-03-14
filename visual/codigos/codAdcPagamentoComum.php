</br >
<div class="div-conteudo">
	<span class="raizCima">Adicionar</span> / <span class="raiz">Pagamento Comum</span>
	<br />
	<br />
	<div class="grid-x">
		<div class="cell small-12 medium-6 large-6">
			<div class="formAdcConta">
				<h5 class="textoCentro"><b>Pagamento sem cartão</b></h5>
				<form action="../recebimentos/recebePagamentoComum.php" method="post">
					<label for="titulo">Título</label>
					<input type="text" data-toggle-focus="form-callout" name="titulo" placeholder="Ex: Pagar a academia">
					<div class="secondary callout is-hidden" id="form-callout" data-toggler="is-hidden" required>
						<p>Tomaremos por referência o título do pagamento.</p>
					</div>
				
					<label for="prazo">Prazo</label>
					<input name="prazo" class="data prazo" type="date" placeholder="00/00/0000">

					<label for="valor">Valor</label>
					<input type="text" data-mask="00000" data-mask-selectonfocus="true" name="valor" placeholder="R$0,00" required>

					<p>Muito importante?</p>
					<div class="switch large">
						<input class="switch-input" name="importante" id="yes-noSem" type="checkbox">
						<label class="switch-paddle" for="yes-noSem">
							<span class="switch-active" aria-hidden="true">Sim</span>
							<span class="switch-inactive" aria-hidden="true">Não</span>
						</label>
					</div>
				
					<button class="btnBank button">Adicionar</button>
				</form>
			</div>
		</div>
		<div class="cell small-12 medium-6 large-6">
			<div class="formAdcConta">
				<h5 class="textoCentro"><b>Pagamento com cartão</b></h5>
				<form action="../recebimentos/recebePagamentoComum.php" method="post">
					<label>Título</label>
					<input type="text" placeholder="Ex: Compras do mercado" name="titulo" required>
					
					<label>Prazo</label>
					<input type="date" class="prazo" placeholder="0/00/0000" name="prazo">
	
					<label>N° Cartão</label>
					<input type="text" name="numeroCartao" id="inputNumeroCartao" data-mask="0000 0000 0000 0000" data-mask-selectonfocus="true" placeholder="0000 0000 0000 0000" required>

					<label>Valor</label>
					<input type="number" placeholder="R$0,00" name="valor" data-mask="00000" data-mask-selectonfocus="true" required>

					<p>Muito importante?</p>
					<div class="switch large">
						<input name="importante" class="switch-input" id="yes-noCom" type="checkbox" name="exampleSwitch">
						<label class="switch-paddle" for="yes-noCom">
							<span class="switch-active" aria-hidden="true">Sim</span>
							<span class="switch-inactive" aria-hidden="true">Não</span>
						</label>
					</div>

					<button class="btnBank button">Adicionar</button>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<br />
