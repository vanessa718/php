<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 1</title>
</head>
<body>
	<form name="form1" method="POST" action="">
		<label for="nom">Nom du produit *</label>
		<input type="text" name="nom" id="nom" value="" required>
		<br>
		<label for="categories">Catégorie *</label>
		<input type="text" name="categories" id="categories" value="" required>
		<br>
		<label for="couleur">Couleur du produit *</label>
		<input type="text" name="couleur" id="couleur" value="" required>
		<br>
		<label for="stock">Stock du produit *</label>
		<input type="text" name="stock" id="stock" value="" required>
		<br>
		<label for="vendeur">Vendeur du produit *</label>
		<input type="text" name="vendeur" id="vendeur" value="" required>
		<br>
		<label for="prix">Prix du produit *</label>
		<input type="text" name="prix" id="prix" value="" required>
		<br>
		<!-- Champ masqué qui va récupérer l'auto-increment de l'identifiant unique du produit -->
		<input type="hidden" name="id" value="">
		<input type="submit" name="button" value="Ajouter un nouveau produit">
	</form>

<?php
if(!empty($_POST)) {

	// Connexion à MySQL
	$user = "root";
	$password = "simplonco";

	try{
		$connection = new PDO("mysql:dbname=mydb; host=localhost",$user,$password,  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		/*array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION pour afficher les erreurs plus clairement*/
		$nom=$_POST['nom'];
		$categories=$_POST['categories'];
		$couleur=$_POST['couleur'];
		$stock=$_POST['stock'];
		$vendeur=$_POST['vendeur']; 
		$prix=$_POST['prix'];

		// echo "<pre>";
		// Requête d'insertion
		$Ajouterproduit= $connection->prepare("INSERT INTO Produits ( nom, categories, couleur, stock, IDRevendeurs,prix) VALUES (:nom, :categories, :couleur, :stock, :IDRevendeurs, :prix)");
		$Ajouterproduit->bindValue(':nom', $nom, PDO::PARAM_STR);
		$Ajouterproduit->bindValue(':categories', $categories, PDO::PARAM_STR);
		$Ajouterproduit->bindValue(':couleur', $couleur, PDO::PARAM_STR);
		$Ajouterproduit->bindValue(':stock', $stock, PDO::PARAM_INT);
		$Ajouterproduit->bindValue(':IDRevendeurs', $vendeur, PDO::PARAM_INT);
		$Ajouterproduit->bindValue(':prix', $prix, PDO::PARAM_INT);

		// Exécution de la requête
		$produit = $Ajouterproduit->execute();

		// var_dump($Ajouterproduit->fetchAll(PDO::FETCH_ASSOC));
		// echo "</pre>";
	}catch(PDOException $e){
			echo 'Erreur SQL !'.$e;
		 
	}
}

/**
 * @file
 * @author	Hans Vanpee <hans@vanpee.fr>
 * @brief		Créez un form pour saisir une nouveau produit.
 *
 * Le formulaire affiche les inputs nécessaires pour créer un nouveau
 * produit dans la base de données de l'exercice e-commerce.
 * Lors du submit, les valeurs sont enregistrées dans la table
 * « Produits » et un message indique le succès ou l'échec de l'opération.
 */
// vim: set expandtab:
// vim: set tabstop=4 shiftwidth=4 softtabstop=4:
?>
</body>
</html>
