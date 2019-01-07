<?php 

session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="./stylesheets/style.css">	
</head>
<body>
	<form method="post" action="logcheck.php">
		<label>Nom d'utilisateur :</label>
		<input id="username" type="text" name="username">
		<label>Mot de passe :</label>
		<input id="password" type="password" name="password">
		<?php 
		if (isset($_GET['msg'])){
			$Message = "<p id='errormsg'>Veuillez vérifier vos informations</p>";
			echo $Message;
		}
		?>
		<input type="submit" name="Connexion" value="Connexion">
	</form>
</body>
</html>