<?php 
session_start();

require 'sqlconnect.php';

$_SESSION['userlog'] = $userlog = $_POST["username"];
$_SESSION['usermdp'] = $usermdp = $_POST["password"];

$req = $pdo->prepare("SELECT * FROM user WHERE usr_pseudo = ? AND usr_mdp = ?");
$req->execute(array($userlog, $usermdp));

if ($req->rowCount() > 0){
	$row = $req->fetchAll();
	$_SESSION['id'] = $row[0];

	header('Location: todolist.php');
}
else {
	header('Location: index.php?msg');
}

?>