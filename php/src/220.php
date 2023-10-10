<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>

<head>
    <title>Exercisi 220</title>
</head>

<body>
<ul>
<?php

for ($i = 0; $i <= 50; $i++) {
        if($i % 2 == 0){
            echo '<li>' . $i . '<li/>';
        }
    }
?>
    <ul/>
</body>
</html>