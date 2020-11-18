<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
<?php
		$ar = 1500;
		echo $ar,"<br />";
		$nev = "Géza";
		echo $nev,"<br />";

		$ar = 1000000;
		echo $ar,"<br />";

		unset($ar);
		echo $ar,"<br />";

		echo  isset($ar)."<br />";
		echo 	isset($nev)."<br />";

		$atlag = 4.5;
		echo  $atlag."<br />";
		$logikai = true;
		echo $logikai."<br />";
		$logikai = false;
		echo $logikai."<br />";

		$hanyados = 2;
		echo  $hanyados."<br />";
		echo  gettype($hanyados),"<br />";

		$hanyados = 10/4;
		echo  $hanyados."<br />";
		echo  gettype($hanyados),"<br />";

		settype($hanyados, "int");
		echo  $hanyados."<br />";
		echo  gettype($hanyados),"<br />";

		//változó változó
		$Zalaegerszeg = 600000;
		$Keszthely = 100000;
		$varosnev = "Zalaegerszeg";
		echo $$varosnev,"<br />";
		echo "$varosnev lakossága ${$varosnev}","<br />";
		$varosnev = "Keszthely";
		echo $$varosnev,"<br />";
		echo "$varosnev lakossága ${$varosnev}","<br />";

		//'' nem ugyan az mint ""
		echo '$varosnev lakossága ${$varosnev}',"<br />";

		//konstans deklarálás
		define("NEV","Gotomer Oszkár");
		echo NEV,"<br />";



?>
</body>

</html>
