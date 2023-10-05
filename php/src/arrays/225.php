<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 225</title>
</head>

<body>
<?php
$abecedario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
for ($i = 1; $i <= $filas; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $columnas; $j++) {
        echo '<td>'. $abecedario[$i - 1]. $j. '</td>';
    }
    echo '<tr/><br>';
}
?>
</body>
</html>