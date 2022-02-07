<?php

include 'conexao.php';

$sec = $_POST['sec'];

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

		table td.shrink {
    white-space:nowrap
						}
		table td.expand {
    width: 75%
}
</style>

<body>

<table class="full_table_list" border="2" style='width:50%'>
<tr>
<td class="shrink"><b> Nome Secretaria </td>
<td class="shrink"><b> Cadastro </td>
<td class="shrink"><b> Hidrometro </td>
<td class="shrink"><b> Proprietario </td>
<td class="shrink"><b> Nome do Predio </td>
<td class="shrink"><b> Endereco </td>
<td class="shrink"><b> Numero </td>
<td class="shrink"><b> Bairro </td>

</tr>

<?php
$sql_sec = "select s.orgao, i.id_cad, i.hidrometro, i.nome_prop, i.denomina, i.logradouro, i.numero, i.bairro, r.cod_sec
	from imovel i, responsavel r, secretaria s 
	where  r.cod_cad=i.id_cad 
			and r.cod_sec=s.id_sec
			and s.id_sec like'$sec'
			and r.at_2020='1'
	order by i.id_cad";
	
$resultado_sec = mysqli_query($con, $sql_sec);

while($rows_sec = mysqli_fetch_array($resultado_sec))
{
    $id_cad=$rows_sec['id_cad'];
	$hidrometro=$rows_sec['hidrometro'];
	$nome_prop=$rows_sec['nome_prop'];
	$denomina=$rows_sec['denomina'];
	$logradouro=$rows_sec['logradouro'];
	$numero=$rows_sec['numero'];
	$bairro=$rows_sec['bairro'];
	$cod_sec=$rows_sec['cod_sec'];
	$orgao=$rows_sec['orgao'];
	echo "<tr>";
	echo "<td class='shrink'>".$rows_sec['orgao']."</td>";
	echo "<td class='shrink'>".$rows_sec['id_cad']."</td>";
	echo "<td class='shrink'>".$rows_sec['hidrometro']."</td>";
	echo "<td class='shrink'>".$rows_sec['nome_prop']."</td>";
	echo "<td class='shrink'>".$rows_sec['denomina']."</td>";
	echo "<td class='shrink'>".$rows_sec['logradouro']."</td>";
	echo "<td class='shrink'>".$rows_sec['numero']."</td>";
	echo "<td class='shrink'>".$rows_sec['bairro']."</td>";
	echo "</tr>";
}
	echo "</table>";
	
	
?>
<a href="pesquisa_sec.php">Voltar</a>
</body>
</html>