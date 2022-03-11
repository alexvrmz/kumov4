<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];

if($accion === '4dds3r' || $accion === 'sV3S3rv'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}

/// --- accion Listado de Usuarios
if($accion === "s3rv"){

	$C001 = "SELECT * FROM c4TS3rxxV WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Falló listado de servicios: " . $C001);
	$ls3r = [];
	while($Li574m0d7 = $S001->fetch_assoc()){
    unset($x4rr36l0);
		$x4rr36l0 = [
			'xDID' => $Li574m0d7['s3R_xDID'],
			'xDd35' => $Li574m0d7['s3R_xDd35'],
			'xDTMP' => $Li574m0d7['s3r_xDTMP'],
			'xDOTR' => $Li574m0d7['s3r_xDOTR'],
			'xDini' => $Li574m0d7['s3R_xDini'],
			'xDcED' => $Li574m0d7['s3R_xDED0'],
			'xDtv' => $Li574m0d7['s3R_xDtv'],
		];
		array_push($ls3r, $x4rr36l0); 
	}	

}
elseif($accion === '4dds3r'){
	if(!empty($pt5_xx01)){
		$_SESSION['m3n3Rr0R_num'] = 0;
		unset($_SESSION['tXFrm']);

		if(!V4lRQ($pt5_xx01)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['pt5_xx01'] = 'El Campo Activo es obligatorio.';
		}

		if(!is_numeric($pt5_xx03) && !empty($pt5_xx03)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['pt5_xx03'] = 'El campo Tiempo en dias debe ser númerico.';
		}

		if(!is_numeric($pt5_xx04) && !empty($pt5_xx04)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['pt5_xx04'] = 'El campo Otro debe ser númerico.';
		}

		$pt5_xx01 = limpia($pt5_xx01);

		if($_SESSION['m3n3Rr0R_num'] == 0){
		$accion = 'insertar'; 
			unset($sQl_d474_4rr4y); 
			$sQl_d474_4rr4y = [
				's3R_xDd35' => $pt5_xx01,
				's3r_xDTMP' => $pt5_xx03,
				's3r_xDOTR' => $pt5_xx04,
				's3R_xDico' => 'cubes',
				's3R_xDED0' => 1,
				's3R_xDtv' => 1,
				's3R_xDini' => 0,
				'Universo' => $Universo
			];
			ejecutaDB('c4TS3rxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

			bi74c0('adds3rv', 'el usuario agrego el servicio '.$pt5_xx01.' con exito', '');
			$_SESSION['m3ns4J3'] = 'Se agrego el servicio: '.$pt5_xx01;
			$rl = '../app?accion=s3rv';
		}
		else{
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
			$rl = '../app?accion=s3rv&pt5_xx01='.$eCry($pt5_xx01).'&pt5_xx03='.$eCry($pt5_xx03).'&pt5_xx04='.$eCry($pt5_xx04);
		}
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
		$rl = '../app?accion=s3rv';
	}
	llevame($rl);
}
elseif($accion === 's3rv3Dt'){
	if(!empty($pXRoI)){
		$pXRoI = $dCry($pXRoI);
		$C002 = "SELECT * FROM c4TS3rxxV WHERE s3R_xDID = $pXRoI";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar servicio: ".$C002);
		$DdS = $S002->fetch_assoc();
		$xSrD3sp0 = $DdS['s3R_xDd35'];
		$xSrTMp0 = $DdS['s3r_xDTMP'];
		$xSrOTp0 = $DdS['s3r_xDOTR'];
		$xSrTVp0 = $DdS['s3R_xDtv'];
		$xSrICp0 = $DdS['s3R_xDico'];
		$xSrInip0 = $DdS['s3R_xDini'];
		$xSrEd0p0 = $DdS['s3R_xDED0'];
		
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta el ID de Servicio';
		$rl = '../app?accion=s3rv';
		llevame($rl);
	}
}
elseif($accion === 'sV3S3rv'){
		
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

		if(!is_numeric($frm_003) && !empty($frm_003)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_003'] = 'El campo Otro debe ser númerico.';
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
					's3r_xDTMP' => $frm_002,
					's3r_xDOTR' => $frm_003,
					//'s3R_xDico' => $frm_005,
					's3R_xDED0' => $frm_006
				];
			}
			else{
				$sQl_d474_4rr4y = [
					's3R_xDd35' => $frm_001,
					's3r_xDTMP' => $frm_002,
					's3r_xDOTR' => $frm_003,
					//'s3R_xDico' => $frm_005,
					's3R_xDED0' => $frm_006
				];
			}
			print_r($sQl_d474_4rr4y);
			$p4r4m37r05 = "s3R_xDID = $pXRoI";
			ejecutaDB('c4TS3rxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			bi74c0('eDts3rv', 'el usuario edito el servicio '.$frm_001.' con exito', '');
			$_SESSION['m3ns4J3'] = 'Datos Actualizados con exito!';
			$rl = '../app?accion=s3rv';
		}
		else{
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = 'Verifica los datos';
			$rl = '../app?accion=s3rv3Dt&pXRoI='.$eCry($pXRoI).'&frm_001='.$eCry($frm_001).'&frm_002='.$eCry($frm_002).'&frm_003='.$eCry($frm_003).'&frm_006='.$eCry($frm_006);
		}
	llevame($rl);
}
