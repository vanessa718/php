<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num1 est inferieur|superieur|egal a $num2
*
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
if(!isset($num1) || !isset($num2)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8888/exercice1.php?num1=4&num2=3</strong>");
}
	echo $num1;
	echo $num2;
if($num1 < $num2){
	echo '$num1<$num2';	//pas de réaction, saute la condition car non remplie 
}
if($num1 > $num2){
	echo '$num1>$num2';	
}
if($num1 == $num2){
	echo '=';	// saute la condition car non remplie donc rien ne s'affiche
}

/*
* Completez le code ici
*/
?>