<!DOCTYPE html>
<html lang="es">
<?php
$nom = "Andreu";
$primerCognom = "Puchades";
$segonCognom = "Pascual";
$email = "andreu@gmail.com";
$anyoDeNacimiento = 2003;
$telefono = 645698524;
?>

<head>
    <title>EXERCISI 202</title>
</head>

<body>
<table>
    <tr>
        <td>Nom</td>
        <td>Cognoms</td>
        <td>Email</td>
        <td>Natalici</td>
        <td>Telèfono</td>
    </tr>
    <tr>
        <td><?= $nom?></td>
        <td><?= $primerCognom. ' '. $segonCognom?></td>
        <td><?= $email?></td>
        <td><?= $anyoDeNacimiento?></td>
        <td><?= $telefono?></td>
    </tr>
</table>
</body>
</html>