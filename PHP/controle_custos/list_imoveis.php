<?php
include ('conexao.php');

$sql="SELECT * FROM imovel";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>

<html>
<head>
	<title> Lista de Imoveis Cadastrados </title>
<head>
	<style type="text/css">
     
table {
    border: 1px solid black;
    border-collapse: collapse;
    width:100%;
}

table td {
    border: 1px solid black;
}

table td.shrink {
    white-space:nowrap
}
table td.expand {
    width: 75%
}

/*Definido cor das linhas pares*/
.full_table_list tr:nth-child(even) {background: #FFF}
         
/*Definindo cor das Linhas impares*/
.full_table_list tr:nth-child(odd) {background: #EEE}   
     
    </style>
</head>
   
	<body>        
		<table class="full_table_list" border='1'>           
			<tr>              
				<td class="shrink"><b>Cadastro</b></td>              
				<td class="shrink"><b>Hidrometro</b></td>              
				<td class="shrink"><b>Proprietario Imovel</b></td>
				<td class="shrink"><b>Nome do Predio</b></td>
				<td class="shrink"><b>Endereco</b></td>
				<td class="shrink"><b>Numero</b></td>          
				<td class="shrink"><b>Bairro</b></td>
			</tr>
			
			<?php             
			do { 
				echo "<tr>";  
				echo "<td>".$row['id_cad']."</td>";  
				echo "<td>".$row['hidrometro']."</td>";  
				echo "<td>".$row['nome_prop']."</td>";
                echo "<td>".$row['denomina']."</td>";
                echo "<td>".$row['logradouro']."</td>";
                echo "<td>".$row['numero']."</td>";
                echo "<td>".$row['bairro']."</td>";  
				echo "</tr>";
    			 } while ($row = mysqli_fetch_array($result)); 
			?>      

		</table>      
		<a href="index.php"> Voltar</a>   
	</body>
</html>