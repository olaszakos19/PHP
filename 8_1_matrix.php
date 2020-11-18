<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<table border = 1>
	<?php
			echo "numerikus indexelés <br />";
			$osztalyzat = array( array("Nev","Matek","Tesi","Info"),
													 array("Nagy",4,2,4),
													 array("Kovács",4,5,2),
													 array("Kiss",5,4,3)
												  );
					for ($i=0; $i <4 ; $i++) {
						// code...
							for ($j=0; $j <4 ; $j++) {
								// code...
									echo $osztalyzat[$i][$j]," ";

							}
							echo "<br />";
					}
			unset($osztalyzat);
			echo "részben asszociatív <br />" ;
			$osztalyzat = array(array("Nev" => "Kovács","Matek" => 4,"Tesi" => 5, "Info" => 2 ),
													array("Nev" => "Kiss","Matek" => 5,"Tesi" => 4, "Info" => 3 ),
													array("Nev" => "Kovács","Matek" => 4,"Tesi" => 2, "Info" => 4 )
		);

				for ($i=0; $i < 3 ; $i++) {

						foreach ($osztalyzat[$i] as $jegy) {
									echo $jegy," ";

						}
					echo "<br />";
				}

					echo "<br />";
					foreach ($osztalyzat[0] as $fejlec => $ertek) {
						// code...
						echo $fejlec," ";
					}
						echo "<br />";
					for ($i=0; $i < 3 ; $i++) {

							foreach ($osztalyzat[$i] as $jegy) {
										echo $jegy," ";
							}
						echo "<br />";
					}

					


	?>
</body>

</html>
