<?php

$i=0;
	echo"Les chiffres pairs compris entre 1 et 10 sont:" ;
for($i=1; $i<=10; $i++){
	if (($i % 2) == 0){
		echo $i; 
	}	
}

echo '</br>';

$i=2;
do{
	echo $i;
	$i +=2;
}while ($i<=10);

echo '</br>';

$i=2;
while($i<=10){
	echo $i;
	$i +=2 ;
}




 /**
* Afficher le nombre pair de 1 à 20 avec :
* for
* do
* while
*/ 
?>