<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
	<form method="post" action="csapat.php">
	<?php
			$a = rand(1,10);
			$b = rand(1,10);
			if ($a>$b)
				{
					echo "$a nagyobb ,imt $b","<br />";

				}
			elseif ($a<$b)
				{
					echo "$a kisseb mint $b","<br />";
				}
			else
				{
					echo "$a egyenlo mint $b","<br />";
				}

			$erdmeny = "győzelem";
			switch (variable) {
				case 'győzelem':
						echo "3pontot szerzett a csapat"."<br />";
					break;
					case 'döntetlen':
						echo "1 pontot szerzett a csapat";
						break;
						echo "3pontot szerzett a csapat"."<br />";
				default:
						echo "0 pontot szerzett a csapat";
					break;
			}

	?>
	<input type="submit" value="küldés">;
</form>
</body>

</html>
