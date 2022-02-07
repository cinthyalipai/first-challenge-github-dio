<?php

include 'conexao.php';
include 'cad_imovel2.php';

//variaveis cadastro responsavel//
$cod_sec=$_POST['cod_sec'];
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

echo "<P>Cadastro: ".$id_cad."<BR>";
echo "Num Hidrometro: ".$hidrometro."<BR>";
echo "Codigo Propriedade: ".$cod_prop."<BR>";
echo "Nome Proprietario: ".$nome_prop."<BR>";
echo "Nome Predio: ".$denomina."<BR>";
echo "Endereco: ".$logradouro."<BR>";
echo "Numero: ".$numero."<BR>";
echo "Bairro: ".$bairro."</P>";

$sql2="INSERT INTO responsavel (id_cad, cod_sec, at_2013, at_2014, at_2015, at_2016, at_2017, at_2018, at_2019, at_2020, at_2021, at_2022, at_2023, at_2024, at_2025)
		VALUES ('".$id_cad."','".$cod_sec."','".$ref."','".$at_2013."','".$at_2014."','".$at_2015."','".$at_2016."','".$at_2017."',
				'".$at_2018."','".$at_2019."','".$at_2020."','".$at_2021."','".$at_2022."','".$at_2023."','".$at_2024."','".$at_2025."')";

$result2 = mysqli_query($con, $sql2);

?>
<a href="index.php">Voltar</a>
</body>
</html>