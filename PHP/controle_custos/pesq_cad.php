<?php

include 'conexao.php';

$pesq_cad = $_POST['pesq_cad'];
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
<td> Hidrometro </td>
<td> Proprietario </td>
<td> Nome do Predio </td>
<td> Endereco </td>
<td> Numero </td>
<td> Bairro </td>
</tr>

<?php
$sql_cad = "SELECT * FROM imovel WHERE id_cad LIKE '%$pesq_cad%' limit 10";
$resultado_cad = mysqli_query($con, $sql_cad);

while($rows_cad = mysqli_fetch_array($resultado_cad))
{
    $id_cad=$rows_cad['id_cad'];
	$hidrometro=$rows_cad['hidrometro'];
	$nome_prop=$rows_cad['nome_prop'];
	$denomina=$rows_cad['denomina'];
	$logradouro=$rows_cad['logradouro'];
	$numero=$rows_cad['numero'];
	$bairro=$rows_cad['bairro'];
	echo "<tr>";
	echo "<td>".$rows_cad['id_cad']."</td>";
	echo "<td>".$rows_cad['hidrometro']."</td>";
	echo "<td>".$rows_cad['nome_prop']."</td>";
	echo "<td>".$rows_cad['denomina']."</td>";
	echo "<td>".$rows_cad['logradouro']."</td>";
	echo "<td>".$rows_cad['numero']."</td>";
	echo "<td>".$rows_cad['bairro']."</td>";
	echo "</tr>";
}
	echo "</table>";
	
?>
<a href="index.php">Voltar</a>
</body>
</html>