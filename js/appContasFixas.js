var divAjax = document.getElementById("divAjax");
var semanal = document.getElementById("exampleRadioSwitch1");
var mensal = document.getElementById("exampleRadioSwitch2");

semanal.onclick = function(){
	requisitarArquivo("codigos/conteudoAjax/semanal1.html", divAjax);
}
mensal.onclick = function(){
	requisitarArquivo("codigos/conteudoAjax/mensal.html", divAjax);
}
