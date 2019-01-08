<?php session_start(); 
$iduser = $_SESSION['id'];
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
		<!--<div id="buttongrp"><button id="bAfficher">Afficher</button></div>
		<form id="todoform" method="post" action="todoadd.php">
		<textarea form="todoform" name="todosub" id="todosub" placeholder="Entrez la tâche à réaliser"></textarea>
		<input type="submit" name="Ajouter" value="Ajouter">
	</form> -->
</div>
<?php

require 'sqlconnect.php';

$req = $pdo->prepare("SELECT tab_id FROM usertablink WHERE user_id = ?");
$req->execute(array($iduser['ID']));
$i = 0;

if ($req->rowCount() > 0){
	echo "<div id='todo'>";
	foreach ($req->fetchAll(PDO::FETCH_ASSOC) as $row){
		//print_r($row);
		$req2 = $pdo->prepare("SELECT * FROM todolist WHERE ID = ?");
		$req2->execute(array($row['tab_id']));
		foreach ($req2->fetchAll(PDO::FETCH_ASSOC) as $row2){
			$i +=1;
			print_r($row2);
			echo "<p class='itemtitre hover todoitem".$i."'>".$row2['list_name']."</p>";
			echo "<p class='itemdesc todoitem".$i."'>".$row2['list_desc']."</p><br>";
		}
	}
	echo "</div>";
}
else {
	?><script>document.getElementById('todo').innerHTML = '<p>Aucune todolist trouvée !</p>';</script><?php
}
?>
</body>
</html>