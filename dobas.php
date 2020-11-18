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
      $osszes = 0;
			while ($dobas != 6)
			{
				$dobas = rand(1,6);
				$db++;
        $osszes += $dobas;
				echo $dobas,"<br />";

			}
      echo "átlag: ".$osszes/$db;
?>
</body>

</html>
