<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
	$eletkor = $_POST["eletkor"];
	$email = $_POST["email"];


			if (!isset($_POST["elkuld"]))
			{
				echo "nem küldte el az űrlapot";
			}
			if($eletkor > 18 & $eletkor < 120)
			{
				if(strpos($email,"@"))
				{
				$nev = $_POST["neve"];

				$velemeny = $_POST["uzenet"];
				$t = explode(",",$velemeny);
				echo "Az ön neve:".$nev."<br />";
				echo "Az ön életkora:".$eletkor."<br />";
				echo "Email címe:".$email."<br />";
				echo "<p> az ön véleménye:";
				echo "<pre>$velemeny</pre>";

				echo "<table border=2>";
				for($i = 0;$i<count($t);$i++)
				{
					$nev = explode(" ",$t[$i]);
					echo "<tr><td>".$nev[0]."</td><td>".$nev[1]."</td></tr>";

				}
				echo "</table>";




				}
				else {
					echo "<script type='text/javascript'>alert('nincs @ az emailben');</script>";
					header("Refresh:3; url=9_1_urlap.html");
				}
			}

			else
			{
					echo "<script type='text/javascript'>alert('nem jó az életkor');</script>";
					header("Refresh:3; url=9_1_urlap.html");
			}
	?>
</body>

</html>
