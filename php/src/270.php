<!DOCTYPE html>
<html lang="es">
<head>
    <title>Exercisi 270</title>
</head>
<body>
<?php
if(!isset($records)){
    $records = require_once 'atletes.php';
}
?>
<table>
    <tr>
        <th>Prueba</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Nacimiento</th>
        <th>Club</th>
        <th>Fecha</th>
        <th>Lugar</th>
    </tr>
    <?php
    foreach ($records as $prueba => $record){
        ?>
        <tr>
            <td><?= $prueba ?></td>
            <td><?= $record["marca"] ?></td>
            <td><?= $record["atleta"] ?></td>
            <td><?= $record["natalici"] ?></td>
            <td><?= $record["club"] ?></td>
            <td><?= $record["data"] ?></td>
            <td><?= $record["lloc"] ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
