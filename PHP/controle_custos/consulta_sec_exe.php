<?php

include 'conexao.php';

$consulta_sec = $_POST['consulta_sec'];
?>

<html>
<head>
<title> Resultado da Pesquisa</title>
</head>

<style type="text/css">

 /*css global tabela*/
        .full_table_list{width: 200px;border-collapse: collapse;}
         
        /*colocando bordas nas linhas*/
        .full_table_list tr{border:2px black solid;}
         
        /*Definido cor das linhas pares*/
        .full_table_list tr:nth-child(even) {background: #FFF}
         
        /*Definindo cor das Linhas impares*/
        .full_table_list tr:nth-child(odd) {background: #EEE}

</style>

<body>

<table class="full_table_list" border="2" style='width:50%'>
<tr>
<td> Cadastro </td>
<td> Secretaria </td>
<td> Ref Cobranca </td>
<td> 2013 </td>
<td> 2014 </td>
<td> 2015 </td>
<td> 2016 </td>
<td> 2017 </td>
<td> 2018 </td>
<td> 2019 </td>
<td> 2020 </td>
<td> 2021 </td>
<td> 2022 </td>
<td> 2023 </td>
<td> 2024 </td>
<td> 2025 </td>
</tr>

<?php
$sql_cad = "SELECT  r.cod_cad, s.orgao, r.ref, r.at_2013, r.at_2014, r.at_2015, r.at_2016, r.at_2017, r.at_2018, r.at_2019, r.at_2020, r.at_2021, r.at_2022, r.at_2023, r.at_2024, r.at_2025
				FROM  responsavel r, secretaria s, imovel i
				WHERE s.id_sec=r.cod_sec
					and i.id_cad=r.cod_cad
					and id_cad LIKE '$consulta_sec'
					order by r.id_resp";
$resultado_cad = mysqli_query($con, $sql_cad);

while($rows_cad = mysqli_fetch_array($resultado_cad))
{
    $cod_cad=$rows_cad['cod_cad'];
	$orgao=$rows_cad['orgao'];
	$ref=$rows_cad['ref'];
	$at_2013=$rows_cad['at_2013'];
	$at_2014=$rows_cad['at_2014'];
	$at_2015=$rows_cad['at_2015'];
	$at_2016=$rows_cad['at_2016'];
	$at_2017=$rows_cad['at_2017'];
	$at_2018=$rows_cad['at_2018'];
	$at_2019=$rows_cad['at_2019'];
	$at_2020=$rows_cad['at_2020'];
	$at_2021=$rows_cad['at_2021'];
	$at_2022=$rows_cad['at_2022'];
	$at_2023=$rows_cad['at_2023'];
	$at_2024=$rows_cad['at_2024'];
	$at_2025=$rows_cad['at_2025'];
	echo "<tr>";
	echo "<td>".$rows_cad['cod_cad']."</td>";
	echo "<td>".$rows_cad['orgao']."</td>";
	echo "<td>".$rows_cad['ref']."</td>";
	echo "<td>".$rows_cad['at_2013']."</td>";
	echo "<td>".$rows_cad['at_2014']."</td>";
	echo "<td>".$rows_cad['at_2015']."</td>";
	echo "<td>".$rows_cad['at_2016']."</td>";
	echo "<td>".$rows_cad['at_2017']."</td>";
	echo "<td>".$rows_cad['at_2018']."</td>";
	echo "<td>".$rows_cad['at_2019']."</td>";
	echo "<td>".$rows_cad['at_2020']."</td>";
	echo "<td>".$rows_cad['at_2021']."</td>";
	echo "<td>".$rows_cad['at_2022']."</td>";
	echo "<td>".$rows_cad['at_2023']."</td>";
	echo "<td>".$rows_cad['at_2024']."</td>";
	echo "<td>".$rows_cad['at_2025']."</td>";
	echo "</tr>";
}
	echo "</table>";
	
?>
<a href="index.php">Voltar</a>
</body>
</html>