<?php
function caracter($data){
$result=0;
	foreach (count_chars($data, 1) as $i => $val) {
	   echo "Il y a $val occurence(s) de \"" , chr($i) , "\" dans la phrase.\n"."<br>";
	   $result += $val;
	}

	echo $result-1;
}
/**
* Créer une fonction qui compte le nombre de caractere dans une chaine
* 
* ne pas utiliser la fonction strlen
*/
caracter("Développeur web en herbe");
?>

