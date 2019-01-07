<?php session_start(); ?>
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
		<h2>Les choses à faire :</h2>
		<div id="todo">
			<p>wouf</p>
		</div>
		<form method="post" action="todoadd.php">
		<textarea name="todosub" id="todosub" placeholder="Entrez la tâche à réaliser"></textarea>
		<input type="submit" name="Ajouter" value="Ajouter">
		</form>
	</div>
</body>
</html>
