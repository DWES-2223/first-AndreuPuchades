<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 226</title>
</head>

<body>
<?php
$abecedario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    echo '<table>';
for ($i = 1; $i <= $filas; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $columnas; $j++) {
        if($i == 1 || $j == 1){
            echo '<td>'. $abecedario[$i - 1]. $j. '</td>';
        } else {
            echo '<td> </td>';
        }
    }
    echo '<tr/>';
}
echo '</table>';
?>
</body>
</html>