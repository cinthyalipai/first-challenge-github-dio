<?php

include ('conexao.php');

$cod_cad=$_POST['cod_cad'];
$orgao=$_POST['orgao'];
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


echo "Cadastro: ".$cod_cad."<BR>";
echo "Secretaria Respons&aacute;vel: ".$orgao."<BR>";
echo "Refer&ecirc;ncia de Cobran&ccedil;a: ".$ref."<BR>";
echo "2013: ".$at_2013."<BR>";
echo "2014: ".$at_2014."<BR>";
echo "2015: ".$at_2015."<BR>";
echo "2016: ".$at_2016."<BR>";
echo "2017: ".$at_2017."</BR>";
echo "2018: ".$at_2018."</BR>";
echo "2019: ".$at_2019."</BR>";
echo "2020: ".$at_2020."</BR>";
echo "2021: ".$at_2021."</BR>";
echo "2022: ".$at_2022."</BR>";
echo "2023: ".$at_2023."</BR>";
echo "2024: ".$at_2024."</BR>";
echo "2025: ".$at_2025."</P>";

$sql="UPDATE responsavel r INNER JOIN secretaria s on r.cod_sec=s.id_sec
	set r.at_2020='".$at_2020."'
    	where s.orgao like '".$orgao."' and r.cod_cad like'%$cod_cad%'";

$result = mysqli_query($con, $sql);

if ($result)
	echo "Dados atualizados com sucesso!";
else
	echo "O cadastro '".$cod_cad."' não pode ser atualizado!";

header("Refresh: 2; url = cad_novo_resp.html");
?>


