<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 2</title>
</head>
<body>
	<form name="form1" method="POST" action="">
		<label for="nom">Nom du produit *</label>
		<input type="text" name="nom" id="nom" value="" required>
		<br>
		<label for="date">Date</label>
		<input type="text" name="date_com" id="date" value="" required>
		<br>
		<label for="acheteur">Acheteur *</label>
		<input type="text" name="acheteur" id="acheteur" value="" required>
		<br>
		<label for="etat">Etat *</label>
		<input type="text" name="etat" id="etat" value="" required>
		<br>
		<!-- Champ masqué qui va récupérer l'auto-increment de l'identifiant unique du produit -->
		<input type="hidden" name="id" value="">
		<input type="submit" name="button" value="Ajouter">
	</form>
<?php
if(!empty($_POST)){
	//connexion MySQL
	$user = 'root';
	$password = 'simplonco';

	try{
		$connect = new PDO('mysql:dbname=mydb; host=localhost',$user,$password);
		$nom= $_POST['nom'];
		$date_com= $_POST['date_com'];
		$acheteur= $_POST['acheteur'];
		$etat= $_POST['etat'];


		$add = $connect->prepare("SELECT 'Produits,idClients, Date, Etat' FROM Commandes ");

		$produit = $add->execute();
	}catch(PDOException $e){
		echo 'Une erreur est survenue, merci de contacter le service'.$e;
	}
}


	
		 
/**
 * @file    exercice02.php
 * @author	Hans Vanpee <hans@vanpee.fr>
 * @brief	Créez un form pour la saisie d'une nouvelle commande.
 *
 * Le formulaire affiche un input pour la date de la commande et une balise
 * <select> pour la sélection du client qui est poplulée à partir de la
 * table des clients existants.
 * Lors de l'enregistrement de la commande, l'ID du client et la date sont
 * stockés dans la table des commandes.
 */
// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4: