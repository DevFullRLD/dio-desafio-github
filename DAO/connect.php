<?php
	$servername = "localhost";
	$username = "alunos";
	$password = "";
	$database = "";
	
	// Criando conexão
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Verificando conexão
	if ($conn->connect_error){
		die("Connection failed: ".$connect->connect_error);
	}
	//echo "Conectado.";
?>