<?php
date_default_timezone_set("America/Mexico_City");
setlocale(LC_MONETARY, 'es_MX');
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.80' ){
    $conexion = new mysqli('localhost', 'root', '', 'kumoV4');
    //$conexion = new mysqli('kumo.click', 'uNh7uH', 'Rjf6ge.Fa', 'kumo_v4');
   // $conexion = new mysqli('localhost', 'uNh7uH', 'Rjf6ge.Fa', 'hiiqwla5x64x');
}
elseif($_SERVER['SERVER_NAME'] == 'app.kumo.click'){
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