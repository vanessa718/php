<!DOCTYPE html>
<html>
<head>
	<title>Echiquier</title>
</head>
<body>
<?PHP
echo "<table border='1' width='400' height='400' align='center'>";
for ($row = 1 ; $row < 9 ; $row ++){
	echo '<tr>';		
	for ($column=1; $column < 9; $column++) { 
		if ((($row+$column)%2)==0) {
		echo '<td bgcolor = black></td>';
		}else{
		echo '<td bgcolor = white></td>';	 	
		}
	}
	echo '</tr>';		
}
echo '</table>';

/**
* Créer un echiquier de 8 cases sur 8 avec une case sur deux colorés en noir
*/
?>
	<!-- </td></tr></table> -->
</body>
</html>

<!-- http://www.exemples-php.com/fonctions/is_float-is_int-is_integer/is_float-is_int-is_integer.php -->