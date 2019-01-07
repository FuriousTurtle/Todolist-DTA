<?php session_start(); 
//$iduser = $_SESSION['id'];
$iduser = '1';
$userlog = $_SESSION['userlog'];
$usermdp = $_SESSION['usermdp'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>TODO list</title>
	<link rel="stylesheet" type="text/css" href="./stylesheets/style.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1>ToDo List DTA 2019 !</h1>
	</header>
	<div id="grid">
		<h2>Liste de vos todolist :</h2>
		<div id="todo">
			<p>wouf</p>
		</div>
		<!--<div id="buttongrp"><button id="bAfficher">Afficher</button></div>
		<form id="todoform" method="post" action="todoadd.php">
		<textarea form="todoform" name="todosub" id="todosub" placeholder="Entrez la tâche à réaliser"></textarea>
		<input type="submit" name="Ajouter" value="Ajouter">
		</form> -->
	</div>
	<?php echo ${"userlog"}. ',' .${"usermdp"}. ',' .${"iduser"}. '!'?>
<?php 

$servername = "localhost";
$username = "root";
$password = "azerty";
$dbname = "backend";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Erreur de connexion à la base de donnée : ".$conn->connect_error);
}

$sql = "SELECT * FROM usertablink WHERE user_id = '${iduser}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//	$row = mysqli_fetch_assoc($result);
//	$_SESSION['id'] = $row['ID'];
//	header('Location: todolist.php');
}
else {
	?><script>document.getElementById('todo').innerHTML = '<p>Aucune todolist trouvée !</p>';</script><?php
}


?>
</body>
</html>