<?php
echo "Créer une fonction qui teste si une valeur existe dans un tableau
ne pas utiliser la fonction in_array";
echo '<br> Exercice avec array_search';
$vgi=1;
$vgarray=array(1,2,3,4);
$vgnom='david';
$vgtab = array('daniel', 'boby','david');

function FunctionName($i, $array)
{
	$key=array_search($i, $array);

	if($key || $key === 0){
		echo '<br>valeur trouvée';
	} else{
		echo '<br>valeur non trouvée';
	}
}


// https://jeanbaptistemarie.com/notes/code/php/verifier-si-une-valeur-est-dans-un-tableau-avec-php.html 
function FunName($nom, $tab)
{
	
	echo '<br>Exercice avec in_array';
	if(in_array($nom,$tab)){
	echo '<br>trouvé';
	}else{
	echo '<br>pas trouvé';
	}
}
/**
* Créer une fonction qui teste si une valeur existe dans un tableau
* 
* ne pas utiliser la fonction in_array
*/
// http://tutowebdesign.com/recherche-element-tableau-php.php


FunctionName($vgi, $vgarray);

FunName($vgnom, $vgtab);
FunName('boby', $vgtab);

?>
