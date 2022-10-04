<?php
/*class registros{
    private $registros;
    private $db;
    public function __construct(){
        $this->registros = array();
        $this->db=new PDO('mysql:host=localhost;dbname=gabricalead',"root","");
    }
	
    public function leads($tabla, $condicion=''){
        $consul = "select nombre_cliente, nit,nombre_punto, nombre_equipo,ciudad_promotor, rtc, fecha_actual from ".$tabla.";";
        $resu = $this->db->query($consul);
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}*/

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