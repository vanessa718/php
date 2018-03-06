<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 1</title>
</head>
<body>
	<!--<pre><?php print_r($_POST); ?></pre>-->
	<form method="post">
		<label for="field-login" placeholder="login"></label>
		<input type="text" id="field-login" name="login" placeholder="login">
		<input type="password" name="password" placeholder="mot de passe">
		<input type="submit" name="valider" value="Valider">
	</form>
<?php
if(isset($_POST['valider'])){
    $login=$_POST['login'];
    $password=$_POST['password'];
   
	echo '<p>login : <p>',$login;
	
	echo '<p>password : <p>',$password;
	
	echo '<p>ip client : <p>',$_SERVER['REMOTE_ADDR'];
}

/**
*
* Créer un formulaire qui demande un login et un mot de passe
* puis une fois le formulaire validé, afficher :
* 
* - Le login
* - Le mot de passe
* - L'adresse ip du client
*/
?>

</body>
</html>

