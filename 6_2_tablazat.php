<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
</head>
<body>
<table border = 1>
	<?php

		for ($i=1; $i <11; $i++) {
				echo "<tr>";
			for ($j=1; $j <11; $j++) {
				$n = $i *$j;
				echo"<td>($i*$j)=$n</td>";
			}
				echo"</tr>";
		}

	?>
</table>

</body>

</html>
