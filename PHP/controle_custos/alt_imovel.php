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


echo "Cadastro: ".$id_cad."<BR>";
echo "Num Hidrometro: ".$hidrometro."<BR>";
echo "Codigo Propriedade: ".$cod_prop."<BR>";
echo "Nome Proprietario: ".$nome_prop."<BR>";
echo "Nome Predio: ".$denomina."<BR>";
echo "Endereco: ".$logradouro."<BR>";
echo "Numero: ".$numero."<BR>";
echo "Bairro: ".$bairro."</P>";

$sql="UPDATE imovel SET
	hidrometro='".$hidrometro."',
	cod_prop='".$cod_prop."',
	nome_prop='".$nome_prop."',
	denomina='".$denomina."',
	logradouro='".$logradouro."',
	numero='".$numero."',
	bairro='".$bairro."'
	WHERE id_cad='".$id_cad."' ";

$result = mysqli_query($con, $sql);

if ($result)
	echo "Dados atualizados com sucesso!";
else
	echo "O cadastro '".$id_cad."' não pode ser atualizado!";

?>

<a href="index.php">Voltar</a>
