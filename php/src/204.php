<!DOCTYPE html>
<html lang="es">
<?php
$edat = $_GET('edat')??50;
$any_actual = date("Y");
?>
<head>
    <title>Execisi 204</title>
</head>

<body>
<?php
if (isset($edat)){
    ?>
La teua edat a l'any <?= $any_actual - 10?> era de <?= $edat - 10?><br/>
La teua edat a l'any <?= $any_actual - 10?> era de <?= $edat - 10?><br/>
La teua jubilacio sera l'any <?= $any_actual + 67 - $edat?><br>
<?php
} else{
?>
    Posa la teua edat actual ala variable de edat en Queri.
}
</body>
</html>