<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
unset($_POST['submit']);
?>

<head>
    <title>Exercisi 244a</title>
</head>

<body>
<?php
if (!isset($_POST) && isset($_GET["quantitat"])) {
    $quantitat = json_decode($_GET["quantitat"], true);
?>
<form method="post">
    <?php
    for ($i = 1; $i <= $quantitat; $i++) {
        echo '<label id="nom">Nombre: </label><input type="text" id="nom[]" name="nom[]"> ';
        echo '<label id="altura">Altura (cm): </label><input type="number" id="preu[]" name="preu[]"> ';
    }
    ?>
    <input type="submit" name="submit">
</form>

<?php
} else if(isset($_POST)){
    $productes = [];
    for ($i = 0; $i < count($_POST) - 1; $i++) {
        $productes[$i]["nom"] = $_POST["nom"][$i];
        $productes[$i]["preu"] = $_POST["preu"][$i];
    }

    echo '<table><tr><td>Nom</td><td>Altura</td><tr/>';
    for ($i = 0; $i < count($productes); $i++) {
        echo '<tr><td>'. $productes[$i]["nom"] . '</td><td>'. $productes[$i]["preu"] . '</td><br><tr/>';
    }
    echo '<table/>';
}
?>
</body>
</html>