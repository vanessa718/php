<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 5</title>
</head>
<body>
	<form method="post">
		<label for="field-name"></label>
		<input type="text" id="field-name" name="name" placeholder="nom" required>
		<input type="submit" value="Valider">
	</form>
	<?php
		if(isset($_POST['name'])){
			// echo $_POST['name'];

			if(!isset($_SESSION['name'])){
				$_SESSION['name'] = $_POST['name'];
			echo "Bonjour votre nom est : ".$_SESSION['name'];	

			}else{
				$_SESSION['first-name'] = $_POST['name'];
			echo "Bonjour votre nom est :".$_SESSION['name'] ." et votre prénom est : " .$_SESSION['first-name'] ;

	session_unset();		           
			}		
		 }
	/**
	* Creer un formulaire qui demande le nom de l'utilisateur
	* une fois envoyé
	* afficher le nom et demander le prenom
	* enfin afficher le nom ET le prénom après la validation 
	*
	* Indice : il faut utiliser les sessions
	*/
	?>
</body>
</html>
