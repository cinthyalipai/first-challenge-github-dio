<?php  
include ('conexao.php'); 

$cod_cad=$_POST['cod_cad'];

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

<h1> Listagem de Respons&aacute;veis </h1>

<table class="full_table_list" border="2">
<tr>
				<td class="shrink"><b>Cadastro</b></td>              
				<td class="shrink"><b>Secretaria Atual</b></td>              
				<td class="shrink"><b>Refer&ecirc;ncia de Cobran&ccedil;a</b></td>
				<td class="shrink"><b>2013</b></td>
				<td class="shrink"><b>2014</b></td>
				<td class="shrink"><b>2015</b></td>          
				<td class="shrink"><b>2016</b></td>
				<td class="shrink"><b>2017</b></td>
				<td class="shrink"><b>2018</b></td>
				<td class="shrink"><b>2019</b></td>
				<td class="shrink"><b>2020</b></td>
				<td class="shrink"><b>2021</b></td>
				<td class="shrink"><b>2022</b></td>
				<td class="shrink"><b>2023</b></td>
				<td class="shrink"><b>2024</b></td>
				<td class="shrink"><b>2025</b></td>
</tr>

<?php
$sql_resp = "SELECT r.cod_cad, s.orgao, r.ref, r.at_2013, r.at_2014, r.at_2015, r.at_2016, r.at_2017, r.at_2018, r.at_2019, r.at_2020, r.at_2021, r.at_2022, r.at_2023, r.at_2024, r.at_2025
				FROM responsavel r, secretaria s, imovel i
				WHERE r.cod_cad=i.id_cad
						and r.cod_sec=s.id_sec
						and r.cod_cad like '%$cod_cad%' ";
$resultado_resp = mysqli_query($con, $sql_resp);

while($rows_resp = mysqli_fetch_array($resultado_resp))
{
    $cod_cad=$rows_resp['cod_cad'];
	$orgao=$rows_resp['orgao'];
	$ref=$rows_resp['ref'];
	$at_2013=$rows_resp['at_2013'];
	$at_2014=$rows_resp['at_2014'];
	$at_2015=$rows_resp['at_2015'];
	$at_2016=$rows_resp['at_2016'];
	$at_2017=$rows_resp['at_2017'];
	$at_2018=$rows_resp['at_2018'];
	$at_2019=$rows_resp['at_2019'];
	$at_2020=$rows_resp['at_2020'];
	$at_2021=$rows_resp['at_2021'];
	$at_2022=$rows_resp['at_2022'];
	$at_2023=$rows_resp['at_2023'];
	$at_2024=$rows_resp['at_2024'];
	$at_2025=$rows_resp['at_2025'];
	echo "<tr>";
	echo "<td><a href='altera_atend_resp.php?cod_cad=".$rows_resp['cod_cad']."'>".$rows_resp['cod_cad']."</td>";
	echo "<td>".$rows_resp['orgao']."</td>";
	echo "<td>".$rows_resp['ref']."</td>";
	echo "<td>".$rows_resp['at_2013']."</td>";
	echo "<td>".$rows_resp['at_2014']."</td>";
	echo "<td>".$rows_resp['at_2015']."</td>";
	echo "<td>".$rows_resp['at_2016']."</td>";
	echo "<td>".$rows_resp['at_2017']."</td>";
	echo "<td>".$rows_resp['at_2018']."</td>";
	echo "<td>".$rows_resp['at_2019']."</td>";
	echo "<td>".$rows_resp['at_2020']."</td>";
	echo "<td>".$rows_resp['at_2021']."</td>";
	echo "<td>".$rows_resp['at_2022']."</td>";
	echo "<td>".$rows_resp['at_2023']."</td>";
	echo "<td>".$rows_resp['at_2024']."</td>";
	echo "<td>".$rows_resp['at_2025']."</td>";
	echo "</tr>";
}
	echo "</table>";

?>
<h1><a href="index.php">Voltar</a></h1>	
</body>

</html>
