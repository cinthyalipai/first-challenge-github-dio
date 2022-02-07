<?php
include ('conexao.php');

?>

<html>
<head>
<style type="text/css">
     
        /*css global tabela*/
        .full_table_list{width: 200px;border-collapse: collapse;}
         
        /*colocando bordas nas linhas*/
        .full_table_list tr{border:1px black solid;}
         
        /*Definido cor das linhas pares*/
        .full_table_list tr:nth-child(even) {background: #FFF}
         
        /*Definindo cor das Linhas impares*/
        .full_table_list tr:nth-child(odd) {background: #EEE}
      
                 
    </style>
</head>
   
	<body> 
	
		<form method="POST" action="pesquisa_imoveis_sec.php"> 
		Pesquisar:
		<tr>
			<label for="responsavel">Selecione a secretaria:</label>
				<select cod_sec="secretarias">
 					<option value="1">Administracao</option>
					<option value="2">Agricultura</option>
					<option value="3">Assistencia</option>
					<option value="4">Comunicacao</option>
				</select>
		</tr>
       <input type="submit" value="ENVIAR">
        </form>       
		
		<a href="index.html"> voltar</a>   
	</body>
</html>