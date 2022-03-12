<?php
date_default_timezone_set("America/Mexico_City");
setlocale(LC_MONETARY, 'es_MX');
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
$servidor = $_SERVER['SERVER_NAME'];
if($servidor == 'localhost' || $servidor == '192.168.1.80' ){
    $conexion = new mysqli('localhost', 'root', '', 'kumoV4');
    //$conexion = new mysqli('kumo.click', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
}
elseif($servidor == 'app.kumo.click'){
    $conexion = new mysqli('localhost', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
}
$tildes = $conexion->query("SET NAMES 'utf8'");

if($conexion->connect_errno){ // --- si hay un error en la conexión ---
    die("La conexion no pudo establecerse");
}

$sqiDi = "SELECT * FROM u5u405 WHERE usuarioID = '".$usuario_id."'";
$ciDi = $conexion->query($sqiDi) or die ("Falló carga de Idioma");
$iDi = $ciDi->fetch_assoc();
$mdr = $iDi['config_m0dstr'];
$vst = $iDi['config_vista'];
$rll = $iDi['u5hpR0lr5'];
$Universo = $_SESSION['Universo'];
$dRV = $iDi['config_rDven'];



////------ Varibles de configuracion
$carpetaFondos = "dist/img/wallpappers/animals/";

if($servidor == 'app.kumo.click'){
  $puk3y = file_get_contents('/home/app/kumov4/llaves/pem/x0101_pu.pem');
  $prk3y = file_get_contents('/home/app/kumov4/llaves/pem/x0101_pv.pem');
  $grdV = '/home/app/kumov4/llaves/';
}
elseif($servidor == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.80'){
  $puk3y = file_get_contents('/home/alejandro/sitios/kumov4/llaves/pem/x0101_pu.pem');
  $prk3y = file_get_contents('/home/alejandro/sitios/kumov4/llaves/pem/x0101_pv.pem');
  $grdV = '/home/alejandro/sitios/kumov4/llaves/'; //Usuario: nopixcua Clave: Wj0AN6Q79vueuaI 
}