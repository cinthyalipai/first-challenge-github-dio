<?php

include ('conexao.php');

$cod_cad=$_POST['cod_cad'];
$cod_sec=$_POST['cod_sec'];
$ref=$_POST['ref'];
$at_2013 = isset($_POST['at_2013']) ? 1 : 0;
$at_2014 = isset($_POST['at_2014']) ? 1 : 0;
$at_2015 = isset($_POST['at_2015']) ? 1 : 0;
$at_2016 = isset($_POST['at_2016']) ? 1 : 0;
$at_2017 = isset($_POST['at_2017']) ? 1 : 0;
$at_2018 = isset($_POST['at_2018']) ? 1 : 0;
$at_2019 = isset($_POST['at_2019']) ? 1 : 0;
$at_2020 = isset($_POST['at_2020']) ? 1 : 0;
$at_2021 = isset($_POST['at_2021']) ? 1 : 0;
$at_2022 = isset($_POST['at_2022']) ? 1 : 0;
$at_2023 = isset($_POST['at_2023']) ? 1 : 0;
$at_2024 = isset($_POST['at_2024']) ? 1 : 0;
$at_2025 = isset($_POST['at_2025']) ? 1 : 0; 


$sql="INSERT INTO responsavel (cod_cad, cod_sec, ref, at_2013 , at_2014, at_2015, at_2016, at_2017, at_2018, at_2019, at_2020, at_2021, at_2022, at_2023, at_2024, at_2025)
		VALUES ('".$cod_cad."','".$cod_sec."','".$ref."','".$at_2013."','".$at_2014."','".$at_2015."','".$at_2016."','".$at_2017."',
				'".$at_2018."','".$at_2019."','".$at_2020."','".$at_2021."','".$at_2022."','".$at_2023."','".$at_2024."','".$at_2025."')";

$result = mysqli_query($con, $sql);

if ($result)
	echo "Dados cadastrados com sucesso!";
else
	echo "Não foi possível armazenar os dados";

	header("Refresh: 3; url = index.php");

