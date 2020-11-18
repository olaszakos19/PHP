<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
		$nevek = array("Kovács","Szabó","Boncz");
		$nevek[3] = "Kiss";
		echo "tömb kezelése ciklussal <br />";
		for ($i=0; $i <4 ; $i++) {
			// code...
			echo "$nevek[$i] <br />";
		}

		$szamok = range(10,99,3);
		echo "tömb kezelése foreach ciklussal";
		foreach ($szamok as $x) {
			// code...
			echo $x." ";
		}
		echo "<br />";
		echo print_r($nevek);
		echo "<br />";
		echo var_dump($nevek);

		echo "<pre>";
		echo print_r($nevek);
		echo "</pre>";

		echo "törlés a tömbből";
		unset($nevek[2]);
		echo "<pre>";
	 	echo print_r($nevek);
	 	echo "</pre>";



	?>
</body>

</html>
