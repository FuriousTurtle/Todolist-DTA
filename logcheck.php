<?php
session_start();
$userlog = $_POST["username"];
$usermdp = $_POST["password"];
$servername = "localhost";
$username = "root";
$password = "azerty";
$dbname = "backend";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Erreur de connexion à la base de donnée : ".$conn->connect_error);
}

$sql = "SELECT * FROM user WHERE usr_pseudo = '${userlog}' AND usr_mdp = '${usermdp}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	header('Location: todolist.php');
}
else {
	header('Location: index.php?msg');
}

?>