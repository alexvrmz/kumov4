<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];

if($accion === '4ddd0C' | $accion === 'sV3Tr4'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}

/// --- accion Listado de tramites
if($accion === "d0cx6y"){

	$C001 = "SELECT * FROM c4TD0cxxV WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Falló listado de tramites: " . $C001);
	$ls3r = [];
	while($Li574m0d7 = $S001->fetch_assoc()){
    unset($x4rr36l0);
		$x4rr36l0 = array('xDID' => $Li574m0d7['d0C_xDID'], 
										 'xDd35' => $Li574m0d7['d0C_xDd35'],
										 'xDcTM' => $Li574m0d7['d0C_xDTMP'],
										 'xDcED' => $Li574m0d7['d0C_xDED0'],
				);
		array_push($ls3r, $x4rr36l0); 
	}	

}
elseif($accion === 'Tr43Dt'){
	if(!empty($pXRoI)){
		$pXRoI = $dCry($pXRoI);
		$C002 = "SELECT * FROM c4TD0cxxV WHERE d0C_xDID = $pXRoI";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar trámites: ".$C002);
		$DdS = $S002->fetch_assoc();
		$xSrD3sp0 = $DdS['d0C_xDd35'];
		$xSrTMp0 = $DdS['d0C_xDTMP'];
		$xSrTVp0 = $DdS['d0C_xDtv'];
		$xSrICp0 = $DdS['d0C_xDico'];
		$xSrInip0 = $DdS['d0C_xDini'];
		$xSrEd0p0 = $DdS['d0C_xDED0'];
		
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta el ID de Trámite';
		$rl = '../app?accion=d0cx6y';
		llevame($rl);
	}
}
elseif($accion === 'sV3Tr4'){
		
	$_SESSION['m3n3Rr0R_num'] = 0;
	unset($_SESSION['m3ns4j3Frm']);

	if(!V4lRQ($frm_001) && $xSrInip0 != 1){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_001'] = 'La descripción es obligatoria.';
	}

	if(!is_numeric($frm_002) && !empty($frm_002)){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_002'] = 'El campo Tiempo en dias debe ser númerico.';
	}

	if(!is_numeric($frm_006) && $frm_006 == 'nada'){
		$_SESSION['m3n3Rr0R_num']++;
		$_SESSION['tXFrm']['frm_002'] = 'El campo Estado es obligatorio';
	}

	$frm_001 = limpia($frm_001);
	$frm_002 = limpia($frm_002);
	$frm_003 = limpia($frm_003);
	
	if($_SESSION['m3n3Rr0R_num'] == 0){
		$accion = 'actualizar';
		unset($sQl_d474_4rr4y); 
		if($xSrInip0 == 1){
			$sQl_d474_4rr4y = [
				'd0C_xDTMP' => $frm_002,
				//'s3R_xDico' => $frm_005,
				'd0C_xDED0' => $frm_006
			];
		}
		else{
			$sQl_d474_4rr4y = [
				'd0C_xDd35' => $frm_001,
				'd0C_xDTMP' => $frm_002,
				//'s3R_xDico' => $frm_005,
				'd0C_xDED0' => $frm_006,
			];
		}
		print_r($sQl_d474_4rr4y);
		$p4r4m37r05 = "d0C_xDID = $pXRoI";
		ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		bi74c0('eDtstr4', 'el usuario edito el trámite '.$frm_001.' con exito', '');
		$_SESSION['m3ns4J3'] = 'Datos Actualizados con exito!';
		$rl = '../app?accion=d0cx6y';
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Verifica los datos';
		$rl = '../app?accion=d0cx6y&pXRoI='.$eCry($pXRoI).'&frm_001='.$eCry($frm_001).'&frm_002='.$eCry($frm_002).'&frm_006='.$eCry($frm_006);
	}
llevame($rl);
}
elseif($accion === '4ddd0C'){
	if(!empty($pt5_xx01)){
		
		$accion = 'insertar';
		unset($sQl_d474_4rr4y); 
		$sQl_d474_4rr4y = [
			'd0C_xDd35' => $pt5_xx01,
			'd0C_xDTMP' => $pt5_xx03,
			'd0C_xDOTR' => NULL,
			'd0C_xDico' => 'file',
			'd0C_xDED0' => 1,
			'd0C_xDtv' => 1,
			'd0C_xDini' => 0,
			'Universo' => $Universo
		];
    ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		bi74c0('addD0c', 'el usuario agrego el Tipo de Documento '.$pt5_xx01.' con exito', '');
		$rl = '../app?accion=d0cx6y';
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Faltan Datos';
		$rl = '../app?accion=d0cx6y';
	}
	llevame($rl);
}
