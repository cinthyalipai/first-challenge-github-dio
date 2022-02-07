<?php  
include ('conexao.php');  
$cod_cad=$_GET['cod_cad'];  
$sql="SELECT r.cod_cad, s.orgao, r.ref, r.at_2013, r.at_2014, r.at_2015, r.at_2016, r.at_2017, r.at_2018, r.at_2019, r.at_2020, r.at_2021, r.at_2022, r.at_2023, r.at_2024, r.at_2025
				FROM responsavel r, secretaria s, imovel i
				WHERE r.cod_cad=i.id_cad
						and r.cod_sec=s.id_sec
						and r.cod_cad like '%$cod_cad%' ";   
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
	echo "<td>".$rows_resp['cod_cad']."</td>";
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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <table border="1" cellpading="20" cellspacing="20">
 	<tr>
 		<td align="center"><b> Atualizacao de Responsabilidade pelo Predio </b>
 			<form name="atualizacao de imovel" method="post" action="alt_atend.php" >
 				<table cellpading="10" cellspacing="10">
 					<tr>
						 <td>Cadastro Semae:</td><td><?php echo $row['cod_cad']?></td>
												<td><input name="cod_cad" type="hidden" value="<?php echo $row['cod_cad']?>"></td>
 					</tr>
 					<tr>
						<td>Secretaria:</td>
 						<td><?php echo $row ['orgao']?></td>
						<td><input name="orgao" type="hidden" value="<?php echo $row['orgao']?>"></td>
 					</tr>
					<tr>
						<td>Refer&ecirc;ncia de Cobran&ccedil;a:</td>
						<td> <input type="radio" name="ref" value="1" value="<?php echo $row['ref']?>" >Consumo Mes Corrente <br>
    						 <input type="radio" name="ref" value="2" value="<?php echo $row['ref']?>" checked>Consumo Mes Anterior <br>
						</td>				 
 					</tr>
 					<tr>
						<td>2013:</td>
 						<td><?php echo $row['at_2013']?></td>
						<td><input name="at_2013" type="hidden" value="<?php echo $row['at_2013']?>"></td>
 					</tr>
 					<tr>
						<td>2014:</td>
 						<td><?php echo $row['at_2014']?></td>
						<td><input name="at_2014" type="hidden" value="<?php echo $row['at_2014']?>"></td>
 					</tr>
 					<tr>
						<td>2015:</td>
 						<td><?php echo $row['at_2015']?></td>
						<td><input name="at_2015" type="hidden" value="<?php echo $row['at_2015']?>"></td>
 					</tr>
					<tr>
						<td>2016:</td>
 						<td><?php echo $row['at_2016']?></td>
						<td><input name="at_2016" type="hidden" value="<?php echo $row['at_2016']?>"></td>
 					</tr>
					<tr>
						<td>2017:</td>
 						<td><?php echo $row['at_2017']?></td>
						<td><input name="at_2017" type="hidden" value="<?php echo $row['at_2017']?>"></td>
 					</tr>
					<tr>
						<td>2018:</td>
 						<td><?php echo $row['at_2018']?></td>
						<td><input name="at_2018" type="hidden" value="<?php echo $row['at_2018']?>"></td>
 					</tr>
					<tr>
						<td>2019:</td>
 						<td><?php echo $row['at_2019']?></td>
						<td><input name="at_2019" type="hidden" value="<?php echo $row['at_2019']?>"></td>
 					</tr>
						<td>2020:</td>
 						<td><input name="at_2020" type="text" size="1" maxlenght="1"  value="<?php echo $row['at_2020']?>"></td>
 					</tr>
					<tr>
						<td>2021:</td>
 						<td><?php echo $row['at_2021']?></td>
						<td><input name="at_2021" type="hidden" value="<?php echo $row['at_2021']?>"></td>
 					</tr>
					<tr>
						<td>2022:</td>
 						<td><?php echo $row['at_2022']?></td>
						<td><input name="at_2022" type="hidden" value="<?php echo $row['at_2022']?>"></td>
 					</tr>
					<tr>
						<td>2023:</td>
 						<td><?php echo $row['at_2023']?></td>
						<td><input name="at_2023" type="hidden" value="<?php echo $row['at_2023']?>"></td>
 					</tr>
					<tr>
						<td>2024:</td>
 						<td><?php echo $row['at_2024']?></td>
						<td><input name="at_2024" type="hidden" value="<?php echo $row['at_2024']?>"></td>
 					</tr>
					<tr>
						<td>2025:</td>
 						<td><?php echo $row['at_2025']?></td>
						<td><input name="at_2025" type="hidden" value="<?php echo $row['at_2025']?>"></td>
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
