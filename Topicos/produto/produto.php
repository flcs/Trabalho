<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php
	include "bd/conecta_banco.php";
?>

	<script language="javascript">

	function voltar()
	{
			window.location="principal.php?acao=filtrarticket";	
		}

	</script>
 

<body>  
<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Produto
	</caption>
	
		
			<form action="principal.php?acao=produtobd" method="post">
			<tr>
				<td>
					<label for="nome">Nome: </label>
					<input type="text" size="71" name="Nome">
				</td>
			</tr>
			<tr>
				<td>
					<label for="fornecedor">Fornecedor:</label>
				     <?php
		// Consulta a tabela institui��es no banco de dados, para o preenchimento do select instituicoes, com as siglas, no formulario
			$res=mysql_query("SELECT idfornecedores, razaofantasia FROM fornecedores ORDER BY razaofantasia");
			echo "<select name='fornecedor'>";
			echo "<option value=''>Selecione</option>";
			while($res2=mysql_fetch_array($res))
		    {
				$razaofantasia=$res2["razaofantasia"];
				$idfornecedores=$res2["idfornecedores"];
			    echo "<option value='".$idfornecedores."'> ".$razaofantasia."</option>" ;
		     }
		    echo "</select>";
		?>   	
				</td>
			</tr>
			<tr>
				<td>
					<label for="valor">Valor</label>
					<input type="text" size="71" name="valor">
				</td>
			</tr>
			<tr>
				<td>
					<label for="dataentrada">Data Entrada: </label>
					<input type="text" size="71" name="dataentrada">
				</td>
			</tr>
			<tr>
				<td>
					<label for="quantidade"> Quantidade: </label>
					<input type="text" size="71" name="quantidade">
				</td>
			</tr>
			<tr>
				<td>
					<label for="descricao">Descricao:</label>
					<textarea name="descricao" rows="8" cols="40"></textarea>
				</td>
			</tr>
			<tr>
			<td align="center">
			<input type="submit" value="Enviar">
			<input type="button" value="Voltar" onClick="voltar();" >  
			</tr>
			</td>
			</form>

</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>	
	</body>
</html>
