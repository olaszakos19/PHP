<?php


require_once("kamat.php");

$TOKE = $_POST["toke"];
$KAMAT = $_POST["kamat"];
$EV = $_POST["periodus"];

if($TOKE != "" && $KAMAT != "" && $EV != "")
{
  if(is_numeric($TOKE) && is_numeric($KAMAT) && is_numeric($EV))
  {
    echo "Felvehető összeg: ".kamat($TOKE,$KAMAT,$EV);
    }
    else{
      echo "<script type='text/javascript'>alert('nem számot adtál meg');</script>";
      header("Refresh:3; url=kamatos_urlap.html");
  }
}
else
{
  echo "<script type='text/javascript'>alert('üres értéket adtál meg');</script>";
  header("Refresh:3; url=kamatos_urlap.html");
}
?>
