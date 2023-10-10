<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
?>

<head>
    <title>Exercisi 224</title>
</head>

<body>
<?php
    if(isset($quantitat)){
        ?>
        <form action="224.php" method="post">
            <?php
            for ($i = 0; $i < $quantitat; $i++) {
                    echo '<input type="number" id="quantitat'. $i. '" name="quantitat'. $i. '"><br>';
                }
            ?>
            <input type="submit" name="submit">
        </form>
<?php
    } else {
        $suma = 0;
        foreach ($_POST as $valor){
            $suma += (int)$valor;
        }
        echo $suma;
    }
?>
</body>
</html>