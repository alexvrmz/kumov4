<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
include('ApiPHP/conexion.php');
include('ApiPHP/funciones.php');
header("Access-Control-Allow-Origin: *");
//error_reporting(0);
if($ue == true && $accion == 'x005' || $accion == 'x006'){
	$ps3Nc = md5($psbxX012s);
	if($accion == 'x005'){
		$Q001 = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '$pp_xx005' AND u5hpW8ir5 = '$ps3Nc' AND u5hOn8ir5 = 1 AND u5hOn44P8ir5 = 0";
	}
	elseif($accion == 'x006'){
		$Q001 = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '$pp_xx005' AND u5hpW8ir5 = '$ps3Nc' AND u5hOn8ir5 = 1 AND u5hOn44P8ir5 = 1";
	}
	$S001 = $conexion->query($Q001) or die ("Fallo al selecccionar datos de usuario");
	$res = [];
	if($accion == 'x005'){
		$dispositivo = explode("_-_-_", $pp_xx100);
 	 	$dispositivo_id = $dispositivo[0];
  	$dispositivo_nombre = $dispositivo[1];
	}
	$pp_xx101 = str_replace(" ", "+", $pp_xx101);
	if($DU = $S001->fetch_assoc()){
		$uxx = $DU['usuarioID'];
		if($accion == 'x005'){

			$Q008 = "SELECT * FROM L4v3s WHERE L4v3s_pv LIKE '%".$pp_xx101."%' ";
			$S008 = $conexion->query($Q008) or die ("Fallo al seleccionar llaves");
			$DLL = $S008->fetch_assoc();
			$LLSC = dCry2($DLL['L4v3s_pv']);
			$LLLL = dCry2($DLL['L4v3s_tknid']);
			if($LLSC === $pp_xx101){
				$res = [
					'error' => true,
					'mensaje' => 'El Usuario y/o Contraseña no son correctos o el dispositivo se ha cambiado, contacta con un administrador!. Error : 00x3'
				];
				$respuesta = json_encode($res);
				print_r($respuesta);
				http_response_code(401);
				$err = 401;
			}
			else{
				$err = 205;
			}

			if($err == 205){
				
										
				$tmx = date("Y-m-d H:i:s");
				$pp_xx100 = eCry2($pp_xx100);
				$dispositivo_id = eCry2($dispositivo_id);
				$dispositivo_nombre = eCry2($dispositivo_nombre);
				$pp_xx101 = eCry2($pp_xx101); 

				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = ['L4v3s_pv' => $pp_xx101,
													 'L4v3s_pu' => NULL,
													 'L4v3s_tknid' => $pp_xx100,
													 'L4v3s_dipid' => $dispositivo_id,
													 'L4v3s_dipnme' => $dispositivo_nombre,
													 'L4v3s_uid' => $uxx,
													 'L4v3s_fc' => $tmx
													];	
	
				$accion = "insertar";
				unset($p4r4m37r05);
				$idLl = ejecutaDB('L4v3s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

				
			/*	unset($sQl_d474_4rr4y);
				$tmx = date("Y-m-d H:i:s");
				$sQl_d474_4rr4y = [
					'L4v3s_pv' => $pp_xx101,
					'L4v3s_pu' => NULL,
					'L4v3s_tknid' => $pp_xx100,
					'L4v3s_dipid' => $dispositivo_id,
					'L4v3s_dipnme' => $dispositivo_nombre,
					'L4v3s_ff' => $tmx,
					'L4v3s_fc' => NULL,
					'L4v3s_uid' => $uxx,
				];
				$accion = "insertar";
				$idLl = ejecutaDB('L4v3s', $sQl_d474_4rr4y, $accion, '');*/
				//$idLl = ejecutaDB('L4v3s', $sQl_d474_4rr4y, 'insertar', '');

				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'u5hOn44P8ir5' => 1,
					//'u5htK8ir5' => $pp_xx100,
					'u5hpV8ir5' => $idLl,
					//'u5hDpID8ir5' => $dispositivo_id,
					//'u5hDpNm8ir5' => $dispositivo_nombre,
				];	
				$p4r4m37r05 = "u5hUS8ir5 = '$pp_xx005'"; 
				$accion = "actualizar";
				ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				
			}
			$LLSC = $pp_xx101;
			$LLLL = $pp_xx100;
		}
		elseif($accion == 'x006'){
			$Q008 = "SELECT * FROM L4v3s WHERE L4v3s_id = '".$DU['u5hpV8ir5']."' ";
			$S008 = $conexion->query($Q008) or die ("Fallo al seleccionar llaves");
			$DLL = $S008->fetch_assoc();
			$LLSC = dCry2($DLL['L4v3s_pv']);
			$LLLL = dCry2($DLL['L4v3s_tknid']);
			if($LLSC === $pp_xx101){
				$err = 205;
			}
			else{
				$res = [
					'error' => true,
					'mensaje' => 'El Usuario y/o Contraseña no son correctos o el dispositivo se ha cambiado, contacta con un administrador!. Error 00x2'
				];
				$respuesta = json_encode($res);
				print_r($respuesta);
				http_response_code(401);
				$err = 401;
			}
		}



		if($err === 205){
			$uxx = AES_Encrypt($LLLL,$LLSC,$DU['usuarioID']);
			$uxU = AES_Encrypt($LLLL,$LLSC,$DU['u5hUS8ir5']);
			$uxN1 = dCry2($DU['usuarioA1']).' '.dCry2($DU['usuarioA2']).' '.dCry2($DU['usuarioN1']).' '.dCry2($DU['usuarioN2']);
			$uxN1 = AES_Encrypt($LLLL,$LLSC,$uxN1);
			$uxRl = AES_Encrypt($LLLL,$LLSC,$DU['u5hpR0lr5']);

			$Q002 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = '".$DU['usuarioID']."'";
			$S002 = $conexion->query($Q002) or die ("Fallo al selecccionar relaciones");
			$DR = $S002->fetch_assoc();
			$DRiE = $DR['UEFExTU'];
			$DRiF = $DR['UEFFxTU'];
			$DRiV = $DR['UEFVxTU'];

			$Q003 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = '$DRiE' ";
			$S003 = $conexion->query($Q003) or die ("Fallo al seleccionar emrpesas");
			$DE = $S003->fetch_assoc();
			$eRZm = dCry2($DE['eMRZEm']);
			$eNIm = dCry2($DE['eMNICEm']);
			$eRZm = AES_Encrypt($LLLL,$LLSC,$eRZm);
			$eNIm = AES_Encrypt($LLLL,$LLSC,$eNIm);

			$Q004 = "SELECT * FROM x7l07 WHERE xID7l0 = '$DRiF' ";
			$S004 = $conexion->query($Q004) or die ("Fallo al seleccionar flotas");
			$DF = $S004->fetch_assoc();
			$fN = dCry2($DF['xN4m37l0']);
			$fN = AES_Encrypt($LLLL,$LLSC,$fN);
			$aKM1 = [];
			if($DRiV != 0){
				$CCAA = true;
				$Q005 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = '$DRiV' ";
				$S005 = $conexion->query($Q005) or die ("Fallo al seleccionar automovil");
				$DV = $S005->fetch_assoc();

				$aNECO = dCry2($DV['xV3hi3C0Xu7l0s']);
				$aNECO = AES_Encrypt($LLLL,$LLSC,$aNECO);
				$aNPLA = dCry2($DV['xV3hiPl4c45Xu7l0s']);
				$aNPLA = AES_Encrypt($LLLL,$LLSC,$aNPLA);
				
				$aMK = $DV['xV3hiM4rc4Xu7l0s'];
				$Q006 = "SELECT m4rCxD35c5s FROM m4rC45v3Hi WHERE m4rCxID5s = '$aMK' ";
				$S006 = $conexion->query($Q006) or die ("Fallo al seleccionar marca");
				$DMK = $S006->fetch_assoc();
				$aMK =  AES_Encrypt($LLLL,$LLSC,$DMK['m4rCxD35c5s']);

				$aMD = $DV['xV3hi5uBm4rc4Xu7l0s'];
				$Q007 = "SELECT j5uBxD35x FROM m0d3loS WHERE j5uBxIDx = '$aMD' ";
				$S007 = $conexion->query($Q007) or die ("Fallo al seleccionar modelo");
				$DMD = $S007->fetch_assoc();
				$aMD =  AES_Encrypt($LLLL,$LLSC,$DMD['j5uBxD35x']);
				$aANH = AES_Encrypt($LLLL,$LLSC,$DV['xV3hi4n0Xu7l0s']);

				$aKM = $DV['xV3hiIDXu7l0s'];
				$Q009 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '$aKM' ORDER BY xkVh3IDms DESC";
				$S009 = $conexion->query($Q009) or die ("Fallo al seleccionar kilometrajes");
				
				while ($DK = $S009->fetch_array()) {
					$lstkm = [
						'idkm' => $DK['xkIDms'],
						'kmtrj' => $DK['xkkm7rGms'],
						'fhckm' => $DK['xkFKms']
					];
					array_push($aKM1, $lstkm);
				}
			}
			else{
				$CCAA = false;
			}

 
			$res = [
				'uxx' => $uxx,
				'uxU' => $uxU,
				'uxN1' => $uxN1,
				'uxRl' => $uxRl,
				'uxEmRz' => $eRZm,
				'uxEmNI' => $eNIm,
				'uxFl' => $fN,
				'CCAA' => $CCAA,
				'aNECO' => $aNECO,
				'aNPLA' => $aNPLA,
				'aMK' => $aMK,
				'aMD' => $aMD,
				'aANH' => $aANH,
				'aKM' => $aKM1,
				'auKM' => $lstkm
			];
			$respuesta = json_encode($res);
			print_r($respuesta);
			http_response_code(202);
		}
	}
	else{
		$res = [
			'error' => true,
			'mensaje' => 'El Usuario y/o Contraseña no son correctos o el dispositivo se ha cambiado, contacta con un administrador!. Error 00x1'
		];
		$respuesta = json_encode($res);
		print_r($respuesta);
		http_response_code(401);
	}
}
