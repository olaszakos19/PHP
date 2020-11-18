<!DOCTYPE html>
<html lang="hu" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			$dobasok=array(0,0,0,0,0,0);
			$db = 0;
			for ($i=0; $i < rand(1,1000); $i++) {
				$szam = rand(0,5);
				$dobasok[$szam] = $dobasok[$szam] + 1;
				$db++;
			}



			echo '<table border=1>';
			echo "<tr><td>Szám</td><td>Gyakoriság</td></tr>";
			for ($i=0; $i < count($dobasok); $i++) {
				echo "<tr>";
				echo "<td>".($i +1)."</td><td>".$dobasok[$i]."</td>";
				echo "</tr>";
			}
			echo '</table>';
		echo "Dobások száma".$db;
		?>
	</body>
</html>
