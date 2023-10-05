<!DOCTYPE html>
<html lang="es">
<?php
extract($_GET);
?>

<head>
    <title>Exercisi 209</title>
</head>

<body>
<?php
if(isset($hora, $minut, $segon)){
    $segon++;
    if($segon >= 60){
        $segon = 0;
        $minut++;
        if($minut >= 60){
            $minut = 0;
            $hora++;
            if($hora >= 24){
                $hora = 0;
            }
        }
    }
    printf("%d:%d:%d", $hora, $minut, $segon);
    
} else {
    'Posa les hores, minuts y segons per IQuery';
}
?>
</body>
</html>