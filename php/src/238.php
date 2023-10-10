<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 238</title>
</head>

<body>
<?php
    $cadenaNumeros = [[]];
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        $cadenaNumeros[$i][$j] = numAleatorio($cadenaNumeros);
    }
}

$cadenaSumaFilas = sumaFilas($cadenaNumeros);
$cadenaSumaColumnas = sumaColumnas($cadenaNumeros);

echo '<table>';
for ($i = 0; $i < count($cadenaNumeros); $i++) {
    echo '<tr>';
    for ($j = 0; $j < count($cadenaNumeros[$i]); $j++) {
        echo '<td>'. $cadenaNumeros[$i][$j]. '<td/>';
    }
    echo '<td>'. $cadenaSumaFilas[$i]. '<td/></tr>';
}

echo '<tr>';

for ($i = 0; $i < count($cadenaSumaColumnas); $i++) {
    echo '<td>'. $cadenaSumaFilas[$i]. '<td/>';
}

echo '</tr><table/>'
?>

</body>
<?php
function numAleatorio($cadena){
   do{
       $comprovador = false;
        $numAleatorio = rand(100, 999);
        for ($i = 0; $i < count($cadena); $i++) {
            for ($j = 0; $j < count($cadena[$i]); $j++) {
                if($cadena[$i][$j] === $numAleatorio){
                   $comprovador = true;
                }
            }
        }
   } while($comprovador);

   return $numAleatorio;
}

function sumaColumnas($cadena){
    $num = 0;
    $contadorColumnas = [];

    for ($i = 0; $i < count($cadena); $i++) {
        for ($j = 0; $j < count($cadena[$i]); $j++) {
            $num +=  (int) $cadena[$i][$j];
        }
        $contadorColumnas[$i] = $num;
        $num = 0;
    }

    return $contadorColumnas;
}

function sumaFilas($cadena){
    $num = 0;
    $contadorFilas = [];

    for ($i = 0; $i < count($cadena); $i++) {
        for ($j = 0; $j < count($cadena[$i]); $j++) {
            $num += (int) $cadena[$j][$i];
        }
        $contadorFilas[$i] = $num;
        $num = 0;
    }

    return $contadorFilas;
}
?>
</html>