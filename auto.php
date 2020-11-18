<?php
   error_reporting(E_ALL);
   ini_set('display errors', '1');
   require_once("oop.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Auto</title>
    <meta charset="UTF-8"/>
</head>
<body>
    <?php
       $trabant = new automobil("benzin",8,40);
       echo "<pre>";
       var_dump($trabant);
       echo "</pre>";

       $trabant->tankol(40);
       echo"<pre>";
       var_dump($trabant);
       echo "</pre>";

       $trabant->tankol(40);
       echo"<pre>";
       var_dump($trabant);
       echo "</pre>";

       $trabant->megy(300);
       echo"<pre>";
       var_dump($trabant);
       echo "</pre>";

       unset($trabant);


    ?>
</body>
</html>
