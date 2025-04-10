<?php
$trophiesPerGame = [
    "demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "tetris" => 10,
];

$trophiesforDS = $trophiesPerGame["demon's souls"];
$trophiesforSwitch = $trophiesPerGame["Mario wonder"];
$trophiesforWii = $trophiesPerGame["Rayman Origins"];

$tetris = $trophiesPerGame["tetris"];

echo $tetris ."<br>";

echo $trophiesforDS;
print("<br>");
echo $trophiesforSwitch;
print("<br>");
echo $trophiesforWii;
?>