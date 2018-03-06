<?PHP
$min=1;
$max=100;

echo "les multiples de 5 sont: ";
for ($min=1; $min <= $max ; $min++) { 
	if ($min != 0 && ($min%5 === 0 )) {
		echo $min." ";
	}
}


/**
* Afficher les multiples de 5 de 0 a 100 sans faire de multiplication
* Le faire avec for
* Le faire avec while
*
*
*/
?>