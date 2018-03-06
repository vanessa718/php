<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exercice 3</title>
</head>
<body>

	<?php
	/**
	* Inserer le tableau $insert dans $number aprés le 3eme element
	* puis afficher le resultat
	* 
	* Info : pour afficher un tableau utiliser la fonction var_dump()
	* http://php.net/manual/fr/ref.array.php
	*/
		$number = [1,2,3,4];
		$insert = ["A","B","C"];
				
		array_splice($number, 3, 0, $insert);  		
		var_dump($number);
	/**
	* Coder ici
	*/
	?>
	<pre>
		<?php
		print_r($number);
		?>
	</pre>
</body>
</html>

