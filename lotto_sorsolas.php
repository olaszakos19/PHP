<!DOCTYPE html>
<html lang="hu" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		if(!isset($_POST["elkuld"])){
			$t =array();

		 $szamok = $_POST["adat"];
		 $talalat = 0;
		 $szamok = $szamok.split(" ");


		while(count($t)<6){
			$r = rand(1,90);
			for ($i=0; $i < count($t); $i++) {
					if($t[i]==$r)
					{
						break;
					}
			}
				array_push($t,$r);


}
for ($i=0; $i < count($t); $i++) {
	for ($j=0; $j < count($szamok); $j++) {
		if($t[i] == $szamok[$j])
		{
			$talalat++;
		}
	}
}

echo "Találatok száma: ".$talalat;
}
		?>
	</body>
</html>
