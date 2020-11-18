<?php

require_once("fugvenyek.php");


$szoveg = $_POST["tartalom"];
if(validal($szoveg)==false)
{
  echo "<script type='text/javascript'>alert('hibás értéket adtál meg');</script>";
  header("Refresh:3; url=doli1.html");

}
else {


$sorok = explode(";",$szoveg);

echo "<table border = 1>";
echo "<tr><td>Tantárgy</td><td>Jegyek</td><td>Átlag</td></tr>";
for ($i=0; $i < count($sorok); $i++) {

  $szavak = explode(" ",$sorok[$i]);
  echo  "<tr>";
  echo "<td>".$szavak[0]."</td>";
  echo "<td>";
   for($j = 1;$j<count($szavak);$j++)
   {

     echo $szavak[$j]."   ";

   }
   echo "</td>";

   echo "<td>".atlag($szavak)."</td>";
}
echo "</tr>";
echo "</table>";
}

?>
