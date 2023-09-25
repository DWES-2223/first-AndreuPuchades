<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>

<head>
    <title>Exercisi 223</title>
</head>

<body>
<?php
$numero = 1;
echo '<tr> <td>a</td><td>*<td><td>b<td>=</td><td>a*b</td> <tr/><br>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr> <td>'. $numero. '</td><td>*<td>'. $i. '</td><td>=</td><td>'. $i * $numero. '</td> <tr/><br>';
}
?>
</body>
</html>