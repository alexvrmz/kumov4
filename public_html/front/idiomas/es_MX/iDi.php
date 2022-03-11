<?php
/// --- CARGA DE ARCHIVOS DE IDIOMA ESPANOL MX
// ---- Se establece la zona horarira y el lenguaje
date_default_timezone_set("America/Mexico_City");
setlocale(LC_ALL , 'es_MX.UTF-8');

//include('i_escritorio.php'); /// --- Dashboard
include('i_m3Nu.php'); /// --- Menu
define('lbl_3xi70','Exito!');
define('lbl_3rR0r','Error!');

define('lbl_h0m3','Inicio');
define('lbl_bi3nv3nid4_1','Buenos Días Bienvenido a noPixcua Mieke');
define('lbl_bi3nv3nid4_2','Buenas Tardes Bienvenido a noPixcua Mieke');
define('lbl_bi3nv3nid4_3','Buenas Noches Bienvenido a noPixcua Mieke');


define('noAccesoMascotas', 'No tienes acceso al Módulo Mascotas');

?>