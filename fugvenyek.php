<?php

function atlag($t)
{

  for ($i=1; $i < count($t); $i++)
  {
      $ossz += $t[$i];

  }
  $atlag =$ossz/(count($t)-1);
  return round($atlag,2);

}

function validal($szoveg)
{
  $regkif="/([a-zA-Z]+([ ][1-5])+;)+/";


  preg_match_all($regkif,$szoveg,$tomb);


  if($tomb[0][0]==$szoveg)
  {
    return true;
  }

  else
  {
     return false;
  }


}


 ?>
