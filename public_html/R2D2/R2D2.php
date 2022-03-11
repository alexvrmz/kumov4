<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
include('../ApiPHP/conexion.php');
include('../ApiPHP/funciones.php');
header("Access-Control-Allow-Origin: *");
//error_reporting(0);
if($accion == 'x006' /*|| $accion == 'x005'*/){
	$ps3Nc = md5($psbxX012s);
	//if($accion == 'x005'){
		$Q001 = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '$pp_xx005' AND u5hpW8ir5 = '$ps3Nc' AND u5hOn8ir5 = 1 /*AND u5hOn44P8ir5 = 1*/";
	/*}
	elseif($accion == 'x006'){
		$Q001 = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '$pp_xx005' AND u5hpW8ir5 = '$ps3Nc' AND u5hOn8ir5 = 1 AND u5hOn44P8ir5 = 1";
	}*/
	$S001 = $conexion->query($Q001) or die ("Fallo al selecccionar datos de usuario");
	$res = [];

	if($DU = $S001->fetch_assoc()){

		if($DU['u5hOn44P8ir5'] == 1){
			$aKM1 = [];
			$uxx = base64_encode($DU['usuarioID']);
			$uxU = base64_encode($DU['u5hUS8ir5']);
			if($DU['usuarioA1'] != ''){ $A1 = dCry2($DU['usuarioA1']); }
			if($DU['usuarioA2'] != ''){ $A2 = dCry2($DU['usuarioA2']); }
			if($DU['usuarioN1'] != ''){ $N1 = dCry2($DU['usuarioN1']); }
			if($DU['usuarioN2'] != ''){ $N2 = dCry2($DU['usuarioN2']); }
			$uxN1 = $A1.' '.$A2.' '.$N1.' '.$N2; 
			$uxN1 = base64_encode($uxN1);
			$uxRl = base64_encode($DU['u5hpR0lr5']);
			$Universo = base64_encode($DU['Universo']);

			$Q002 = "SELECT * FROM r3l3UEF WHERE UEFUxTU = '".$DU['usuarioID']."'";
			$S002 = $conexion->query($Q002) or die ("Fallo al selecccionar relaciones");
			$DR = $S002->fetch_assoc();
			$DRiE = $DR['UEFExTU'];
			$DRiF = $DR['UEFFxTU'];
			$DRiV = $DR['UEFVxTU'];

			$Q003 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = '$DRiE' ";
			$S003 = $conexion->query($Q003) or die ("Fallo al seleccionar emrpesas");
			$DE = $S003->fetch_assoc();
			$eRZm = base64_encode(dCry2($DE['eMRZEm']));
			$eNIm = base64_encode(dCry2($DE['eMNICEm']));

			$Q004 = "SELECT * FROM x7l07 WHERE xID7l0 = '$DRiF' ";
			$S004 = $conexion->query($Q004) or die ("Fallo al seleccionar flotas");
			$DF = $S004->fetch_assoc();
			$fN = base64_encode(dCry2($DF['xN4m37l0']));

			if($DRiV != 0){
				$CCAA = true;
				$Q005 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = '$DRiV' ";
				$S005 = $conexion->query($Q005) or die ("Fallo al seleccionar automovil");
				$DV = $S005->fetch_assoc();

				$aNECO = base64_encode(dCry2($DV['xV3hi3C0Xu7l0s']));
				$aNPLA = base64_encode(dCry2($DV['xV3hiPl4c45Xu7l0s']));
				
				$aMK = $DV['xV3hiM4rc4Xu7l0s'];
				$Q006 = "SELECT m4rCxD35c5s FROM m4rC45v3Hi WHERE m4rCxID5s = '$aMK' ";
				$S006 = $conexion->query($Q006) or die ("Fallo al seleccionar marca");
				$DMK = $S006->fetch_assoc();
				$aMK =  base64_encode($DMK['m4rCxD35c5s']);

				$aMD = $DV['xV3hi5uBm4rc4Xu7l0s'];
				$Q007 = "SELECT j5uBxD35x FROM m0d3loS WHERE j5uBxIDx = '$aMD' ";
				$S007 = $conexion->query($Q007) or die ("Fallo al seleccionar modelo");
				$DMD = $S007->fetch_assoc();
				$aMD =  base64_encode($DMD['j5uBxD35x']);
				$aANH = base64_encode($DV['xV3hi4n0Xu7l0s']);

				$aKM = $DV['xV3hiIDXu7l0s'];
				$DRiV = base64_encode($DV['xV3hiIDXu7l0s']);
				$Q009 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '$aKM' ORDER BY xkVh3IDms DESC";
				$S009 = $conexion->query($Q009) or die ("Fallo al seleccionar kilometrajes");
				
				while ($DK = $S009->fetch_array()) {
					$lstkm = [
						'idkm' => base64_encode($DK['xkIDms']),
						'kmtrj' => base64_encode($DK['xkkm7rGms']),
						'fhckm' => base64_encode($DK['xkFRms']),
						'nutck' => base64_encode($DK['xkNTms']),
						'ltr' => base64_encode($DK['xkLTSms']),
						'ImPT' => base64_encode($DK['xkIMPms']), 
						'PL' => base64_encode($DK['xkPLms']),
						'll' => base64_encode($DK['xkTLLms'])
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
				'aKM' => $DRiV,
				'aKM1' => $aKM1,
				'auKM' => $lstkm,
				'xuv' => $Universo
			];
			$respuesta = json_encode($res);
			print_r($respuesta);
			http_response_code(202);
		}
		else{
			$res = [
				'error' => true,
				'mensaje' => 'Pide a un administrador que autorize tu dispositivo!'
			];
			$respuesta = json_encode($res);
			print_r($respuesta);
			http_response_code(403);
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

if($accion == 'x009'){
	header('Cache-Control: no-cache, must-revalidate');
	require_once ('../../PHP_Compat-1.6.0a3/Compat/Function/file_get_contents.php');
  $data = php_compat_file_get_contents('php://input');
  $filename = base64_decode($_GET['filename']);
  if (file_put_contents($filename,$data)) {
    if (filesize($filename) != 0) {
			http_response_code(201);
			echo $filename;
    } else {
			http_response_code(400);
    }
  } else {
		http_response_code(400);
  }
}

if($accion == 'x012'){
	/*echo 'Kilimetraje: '.base64_decode($frm01).'<br>';
	echo 'Importe: '.base64_decode($frm02).'<br>';
	echo '# Ticket: '.base64_decode($frm03).'<br>';
	echo 'Proveedor: '.base64_decode($frm04).'<br>';
	echo 'Tanque LLeno?: '.base64_decode($frm05).'<br>';
	echo 'Fecha Recarga: '.base64_decode($frm06).'<br>';
	echo 'Foto Ticket: '.base64_decode($frm07).'<br>';
	echo 'Foto Odometro: '.base64_decode($frm08).'<br>';
	echo 'Litros: '.base64_decode($frm09).'<br>';
	echo '=========================================<br>';
	echo 'Operador: '.base64_decode(base64_decode($xx01)).'<br>';
	echo 'Entorno: '.base64_decode(base64_decode($xx02)).'<br>';
	echo 'Vehiculo: '.base64_decode(base64_decode($xx03)).'<br>';*/

	$frm01 = base64_decode($frm01);
	$frm02 = base64_decode($frm02);
	$frm03 = base64_decode($frm03);
	$frm04 = base64_decode($frm04);
	$frm05 = base64_decode($frm05);
	$frm06 = base64_decode($frm06);
	$frm07 = base64_decode($frm07);
	$frm08 = base64_decode($frm08);
	$frm09 = base64_decode($frm09);
	$frm10 = base64_decode($frm10);
	$xx01 = base64_decode(base64_decode($xx01));
	$xx02 = base64_decode(base64_decode($xx02));
	$xx03 = base64_decode(base64_decode($xx03));
	//$frm05 = $frm05 == false ? '2':'1';


	$xkPLms = $frm02 / $frm09;

			$C013 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = $frm10 ORDER BY xkIDms DESC";
			$S013 = $conexion->query($C013) or die ("fallo al consultar kms: ".$C013);
			$LTsPv = $frm09;
			$i = 0;
			$IMsPv = $frm02;
			while($DdKMA = $S013->fetch_array()){
				$xkm1D = $DdKMA['xkIDms'];
				$xkmll = $DdKMA['xkTLLms'];
				$xkmKm = $DdKMA['xkkm7rGms'];
				$xkml7 = $DdKMA['xkLTSms'];
				$xkmRN = $DdKMA['xkRNDms'];
				$xkmiM = $DdKMA['xkIMPms'];

				if($frm05 == 1){
					if($xkmll == 1){
						if($i == 0){
							$DRcD = $frm01 - $xkmKm;
							
						}
						$diFKm = $frm01 - $xkmKm;
						$xkRNDms = $diFKm / $LTsPv;
						$xkCKms = $diFKm / $IMsPv;
						
						break;
					}
					elseif($xkmll > 1){
						if($i == 0){
							$DRcD = $frm01 - $xkmKm;
						}
						$LTsPv = $xkml7 + $LTsPv;
						$IMsPv = $xkmiM + $IMsPv;
						$diFKm = $frm01 - $xkmKm;
						$xkRNDms = NULL;
						$xkCKms = NULL;
					}

				}
				else{
						if($i == 0){
							$DRcD = $frm01 - $xkmKm;
						}
						$LTsPv = $xkml7 + $LTsPv;
						$IMsPv = $xkmiM + $IMsPv;
						$diFKm = $frm01 - $xkmKm;
						$xkRNDms = NULL;
						$xkCKms = NULL;
				}
						/*echo '=============<br>';
						echo '$DRcD LL: '.$DRcD.'<br>';
						echo '=============<br>';
						echo 'LTsPv: '.$LTsPv .'<br>';
						echo '=============<br>';
						echo 'IMsPv: '.$IMsPv .'<br>';
						echo '=============<br>';
						echo 'diFKm: '.$diFKm .'<br>';
						echo '=============<br>';
						echo 'xkRNDms: '.$xkRNDms .'<br>';
						echo '=============<br>';
						echo 'xkCKms: '.$xkCKms .'<br>';
						echo '=============<br>';
						echo 'i: '.$i .'<br>';
						echo '=============<br>';
						echo 'xkm1D: '.$xkm1D .'<br>';*/
						$i++;
			}
			
		
		$accion = 'insertar';
		$p4r4m37r05 = ""; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xkkm7rGms' => $frm01,
			'xkVh3IDms' => $frm10,
			'xkNTms' => $frm03,
			'xkFKms' => date('Y-m-d H:i:s'),
			'xkFRms' => $frm06,
			'xku5uIDms' => $xx01,
			'xkIDPms' => '',
			'xkLTSms' => $frm09,
			'xkIMPms' => $frm02,
			'xkPLms' => $xkPLms,
			'xkTLLms' => $frm05,
			'xkTKms' => $w3bp,
			'xkCKms' => $xkCKms,
			'xkRNDms' => $xkRNDms,
			'xkDRCms' => $DRcD,
			'Universo' => $xx02
		];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);


/*	$C013 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = $frm10 AND xkTLLms = 1 ORDER BY xkIDms DESC LIMIT 1 ";
	$S013 = $conexion->query($C013) or die ("fallo al consultar kms: ".$C013);
	$DdKMA = $S013->fetch_assoc();
	$CdKMTK = $DdKMA['xkkm7rGms'];

	$accion = 'insertar';

	$xkDRCms = $frm01 - $CdKMTK;
	$vsHLLA = $S013->num_rows;
	if($vsHLLA >= 1){

		if($frm05 == 1){
			$xkRNDms = $xkDRCms / $frm09;
			$xkCKms = $frm02 / $xkDRCms;
		}
		else{
			$xkRNDms = NULL;
			$xkCKms = NULL;
		}
	}
	else{
		$C014 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = $frm10 ORDER BY xkIDms DESC LIMIT 1 ";
		$S014 = $conexion->query($C014) or die ("fallo al consultar kms: ".$C014);
		$DdKMA = $S014->fetch_assoc();
		$CdKMTK = $DdKMA['xkkm7rGms'];
		$xkDRCms = $frm01 - $CdKMTK;
		$xkRNDms = NULL;
		$xkCKms = NULL;
	}

	$pl = $frm02/$frm09;



	$p4r4m37r05 = ""; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xkkm7rGms' => $frm01,
			'xkVh3IDms' => $frm10,
			'xkNTms' => $frm03,
			'xkFKms' => date('Y-m-d H:i:s'),
			'xkFRms' => $frm06,
			'xku5uIDms' => $xx01,
			'xkIDPms' => '',
			'xkLTSms' => $frm09,
			'xkIMPms' => $frm02,
			'xkPLms' => $pl,
			'xkTLLms' => $frm05,
			'xkTKms' => $frm07,
			'xkODms' => $frm08,
			'xkCKms' => $xkCKms,
			'xkRNDms' => $xkRNDms,
			'xkDRCms' => $xkDRCms,
			'Universo' => $xx02
		];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);*/



		//bi74c0('4ctKmAPP', 'Se Agrego Recarga desde la APP', '');
		http_response_code(201);
		echo base64_encode($frm01);

}