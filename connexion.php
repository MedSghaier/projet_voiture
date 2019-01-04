<?php
//class de connexion

	try{
		
	$cnx = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
	
	}catch(PDOException $except){
	echo "Echec de connexion ",$except->getMessage();
	die();
	}

/*
$servername = "b3_19465353_projet";
$username = "b3_19465353";
$password = "0000000000";

// Create connection
$cnx = new mysqli($servername, $username, $password);

// Check connection
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
} 
echo "Connected successfully";*/
?>