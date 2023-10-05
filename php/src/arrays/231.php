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
//Calcular Array:
$array = [];
for ($i = 0; $i < 33; $i++) {
    $array[$i] = rand(0, 100);
}

//Calcular Mitjana:
$num = 0;
for ($i = 0; $i < count($array); $i++) {
    $num += $array[$i];
}
echo '<p>Mitjana: '. ($num / count($array)). '<p/><br>';

//Calcular Numero Major:
$num = 0;
for ($i = 0; $i < count($array); $i++) {
    if($num < $array[$i]){
        $num = $array[$i];
    }
}
echo '<p>Major: '. $num. '<p/><br>';

//Calcular Numero Menor:
$num = 0;
for ($i = 0; $i < count($array); $i++) {
    if($num > $array[$i]){
        $num = $array[$i];
    }
}
echo '<p>Menor: '. ($num / count($array)). '<p/><br>';
?>
</body>
</html>