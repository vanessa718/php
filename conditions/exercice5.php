<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num est pair OU $num est impair
*
*   Vous n'avez pas le droit d'utiliser la fonction if, il faut utiliser
*   la fonction switch.
* 
* 
*   Rappel: l'operateur permettant de connaitre le reste d'une division est %
*/
$num = $_GET['num'];
if(!isset($num)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/exercice5.php?num=4</strong>");
}
/*
* Completez le code ici
*/
$i=($num%2);
switch ($i) {
    case 0:
        echo "Le numéro est pair";
        break;
    case 1:
        echo "Le numéro est impair";
        break;
}
?>
