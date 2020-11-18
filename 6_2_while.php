<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
<?php
			echo "Kocka dobás <br />";
			$dobas = 0;
			$db = 0;
			while ($dobas != 6)
			{
				$dobas = rand(1,6);
				$db++;
				echo $dobas,"<br />";
			}
			echo "Siker ".$db." dobásból";
?>
</body>

</html>
