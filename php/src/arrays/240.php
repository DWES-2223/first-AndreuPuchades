<?php
function esParell(int $a) : bool{
    return $a % 2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array{
    $cadena = [];
    for ($i = 0; $i < $tam; $i++) {
        $cadena[$i] = rand($min, $max);
    }

    return $cadena;
}

function countParells(array &$array): int
{
    $contador = 0;
    foreach ($array as $num) {
        if (esParell($num)) {
            $contador++;
        }
    }
    return $contador;
}
?>