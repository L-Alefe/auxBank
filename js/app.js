var formCadastrar = document.forms.formCadastrar;
formCadastrar.onsubmit = function(){
	var senha = formCadastrar.senha.value;
	var comSenha = formCadastrar.comSenha.value;
	if(senha.length < 6){
		$.sweetModal({
			content: 'Senha com no mínimo 6 caracteres.',
			title: 'Erro ao cadastrar...',
			icon: $.sweetModal.ICON_ERROR,

			buttons: [
				{
				label: 'OK',
				classes: 'redB'
				}
			]
		});
		return false;
	}else if(senha != comSenha){
		$.sweetModal({
			content: 'Senhas diferentes.',
			title: 'Erro ao cadastrar...',
			icon: $.sweetModal.ICON_ERROR,

			buttons: [
				{
				label: 'OK',
				classes: 'redB'
				}
			]
		});
		return false;
	}
} 
