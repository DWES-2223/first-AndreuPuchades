<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 235</title>
</head>

<body>
<?php
$datos = [['nom'=>'Aitor', 'altura'=>189, 'email'=>'aitor@correo.com'],
    ['nom'=>'Paco', 'altura'=>181, 'email'=>'paco@correo.com'],
    ['nom'=>'Arnau', 'altura'=>196, 'email'=>'arnau@correo.com'],
    ['nom'=>'Carlos', 'altura'=>175, 'email'=>'carlos@correo.com'],
    ['nom'=>'Pedro', 'altura'=>160, 'email'=>'pedro@correo.com']];

//Mostrar Tabla:
echo '<table><tr><td>Nom</td><td>Altura</td><td>Email</td><tr/>';
for ($i = 0; $i < count($datos); $i++) {
    echo '<tr><td>'. $datos[$i]["nom"] . '</td><td>'. $datos[$i]["altura"] . '</td><td>'. $datos[$i]["email"] . '</td><br><tr/>';
}
echo '<table/>';
?>
</body>
</html>