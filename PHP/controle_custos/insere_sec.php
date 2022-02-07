<h1>Pesquisar Cadastros</h1>
<form method="POST" action="insere_sec_exe.php">
    Pesquisar:<input type="text" name="insere_sec" placeholder="Digite o numero do Cadastro">
    <input type="submit" name="enviar" value="ENVIAR">
</form>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title> Cadastro de Imoveis </title>
			
<style type="text/css">
a {
	color: #000000;
	text-decoration: none
}
a:hover {
	color: #d82523;
	font-weight:bold;
	text-decoration:none;
}
body, TD {
   font-family: verdana;
   font-size: 11px
}			


	
</style>			
	</head>
	
	
 <body>
 <table border="1" cellpading="20" cellspacing="20">
 	<tr>
 		<td align="center"><b> Cadastro de Responsavel </b>
 			<form name="cadastro responsavel" method="post" action="insere_sec_exe.php" >
 				<table cellpading="10" cellspacing="10">
 					<tr>
						 <td>Cadastro Semae:</td><td><input name="id_cad" type="text" size="10" maxlenght="50" required></td>
 					</tr>
 					<tr>
						<td>Hidrometro:</td>
 						<td><input name="hidrometro" type="text" size="20" maxlenght="50"></td>
 					</tr>
					 <tr>
						<td>Tipo de Propriedade:</td>
 						<td> <input type="radio" name="cod_prop" value="1">Proprio Municipal <br>
    						 <input type="radio" name="cod_prop" value="2">Locacao <br>
    						 <input type="radio" name="cod_prop" value="3">Outros<br></td>
 					</tr>
 					<tr>
						<td>Nome Proprietario:</td>
 						<td><input name="nome_prop" type="text" size="100" maxlenght="30" required></td>
 					</tr>
 					<tr>
						<td>Denominacao Predio:</td>
						<td><input name="denomina" type="text" size="100" maxlenght="30"></td>
 					</tr>
 					<tr>
						<td>Endereco:</td>
 						<td><input name="logradouro" type="text" size="100" maxlenght="30" required></td>
 					</tr>
 					<tr>
						<td>Numero:</td>
 						<td><input name="numero" type="text" size="10" maxlenght="30" required></td>
 					</tr>
					<tr>
						<td>Bairro:</td>
 						<td><input name="bairro" type="text" size="30" maxlenght="30"></td>
 					</tr>
 					<tr>
 					<td></td>
 					</tr>
					<tr>
						<td align="left"><input type="submit" name="Submit" value="Enviar"> 
										   <input type="button" name="Voltar" value="Retornar" onclick='location.href = document.referrer;'></td>
 					</tr>
				 </table>
		</form>
 </tr>
 
	
 </table>
 </body>
</html>