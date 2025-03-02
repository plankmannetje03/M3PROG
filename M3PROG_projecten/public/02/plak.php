<?php
$standaardString = "hello world<br>";
$extraString = "extra world<br>";
$luigiString = "Luigi<br>";
$marioString = "Mario<br>";

$tekst1 = "naam $luigiString zegt $standaardString";
$tekst2 = "naam $marioString zegt $extraString";

$naam = "Yoshi<br>";
$ondertekentDoor = "bowser";
$enemy = "koopa troopa's";

$emailtekst = "Beste {$naam}<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze {$enemy} vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
{$ondertekentDoor}<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";


echo $tekst1;
echo $tekst2;
echo $emailtekst;


?>