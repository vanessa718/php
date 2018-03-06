<?php
/**
* Completez ce code source pour que le script affiche
*
*   $chaine comporte plus de 10 caractères
*   OU
*   $chaine comporte moins de 10 caractères
*   OU
*   $chaine comporte exactement 10 caractères
*
*/
$chaine = $_GET['chaine'];
if(!isset($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/exercice2.php?chaine=ceci est un test</strong>");
}
$caracteres = strlen($chaine);
// echo strlen($chaine);
if ($caracteres > 10){
	echo 'La chaîne comporte plus de 10 caractères. ';
}else ($caracteres < 10){
	echo 'La chaîne comporte moins de 10 caractères.';
// }elseif($caracteres==10){
// 	echo 'La chaine comporte exactement 10 caractères.';	
}
/*
* Completez le code ici
*/
?>