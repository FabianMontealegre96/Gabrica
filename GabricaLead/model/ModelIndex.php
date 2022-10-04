<?php
class Modelo{
    private $Modelo;
    private $db;
    public function __construct(){
        $this->Modelo = array();
        $this->db=new PDO('mysql:host=localhost;dbname=gabricalead',"root","");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function ciudades($tabla, $condicion=''){
        $consul = "select nombre_ciudad, cod from ".$tabla.";";
        $resu = $this->db->query($consul);
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}