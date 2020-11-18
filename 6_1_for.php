<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
		define("DARAB",10);
		echo "Első",DARAB,"páros szám kiírása<br />";
		for ($i=0; $i <= DARAB ; $i++) {
			echo $i*2,"<br />";
		}
	?>
</body>

</html>
