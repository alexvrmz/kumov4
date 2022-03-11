<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
include ('conexion.php');
include ('funciones.php');

if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === 'c02251'){
  unset($sQl_d474_4rr4y);
  $sQl_d474_4rr4y = ['u5h8ir5_iDi' => 'es_MX'];		
  $accion = 'actualizar';
  $p4r4m37r05 = "usuarioID = '$usuario_id'";
  ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	$_SESSION['m3ns4J3'] = 'Exito! se actualizo el Idioma a es_MX (m-01)';  
  llevame($uh73Gg);
}
elseif($accion === 'c02252'){
  unset($sQl_d474_4rr4y);
  $sQl_d474_4rr4y = ['u5h8ir5_iDi' => 'en_US'];		
  $accion = 'actualizar';
  $p4r4m37r05 = "usuarioID = '$usuario_id'";
  ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	$_SESSION['m3ns4J3'] = 'Exito! se actualizo el Idioma a en_US (m-01)'; 
  llevame($uh73Gg);
}

?>