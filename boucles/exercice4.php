<?php
$sentence = "La formation simplon c'est genial, on va devenir des pros";
$tab = array('a','e','i','o','u','y');
$tot=" ";
	echo $tot.'Voyelles :';
	foreach($tab as $voyelle) {
		$tot+= substr_count(strtolower($sentence), $voyelle);
	}
	echo $tot;
// preg_match_all

/**
* Créer un script qui compte le nombre de voyelle
* dans la variable $sentence
*
* 
* indice on peut parcourir une chaine avec for
* strlen()
* in_array()
*/
?>

