<?php session_start();

$_SESSION['userlog'] = $userlog = $_POST["username"];
$_SESSION['usermdp'] = $usermdp = $_POST["password"];
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
	$row = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $row['ID'];
	header('Location: todolist.php');
}
else {
	header('Location: index.php?msg');
}

?>