<?php

protected $mezok = array();
protected $feldolgozoProgram;
protected $elkuld;


class Urlap()
{

  function __construct($program, $kuldGomb)
  {
  $this->$feldolgozoProgram = $program;
  $this->elkuld = $kuld;
  }

function mezotFelvesz($nev,$cimke)
  {
$ujmezo = array("nev" => $nev, "cimke=",$cimke);
array_push($this->mezok,$ujmezo);
  }

function megjelenit()
{
 echo "\n<form action='{$this->$feldolgozoProgram}' method='POST'\n>";
 for($i=0;$i<count($this->mezok);$i++)
 {
   echo "<p><label> {$this->mezok[$i]['cimke']}:</label>\n";
   echo "<input type='text' name='{$this->mezok[i]['nev']}'></p>\n";

 }
}


 ?>
