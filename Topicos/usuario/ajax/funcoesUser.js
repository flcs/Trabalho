function envia(url, metodo, modo, campo)
{
    var valCampo = document.getElementById(campo).value;
    remoto  = new ajax();
    xmlhttp = remoto.enviar(url + "?acao=" + valCampo, metodo, modo );

/// Referente ao CAMPO de USU�RIO
	if(xmlhttp == "userVazio") {
        document.getElementById('login').className = 'erro';
        document.getElementById('alertaLogin').className = 'erroSpan';
        document.getElementById("alertaLogin").innerHTML = 'Campo USU�RIO Vazio';
		document.getElementById("sub").disabled = true;
    } 
	if(xmlhttp == "userExistente") {
        document.getElementById('login').className = 'erro';
        document.getElementById('alertaLogin').className = 'erroSpan';
        document.getElementById("alertaLogin").innerHTML = 'O usu�rio digitado j� existente...';
		document.getElementById("sub").disabled = true;
    }   
	if(xmlhttp == "userDisponivel") {
        document.getElementById('login').className = 'ok';
        document.getElementById('alertaLogin').className = 'okSpan';
        document.getElementById("alertaLogin").innerHTML = 'OK';
		document.getElementById("sub").disabled = false;
    }    
	else{
       document.getElementById('login').className = 'ok';
        document.getElementById('alertaLogin').className = 'okSpan';
        document.getElementById("alertaLogin").innerHTML = xmlhttp;
		document.getElementById("sub").disabled = false;
 
}
}
