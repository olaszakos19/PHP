<!DOCTYPE html>
<html lang="hu" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>TippMix</title>
		<style media="screen">
			table
			{
			border-collapse: collapse;

			}
		</style>
	</head>
	<body>
		<?php


			$n = rand(5,15	);
      $gol = rand(0,6);
      $gol2 = rand(0,6);
      $hazai =0;
      $vendeg = 0;
      $x = 0;

			echo "<table border=2>";
      echo "<tr><td>Hazai</td><td>Vendég</td></tr>";
      for($i=0;$i<$n;$i++)
      {
        $szin = "#cc4949";
        $szin2 = "#cc4949";
        $gol = rand(0,6);
        $gol2 = rand(0,6);
        if($gol > $gol2){ $hazai++;$szin = "#566ce8";$szin2 = "#60d658";}
        if($gol < $gol2){ $vendeg++; $szin = "#60d658";$szin2 = "#566ce8";}
        if($gol == $gol2){ $x++;}
        echo "<tr><td style='background-color:".$szin." '>".$gol."</td><td style='background-color:".$szin2." '>".$gol2."</td></tr>";

      }
      echo "</table>";

      echo "<table border=2>";
      echo "<tr><td>Eredmények</td></tr>";


        echo "<tr><td style='background-color:#566ce8'>Hazai: ".$hazai."</td></tr>";
        echo "<tr><td style='background-color:#60d658'>Vendég: ".$vendeg."</td></tr>";
        echo "<tr><td style='background-color:#cc4949'>X: ".$x."</td></tr>";


      echo "</table>";



		?>
	</body>
</html>
