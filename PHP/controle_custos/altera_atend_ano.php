<?php  
include ('conexao.php');  
$id_sec=$_GET['id_sec'];  

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
	
table td.shrink {
    white-space:nowrap
}
table td.expand {
    width: 75%
}

	
			</style>			
	</head>
	
	
	<body>
 
		<table class="full_table_list" border="2">
			<tr>
				<td class="shrink"><b>Cadastro Semae</b></td>
				<td class="shrink"><b>Secretaria</b></td>
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
<?php
$sql="SELECT * FROM responsavel WHERE cod_sec='$id_sec' ";   
$result = mysqli_query($con, $sql);   
while($row = mysqli_fetch_array($result))
{
    $cod_cad=$row['cod_cad'];
	$cod_sec=$row['cod_sec'];
	$ref=$row['ref'];
	$at_2013=$row['at_2013'];
	$at_2014=$row['at_2014'];
	$at_2015=$row['at_2015'];
	$at_2016=$row['at_2016'];
	$at_2017=$row['at_2017'];
	$at_2018=$row['at_2018'];
	$at_2019=$row['at_2019'];
	$at_2020=$row['at_2020'];
	$at_2021=$row['at_2021'];
	$at_2022=$row['at_2022'];
	$at_2023=$row['at_2023'];
	$at_2024=$row['at_2024'];
	$at_2025=$row['at_2025'];
	echo "<tr>";
	echo "<td>".$row['cod_cad']."</td>";
	echo "<td>".$row['cod_sec']."</td>";
	echo "<td>".$row['ref']."</td>";
	echo "<td>".$row['at_2013']."</td>";
	echo "<td>".$row['at_2014']."</td>";
	echo "<td>".$row['at_2015']."</td>";
	echo "<td>".$row['at_2016']."</td>";
	echo "<td>".$row['at_2017']."</td>";
	echo "<td>".$row['at_2018']."</td>";
	echo "<td>".$row['at_2019']."</td>";
	echo "<td>".$row['at_2020']."</td>";
	echo "<td>".$row['at_2021']."</td>";
	echo "<td>".$row['at_2022']."</td>";
	echo "<td>".$row['at_2023']."</td>";
	echo "<td>".$row['at_2024']."</td>";
	echo "<td>".$row['at_2025']."</td>";
	echo "</tr>";
	
	//echo "</table>";
//$row = mysqli_fetch_array($result);

?>
			<tr>
				<td><?php echo $row['cod_cad']?></td>
				<td><?php echo $row ['cod_sec']?></td>
				<td><?php echo $row['ref']?>	</td>
				<td><?php echo $row['at_2013']?></td>
				<td><?php echo $row['at_2014']?></td>
				<td><?php echo $row['at_2015']?></td>
				<td><?php echo $row['at_2016']?></td>
				<td><?php echo $row['at_2017']?></td>
				<td><?php echo $row['at_2018']?></td>
				<td><?php echo $row['at_2019']?></td>
				<td><input name="at_2020" type="text" size="1" maxlenght="1"  value="<?php echo $row['at_2020']?>"></td>
				<td><?php echo $row['at_2021']?></td>
				<td><?php echo $row['at_2022']?></td>
				<td><?php echo $row['at_2023']?></td>
				<td><?php echo $row['at_2024']?></td>
				<td><?php echo $row['at_2025']?></td>
			</tr>
			<tr>
				<td><input name="cod_cad" type="hidden" value="<?php echo $row['cod_cad']?>"></td>
				<td><input name="cod_sec" type="hidden" value="<?php echo $row['cod_sec']?>"></td>
				<td><input name="ref"     type="hidden" value="<?php echo $row['ref']?>">    </td>
				<td><input name="at_2013" type="hidden" value="<?php echo $row['at_2013']?>"></td>
				<td><input name="at_2014" type="hidden" value="<?php echo $row['at_2014']?>"></td>
				<td><input name="at_2015" type="hidden" value="<?php echo $row['at_2015']?>"></td>
				<td><input name="at_2016" type="hidden" value="<?php echo $row['at_2016']?>"></td>
				<td><input name="at_2017" type="hidden" value="<?php echo $row['at_2017']?>"></td>
				<td><input name="at_2018" type="hidden" value="<?php echo $row['at_2018']?>"></td>
				<td><input name="at_2019" type="hidden" value="<?php echo $row['at_2019']?>"></td>
				<td><input name="at_2021" type="hidden" value="<?php echo $row['at_2021']?>"></td>
				<td><input name="at_2022" type="hidden" value="<?php echo $row['at_2022']?>"></td>
				<td><input name="at_2023" type="hidden" value="<?php echo $row['at_2023']?>"></td>
				<td><input name="at_2024" type="hidden" value="<?php echo $row['at_2024']?>"></td>
				<td><input name="at_2025" type="hidden" value="<?php echo $row['at_2025']?>"></td>
 			</tr>
			
		</table>

			<tr>
				<td align="left"><input type="submit" name="Submit" value="Alterar"> 
								 <input type="button" name="Voltar" value="Retornar" onclick="javascript: history.go(-1)"></td>
 			</tr>
			</tr>
	
	</body>
</html>