<?php

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden fahrenheit = {$celsius} graden celsius. <br/>";

$celsius = 30;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden celsius = {$fahrenheit} graden harenheit. <br/>";

$celsius = 30;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden celsius = {$kelvin} graden kelvin. <br/>"; 

$kelvin = 303.15;
$celsius = ($kelvin - 273.15);
echo "{$kelvin} graden kelvin = {$celsius} graden celsius. <br/>";

?>