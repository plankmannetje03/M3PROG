<?php
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = "Super metroid";
$mooisteGetal = 42;



?>


<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $mooisteGetal ;echo $favorieteGame;?></p>
    </body>
</html>