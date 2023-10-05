<!DOCTYPE html>
<html lang="es">
<?php
$quantitat = $_GET["quantitat"];
?>

<head>
    <title>Exercisi 205</title>
</head>

<body>
<?php
$billetes = array(500, 200, 100, 50, 20, 10, 5);
$monedas = array(2, 1);

foreach ($billetes as $billete) {
    $cantidadBilletes = $quantitat / $billete;
    if ($cantidadBilletes >= 1) {
        echo floor($cantidadBilletes) . " bitllet de $billete\n";
        $quantitat %= $billete;
    }
}

foreach ($monedas as $moneda) {
    $cantidadMonedas = $quantitat / $moneda;
    if ($cantidadMonedas >= 1) {
        echo floor($cantidadMonedas) . " moneda de $moneda\n";
        $quantitat %= $moneda;
    }
}
?>
</body>
</html>