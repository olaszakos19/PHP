<?php
function afa($netto,$tipus)
{
switch ($tipus) {
case "könyv":
  $afa = $netto *0.05;
  break;

  case "tej":
    $afa = $netto *0.18;
    break;

default:
  $afa = $netto *0.27;
  break;
}
return $afa;
}
?>
