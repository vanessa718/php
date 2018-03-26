<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_POST['button'])){
		echo htmlspecialchars('Le nouveau produit est :'.$_POST['nom']);
	}else{
	echo '<p> Veuillez corriger les erreurs </p>';
	}
	?>	

</body>
</html>