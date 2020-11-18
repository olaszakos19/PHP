<?php
   error_reporting(E_ALL);
   ini_set('display errors', '1');
   require_once("19_1_autoclass.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>valami</title>
    <meta charset="UTF-8"/>
</head>
<body>
    <?php
       $trabant = new automobil("benzin");
       echo "<pre>";
       var_dump($trabant);
       echo "</pre>";
       
       $trabant->tankol(25);
       echo"<pre>";
       var_dump($trabant);
       echo "</pre>";
       
       unset($trabant);
       
       $opel = new automobil("dizel");
       echo"<pre>";
       var_dump($opel);
       echo "</pre>";
    ?>
</body>
</html>
