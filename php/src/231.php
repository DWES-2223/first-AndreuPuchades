<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 231</title>
</head>

<body>
<?php
echo '<ul>';
$array = [];
for ($i = 0; $i < 33; $i++) {
    $array[$i] = rand(0, 100);
}
for ($i = 0; $i < count($array); $i++) {
    echo '<li>'. $array[$i]. '<li/>';
}
echo '<ul>';
?>
</body>
</html>