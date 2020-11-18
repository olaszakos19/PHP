<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	require_once("tablazat_oop.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
	$tomb = array(array(1,2,3,4),
								array(5,6,7,8),
								array(9,10,11,12)
							);
	$fej = array('a','b','c','d');

	$tablica = new tablazat(1,$tomb);
	$tablica->kirajzol();
	$tabli = new fejleces(1,$fej,$tomb);
	$tabli->kirajzol();

	call_user_func(array($tabli,'parent::kirajzol'));
	?>
</body>

</html>
