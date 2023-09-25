<!DOCTYPE html>
<html lang="es">
<?php
$nom = $_GET["nom"];
$cognom1 = $_GET["cognom1"];
$cognom2 = $_GET["cognom2"];
$email = $_GET["email"];
$any = $_GET["any"];
$telefon = $_GET["telefon"];
?>

<head>
    <title>Exercisi 203</title>
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
        <td><?= $cognom1. ' '. $cognom2?></td>
        <td><?= $email?></td>
        <td><?= $any?></td>
        <td><?= $telefon?></td>
    </tr>
</table>
</body>
</html>