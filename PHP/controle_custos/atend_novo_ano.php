<?php  
include ('conexao.php'); 

$id_sec=$_GET['id_sec'];

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
	<form name="atualizacao de imovel" method="post" action="alt_atend_novo_ano.php" >
			<tr>
				<td class="shrink"><b>Cadastro Semae</b></td>
				<td class="shrink"><b>Refer&ecirc;ncia de Cobran&ccedil;a</b></td>
				<td class="shrink"><b>Cod Sec</b></td>
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
<?php
$sql_ano = "SELECT cod_cad, ref, cod_sec, at_2013, at_2014, at_2015, at_2016, at_2017, at_2018, at_2019, at_2020, at_2021, at_2022, at_2023, at_2024, at_2025
				FROM responsavel 
				WHERE cod_sec like '$id_sec' ";
$resultado_ano = mysqli_query($con, $sql_ano);

while($rows_ano = mysqli_fetch_array($resultado_ano))
{
    $cod_cad=$rows_ano['cod_cad'];
	$ref=$rows_ano['ref'];
	$cod_sec=$rows_ano['cod_sec'];
	$at_2013=$rows_ano['at_2013'];
	$at_2014=$rows_ano['at_2014'];
	$at_2015=$rows_ano['at_2015'];
	$at_2016=$rows_ano['at_2016'];
	$at_2017=$rows_ano['at_2017'];
	$at_2018=$rows_ano['at_2018'];
	$at_2019=$rows_ano['at_2019'];
	$at_2020=$rows_ano['at_2020'];
	$at_2021=$rows_ano['at_2021'];
	$at_2022=$rows_ano['at_2022'];
	$at_2023=$rows_ano['at_2023'];
	$at_2024=$rows_ano['at_2024'];
	$at_2025=$rows_ano['at_2025'];

	echo "<tr>";
	echo "<td>".$rows_ano['cod_cad']."</td>";
	echo '<input type="hidden" name="cod_cad" value="'.$rows_ano['cod_cad'].'">';
	echo "<td>".$rows_ano['ref']."</td>";
	echo '<input type="hidden" name="ref" value="'.$rows_ano['ref'].'">';
	echo "<td>".$rows_ano['cod_sec']."</td>";
	echo '<input type="hidden" name="cod_sec" value="'.$rows_ano['cod_sec'].'">';
	echo "<td>".$rows_ano['at_2013']."</td>";
	echo '<input type="hidden" name="at_2013" value="'.$rows_ano['at_2013'].'">';
	echo "<td>".$rows_ano['at_2014']."</td>";
	echo '<input type="hidden" name="at_2014" value="'.$rows_ano['at_2014'].'">';
	echo "<td>".$rows_ano['at_2015']."</td>";
	echo '<input type="hidden" name="at_2015" value="'.$rows_ano['at_2015'].'">';
	echo "<td>".$rows_ano['at_2016']."</td>";
	echo '<input type="hidden" name="at_2016" value="'.$rows_ano['at_2016'].'">';
	echo "<td>".$rows_ano['at_2017']."</td>";
	echo '<input type="hidden" name="at_2017" value="'.$rows_ano['at_2017'].'">';
	echo "<td>".$rows_ano['at_2018']."</td>";
	echo '<input type="hidden" name="at_2018" value="'.$rows_ano['at_2018'].'">';
	echo "<td>".$rows_ano['at_2019']."</td>";
	echo '<input type="hidden" name="at_2019" value="'.$rows_ano['at_2019'].'">';
	echo "<td>".$rows_ano['at_2020']."</td>";
	echo '<input type="hidden" name="at_2020" value="'.$rows_ano['at_2020'].'">';
	echo '<td><input type="text" name="at_2021" size="1" maxlenght="1" value="'.$rows_ano['at_2021'].'"></td>';
	echo "<td>".$rows_ano['at_2022']."</td>";
	echo '<input type="hidden" name="at_2022" value="'.$rows_ano['at_2022'].'">';
	echo "<td>".$rows_ano['at_2023']."</td>";
	echo '<input type="hidden" name="at_2023" value="'.$rows_ano['at_2023'].'">';
	echo "<td>".$rows_ano['at_2024']."</td>";
	echo '<input type="hidden" name="at_2024" value="'.$rows_ano['at_2024'].'">';
	echo "<td>".$rows_ano['at_2025']."</td>";
	echo '<input type="hidden" name="at_2025" value="'.$rows_ano['at_2025'].'">';
	echo "</tr>";
	

}
	echo "</table>";

?>
	
				<tr>
					<td align="left"><input type="submit" name="Submit" value="Alterar"> 
								     <input type="button" name="Voltar" value="Retornar" onclick="javascript: history.go(-1)"></td>
 				</tr>
	</form>

</body>

</html>
