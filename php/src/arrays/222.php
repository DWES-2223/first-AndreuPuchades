<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>

<head>
    <title>Exercisi 222</title>
</head>

<body>
<?php
$numero = 1;
for ($i = 1; $i <= $exponent; $i++) {
    $numero *= $base;
}
echo '<ul><li>'. $base. '^'. $exponent. ' = '. $numero. '<li/><ul/>';
?>
</body>
</html>