<?php

include 'conexao.php';

$pesq_end = $_POST['pesq_end'];
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
$sql_end = "SELECT * FROM imovel WHERE logradouro LIKE '%$pesq_end%' order by id_cad limit 10" ;
$resultado_end = mysqli_query($con, $sql_end);

while($rows_end = mysqli_fetch_array($resultado_end))
{
    $id_cad=$rows_end['id_cad'];
	$hidrometro=$rows_end['hidrometro'];
	$nome_prop=$rows_end['nome_prop'];
	$denomina=$rows_end['denomina'];
	$logradouro=$rows_end['logradouro'];
	$numero=$rows_end['numero'];
	$bairro=$rows_end['bairro'];
	echo "<tr>";
	echo "<td>".$rows_end['id_cad']."</td>";
	echo "<td>".$rows_end['hidrometro']."</td>";
	echo "<td>".$rows_end['nome_prop']."</td>";
	echo "<td>".$rows_end['denomina']."</td>";
	echo "<td>".$rows_end['logradouro']."</td>";
	echo "<td>".$rows_end['numero']."</td>";
	echo "<td>".$rows_end['bairro']."</td>";
	echo "</tr>";
}
	echo "</table>";
	
?>
<a href="index.php">Voltar</a>
</body>
</html>
