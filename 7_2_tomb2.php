<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
			echo "asszociatív tömbök";
		 	$jegyek = array("matek" => 5,"tesi" => 4,"programozás" => 5  );
			$jegyek["webprogramozás"] = 5;

			echo "értékek kiírása";
			foreach ($jegyek as $ertek) {
				// code...
				echo $ertek,"<br />";
			}

			echo "értékek és kulcsok kiírása <br />";
			foreach ($jegyek as  $kulcs => $ertek) {
				// code...
				echo $kulcs,"=>",$ertek," <br />";
			}

			echo "kiírás print_r-el <br />";
			print_r($jegyek);

			echo "<br /> kiírás var_dump-al <br />";
			var_dump($jegyek);

			echo "kiírás pre-vel";
			echo "<pre>";
				print_r($jegyek);
			echo "</pre>";

	?>
</body>

</html>
