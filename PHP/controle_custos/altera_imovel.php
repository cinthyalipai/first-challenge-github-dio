<?php  
include ('conexao.php');  
$id_cad=$_GET['id_cad'];  
$sql="SELECT * FROM imovel WHERE id_cad='$id_cad' ";   
$result = mysqli_query($con, $sql);   
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title> Atualizacao de Dados de Imoveis </title>
			
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
 
 <table class="full_table_list" border="2">
		<tr>
				<td align="center" colspan="8"><b> Informações Anteriores <b></td>
		</tr>
		<tr>
				<td class="shrink"><b>Cadastro</b></td>              
				<td class="shrink"><b>Hidrometro</b></td>  
				<td class="shrink"><b>Cod Prop Imovel</b></td> 
				<td class="shrink"><b>Proprietario Imovel</b></td>
				<td class="shrink"><b>Nome do Predio</b></td>
				<td class="shrink"><b>Endereco</b></td>
				<td class="shrink"><b>Numero</b></td>          
				<td class="shrink"><b>Bairro</b></td>
		</tr>

<?php


$sql_cad = "SELECT  i.id_cad, i.hidrometro, t.tipo, i.nome_prop, i.denomina, i.logradouro, i.numero, i.bairro
				FROM imovel i, titularidade t 
				WHERE t.id_prop=i.cod_prop
				and id_cad LIKE '$id_cad' ";
$resultado_cad = mysqli_query($con, $sql_cad);

while($rows_cad = mysqli_fetch_array($resultado_cad))
{
    $id_cad=$rows_cad['id_cad'];
	$hidrometro=$rows_cad['hidrometro'];
	$cod_prop=$rows_cad['tipo'];
	$nome_prop=$rows_cad['nome_prop'];
	$denomina=$rows_cad['denomina'];
	$logradouro=$rows_cad['logradouro'];
	$numero=$rows_cad['numero'];
	$bairro=$rows_cad['bairro'];
	echo "<tr>";
	echo "<td>".$rows_cad['id_cad']."</td>";
	echo "<td>".$rows_cad['hidrometro']."</td>";
	echo "<td>".$rows_cad['tipo']."</td>";
	echo "<td>".$rows_cad['nome_prop']."</td>";
	echo "<td>".$rows_cad['denomina']."</td>";
	echo "<td>".$rows_cad['logradouro']."</td>";
	echo "<td>".$rows_cad['numero']."</td>";
	echo "<td>".$rows_cad['bairro']."</td>";
	echo "</tr>";
}
	echo "</table>";

?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <table border="1" cellpading="20" cellspacing="20">
 	<tr>
 		<td align="center"><b> Atualizacao de Cadastro Imobiliario </b>
 			<form name="atualizacao de imovel" method="post" action="alt_imovel.php" >
 				<table cellpading="10" cellspacing="10">
 					<tr>
						 <td>Cadastro Semae:</td><td><?php echo $row['id_cad']?></td>
												<td><input name="id_cad" type="hidden" value="<?php echo $row['id_cad']?>"></td>
 					</tr>
 					<tr>
						<td>Hidrometro:</td>
 						<td><input name="hidrometro" type="text" size="20" maxlenght="50" value="<?php echo $row['hidrometro']?>"></td>
 					</tr>
					<tr>
						<td>Tipo de Propriedade:</td>
						<td> <input type="radio" name="cod_prop" value="1" value="<?php echo $row['cod_prop']?>" >Proprio Municipal <br>
    						 <input type="radio" name="cod_prop" value="2" value="<?php echo $row['cod_prop']?>">Locacao <br>
    						 <input type="radio" name="cod_prop" value="3" value="<?php echo $row['cod_prop']?>">Outros<br>
						</td>				 
 					</tr>
 					<tr>
						<td>Nome Proprietario:</td>
 						<td><input name="nome_prop" type="text" size="100" maxlenght="30"  value="<?php echo $row['nome_prop']?>" required></td>
 					</tr>
 					<tr>
						<td>Denominacao Predio:</td>
						<td><input name="denomina" type="text" size="100" maxlenght="30" value="<?php echo $row['denomina']?>"></td>
 					</tr>
 					<tr>
						<td>Endereco:</td>
 						<td><input name="logradouro" type="text" size="100" maxlenght="30"  value="<?php echo $row['logradouro']?>" required></td>
 					</tr>
 					<tr>
						<td>Numero:</td>
 						<td><input name="numero" type="text" size="10" maxlenght="30"  value="<?php echo $row['numero']?>" required></td>
 					</tr>
					<tr>
						<td>Bairro:</td>
 						<td><input name="bairro" type="text" size="30" maxlenght="30" value="<?php echo $row['bairro']?>"></td>
 					</tr>
 					<tr>
 					<td></td>
 					</tr>
					<tr>
						<td align="left"><input type="submit" name="Submit" value="Alterar"> 
										   <input type="button" name="Voltar" value="Retornar" onclick="javascript: history.go(-1)"></td>
 					</tr>
				 </table>
		</form>
 </tr>
 
	
 </table>
 </body>
</html>
