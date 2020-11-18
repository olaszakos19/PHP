<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reguláris kifejezés</title>
  </head>
  <body>
    <?php
    /*
    $regkif="/.ap/";
    echo $regkif."<br />";
    $proba1 = "nap lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);


    echo "<br />----------------------------------------------------<br />";
    $regkif="/[a-z]ap/";
    echo $regkif."<br />";
    $proba1 = "nap lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/[mno5]ap/";
    echo $regkif."<br />";
    $proba1 = "nap lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/[a-zA-z]ap/";
    echo $regkif."<br />";
    $proba1 = "nap Lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/[^a-zA-Z]ap/";
    echo $regkif."<br />";
    $proba1 = "nap Lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/[a-z0-9]ap/";
    echo $regkif."<br />";
    $proba1 = "nap Lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);


    echo "<br />----------------------------------------------------<br />";
    $regkif="/[a-z0-9]+ap/";
    echo $regkif."<br />";
    $proba1 = "nap Lap 5ap #ap nnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/[a-z0-9]{1,3}ap/";
    echo $regkif."<br />";
    $proba1 = "nap Lap 5ap #ap nmnap xamp";
    echo $proba1."<br />";
    preg_match_all($regkif,$proba1,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/([a-zA-Z]+([ ][1-5])+;)/";
    echo $regkif."<br />";
    $proba = "Matek 5 4 3;Tesi 3 4 5; Prog; 4 3 4;Halozat 1 15";
    echo $proba."<br />";
    preg_match_all($regkif,$proba,$tomb);
    var_dump($tomb[0]);
    unset($tomb);

    echo "<br />----------------------------------------------------<br />";
    $regkif="/([a-zA-Z]+([ ][1-5])+;)+/";
    echo $regkif."<br />";
    $proba = "Matek 5 4 3;Tesi 3 4 5; Prog; 4 3 4;Halozat 1 15";
    echo $proba."<br />";
    preg_match_all($regkif,$proba,$tomb);
    var_dump($tomb[0]);
    unset($tomb);


    if($tomb[0][0]==$proba){ echo "<br /> a bemeneti string szabályos";}
    else {
       echo "<br /> a bemeneti string nem szabályos";
    }
    unset($tomb);
*/
    echo "<br />----------------------------------------------------<br />";
    $regkif="/([a-zA-Z]+([ ][1-5])+;)+/";
    echo $regkif."<br />";
    $proba = "Matek 5 4 3;Tesi 3 4 5;Prog 4 3 4;Halozat 1 1 5;";
    echo $proba."<br />";
    preg_match_all($regkif,$proba,$tomb);
    var_dump($tomb[0]);

    if($tomb[0][0]==$proba)
    {
      echo "<br /> a bemeneti string szabályos";
    }

    else
    {
       echo "<br /> a bemeneti string nem szabályos";
    }
    unset($tomb);
     ?>



  </body>
</html>
