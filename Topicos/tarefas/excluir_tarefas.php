<body>

<?php
	session_start();
	include "bd/conecta_banco.php";	
    // pega os dados digitados pelo usu�rio no formul�rio

		$idtarefas = $_GET["nt"];
		
			$delete = "delete from tarefas where idtarefas = '$idtarefas'";
			$resultado = mysql_query($delete);
			
			echo "<p>Funcionario excluido com sucesso</p>";	
		
?>
</body>
</html>
