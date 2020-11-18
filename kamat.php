<?php

function kamat($toke,$kamat,$ev)
  {
    $osszeg = $toke*pow((1+$kamat/100),$ev);
    return round($osszeg);
  }
?>
