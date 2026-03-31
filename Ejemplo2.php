<?php
// Array asociativo
$equipo = array(
    "portero" => "Cech",
    "defensa" => "Terry",
    "medio" => "Lampard",
    "delantero" => "Torres"
);

// Recorrer el array
foreach ($equipo as $posicion => $jugador)
{
    echo "El $posicion es $jugador <br>";
}
?>