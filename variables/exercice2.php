<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 2</title>
</head>
<body>

	<?php
		/**
		* Ajouter deux elements a la fin du tableau $number
		* puis afficher le nombre d'élement du tableau ainsi que le 2 eme element.
		* 
		* Resultat:
		* 
		* Nombre d'élement : 6
		* Deuxieme element : 2
		* 
		* http://php.net/manual/fr/ref.array.php
		*/
		$number = [1,2,3,4];
		array_push($number,5,6);
		
		$result = count($number);

		echo $result;
		echo "<br>";
		echo $number[1];
	?>
</body>
</html>


