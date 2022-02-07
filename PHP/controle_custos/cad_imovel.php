<?php

include ('conexao.php');

$id_cad=$_POST['id_cad'];
$hidrometro=$_POST['hidrometro'];
$cod_prop=$_POST['cod_prop'];
$nome_prop=$_POST['nome_prop'];
$denomina=$_POST['denomina'];
$logradouro=$_POST['logradouro'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];

echo "<P>Cadastro: ".$id_cad."<BR>";
echo "Num Hidrometro: ".$hidrometro."<BR>";
echo "Codigo Propriedade: ".$cod_prop."<BR>";
echo "Nome Proprietario: ".$nome_prop."<BR>";
echo "Nome Predio: ".$denomina."<BR>";
echo "Endereco: ".$logradouro."<BR>";
echo "Numero: ".$numero."<BR>";
echo "Bairro: ".$bairro."</P>";

$sql="INSERT INTO imovel (id_cad, hidrometro, cod_prop, nome_prop,denomina, logradouro, numero, bairro)
	VALUES ('".$id_cad."','".$hidrometro."','".$cod_prop."','".$nome_prop."','".$denomina."','".$logradouro."','".$numero."','".$bairro."')";

$result = mysqli_query($con, $sql);

if ($result)
	echo "Dados cadastrados com sucesso!";
else
	echo "O cadastro '".$id_cad."' já existe!";

	header("Refresh: 2; url = cadastro_secretaria.html");

