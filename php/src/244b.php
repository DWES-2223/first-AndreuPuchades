<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
unset($_POST['submit']);
?>

<head>
    <title>Exercisi 244b</title>
</head>

<body>
<?php
if (isset($_GET["quantitat"])) {
    $quantitat = json_decode($_GET["quantitat"], true);
    ?>
    <form method="post" action="244b.php">
        <?php
        for ($i = 1; $i <= $quantitat; $i++) {
            echo '<label id="nom">Nombre: </label><input type="text" id="nom[]" name="nom[]"> ';
            echo '<label id="altura">Preu (€): </label><input type="number" id="preu[]" name="preu[]"> ';
        }
        ?>
        <input type="submit" name="submit">
    </form>
    <?php
} else if(isset($_POST["nom"])){
    $productes = [];
    $preusProductes = ["preuEuros" => 0, "preuPesetes" => 0];
    for ($i = 0; $i < count($_POST); $i++) {
        $productes[$i]["nom"] = $_POST["nom"][$i];
        $productes[$i]["preuEuros"] = $_POST["preu"][$i];
        $productes[$i]["preuPesetes"] = $_POST["preu"][$i] * 166;
        $preusProductes["preuEuros"] += $_POST["preu"][$i];
        $preusProductes["preuPesetes"] += $_POST["preu"][$i] * 166;
    }

    echo '<table><tr><td>Nom</td><td>Preu €</td><td>Preu P</td><tr/>';
    for ($i = 0; $i < count($productes); $i++) {
        echo '<tr><td>'. $productes[$i]["nom"] . '</td><td>'. $productes[$i]["preuEuros"] . '</td><td>'. $productes[$i]["preuPesetes"]. '</td><br><tr/>';
    }
    echo '<table/>';
    echo '<table><tr>   <td></td><td>'. $preusProductes["preuEuros"]. ' €</td><td>'. $preusProductes["preuPesetes"]. ' pesetes</td><tr/>';
} else {
    echo '<p>Introdueix la quantitat en la URL</p>';
}
?>
</body>
</html>