<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);

function pesetaEuros(float $quantitat, float $cotitzacio = 0.006): float{
    return $quantitat * $cotitzacio;
}

function euroPesetes(float $quantitat, float $cotitzacio = 166): float{
    return $quantitat * $cotitzacio;
}
?>

<head>
    <title>Exercisi 243</title>
</head>

<body>
<?php
if(isset($quantitatPesetes)){
    ?>
    <label for="quantitatPesetes">Pesetes: </label><input type="number" value="<?= $quantitatPesetes?>" readonly>
    <label for="quantitatEuros">Euros: </label><input type="number" value="<?= pesetaEuros($quantitatPesetes)?>" readonly>
    <input type="submit">
    <?php
} else if (isset($quantitatEuros)){
    ?>
    <label for="quantitatPesetes">Pesetes: </label><input type="number" value="<?= euroPesetes($quantitatEuros)?>" readonly>
    <label for="quantitatEuros">Euros: </label><input type="number" value="<?= $quantitatEuros?>" readonly>
    <input type="submit">
    <?php
} else {
    ?>
<form method="post">
<label for="quantitatPesetes">Pesetes: </label><input type="number" name="quantitatPesetes" id="quantitatPesetes">
<label for="quantitatEuros">Euros: </label><input type="number" name="quantitatEuros" id="quantitatEuros">
<input type="submit">
</form>
<?php
}
?>
</body>
</html>