<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="array_assoc.css">
    
</head>
<body>
<?php
$persoon = ['maandag' => 15, 'dinsdag' => 14, 'woensdag' => 34, 'donderdag' => 4, 'vrijdag' => 24, 'zaterdag' => 41, 'Zondag' => 1,];


echo "<table border='3'>";
echo "<tr><th>Dag</th><th>Graden</th></tr>";


foreach ($persoon as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
</body>
</html>


