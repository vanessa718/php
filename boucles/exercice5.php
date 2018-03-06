<?php
 
function table($nbr, $nbr2)
{
    $table = '<table border="1">';
    for ($a=1; $a <= $nbr; $a++) {
        $table .= '<tr>';
        for ($b=1; $b <= $nbr2 ; $b++) {
            $table .= '<td>'.$a*$b.'</td>';
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    return $table;
}
 
echo table(10,5);
/**
* Creer un script qui affiche les tables de multiplications des nombres de 1 a 5
*/
// for($i = 1; $i<=5;$i++){
// 	printf('<br> Table de multiplication n°'.$i.' : <br>');
// 	for($u = 0; $u <=10;$u++){
// 		printf($i.'x'.$u.'='.$i*$u.'<br>');
// 	}
// }
?>

