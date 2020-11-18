<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	$nev = " ";
	function atlag($t)
	{
		$ossz = 0;
		for ($i=0; $i < count($t); $i++)
		{
				$ossz += $t[$i];
				$atlag =$ossz/count($t);
		}
		return $atlag;

	}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8" />
</head>
<body>

	<?php
			if(isset($_POST['elkuld']))
			{
				$nev = $_POST['nev'];
				$szoveg = $_POST['szöveg'];
				$t = explode(" ",$szoveg);

					echo $nev."  jegyeinek átlaga:  ".atlag($t);



			}
	?>

	<p>Szövegműveletek </p>
	<br />
	<form method="post" action="#">
	<p>kérem a nevét:</p>
	  <input type="text" name="nev">
		<p>kérem a jegyeit:</p>
		<textarea name="szöveg" rows="10" cols="40"></textarea><br />
		<p><input type="submit" name="elkuld" value="küldés"></p>

</form>
</body>

</html>
