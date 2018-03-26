<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<div class="form">
			<div class="name">
				<label for="guerrier">Guerrier</label>
				<input type="number" id="guerrier" placeholder="nombre de guerriers"><br>
				<label for="sorcier">Sorcier </label>
				<input type="number" id="sorcier" placeholder="nombre de sorciers"><br>
			</div>
			<button type="submit" value="send">Envoyer</button>
		</div>
	</form>	

	<?php
	Class Form
	{
		
	}


		Class Personnage
		{
			private $_perteVie,
			  		$_nom;

			const PERSONNAGEensorcelle=10;
			const PERSONNAGEattaque=15;   

			public function frapper(Personnage $perso)
			{
				$persoAFrapper->_degats += $this->_force;
			// Avant tout : vérifier qu'on ne se frappe pas soi-même.
			// Si c'est le cas, on stoppe tout en renvoyant une valeur signifiant que le personnage ciblé est le personnage qui attaque.

			// On indique au personnage frappé qu'il doit recevoir des dégâts.
			}

			public function recevoirDegats()
			{
			// On augmente de 5 les dégâts.

			// Si on a 100 de dégâts ou plus, la méthode renverra une valeur signifiant que le personnage a été tué.

			// Sinon, elle renverra une valeur signifiant que le personnage a bien été frappé.
			}
		}
/**
 * Jeux de sorciers et guerriers
 * 
 * Le but du jeu est de créer des "personnages" qui vont se battre
 * Ces "personnages" sont des "guerriers" et des "sorciers"
 * 
 * Le "sorcier" peut "ensorceller" un autre "personnage"
 * Lors d'une attaque de sorcier l'autre "personnage" perds 10 points de vie
 * 
 * Le "guerrier" peut "attaquer" un autre "personnage"
 * Lors d'une attaque de guerrier l'autre "personnage" perds 15 points de vie
 * 
 * 
 * Faire un formulaire qui demande le nombre de sorcier et le nombre de guerrier
 * Demander le nombre de point de vie et le  nom de chaque personnage
 * 
 * 
 * Créer autant de personnage qu'indiquer dans le formulaire, parametrer leurs nom et point de vie
 * et faite les se battre.
 * 
 * Le jeu s'arrete quand il ne reste plus qu'un personnage.
 * 
 * */
	?>

</body>
</html>




