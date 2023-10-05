<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>

<head>
    <title>Exercisi 221</title>
</head>

<body>
<?php
$cadena = '';
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $cadena .= $i. '+';
    $suma += $i;
}
$cadena = substr($cadena, 0, strlen($cadena) - 1);
echo '<ul><li>'. $cadena. '='. $suma. ' <li/><ul/>';
?>
</body>
</html>