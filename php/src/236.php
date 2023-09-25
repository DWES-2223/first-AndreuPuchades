<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
unset($_POST['submit']);
?>

<head>
    <title>Exercisi 236</title>
</head>

<body>
<?php
if(isset($quantitat)){
?>
<form method="post">
    <?php
    for ($i = 1; $i <= $quantitat; $i++) {
        echo '<label id="nom">Nombre: </label><input type="text" id="nom[]" name="nom[]"> ';
        echo '<label id="altura">Altura (cm): </label><input type="number" id="altura[]" name="altura[]"> ';
        echo '<label id="email">Email: </label><input type="text" id="email[]" name="email[]"> <br>';
    }
    ?>
    <input type="submit" name="submit">
</form>

<?php
} else {
    $persones = [];
    for ($i = 0; $i < count($_POST) - 1; $i++) {
        $persones[$i]["nom"] = $_POST["nom"][$i];
        $persones[$i]["altura"] = $_POST["altura"][$i];
        $persones[$i]["email"] = $_POST["email"][$i] ;
    }
}
?>
</body>
</html>