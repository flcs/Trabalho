/*
<sum�rio>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do m�dulo	:	ajax.js
	Data de in�cio	:	19/04/2011
	Descri��o		:	p�gina com programa��o javascript de corre��o de bug do internet explore.
	</sum�rio>
*/

function GetXMLHttp() {
    if(navigator.appName == "Microsoft Internet Explorer") {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else {
        xmlHttp = new XMLHttpRequest();
    }
    return xmlHttp;
}

var xmlRequest = GetXMLHttp();
