<?php

	include "bd/conecta_banco.php";

$localizacao="principal.php?acao=visaogeral";


//Carregamento de vari�veis do banco de dados
$titulo=$_POST["titulo"];
$data = date('Y-m-d');


{

//Inser��o de conte�do das vari�veis dos formul�rios no banco de dados

	$res="INSERT INTO tarefas (data, tarefas) VALUES ('$data', '$titulo')" or die (mysql_error());
	$res=mysql_query($res);
	
	
}

// Alerta dizendo que  foi cadastrado com sucesso
	echo "<script>alert('Aviso Cadastrado com Sucesso!'); window.location=\" $localizacao\"</script>";
?>

