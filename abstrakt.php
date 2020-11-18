

<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	require_once("abstract.php");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
		$message = new Cim1Uzenet("Csány László szakgimnázium");
		$message->kiir("red");
		$message2= new DoltUzenet("programozás");
		$message2->kiir("blue");
	?>
</body>

</html>
