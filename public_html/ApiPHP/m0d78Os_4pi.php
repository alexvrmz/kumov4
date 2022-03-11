<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start();

if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "m0d7545x" || $accion === 'm0d7ff5Gg'){
	include('conexion.php');
 	include('funciones.php');
}

if($accion === "m0d78Os"){ 
	
	// --- Consulta para listado de carreras
	$Qum0d78Os = "SELECT * FROM m0d78Os ORDER BY m0DxL0_descripcion ASC";
	$Cm0d78Os = $conexion->query($Qum0d78Os) or die ("Falló listado de modulos" . $Qum0d78Os);
	$Li57m0d78Os = [];
	while($Lm0d78Os = $Cm0d78Os->fetch_assoc()){

		$x4rr36l0 = array('m0DxL0_id' => $Lm0d78Os['m0DxL0_id'],
										 'm0DxL0_descripcion' => $Lm0d78Os['m0DxL0_descripcion'],
										 'm0DxL0_numero' => $Lm0d78Os['m0DxL0_numero'],
										 'm0DxL0_estado' => $Lm0d78Os['m0DxL0_estado']
				);
		array_push($Li57m0d78Os, $x4rr36l0); 
	}



}

elseif ($accion == 'm0d7545x') {

	if(!empty($m0DxL0_descripcion_add)){

		$accion = 'insertar';
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['m0DxL0_descripcion' => $m0DxL0_descripcion_add,
											 'm0DxL0_numero' => $m0DxL0_numero_add,
											 'm0DxL0_estado' => $m0DxL0_estado_add
											];		
    ejecutaDB('m0d78Os', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x020.$m0DxL0_descripcion_add;
		bi74c0('4DdM0du', $_SESSION['m3ns4J3'], '');

    llevame('../app?accion=m0d78Os');
	}
  else{
    $_SESSION['m3n3Rr0R'] = 'si';
    $_SESSION['m3ns4J3'] = lbl_8i7_x021;
    llevame('../app?accion=m0d78Os');
		bi74c0('4DdM0du2', $_SESSION['m3ns4J3'], '');
  }
}

/// --- accion Consultar Datos de un modulo
elseif($accion === "m0d7fdDs"){
	$m0ft6sV = $dCry($m0ft6sV);
	if(!empty($m0ft6sV)){
    // --- Consulta para datos de usuario
    $q5u5xXd = "SELECT * FROM m0d78Os WHERE m0DxL0_id = '".$m0ft6sV."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener datos de modulo " . $q5u5xXd);
    $d4705m0D = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
      $x4rr36l0 = array('m0ds6L0iD' => $dU5u4o['m0DxL0_id'],
                      'm0ds6L0d3s5cRp' => $dU5u4o['m0DxL0_descripcion'],
                      'm0ds6L0nM' => $dU5u4o['m0DxL0_numero'],
                      'm0ds6L03574d0' => $dU5u4o['m0DxL0_estado']
          );
      array_push($d4705m0D, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de modulo a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=m0d78Os');
  }

}

elseif ($accion == 'm0d7ff5Gg') {  /// --- accion actualizar modulo

	if(!empty($pp_xx004)){
		$accion = 'actualizar';
		$p4r4m37r05 = "m0DxL0_id = '$pp_xx004'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['m0DxL0_descripcion' => $pp_xx001,
											 'm0DxL0_numero' => $pp_xx002,
											 'm0DxL0_estado' => $pp_xx003
											];		
    ejecutaDB('m0d78Os', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
    
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x022.$pp_xx001;
		bi74c0('4c7M0du', $_SESSION['m3ns4J3'], '');

		llevame('../app?accion=m0d78Os');   

	}
  else {

    $_SESSION['m3n3Rr0R'] = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x023;
		bi74c0('4c7M0du2', $_SESSION['m3ns4J3'], '');

    llevame('../app?accion=m0d78Os');
  }
		
}
