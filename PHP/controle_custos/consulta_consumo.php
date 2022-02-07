<?php
include ('conexao.php');

$sec = $_POST['sec'];

?>

<html>
<head>
	<title> Consulta Consumo </title>
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
				<td rowspan="2"><b>Cadastro</b></td>
				<td colspan="2"><b>Janeiro</b></td>
				<td colspan="2"><b>Fevereiro</b></td>
				<td colspan="2"><b>Mar&ccedil;o</b></td>
				<td colspan="2"><b>Abril</b></td>
				<td colspan="2"><b>Maio</b></td>
				<td colspan="2"><b>Junho</b></td>
				<td colspan="2"><b>Julho</b></td>
				<td colspan="2"><b>Agosto</b></td>
				<td colspan="2"><b>Setembro</b></td>
				<td colspan="2"><b>Outubro</b></td>
				<td colspan="2"><b>Novembro</b></td>
				<td colspan="2"><b>Dezembro</b></td>
					<tr>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
						<td class="shrink">M<sup>3</sup></td>
						<td class="shrink">R$</td>
					</tr>
	
			</tr>
			
			<?php
				$sql_consumo = "SELECT r.cod_cad, c.janeiro, g.jan, c.fevereiro, g.fev, c.marco, g.mar, c.abril, g.abr, c.maio, g.mai, c.junho, g.jun, 
									c.julho, g.jul, c.agosto, g.ago, c.setembro, g.sept, c.outubro, g.oct, c.novembro, g.nov, c.dezembro, g.dez
								FROM responsavel r, consumo2019 c, gasto2019 g, secretaria s
								WHERE s.id_sec=r.cod_sec
									and c.cod_resp=r.id_resp
									and g.cod_resp=r.id_resp
									and r.at_2019 like '1'
									and s.id_sec like '$sec'
									order by r.cod_cad";
	
				$resultado_consumo = mysqli_query($con, $sql_consumo);

				while($rows_consumo = mysqli_fetch_array($resultado_consumo))
					{
						$cod_cad=$rows_consumo['cod_cad'];
						$janeiro=$rows_consumo['janeiro'];
						$jan=$rows_consumo['jan'];
						$fevereiro=$rows_consumo['fevereiro'];
						$fev=$rows_consumo['fev'];
						$marco=$rows_consumo['marco'];
						$mar=$rows_consumo['mar'];
						$abril=$rows_consumo['abril'];
						$abr=$rows_consumo['abr'];
						$maio=$rows_consumo['maio'];
						$mai=$rows_consumo['mai'];
						$junho=$rows_consumo['junho'];
						$jun=$rows_consumo['jun'];
						$julho=$rows_consumo['julho'];
						$jul=$rows_consumo['jul'];
						$agosto=$rows_consumo['agosto'];
						$ago=$rows_consumo['ago'];
						$setembro=$rows_consumo['setembro'];
						$sept=$rows_consumo['sept'];
						$outubro=$rows_consumo['outubro'];
						$oct=$rows_consumo['oct'];
						$novembro=$rows_consumo['novembro'];
						$nov=$rows_consumo['nov'];
						$dezembro=$rows_consumo['dezembro'];
						$dez=$rows_consumo['dez'];
						
							echo "<tr>";
							echo "<td class='shrink'>".$rows_consumo['cod_cad']."</td>";
							echo "<td class='shrink'>".$rows_consumo['janeiro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['jan']."</td>";
							echo "<td class='shrink'>".$rows_consumo['fevereiro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['fev']."</td>";
							echo "<td class='shrink'>".$rows_consumo['marco']."</td>";
							echo "<td class='shrink'>".$rows_consumo['mar']."</td>";
							echo "<td class='shrink'>".$rows_consumo['abril']."</td>";
							echo "<td class='shrink'>".$rows_consumo['abr']."</td>";
							echo "<td class='shrink'>".$rows_consumo['maio']."</td>";
							echo "<td class='shrink'>".$rows_consumo['mai']."</td>";
							echo "<td class='shrink'>".$rows_consumo['junho']."</td>";
							echo "<td class='shrink'>".$rows_consumo['jun']."</td>";
							echo "<td class='shrink'>".$rows_consumo['julho']."</td>";
							echo "<td class='shrink'>".$rows_consumo['jul']."</td>";
							echo "<td class='shrink'>".$rows_consumo['agosto']."</td>";
							echo "<td class='shrink'>".$rows_consumo['ago']."</td>";
							echo "<td class='shrink'>".$rows_consumo['setembro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['sept']."</td>";
							echo "<td class='shrink'>".$rows_consumo['outubro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['oct']."</td>";
							echo "<td class='shrink'>".$rows_consumo['novembro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['nov']."</td>";
							echo "<td class='shrink'>".$rows_consumo['dezembro']."</td>";
							echo "<td class='shrink'>".$rows_consumo['dez']."</td>";
							echo "</tr>";
					}
		echo "</table>";  
?>
   
		<a href="index.php"> Voltar</a>   
	</body>
</html>