<!DOCTYPE html>
<html lang="es">
<head>
    <title>Exercisi 272</title>
</head>
<body>

<?php
$records = require_once 'atletes.php';
echo '<h3>El record més vell</h3>'. getProvaFromText(vell($records), $records);
$datos = laureado($records);
echo '<h3>El club en més records </h3>'. $datos[0];
echo '<h3>El atleta en més records</h3>'. $datos[1];
echo '<h3>El lloc en més records</h3>'. $datos[2];
echo '<h3>El atleta més jove en conseguir el record.</h3>'. jove(getArrayNatalicis($records), getArrayFechas2($records));

//EL RECORD MES VELL
function vell(array $records) : mixed{
    $fechas = getArrayFechas($records);
    $fechaMin = $fechas[0];

    for ($i = 1; $i < count($fechas); $i++) {
        if(substr($fechas[$i]["fecha"], 0, 4) < substr($fechaMin["fecha"], 0, 4)){
            $fechaMin = $fechas[$i];
        } else if(substr($fechas[$i]["fecha"], 0, 4) == substr($fechaMin["fecha"], 0, 4)){
            if(substr($fechas[$i]["fecha"], 4, 6) < substr($fechaMin["fecha"], 4, 6)) {
                $fechaMin = $fechas[$i];
            } else if(substr($fechas[$i]["fecha"], 4, 6) == substr($fechaMin["fecha"], 4, 6)){
                if(substr($fechas[$i]["fecha"], 6, 8) < substr($fechaMin["fecha"], 6, 8)){
                    $fechaMin = $fechas[$i];
                }
            }
        }
    }
    return $fechaMin["nombre"];
}

function getArrayFechas(array $records) : array{
    $fechas = [];
    foreach ($records as $nombre => $record){
        array_push($fechas, ["nombre" => $nombre, "fecha" => fecha_inglesa($record["data"])]);
    }

    return $fechas;
}

function fecha_inglesa(string $fecha) {
    $parts = explode('.', $fecha);
    $fecha_inglesa = $parts[2] . '/' . $parts[1] . '/' . $parts[0];
    return $fecha_inglesa;
}

function getProvaFromText(string $prova, array $records) : string{
    foreach ($records as $nombre => $record){
        if($nombre === $prova){
            return 'Prova: '. $nombre. ' | Marca: '. $record["marca"]. ' | Atleta: '. $record["natalici"]. ' | Club: '. $record["club"]. ' | Data: '. $record["data"]. ' | Lloc: '. $record["lloc"];
        }
    }

    return 'No existeux la prova -> '. $prova;
}

//EL CLUB, ATLETES I LLOC AMB MÉS RECORDS
function laureado(array $records) : array{
    return [datoMayor("club", $records), datoMayor("atleta", $records), datoMayor("lloc", $records)];
}

function datoMayor(string $dato, array $records){
    $datos = [];
    foreach ($records as $nombre => $record){
        if(existeDato($datos, $record[$dato], $dato)){
            for ($i = 0; $i < count($datos); $i++) {
                if($datos[$i][$dato] == $record[$dato]){
                    $datos[$i]["valor"]++;
                    break;
                }
            }
        } else {
            array_push($datos, [$dato => $record[$dato], "valor" => 1]);
        }

    }

    return datoMax($datos, $dato);
}

function datoMax(array $datos, string $dato){
    $datoMax = $datos[0];
    for ($i = 0; $i < count($datos); $i++) {
        if($datos[$i]["valor"] >= $datoMax["valor"]){
            $datoMax = $datos[$i];
        }
    }

    return $datoMax[$dato];
}

function existeDato(array $datos, string $club, string $dato){
    if(empty($dato)){
        return false;
    }
    for ($i = 0; $i < count($datos); $i++) {
        if($datos[$i][$dato] == $club){
            return true;
        }
    }
    return false;
}

//EL ATLETA MES JOVE EN CONSEGUIR UN RECORD
function jove(array $natalicis, array $dates) : string{
    $atlentaJove = ["atleta" => $natalicis[0]["atleta"], "valor" => $dates[0]["fecha"] - $natalicis[0]["natalici"]];
    for ($i = 1; $i < count($natalicis); $i++) {
        if($dates[$i]["fecha"] - $natalicis[$i]["natalici"] < $atlentaJove["valor"]){
            $atlentaJove = ["atleta" => $natalicis[$i]["atleta"], "valor" => $dates[$i]["fecha"] - $natalicis[$i]["natalici"]];
        }
    }
    return $atlentaJove["atleta"];
}

function getArrayNatalicis(array $records) : array{
    $natalicis = [];
    foreach ($records as $record){
        array_push($natalicis, ["atleta" => $record["atleta"], "natalici" => $record["natalici"]]);
    }

    return $natalicis;
}

function getArrayFechas2(array $records) : array{
    $fechas = [];
    foreach ($records as $nombre => $record){
        array_push($fechas, ["nombre" => $nombre, "fecha" => any($record["data"])]);
    }

    return $fechas;
}

function any($fecha) {
    $partes = explode('.', $fecha);
    $yyyy = end($partes);
    if (preg_match('/^\d{4}$/', $yyyy)) {
        return $yyyy;
    } else {
        return 'Fecha no válida';
    }
}
?>
</body>
</html>