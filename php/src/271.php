<!DOCTYPE html>
<html lang="es">
<head>
    <title>Exercisi 271</title>
</head>
<body>

<?php
include ("formulari-271.html");
include("270.php");
if(!isset($records)){
    $records = require_once 'atletes.php';
}

if(isset($_POST["prova"]) && isset($_POST["marca"]) && isset($_POST["atleta"]) && isset($_POST["natalici"]) &&
    isset($_POST["club"]) && isset($_POST["data"]) && isset($_POST["lloc"])){
    if(existProva($_POST["prova"], $records)){
        $newProva = ["prova" => $_POST["prova"], "marca"  => $_POST["marca"],
            "atleta" => $_POST["atleta"], "natalici" => $_POST["natalici"], "club" => $_POST["club"], "data" => $_POST["data"],
            "lloc" => $_POST["lloc"]];
        file_put_contents('atletes.php', '<?php return ' . var_export(replaceArray($records, $newProva), true) . ';');
    } else {
        echo '<h3>No existe la prova "'. $_POST["prova"]. '", tens que introduir una que siga valida.</h3>';
    }
}
?>

<?php
//FUNCIONES
function existProva(string $prova, array $records): bool{
    foreach ($records as $valor => $record){
        if($valor == $prova){
            return true;
        }
    }

    return false;
}

function replaceArray(array $records, array $substituir) : array{
    $newArray = [];
    foreach ($records as $nombre => $record){
        echo $nombre. '/'. $substituir["prova"];
        if($substituir["prova"] === $nombre){
            array_push($newArray[$nombre], ["marca"  => $records["marca"], "atleta" => $records["atleta"],
                "natalici" => $records["natalici"], "club" => $records["club"], "data" => $records["data"],
                "lloc" => $records["lloc"]]);
        } else {
            array_push($newArray[$nombre], ["marca"  => $substituir["marca"],
                "atleta" => $substituir["atleta"], "natalici" => $substituir["natalici"], "club" => $substituir["club"],
                "data" => $substituir["data"], "lloc" => $substituir["lloc"]]);
        }
    }

    return $newArray;
}
?>
</body>
</html>