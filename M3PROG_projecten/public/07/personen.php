<?php
$persoon = ['voornaam' => 'Luigi', 'achternaam' => 'mario', 'leeftijd' => 19, 'favoriete eten' => 'pasta', 'minst favoriete eten' => 'paddenstoelen', 'woonplaats' => 'mushroom kingdom' ];


echo "<table border='3'>";
echo "<tr><th>Key</th><th>Value</th></tr>";


foreach ($persoon as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
