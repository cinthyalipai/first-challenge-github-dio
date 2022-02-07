<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "semae_test";
$con = mysqli_connect($hostname, $username, $password, $db); 

if (!$con){
die(mysqli_connect_error()."Erro ao tentar conectar-se ao banco");
	} 
else 
	{ echo "";
	}        

?>


