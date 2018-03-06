<?php
/**
* Completez ce code source pour que le script affiche
*
*   $numX est le plus grand des trois nombres
*
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
if(!isset($num1) || !isset($num2) || !isset($num3)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/exercice4.php?num1=4&num2=3&num3=12</strong>");
}

if ($num1>$num2 && $num1>$num3){
	echo 'Le plus grand est : num1';
}
if($num2>$num1 && $num2>$num3){
	echo 'Le plus grand est : num2';
}
if($num3>$num1 && $num3>$num2){
	echo 'Le plus grand est : num3';
}
/*
* Completez le code ici
*/