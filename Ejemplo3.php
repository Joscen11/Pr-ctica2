<?php
$xml = simplexml_load_file("Colores.xml");
    foreach ($xml->color as $color) {
        echo "El color es: " . $color->nombre . " y su código hexadecimal es: " . $color->codigo_hexadecimal . "<br>";
    }
?>