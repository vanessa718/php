<?php


echo 'Créer une fonction qui verifie qu\'une chaine existe dans une autre chaine et retourne
 la position de son premier caractere<br>'; 
echo 'ne pas utiliser la fonction strpos<br><br>';

/* exemple 
* 
* $place = myfunction('mystring', 'string'); // 3
*/

function Position($value='')
{
	# code...
}
$adresse = "nom@domaine.fr";
$arobase = "@";
echo strpos($adresse,$arobase) . "<br />"; //retourne la position :5 
echo strstr($adresse,$arobase) . "<br />"; //retourne la chaine après avec la chaine recherchée: @domaine.fr 
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // Affiche : @example.com

$user = strstr($email, '@', true); // Depuis PHP 5.3.0
echo $user; // Affiche : name

?>

