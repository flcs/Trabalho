/*
<sum�rio>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do m�dulo	:	conteudoinicial.js
	Data de in�cio	:	19/04/2011
	Descri��o		:	p�gina com programa��o javascript do Slide da p�gina inicial.
	</sum�rio>
*/

$J(function(){
         $J("#slides ul").cycle({
            fx: 'fade',
            speed: 2500,
            timeout: 5000,
            prev : '#prev',
            next : '#next',
            pager : '#pager'
         })      
      })
