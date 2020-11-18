<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
<?php
			echo $_SERVER['SERVER_ADDR'],'<br />';

			$a =10;
			echo $a,"<br />";
			$a +=5;
			echo $a,"<br />";

			echo ++$a,"<br />";
		  echo $a,"<br />";

			echo $a++,"<br />";
			echo $a,"<br />";

			$c = 5;
			$d = $c;
			echo $c,' ',$d,"<br />" ;
			$c = 10;
			echo $c,' ',$d,"<br />" ;

			$e = 5;
			$f = &$e;
			echo $e,' ',$f,"<br />" ;
			$e = 10;
			echo $e,' ',$f,"<br />" ;


			$vezeteknev = "Kovács";
			$keresztnev = "Attila";
			$nev = $vezeteknev . " " . $keresztnev;
			echo $nev,"<br />";





?>
</body>

</html>
