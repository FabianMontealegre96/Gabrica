<?php
require_once("model/modelIndex.php");
class modeloController{

    public static function index(){
		require_once("view/registroLead.php");
    }
	public static function gracias(){
		require_once("view/gracias.php");
	}

	public static function guardar(){
    	$nomCliente = $_REQUEST['nomCliente'];
		$nit = $_REQUEST['nit'];
    	$nomPunto = $_REQUEST['nomPunto'];
    	$nomEquipo = $_REQUEST['nomEquipo'];
    	$ciudad = $_REQUEST['ciudad'];
    	$promotor = $_REQUEST['promotor'];
    	$rtc = $_REQUEST['rtc'];
    	$capUser = $_REQUEST['capUser'];
    	$ip = $_REQUEST['ip'];
    	$hora = $_REQUEST['hora'];
    	$fecha = $_REQUEST['fecha'];
        $data = "'".$nomCliente."','".$nit."','".$nomPunto."',
		'".$nomEquipo."','".$ciudad."','".$promotor."',
		'".$rtc."','".$capUser."','".$ip."','".$hora."','".$fecha."'";
    	$lead =	new Modelo();
		$dato =	$lead->insertar("lead",$data);
		header("location: view/gracias.php");
    }
	
	public static function consultarCiudad() {
		$tabla = "ciudades";
		$ciudad = new Modelo();
		$dato = $ciudad->ciudades($tabla);
		return $dato[0];
	}
}