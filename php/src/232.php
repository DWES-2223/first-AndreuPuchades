<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 232</title>
</head>

<body>
<?php
echo '<ul>';
$letrasCadena = ['M', 'F'];
$contador = [0, 0];
$cadenaLetras = [];
for ($i = 0; $i < 100; $i++) {
    $cadenaLetras[$i] = $letrasCadena[rand(0, 1)];
}

//Contador Letras:
for ($i = 0; $i < count($cadenaLetras); $i++) {
    if($cadenaLetras[$i] === 'M'){
        $contador[0]++;
    } else {
        $contador[1]++;
    }
}
echo '<p>Numero de M: '. $contador[0]. '<p/><p>Numero de F: '. $contador[1]. '</p>';
?>
</body>
</html>