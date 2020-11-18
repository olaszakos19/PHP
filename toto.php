<?php
  $tabla = array("1","2","x");
  echo "<table border=2>";
  for ($i=1; $i <= 13; $i++) {
    $rando = rand(0,2);
    echo '<tr><td>'.$i.'</td><td>'.$tabla[$rando].'</td></tr>';

  }
  echo "</table>";
 ?>
