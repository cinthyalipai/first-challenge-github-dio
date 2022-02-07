<?php

include ('conexao.php');

$id_sec=$_POST['cod_sec'];
$cod_cad=$_POST['cod_cad'];
$ref=$_POST['ref'];
$at_2013=$_POST['at_2013'];
$at_2014=$_POST['at_2014'];
$at_2015=$_POST['at_2015'];
$at_2016=$_POST['at_2016'];
$at_2017=$_POST['at_2017'];
$at_2018=$_POST['at_2018'];
$at_2019=$_POST['at_2019'];
$at_2020=$_POST['at_2020'];
$at_2021=$_POST['at_2021'];
$at_2022=$_POST['at_2022'];
$at_2023=$_POST['at_2023'];
$at_2024=$_POST['at_2024'];
$at_2025=$_POST['at_2025'];

$sql="UPDATE responsavel
		set at_2021='".$at_2021."'
    	where cod_sec like '$id_sec' ";
		
$result = mysqli_query($con, $sql);

while ($rows_alt = mysqli_fetch_array($result))
{
$id_sec=$rows_alt['cod_sec'];
$cod_cad=$rows_alt['cod_cad'];
$ref=$rows_alt['ref'];
$at_2013=$rows_alt['at_2013'];
$at_2014=$rows_alt['at_2014'];
$at_2015=$rows_alt['at_2015'];
$at_2016=$rows_alt['at_2016'];
$at_2017=$rows_alt['at_2017'];
$at_2018=$rows_alt['at_2018'];
$at_2019=$rows_alt['at_2019'];
$at_2020=$rows_alt['at_2020'];
$at_2021=$rows_alt['at_2021'];
$at_2022=$rows_alt['at_2022'];
$at_2023=$rows_alt['at_2023'];
$at_2024=$rows_alt['at_2024'];
$at_2025=$rows_alt['at_2025'];

echo "<tr>";
echo "<td>Cadastro:"$rows_alt['cod_cad']"</td>";
echo "<td>Refer&ecirc;ncia de Cobran&ccedil;a: "$rows_alt['ref']"</td>";
echo "<td>Cod Sec: "$rows_alt['cod_sec']"</td>";
echo "<td>2013: "$rows_alt['at_2013']"</td>";
echo "<td>2014: "$rows_alt['at_2014']"</td>";
echo "<td>2015: "$rows_alt['at_2015']"</td>";
echo "<td>2016: "$rows_alt['at_2016']"</td>";
echo "<td>2017: "$rows_alt['at_2017']"</td>";
echo "<td>2018: "$rows_alt['at_2018']"</td>";
echo "<td>2019: "$rows_alt['at_2019']"</td>";
echo "<td>2020: "$rows_alt['at_2020']"</td>";
echo "<td>2021: "$rows_alt['at_2021']"</td>";
echo "<td>2022: "$rows_alt['at_2022']"</td>";
echo "<td>2023: "$rows_alt['at_2023']"</td>";
echo "<td>2024: "$rows_alt['at_2024']"</td>";
echo "<td>2025: "$rows_alt['at_2025']"</td>";
echo "</tr>";

}

print($sql);

if ($result)
	echo "Dados atualizados com sucesso!";
else
	echo "Os cadastros '".$cod_cad."' não podem ser atualizados!";

//header("Refresh: 2; url = cad_novo_resp.html");
?>