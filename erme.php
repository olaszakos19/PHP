<!DOCTYPE html>
<html lang="hu" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
			table
			{
			border-collapse: collapse;

			}
		</style>
	</head>
	<body>
		<?php

			$erme = rand(0,1);
			$n = rand(5,15	);
			$összFej;
			$lopottTomb = array(0,0,0,0,0);
			$lopottTomb2 = array(0,0,0,0,0);

			echo "<table border=2>";

			for($i = 0;$i<$n;$i++){
				echo "<tr><td>".($i+1).".dobás </td>";
				$fej = 0;
				$iras = 0;
				$count = 0;
				$count2 = 0;
				for($f= 0;$f<4;$f++){

					$erme = rand(0,1);
					$ertek = "";
					$szin = "#CA5454";
					if($erme == 0){
						$ertek = "Fej";
						$fej++;
						$szin ="#FF0000";
						$összFej++;
						$count = $count +1;

					}

					else{
					$ertek = "Írás";
					$iras++;
					$szin="#006400";
					$count2 = $count2 +1;
				}
					echo "<td style='background-color:".$szin."'>".$ertek."</td>";
					$lopottTomb[$count] = $lopottTomb[$count] +1;
					$lopottTomb2[$count2] = $lopottTomb2[$count2] +1;
				}
					echo "<td>fejek száma:".$fej."db "."írások száma:".$iras." db</td>";
				echo "</tr>";

			}
			$összes = $n*4;
			echo "<tr><td>összes fej: ".$összFej." összes írás: ".($összes-$összFej)."</td></tr>";
echo "</table>";


echo "<table border=2>";
echo "<tr><td>DB</td><td>Fej</td><td>Írás</td></tr>";
for($i = 0;$i<5;$i++)
		{
		echo "<tr><td>".$i."db </td><td>".$lopottTomb[$i]."</td><td>".$lopottTomb2[$i]."</td></tr>	";
		}






		?>
	</body>
</html>
