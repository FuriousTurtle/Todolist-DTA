<?php session_start();

$servername = "localhost";
$username = "root";
$password = "azerty";
$dbname = "backend";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Erreur de connexion à la base de donnée : ".$conn->connect_error);
}


?>