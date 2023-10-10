<!DOCTYPE html>
<html lang="es">
<?php
    extract($_GET);
?>

<head>
    <title>Exercisi 206</title>
</head>

<body>
<?php
    if(isset($numero)){
        echo "El numero $numero es ";
        echo ($numero > 0)?"positiu":;
    }
?>
</body>
</html>