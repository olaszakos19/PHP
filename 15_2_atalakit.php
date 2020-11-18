<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<?php
			if (!isset($_POST["elkuld"]))
			{
				echo "nem küldte el az űrlapot";
			}
			else
			{
				$szoveg = $_POST["szöveg"];
				echo "eredeti szöveg: ".$szoveg."<br />";

				echo "A szöveg csupa nagybetűvel: ".strtoupper($szoveg)."<br />";
				echo "A szöveg csupa nagybetűvel V2: ".mb_strtoupper($szoveg)."<br />";
				echo "A szöveg kezdése nagybetűvel: ".ucwords($szoveg)."<br />";

				echo "Védőkarakter:";
				$szoveg2 = addslashes($szoveg);
				echo $szoveg2;

				echo "Védőkarakter eltávolítása:";
				$szöveg3 = stripslashes($szoveg2);
				echo $szöveg3."<br />";

				echo "Felosztás szavakra";
				$tomb = explode(" ",$szoveg);
				echo "<pre>";
				print_r($tomb);
				echo "</pre>";

				echo "Szöveg összeillesztése:";
				$mondat =  implode(" ",$tomb);
				echo $mondat."<br />";

				echo "szöveg részének kiiratása:";
				echo substr($szöveg3,5,10)."<br />";
				echo "szöveg részének mbr kiiratása:";
				echo mb_substr($szöveg3,5,10)."<br />";

				echo "szöveg hosszának megállapíttása az strlen()";
				echo "Geza kek az eg: ", strlen("Geza kek az eg"), "<br />";
				echo "Géza kék az ég: ", strlen("Géza kék az ég"), "<br />";
				echo "Ékezete szöveg hosszának megállapítása az mb_strlen()";
				echo "Géza kék az ég: ", mb_strlen("Géza kék az ég"), "<br />";

				echo "Karaktersorozat keresése stringben az strpos()"."<br />";
				echo strpos("Geza kek az eg","kek")."<br />";
				echo strpos("Geza kek az eg","Geza")."<br />";
				echo strpos("Geza kek az eg","piros")."<br />";
				echo gettype(strpos("Geza kek az eg","piros"))."<br />";

				echo "karakter sorozat csereéje"."<br />";
				$red = "Piros, piros, piros, háromszor is piros";
				echo $red."<br />";
				$blue =  str_replace("piros","kek",$red);
				echo $blue."<br />";
				$pirosak = array("piros","Piros");
				$blues = str_replace($pirosak,"kek",$red);
				echo $blue."<br />";



			}
	?>
</body>

</html>
