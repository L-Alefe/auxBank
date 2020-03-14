<?php session_start();
	require_once("../controle/Conexao.php");
	$con = new Conexao();
	$id = $_SESSION['id'];
		$codigosql = "SELECT * FROM usuario WHERE id=?;";
		$executando = $con->getCon()->prepare($codigosql);
		$executando->bindParam(1, $id);
		$executando->execute();
		$executei = $executando->fetch(PDO::FETCH_OBJ);
?>
<img src="../imgs/logotipo2Imgph.png" class="noCentro show-for-medium"/>
<b style="margin: 10px;" class="show-for-medium"><?php echo $executei->nome;?></b>
		<!-- MENU MOBILE -->
		<div class="divMenuMobile show-for-small-only">
			<ul class="dropdown menu" style="list-style-type: none;" data-dropdown-menu>

				<li>
					<img src="../imgs/collapse.png" width="50px;" style="cursor: Pointer;">
					<span><?php echo $puxeiUsr->nome; ?></span>
					<ul class="menu vertical meuDrop">
						<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="Home"><a href="home.php" class="espacoHover"><img src="../imgs/homeIcon.png" width="27px;"></a></li>
						<li data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Adicionar" data-position="top" data-alignment="center">
							<div style="padding: 6px;" class="espacoHover">
								<b class="subMenu" style="margin: 10px; cursor: pointer;"><img src="../imgs/papel.png" width="27px;"></b>
							</div>
							<ul class="menu vertical meuDrop" style="margin-left: 70px; background-color: #dfdfdf; margin-top: -38px;">
								<li><a href="adcCartao.php" class="subSubMenu">Cartão</a></li>
								<!--<li><a href="adcContaBancaria.php" class="subSubMenu">Conta bancária</a></li>-->
								<li><a href="adcPagamentoComum.php" class="subSubMenu">Pagamento comum</a></li>
								<!--<li><a href="adcPagamentoFixo.php" class="subSubMenu">Pagamento Fixo</a></li>-->
							</ul>
						</li>
						<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Consultar" data-position="top" data-alignment="center">
							<div style="padding: 6px;" class="espacoHover">
								<b class="subMenu" style="margin: 10px; cursor: pointer;"><img src="../imgs/lupa.png" width="27px;"></b>
							</div>
							<ul class="menu vertical meuDrop" style="margin-left: 70px; background-color: #dfdfdf; margin-top: -38px;">
								<li><a href="consultarContasComuns.php" class="subSubMenu">Contas comuns</a></li>
								<!--<li><a href="adcPagamentoFixo.php" class="subSubMenu">Contas fixas</a></li>-->
								<li><a href="pertoPrazo.php"  class="subSubMenu">Perto do prazo <b style="color: red;"></b></a></li>
								<li><a href="consultarCartao.php"  class="subSubMenu">Cartões <b style="color: red;"></b></a></li>
							</ul>
						</li>
					
						<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="Balanço"><a href="balanco.php" class="meuLiA espacoHover"><img src="../imgs/grafico.png" width="27px;"></a></li>
						<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="Configurações"><a href="config.php" class="meuLiA espacoHover"><img src="../imgs/config.png" width="27px;"></a></li>
						<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="Sair"><a href="../sair.php" class="meuLiA espacoHover"><img src="../imgs/sair.png" width="27px;"></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- MENU -->
	
		<div class="top-bar divMenu show-for-medium">
			<div class="top-bar-left">
				<ul class="dropdown menu" style="background-color: #f5f5f5;" data-dropdown-menu>
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Home" data-position="top" data-alignment="center"><a href="home.php" class="espacoHover"><img src="../imgs/homeIcon.png" width="27px;"></a></li>
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Adicionar" data-position="top" data-alignment="center" >
						
						<div style="padding: 7.1px;" class="espacoHover">
							<b style="margin: 10px; cursor: pointer;"><img src="../imgs/papel.png" width="30px;"></b>
						</div>
						<ul class="menu vertical meuDrop">
							<li><a href="adcCartao.php"  class="meuLiA espacoHover">Cartão</a></li>
							<!--<li><a href="adcContaBancaria.php"  class="meuLiA espacoHover">Conta bancária</a></li>-->
							<li><a href="adcPagamentoComum.php"  class="meuLiA espacoHover">Pagamento comum</a></li>
							<!--<li><a href="adcPagamentoFixo.php"  class="meuLiA espacoHover">Pagamento Fixo</a></li>-->							
						</ul>
					</li>
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Consultar" data-position="top" data-alignment="center">
						<div style="padding: 7.1px;" class="espacoHover">
							<b style="margin: 10px; cursor: pointer;"><img src="../imgs/lupa.png" width="30px;"></b>
						</div>
						<ul class="menu vertical meuDrop">
							<li><a href="consultarContasComuns.php"  class="meuLiA espacoHover">Contas comuns</a></li>
							<!--<li><a href="#"  class="meuLiA espacoHover">Contas fixas</a></li>-->
							<li><a href="pertoPrazo.php"  class="meuLiA espacoHover">Perto do prazo</a></li>
							<li><a href="consultarCartao.php"  class="meuLiA espacoHover">Cartões</a></li>
						</ul>
					</li>
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Balanço" data-position="top" data-alignment="center"><a href="balanco.php" class="espacoHover"><img src="../imgs/grafico.png" width="30px;"></a></li>
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Sair" data-position="top" data-alignment="center"><a href="../sair.php" class="espacoHover"><img src="../imgs/sair.png" width="29px;"></a></li>
				</ul>
				
			</div>
			<div class="top-bar-right">
				<ul class="menu" style="background-color: transparent;">	
					<li style="cursor: pointer;" data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Configurações" data-position="top" data-alignment="center"><a href="config.php" class="espacoHover"><img src="../imgs/config.png" width="30px;"></a></li>
				</ul>
			</div>
		</div>
