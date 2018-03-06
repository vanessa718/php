<?php
$data = [4,3.2,'thomas','formation',5,3.14,8];
$array = array(4,3.2,'thomas','formation',5,3.14,8);	
	
for($i = 0; $i < count($array);$i++){// Tant que l'on peut parcourir le premier tableau            
	if (is_int($array[$i])) {
      echo $array[$i]; // Renvoie TRUE
	}                        
}

/**
* Afficher les entiers du tableau $data
*/

?>

