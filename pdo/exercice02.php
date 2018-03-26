 <?php 
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

	//connexion MySQL
	$user = 'root';
	$password = 'simplonco';

try{
	$connect = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8mb4',$user,$password);
	}catch(PDOException $e){
		die ('<p>Erreur SQL !</p>');
}
if(count($_POST)>0){
	enregistrer();
}else{
	formulaire();
}

function enregistrer()
{
	global $connect;//pour rappeler la variable dans cette méthode
	try{
		$result=$connect->prepare('INSERT INTO Commandes (`Date`, `idClients`) values (:date, :idClients)');
		if($result->execute($_POST)){
			echo "<p>Nouvelle commande enregistrée</p>";
		}else{
			echo "<p>La commande n'est pas enregistrée : {$connect->errorCode()}</p>";
		}
	}catch(PDOException $e){
		echo "<p>Erreur de la base de données : {$e->getMessage()}</p>";
	}catch(Exception $e){
		echo "<p>Erreur : {$e->getMessage()}</p>";
	}
}
function formulaire()
{
	global $connect;
	echo "<h3> Nouvelle commande </h3>";

	$form = <<<TEST
		<form action="" method="POST">
			<fieldset>
				<label>Date</label>
				<input type="text" name="date"><br>
				<label>Client</label>
				<select name="idClients">
TEST;
	$query = $connect->query("SELECT * FROM Clients");
	foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
		$form .= "<option value=\"{$row['idClients']}\">{$row['Nom']}</option>";
	}
		$form .= <<<TEST
				</select>
			</fieldset>
			<input type="submit" value="Enregistrer">
		</form>
TEST;
	echo $form;
}
