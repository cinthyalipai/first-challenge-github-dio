<?php  
include ('conexao.php'); 

$id_cad=$_POST['id_cad'];

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title> Atualizacao de Cadastro de Imoveis </title>
			
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
	
table td.shrink {
    white-space:nowrap
}
table td.expand {
    width: 75%
}
	
</style>			
	</head>
	
<body>

<h1> Listagem de Imoveis </h1>

<table class="full_table_list" border="2">
<tr>
				<td class="shrink"><b>Cadastro</b></td>              
				<td class="shrink"><b>Hidrometro</b></td>              
				<td class="shrink"><b>Proprietario Imovel</b></td>
				<td class="shrink"><b>Nome do Predio</b></td>
				<td class="shrink"><b>Endereco</b></td>
				<td class="shrink"><b>Numero</b></td>          
				<td class="shrink"><b>Bairro</b></td>
</tr>

<?php
$sql_cad = "SELECT * FROM imovel WHERE id_cad LIKE '%$id_cad%' ";
$resultado_cad = mysqli_query($con, $sql_cad);

while($rows_cad = mysqli_fetch_array($resultado_cad))
{
    $id_cad=$rows_cad['id_cad'];
	$hidrometro=$rows_cad['hidrometro'];
	$nome_prop=$rows_cad['nome_prop'];
	$denomina=$rows_cad['denomina'];
	$logradouro=$rows_cad['logradouro'];
	$numero=$rows_cad['numero'];
	$bairro=$rows_cad['bairro'];
	echo "<tr>";
	echo "<td><a href='altera_imovel.php?id_cad=".$rows_cad['id_cad']."'>".$rows_cad['id_cad']."</td>";
	echo "<td>".$rows_cad['hidrometro']."</td>";
	echo "<td>".$rows_cad['nome_prop']."</td>";
	echo "<td>".$rows_cad['denomina']."</td>";
	echo "<td>".$rows_cad['logradouro']."</td>";
	echo "<td>".$rows_cad['numero']."</td>";
	echo "<td>".$rows_cad['bairro']."</td>";
	echo "</tr>";
}
	echo "</table>";

?>
<h1><a href="index.php">Voltar</a></h1>	
</body>

</html>
