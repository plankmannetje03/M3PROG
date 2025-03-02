<?php
$getal = 59710.50000;  
$afgerond = ceil($getal);
$afgerond1 = floor($getal);
$getal2 = $getal;
$afgerond2 = round($getal2);

$random1 = rand(10,100);
$random2 = rand(10,100);
$random3 = rand(10,100);

$randomplus = $random1 + $random2;
$randomdelen = $randomplus/$random3;

echo "$afgerond1 <br/>"; 
echo "$afgerond2 <br/>";
echo "$randomplus <br/>";
echo "$randomdelen <br/>";
?>

