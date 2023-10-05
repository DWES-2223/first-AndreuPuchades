<?php
function digits(int $num): int
{
    return strlen((string)$num);
}

function digitsN(int $num, int $post): int
{
    $numString = (string)$num;
    if ($post >= 1 && $post <= strlen($numString)) {
        return (int)$numString[$post - 1];
    }
    return 0;
}

function llevaDarrere(int $num, int $cant): int
{
    $numString = (string)$num;
    if ($cant >= 0 && $cant <= strlen($numString)) {
        return (int)substr($numString, 0, strlen($numString) - $cant);
    }
    return $num;
}

function llevaDavant(int $num, int $cant): int
{
    $numString = (string)$num;
    if ($cant >= 0 && $cant <= strlen($numString)) {
        return (int)substr($numString, $cant);
    }
    return $num;
}
?>