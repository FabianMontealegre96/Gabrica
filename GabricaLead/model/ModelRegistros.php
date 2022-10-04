<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=gabricalead',"root","");
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT nombre_cliente, nit,nombre_punto,nombre_equipo,ciudad,promotor, rtc, fecha_actual FROM lead";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($nombre_cliente, $nit, $nombre_punto, $nombre_equipo, $ciudad, $promotor, $rtc, $fecha_actual) => [$nombre_cliente, $nit, $nombre_punto,$nombre_equipo, $ciudad, $promotor, $rtc, $fecha_actual] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}
