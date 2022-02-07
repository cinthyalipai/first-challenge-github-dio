<?php

include 'conexao.php';

$sql_sec= "SELECT * FROM secretaria";
$result_sec = mysqli_query($con, $sql_sec);
$row_sec = mysqli_fetch_array($result_sec);

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title> Atualizacao de Cadastro de Imoveis </title>
			
<style type="text/css">
a {
	color: #000000;
	text-decoration: none
}
a:hover {
	color: #d82523;
	font-weight:bold;
	text-decoration:none;
}
body, TD {
   font-family: verdana;
   font-size: 11px
}			
	
table td.shrink {
    white-space:nowrap
}
table td.expand {
    width: 75%
}
	
</style>			
	</head>
	
<body>

<h1> Listagem de Secretarias </h1>

<table class="full_table_list" border="2">
<tr>
				<td class="shrink"><b>Cod Secretaria</b></td>              
				<td class="shrink"><b>Nome Secretaria</b></td>              
				
</tr>

<?php             
			do { 
				echo "<tr>"; 
				echo "<td>".$row_sec['id_sec']."</td>";
				echo "<td><a href='atend_novo_ano.php?id_sec=".$row_sec['id_sec']."'>".$row_sec['orgao']."</a></td>";  
    			 } while ($row_sec = mysqli_fetch_array($result_sec)); 
			?>      

		</table>      
		<a href="index.php"> voltar</a>   
	</body>
</html>
