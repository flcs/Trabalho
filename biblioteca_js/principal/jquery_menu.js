/*
<sum�rio>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do m�dulo	:	jquery_menu.js
	Data de in�cio	:	19/04/2011
	Descri��o		:	p�gina com programa��o javascript do Slide da p�gina inicial.
	</sum�rio>
*/
	
	$J(function (){
			$J("h4 h3").hide();
			$J("h4").click(function() {
			$J("h4 h3").slideUp();
			$J(this).next().slideToggle('fast', function() {
			$J(this).parent().next().not('li:visible').slideDown("slow");
		return false
				})
			})
		})
