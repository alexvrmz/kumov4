<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];

if($accion === '1054800' || $accion === 'hY776' || $accion === 'hY778' || $accion === 's3RvAdd' || $accion == 'd0CvAdd'){
	include('conexion.php');
 	include('funciones.php'); 
 	include('fncnesF0rM5.php');
}

/// --- accion datos de Auto
if($accion === "v3hFh4"){
	 
	// --- Consulta para listado de Autos
	$vh3iP = $dCry($vh3iP);
	$QvH3 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = '$vh3iP'";
	$CvH3 = $conexion->query($QvH3) or die ("Falló listado de Autos" . $QvH3);
	$u5hy68 = [];
	while($LVh3C = $CvH3->fetch_assoc()){
		if($LVh3C['xV3hi3C0Xu7l0s'] != ''){ $eC0Xu7l0s = dCry2($LVh3C['xV3hi3C0Xu7l0s']); }
		if($LVh3C['xV3hiPl4c45Xu7l0s'] != ''){ $Pl4c45Xu7l0s = dCry2($LVh3C['xV3hiPl4c45Xu7l0s']); }
		if($LVh3C['xV3hi5ub7ip0Xu7l0s'] != ''){ $ub7ip = dCry2($LVh3C['xV3hi5ub7ip0Xu7l0s']); }
		if($LVh3C['xV3hic0l0rXu7l0s'] != ''){ $c0l0rXu = $LVh3C['xV3hic0l0rXu7l0s']; }
		if($LVh3C['xV3hivINXu7l0s'] != ''){ $xsViNsx = dCry2($LVh3C['xV3hivINXu7l0s']); }
		if($LVh3C['xV3him070rXu7l0s'] != ''){ $m070rS3r = dCry2($LVh3C['xV3him070rXu7l0s']); }
		

		$QvH4 = "SELECT * FROM m4rC45v3Hi WHERE m4rCxID5s = '".$LVh3C['xV3hiM4rc4Xu7l0s']."'";
		$CvH4 = $conexion->query($QvH4) or die ("Falló al cargar marcas: ".$QvH4);

		$m4r = $CvH4->fetch_array();
		if (empty($m4r['m4rCxIm463N5s'])) {
			$m4rk = '<p class="card-img-top" style="margin: 11px;margin-left: 0;margin-right: 0; font-weight: bold;font-size: 1.6rem;">'.$m4r['m4rCxD35c5s'].'</p>';
		} else {
			$m4rk = '<img src="dist/img/m4rc45/'.$m4r['m4rCxIm463N5s'].'" class="card-img-top" style="height;height: 32px;width: auto;margin-top: 14px;margin-bottom: 14px;">';
		}

		$QvH5 = "SELECT * FROM m0d3loS WHERE j5uBxIDx = '".$LVh3C['xV3hi5uBm4rc4Xu7l0s']."'";
		$CvH5 = $conexion->query($QvH5) or die ("Falló al cargar modelos: ".$QvH5);

		$m0dr = $CvH5->fetch_array();
		if(empty($m0dr['j5uBxMiMgx'])){
			$mmdl = '<img src="dist/img/m0d3l0s/0.png" class="card-img-top"> ';
		}
		else{
			$mmdl = '<img src="dist/img/m0d3l0s/'.$m0dr['j5uBxMiMgx'].'" class="card-img-top"> ';
		}


		$QvH7 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '".$LVh3C['xV3hiIDXu7l0s']."' ORDER BY xkFKms DESC LIMIT 1";
		$CvH7 = $conexion->query($QvH7) or die ("Falló al cargar kilometrajes: ".$QvH7);
		$t4rgt7 = [];
		while($d0c5 = $CvH7->fetch_array()){
			unset($arr4);	
			$arr4 = array(
					'xkIDms' => $d0c5['xkIDms'],
					'xkkm7rGms' => $d0c5['xkkm7rGms'],
					'xkVh3IDms' => $d0c5['xkVh3IDms'],
					'xkFKms' => $d0c5['xkFKms'],
					'xku5uIDms' => $d0c5['xku5uIDms'],
					'xkLTSms' => $d0c5['xkLTSms']
				); 
				array_push($t4rgt7, $arr4);
		}

		$QvH8 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '".$LVh3C['xV3hiIDXu7l0s']."'";
		$CvH8 = $conexion->query($QvH8) or die ("Falló al cargar kilometrajes: ".$QvH8);
		$RcRG = [];
		$i = 0;
		$xCRN = 0;
		while($d0c52 = $CvH8->fetch_array()){
			if($d0c52['xkRNDms'] != '' && $d0c52['xkTLLms'] == 1) { $xCRN = $xCRN + $d0c52['xkRNDms']; $i++;}
			
		}
		if($xCRN != ''){
			$xCRN = $xCRN / $i;
		}
		else{
			$xCRN = 0;
		}



		$fl0t4 = $LVh3C['xV3hiFl074Xu7l0s'];

		$QR67003 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = '".$fl0t4."' ";
		$CR67003 = $conexion->query($QR67003) or die ("Falló listado de flotas" . $QR67003);

		$fl0 = $CR67003->fetch_assoc();
		$fl0t4 = dCry2($fl0['xN4m37l0']);
		$ivdhA = $LVh3C['xV3hiIDXu7l0s'];
		
		$C001 = "SELECT * FROM r3l3UEF WHERE UEFVxTU = $ivdhA";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar relaciones: ".$C001);
		$DR = $S001->fetch_assoc();
		$ER = $S001->num_rows;
		if($ER != 0){
			$dduid = $DR['UEFUxTU'];
			$ddrid = $DR['UEFIxTU'];

			$DU = c0nUs(0, 0, $dduid);
		}

		$x4rr36l0 = array('IDXu7l0s' => $ivdhA,
										 '3C0Xu7l0s' => $eC0Xu7l0s,
										 'Pl4c45Xu7l0s' => $Pl4c45Xu7l0s,
										 'M4rc4Xu7l0s' => $m4rk,
										 '5uBm4rc4Xu7l0s' => $mmdl,
										 'm0D3' => $m0dr['j5uBxD35x'],
										 'M4rk' => $m4r['m4rCxD35c5s'],
										 'anN0' => $LVh3C['xV3hi4n0Xu7l0s'],
										 'su8Mo' => $ub7ip,
										 'c0l0rXu' => $c0l0rXu,
										 'i7r4N5X' => $LVh3C['xV3hi7r4N5Xu7l0s'],
										 'Mot0rs' => $LVh3C['xV3hi7Mot0rXu7l0s'],
										 'xsViNsx' => $xsViNsx,
										 'm070rS3r' => $m070rS3r,
										 'Pu3rt4s' => $LVh3C['xV3hiPu3rt45Xu7l0s'],
										 'cIlInDross' => $LVh3C['xV3hicIlInDrossXu7l0s'],
										 'lI7r00s' => $LVh3C['xV3hilI7r05Xu7l0s'],
										 'FRGs' => $LVh3C['xV3hiFRGSXu7l0s'],
										 'fl0t4' => $fl0t4,
										 'esD0' => $LVh3C['xV3hiEDOXu7l0s']
				);
		array_push($u5hy68, $x4rr36l0); 
	}

	$C011 = "SELECT * FROM r3l3PSr WHERE r3fSiDs = '-1' ";
	$S011 = $conexion->query($C011) or die ("Fallo al seleccionar relacion Proveedor Servicios: ".$C011);
	$LDPC = [];
	while ($DuP = $S011->fetch_array()) {
		$xIDP = $DuP['r3fPiDs'];
		$xIDS = $DuP['r3fSiDs'];
		$C012 = "SELECT prov_id, pR0nic, pR0RFC FROM proveedores WHERE prov_id = $xIDP";
		$S012 = $conexion->query($C012) or die ("Fallo al consultar proveedor: ".$C012);
		$DuPD = $S012->fetch_assoc();
		$xPDE = dCry2($DuPD['pR0nic']);
		$xPRF = $DuPD['pR0RFC'];
		unset($ar4);
		$ar4 = [
			'xIDP' => $xIDP,
			'xPDE' => $xPDE,
			'xPRF' => $xPRF
		];
		array_push($LDPC, $ar4);
	}

		$lds = [];
		$ldd = [];
		$LCT = [];
		$lddp = [];
		$c0lr3 = [
			'blue',
			'indigo',
			'purple',
			'pink',
			'red',
			'orange',
			'yellow',
			'green',
			'teal',
			'cyan',
			'white',
			'gray',
			'gray-dark',
			'primary',
			'secondary',
			'success',
			'info',
			'warning',
			'danger',
			'light',
			'dark'
		];

	/// --- TRAMITES
		$NDF = 0;
		$C006 = "SELECT * FROM c4TD0cxxV WHERE Universo = $Universo AND d0C_xDtv = 1 AND d0C_xDED0 = 1";
		$S006 = $conexion->query($C006) or die ("Fallo al consultar tipos tramites: ".$C006);
		while ($DdCT = $S006->fetch_array()) {
			$cs = array_rand($c0lr3, 2);
			$cs1 = $c0lr3[$cs[0]];

			$xD3S = $DdCT['d0C_xDd35'];
			$xdDico = $DdCT['d0C_xDico'];
			$xdDc4t = $DdCT['d0C_xDID'];
			
			$C005 = "SELECT * FROM tr4m7s WHERE xIoTrIDC4Tx = $xdDc4t AND xIoTrEDOx = 1 AND xIoTrV3Hx = $vh3iP";
			$S005 = $conexion->query($C005) or die ("Fallo seleccion de tramites: ".$C005);
			$nT = $S005->num_rows;
			while ($DdT = $S005->fetch_array()) {
				$xTrIDC4t = $DdT['xIoTrIDC4Tx'];
				$xTrNSs = $DdT['xIoTrNSx'];
				$xTrFFs = $DdT['xIoTrFFx'];
				$xdDcALT = $DdT['xIoTrALTx'];
			  $xIDS = $DdT['xIoTrIDx'];

				$fv = date("Y-m-d",strtotime($xTrFFs."- $xdDcALT days")); 
				$h = date("Y-m-d");
				$xdDcVED = date_diff(date_create($h), date_create($xTrFFs));
				$xdDcVED = $xdDcVED->format('%R%a');
				$fvta = date("Y-m-d",strtotime($xTrFFs."- $dRV days")); 
				$xdDcVTA = date_diff(date_create($h), date_create($fvta));
				$xdDcVTA = $xdDcVTA->format('%R%a');
				
				if($fv <= $h){
					$vnc = TRUE;
					$pd = TRUE;
				}
				else{
					$vnc = FALSE;
					$pd = FALSE;
				}

				unset($ldeT);
				$ldeT = [
					'xD3S' => $xD3S,
					'xTrNSs' => $xTrNSs,
					'xTrFFs' => $xTrFFs,
					'xdDico' => $xdDico,
					'xdDc4t' => $xdDc4t,
					'cs' => $cs1,
					'xdDcVED' => $xdDcVED,
					'xdDcVTA' => $xdDcVTA,
					'pd' => $pd,
					'vnc' => $vnc,
					'xIDS' =>$xIDS
				];
				array_push($ldd, $ldeT);
			}

			if($nT == 0){
			unset($ldeTp);
				$ldeTp = [
					'xD3S' => $xD3S,
					'pd' => TRUE,
					'xdDico' => $xdDico,
					'xdDc4t' => $xdDc4t,
					'cs' => $cs1
				];
				array_push($ldd, $ldeTp);
				$NDF++;
			}

			
		}
	/// --- TRAMITES FIN

	/// --- SERVICIOS   
		$NSF = 0;
		$C008 = "SELECT * FROM c4TS3rxxV WHERE s3R_xDtv = 1 AND s3R_xDED0 = 1 AND Universo = $Universo";
		$S008 = $conexion->query($C008) or die ("Fallo al consultar servicios: ".$C008);
		while($DDS8 = $S008->fetch_array()) {
			$xDID = $DDS8['s3R_xDID'];
			$xDd35 = $DDS8['s3R_xDd35'];
			$xDTMP = $DDS8['s3R_xDTMP'];
			$xDOTR = $DDS8['s3R_xDOTR'];
			$xDico = $DDS8['s3R_xDico'];
			//$xDc4t = $DDS8['s3R_xDc4t'];			
			
			$cs = array_rand($c0lr3, 2);
			$cs1 = $c0lr3[$cs[0]];
			
			$C003 = "SELECT * FROM D0cUM3n705 WHERE D0cv3HiDxS = $vh3iP AND D0cS3RxS = $xDID";
			$S003 = $conexion->query($C003) or die ("Fallo al consultar documentos de servicios: ".$C003);

			if(!$DdS = $S003->fetch_array()) {
				unset($lds1);
				$lds1 = [
					'xDID' => $xDID,
					'xDd35' => $xDd35,
					'xDTMP' => $xDTMP,
					'xDOTR' => $xDOTR,
					'xDico' => $xDico,
					'cs' => $cs1,
					'pd' => true,
					'fv' => '',
					//'xDc4t' => $xDc4t
				];
				array_push($lds, $lds1);
				$NSF++;
			}
		}


		$C002 = "SELECT * FROM c4TS3rxxV INNER JOIN D0cUM3n705 ON c4TS3rxxV.s3R_xDID = D0cUM3n705.D0cS3RxS WHERE c4TS3rxxV.s3R_xDtv = 1 AND D0cUM3n705.D0cv3HiDxS = $vh3iP ORDER BY D0cUM3n705.D0cIDxS DESC";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar servicios: ".$C002);
		while($DDS = $S002->fetch_array()) {
			$xDID = $DDS['s3R_xDID'];
			$xDd35 = $DDS['s3R_xDd35'];
			$xDTMP = $DDS['s3R_xDTMP'];
			$xDOTR = $DDS['s3R_xDOTR'];
			$xDico = $DDS['s3R_xDico'];
			$xDc4t = $DDS['s3R_xDc4t'];	
			$xDcD3s = dCry2($DDS['D0cD3SxS']);		
			$xDcImx = dCry2($DDS['D0cIMxS']);		
			$xDcFil = dCry2($DDS['D0cFil3xS']);		
			$xDcfs = $DDS['D0cFSxS'];		
			$xDcfv = $DDS['D0cFVxS'];		
			$xDcfe = $DDS['D0cFDxS'];		
			$xDcALT = $DDS['D0cALTxS'];		
			$xDctp = $DDS['D0c7ip0xS'];		
			$xDcaC = $DDS['D0c4c7iv0xS'];	
			$xDcID = $DDS['D0cIDxS'];	

			
			
			$cs = array_rand($c0lr3, 2);
			$cs1 = $c0lr3[$cs[0]];
			$fv = $xDcALT;
			$fv = date("Y-m-d",strtotime($xDcfv."- $fv days")); 
			$h = date("Y-m-d");
			$xDcVED = date_diff(date_create($h), date_create($xDcfv));
			$xDcVED = $xDcVED->format('%R%a');
			$fvta = date("Y-m-d",strtotime($xDcfv."- $dRV days")); 
			$xDcVTA = date_diff(date_create($h), date_create($fvta));
			$xDcVTA = $xDcVTA->format('%R%a');

			if($fv <= $h){
				$vnc = TRUE;
				$pd = TRUE;
			}
			else{ 
				$vnc = FALSE;
				$pd = FALSE;
			}
			if($xDcaC == 1){
				unset($lds1);
				$lds1 = [
					'xDID' => $xDID,
					'xDd35' => $xDd35,
					'xDTMP' => $xDTMP,
					'xDOTR' => $xDOTR,
					'xDico' => $xDico,
					'xDcVTA' => $xDcVTA,
					'cs' => $cs1,
					'pd' => $pd,
					'fv' => $fv,
					'xDc4t' => $xDc4t,
					'xDcD3s' => $xDcD3s,
					'xDcImx' => $xDcImx,
					'xDcFil' => $xDcFil,
					'xDcfs' => $xDcfs,
					'xDcfv' => $xDcfv,
					'xDcfe' => $xDcfe,
					'xDcALT' => $xDcALT,
					'vnc' => $vnc,
					'4ct' => $xDcaC,
					'xDcID' => $xDcID,
					'xDcVED' => $xDcVED
				];
				array_push($lds, $lds1);
			}			
		}
 
		
	/// --- SERVICIOS FIN
		
		$QvH6 = "SELECT * FROM tr4m7s WHERE xIoTrV3Hx = '$vh3iP' ";
		$CvH6 = $conexion->query($QvH6) or die ("Falló al cargar Trámites: ".$QvH6);
		$t4rgt4 = [];
		$nD0V = 0;
		$doxc = [];

		while ($d0c5 = $CvH6->fetch_array()) {
			$C010 = "SELECT d0C_xDd35 FROM c4TD0cxxV WHERE d0C_xDID = ".$d0c5['xIoTrIDC4Tx'];
			$S010 = $conexion->query($C010) or die ("Fallo al consultar tipo trámite: ".$C010);
			$DdTT = $S010->fetch_assoc();

			unset($tc2);
			$tc2 = array(
				'xIoTrIDx' => $d0c5['xIoTrIDx'],
				'xIoTrIDC4Tx' => $DdTT['d0C_xDd35'],
				'xIoTrNSx' => $d0c5['xIoTrNSx'],
				'xIoTrFIx' => $d0c5['xIoTrFIx'],
				'xIoTrFFx' => $d0c5['xIoTrFFx'],
				'xIoTrEDOx' => $d0c5['xIoTrEDOx']
			); 
			array_push($doxc, $tc2);
		}


		/*while($d0c5 = $CvH6->fetch_array()){

			//if(array_key_exists($d0c5['D0c7ip0xS'], $D0c7ip0s)){
				$fgt = dCry2($d0c5['D0cFil3xS']);
				$gYhNb6 = '../d0cUm3N70s/'.$fgt;
				$NgYhNb6 = 'tmp/'.$_SESSION['usuarioID'].'/'.$fgt;
				$hgy6 = dCry2($d0c5['D0cD3SxS']);
				if($fgt != 'error2'){
					if($d0c5['D0c7ip0xS'] == '13'){
					}else{
						if (!copy($gYhNb6, $NgYhNb6)) {				
							$flis = 'Error';
						}
						else{
							$flis = $NgYhNb6;
						}
					}
				}
				$h = date('Y-m-d');
				$fv = date('Y-m-d', strtotime($d0c5['D0cFVxS']));
				$fs = date('Y-m-d', strtotime($d0c5['D0cFSxS']));
				$fd = date('Y-m-d', strtotime($d0c5['D0cFDxS']));
				$dcact = $d0c5['D0c4c7iv0xS'];
				$dcValt = $d0c5['D0cALTxS'];
				if($fv == $fs){
					$fth = $d0c5['D0cALTxS'];
					if($fth == NULL){
						$fv = $fv; 
						$fap = '1';
					}
					else{
						$fv = date('Y-m-d', strtotime($d0c5['D0cFSxS']."+ $fth days"));
						$fap = '3';
					}
				}
				else{
					$fap = '2';
				}
					$tc2 = array(
						'cIDxS' => $d0c5['D0cIDxS'],
						'cD3SxS' => $hgy6,
						'cFil3xS' => $flis,
						'cv3HiDxS' => $d0c5['D0cv3HiDxS'],
						'c7ip0xS' => $d0c5['D0c7ip0xS'],
						'D0cFSxS' => $fs,
						'D0cFVxS' => $fv,
						'D0cFDxS' => $fd,
						'fap' => $fap,
						'dcValt' => $dcValt,
						'4ct' => $dcact
					); 
					array_push($doxc, $tc2);

					if($d0c5['D0c7ip0xS'] == '1' && $d0c5['D0c4c7iv0xS'] == 1){
						$h = date('Y-m-d H:i:s');
						$fv2 = date("Y-m-d H:i:s", strtotime($h."+ $dRV days"));  
						$fv3 = round($dRV/2);  
						$fv3 = date("Y-m-d H:i:s", strtotime($h."+ $fv3 days"));  
						if($fv <= $fv3){
							$al = 'bg-danger';
							$edt = true;
						}
						elseif($fv <= $fv2){
							$al = 'bg-warning';
							$edt = true;
						}
						else{
							$al = 'bg-light';
							$edt = false;
						}

						$tc = array(
							'cIDxS' => $d0c5['D0cIDxS'],
							'cD3SxS' => $hgy6,
							'cFil3xS' => $flis,
							'cv3HiDxS' => $d0c5['D0cv3HiDxS'],
							'c7ip0xS' => $d0c5['D0c7ip0xS'],
							'D0cFSxS' => $fs,
							'D0cFVxS' => $fv,
							'D0cFDxS' => $fd,
							'fap' => $fap,
							'al' => $al,
							'edt' => $edt,
							'4ct' => $dcact,
							'dcValt' => $dcValt
					); 
					}
					elseif($d0c5['D0c7ip0xS'] == '2' && $d0c5['D0c4c7iv0xS'] == 1){
						$h = date('Y-m-d H:i:s');
						$fv2 = date("Y-m-d H:i:s", strtotime($h."+ $dRV days"));  
						$fv3 = round($dRV/2);  
						$fv3 = date("Y-m-d H:i:s", strtotime($h."+ $fv3 days"));  
						if($fv <= $fv3){
							$al = 'bg-danger';
							$edt = TRUE;
						}
						elseif($fv <= $fv2){
							$al = 'bg-warning';
							$edt = TRUE;
						}
						else{
							$al = 'bg-light';
							$edt = FALSE;
						}
						$pl = array(
							'cIDxS' => $d0c5['D0cIDxS'],
							'cD3SxS' => $hgy6,
							'cFil3xS' => $flis,
							'cv3HiDxS' => $d0c5['D0cv3HiDxS'],
							'c7ip0xS' => $d0c5['D0c7ip0xS'],
							'D0cFSxS' => $fs,
							'D0cFDxS' => $fd,
							'D0cFVxS' => $fv,
							'fap' => $fap,
							'al' => $al,
							'edt' => $edt,
							'dcValt' => $dcValt
						); 
					}
				
			//}
			
		}*/
	
}
elseif($accion === 's3RvAdd'){
	if(!empty($ags_x001) && !empty($ags_x006) && !empty($ags_x007) && !empty($ags_x004) && !empty($ags_x008)){

		$C004 = "SELECT * FROM D0cUM3n705 WHERE D0cv3HiDxS = $ags_x006 AND D0cS3RxS = $ags_x007 AND D0c4c7iv0xS = 1";
		$S004 = $conexion->query($C004) or die ("Fallo al seleccionar documentos: ".$C004);
		while($DcDD = $S004->fetch_array()){
			$idD = $DcDD['D0cIDxS'];
			$ar = [
				'D0c4c7iv0xS' => 0
			];
			$accion = 'actualizar';
			$p4r4 = 'D0cIDxS = '.$idD;
			ejecutaDB('D0cUM3n705', $ar, $accion, $p4r4);
			bi74c0('4ct-s3r-'.$idD, 'Se desactivo el documento:'.$idD, '');
		}

		$C009 = "SELECT * FROM c4TS3rxxV WHERE s3R_xDID = $ags_x007";
		$S009 = $conexion->query($C009) or die ("Fallo al seleccionar tipo de documento: ".$C009);
		$DdTD = $S009->fetch_assoc();
		$DTV = $DdTD['s3r_xDTMP'];
		$DSEV = $DdTD['s3R_xDd35'];
		$ff = date("Y-m-d H:i:s");
		$fvs = date("Y-m-d",strtotime($ff."+ $DTV days"));
		echo $fvs;
			
		if (isset($_FILES['ags_x003']) && $_FILES['ags_x003']['error'] === UPLOAD_ERR_OK)	{
				$fileTmpPath = $_FILES['ags_x003']['tmp_name'];
				$fileName = $_FILES['ags_x003']['name'];
				$fileSize = $_FILES['ags_x003']['size'];
				$fileType = $_FILES['ags_x003']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$do9j = $ags_x007;
				$yu7u = time();
				$newFileName = $ags_x006. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
	
				$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');
	
				if (in_array($fileExtension, $allowedfileExtensions))	{
				
					$path = '../../d0cUm3N70s/';
					$dest_path = $path . $newFileName;
	
					if(move_uploaded_file($fileTmpPath, $dest_path)) {
						$w3bp = $ags_x006. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
						$w3bpP47h = $path . $w3bp;
	
						//c0nVt0Jp3g($dest_path, $w3bpP47h);
	
						$newFile = eCry2($w3bp);
					}
					else {
						$_SESSION['m3n3Rr0R']  = 'si';
						$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$frg = implode(',', $allowedfileExtensions);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0303. $fileExtension;
				}
			}
			else{
				//$_SESSION['m3n3Rr0R']  = 'si';
				//$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['ags_x003']['error'];
			}
		
	


		$accion = 'insertar';
		$p4r4m37r05 = ""; 
		$ags_x002 = eCry2($ags_x002);
		$ags_x005 = eCry2($ags_x005);
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'D0cD3SxS' => $ags_x002,
			'D0cIMxS' => $ags_x005,
			'D0cFil3xS' => $newFile,
			'D0cv3HiDxS' => $ags_x006,
			'D0cu53RxS' => $ags_x008,
			'D0c4c7iv0xS' => 1,
			'D0c7ip0xS' => $ags_x007,
			'D0cS3RxS' => $ags_x007,
			'D0cFDxS' => $ags_x004,
			'D0cFSxS' => $ff,
			'D0cFVxS'=> $fvs,
			'D0cALTxS' => $ags_x009,
			'Universo' => $Universo
		];		
		ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		$_SESSION['m3ns4J3'] = 'Se Agrego el Servicio: '.$DSEV;
		bi74c0('4ct-s3r-'.$ags_x007, $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Faltan datos';
	}
	llevame('../app?accion=v3hFh4&vh3iP='.$eCry($ags_x006));

}
elseif($accion === 'd0CvAdd'){
	if(!empty($agd_x001) && !empty($agd_x006) && !empty($agd_x007) && !empty($agd_x004) && !empty($agd_x008) && !empty($agd_x010)){

		$C004 = "SELECT * FROM D0cUM3n705 WHERE D0cv3HiDxS = $agd_x006 AND D0c7ip0xS = $agd_x007 AND D0c4c7iv0xS = 1";
		$S004 = $conexion->query($C004) or die ("Fallo al seleccionar documentos: ".$C004);
		while($DcDD = $S004->fetch_array()){
			$idD = $DcDD['D0cIDxS'];
			$ar = [
				'D0c4c7iv0xS' => 0
			];
			$accion = 'actualizar';
			$p4r4 = 'D0cIDxS = '.$idD;
			ejecutaDB('D0cUM3n705', $ar, $accion, $p4r4);
			bi74c0('4ct-d0c-'.$idD, 'Se desactivo el documento:'.$idD, '');
		}

		/*$C009 = "SELECT * FROM c4TS3rxxV WHERE s3R_xDc4t = $agd_x007";
		$S009 = $conexion->query($C009) or die ("Fallo al seleccionar tipo de documento: ".$C009);
		$DdTD = $S009->fetch_assoc();
		$DTV = $DdTD['s3r_xDTMP'];
		$ff = date("Y-m-d H:i:s");
		$fvs = date("Y-m-d",strtotime($ff."+ $DTV days"));
		echo $fvs;*/
		$ff = date("Y-m-d H:i:s");
		if (isset($_FILES['agd_x003']) && $_FILES['agd_x003']['error'] === UPLOAD_ERR_OK)	{
				$fileTmpPath = $_FILES['agd_x003']['tmp_name'];
				$fileName = $_FILES['agd_x003']['name'];
				$fileSize = $_FILES['agd_x003']['size'];
				$fileType = $_FILES['agd_x003']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$do9j = $agd_x007;
				$yu7u = time();
				$newFileName = $agd_x006. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
	
				$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');
	
				if (in_array($fileExtension, $allowedfileExtensions))	{
				
					$path = '../../d0cUm3N70s/';
					$dest_path = $path . $newFileName;
	
					if(move_uploaded_file($fileTmpPath, $dest_path)) {
						$w3bp = $agd_x006. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
						$w3bpP47h = $path . $w3bp;
	
						//c0nVt0Jp3g($dest_path, $w3bpP47h);
	
						$newFile = eCry2($w3bp);
					}
					else {
						$_SESSION['m3n3Rr0R']  = 'si';
						$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$frg = implode(',', $allowedfileExtensions);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0303. $fileExtension;
				}
			}
			else{
				//$_SESSION['m3n3Rr0R']  = 'si';
				//$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['agd_x003']['error'];
			}
		
	


		$accion = 'insertar';
		$p4r4m37r05 = ""; 
		$agd_x001 = eCry2($agd_x001);
		$agd_x005 = eCry2($agd_x005);
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['D0cD3SxS' => $agd_x001,
											 'D0cIMxS' => $agd_x005,
											 'D0cFil3xS' => $newFile,
											 'D0cv3HiDxS' => $agd_x006,
											 'D0cu53RxS' => $agd_x008,
											 'D0c4c7iv0xS' => 1,
											 'D0c7ip0xS' => $agd_x007,
											 'D0cFDxS' => $agd_x004,
											 'D0cFSxS' => $ff,
											 'D0cFVxS'=> $agd_x010,
											 'D0cALTxS' => $agd_x009
											];		
		echo '<pre>';
		print_r($sQl_d474_4rr4y);
		echo '</pre>';
		ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		$_SESSION['m3ns4J3'] = 'Se actualizo con exito el documento';
		bi74c0('4ct-d0c-'.$agd_x007, $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Faltan datos';
	}
	llevame('../app?accion=v3hFh4&vh3iP='.$eCry($agd_x006));

}

elseif($accion === '1054800'){
	if(!empty($gh77)){
		$gh77 = $dCry($gh77);
    $fileName = basename($gh77);
    $filePath = '../tmp/'.$_SESSION['usuarioID'].'/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: image/jpeg");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;


    }else{
        echo 'The file does not exist.'.$filePath;
    }
	}
}
elseif($accion === 'hY776'){
	if(!empty($pp_xx0100)){
		$accion = 'insertar';
		$p4r4m37r05 = ""; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['xkkm7rGms' => $pp_xx0100,
											 'xkVh3IDms' => $pp_xx0101,
											 'xkFKms' => date('Y-m-d H:i:s'),
											 'xkFRms' => date('Y-m-d H:i:s'),
											 'xku5uIDms' => $pp_xx0102,
		  									'Universo' => $Universo
											];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0400.$pp_xx0100;
		bi74c0('4ctKm', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = 'Falta el Kilometraje';
	}
	llevame('../app?accion=v3hFh4&vh3iP='.$eCry($pp_xx0101));
}
elseif($accion === 'hY778'){
	$_SESSION['NERR_hY778'] = 0;
	$_SESSION['MSGF_hY778'] = [];
	$_SESSION['FRM_hY778'] = [];

	if(!is_numeric($frm_rgcmb001) && $frm_rgcmb001 <= 0){
		$_SESSION['MSGF_hY778']['frm_rgcmb001'] = 'El Kilometraje es obligatorio y debe de ser númerico.';
		$_SESSION['NERR_hY778']++;
	}
	
	$C014 = "SELECT xkkm7rGms FROM x5KIl0mS WHERE xkVh3IDms = $frm_rgcmb007 ORDER BY xkIDms DESC LIMIT 1";
	$S014 = $conexion->query($C014) or die ("Fallo al consultar kilometraje: ".$C014);
	if($DdUK = $S014->fetch_assoc()){
		if($DdUK['xkkm7rGms'] >= $frm_rgcmb001){
			$_SESSION['MSGF_hY778']['frm_rgcmb001'] = 'El Kilometraje no puede ser menor a '.number_format($DdUK['xkkm7rGms'], 0, '.', ',');
			$_SESSION['NERR_hY778']++;
		}
	}


	if(!V4lRQ($frm_rgcmb002) && !is_numeric($frm_rgcmb002)){
		$_SESSION['MSGF_hY778']['frm_rgcmb002'] = 'Los Litros son obligatorios y deben de ser númericos.';
		$_SESSION['NERR_hY778']++;
	}
	elseif($frm_rgcmb002 <= 0){
		$_SESSION['MSGF_hY778']['frm_rgcmb002'] = 'Estas intentando ingresar Litros en negativo.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb003) && !is_numeric($frm_rgcmb003) && $frm_rgcmb003 <= 0){
		$_SESSION['MSGF_hY778']['frm_rgcmb003'] = 'El Importe es obligatorio y debe de ser númerico.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb004)){
		$_SESSION['MSGF_hY778']['frm_rgcmb004'] = 'El Número de Ticket es obligatorio.';
		$_SESSION['NERR_hY778']++;
	}
	
	if(!V4lRQ($frm_rgcmb010)){
		$_SESSION['MSGF_hY778']['frm_rgcmb010'] = 'La fecha de Ticket es obligatoria.';
		$_SESSION['NERR_hY778']++;
	}

	if(!isset($_FILES['frm_rgcmb005']) && $_FILES['frm_rgcmb005']['error'] !== UPLOAD_ERR_OK){
		$_SESSION['MSGF_hY778']['frm_rgcmb005'] = 'El Archivo de Ticket es obligatorio.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb006) && !is_numeric($frm_rgcmb006)){
		$_SESSION['MSGF_hY778']['frm_rgcmb006'] = 'El Proveedor es obligatorio.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb007) && !is_numeric($frm_rgcmb007)){
		$_SESSION['MSGF_hY778']['frm_rgcmb007'] = 'Información manipulada, No se procesara.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb008) && !is_numeric($frm_rgcmb008)){
		$_SESSION['MSGF_hY778']['frm_rgcmb008'] = 'Información manipulada, No se procesara.';
		$_SESSION['NERR_hY778']++;
	}

	if(!V4lRQ($frm_rgcmb009) && !is_numeric($frm_rgcmb009)){
		$_SESSION['MSGF_hY778']['frm_rgcmb009'] = 'El campo Tanque Lleno? es obligatorio.';
		$_SESSION['NERR_hY778']++;
	}

	$_SESSION['FRM_hY778']['frm_rgcmb001'] = limpia($frm_rgcmb001);
	$_SESSION['FRM_hY778']['frm_rgcmb002'] = $frm_rgcmb002;
	$_SESSION['FRM_hY778']['frm_rgcmb003'] = $frm_rgcmb003;
	$_SESSION['FRM_hY778']['frm_rgcmb004'] = strtoupper(limpia($frm_rgcmb004));
	$_SESSION['FRM_hY778']['frm_rgcmb006'] = limpia($frm_rgcmb006);
	$_SESSION['FRM_hY778']['frm_rgcmb009'] = limpia($frm_rgcmb006);
	$_SESSION['FRM_hY778']['frm_rgcmb010'] = $frm_rgcmb010;

	if($_SESSION['NERR_hY778'] == 0){

		$fileTmpPath = $_FILES['frm_rgcmb005']['tmp_name'];
		$fileName = $_FILES['frm_rgcmb005']['name'];
		$fileSize = $_FILES['frm_rgcmb005']['size'];
		$fileType = $_FILES['frm_rgcmb005']['type'];
		$fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));
		$do9j = 'cmb';
		$yu7u = time();
		$newFileName = $frm_rgcmb007. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
	
		$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');
	
		if (in_array($fileExtension, $allowedfileExtensions))	{
				
			$path = '../../d0cUm3N70s/';
			$dest_path = $path . $newFileName;
		
			if(move_uploaded_file($fileTmpPath, $dest_path)) {
				$w3bp = $frm_rgcmb007. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
				$w3bpP47h = $path . $w3bp;
		
				//c0nVt0Jp3g($dest_path, $w3bpP47h);
		
				$newFile = eCry2($w3bp);
			}
			else {
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
			}
		}
		//$frm_rgcmb003
		$xkPLms = $frm_rgcmb003 / $frm_rgcmb002;



		//if($frm_rgcmb009 == 1){
			//$C013 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = $frm_rgcmb007 AND xkLTSms IS NOT NULL ORDER BY xkIDms DESC LIMIT 1 ";}
			$C013 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = $frm_rgcmb007 ORDER BY xkIDms DESC";
			$S013 = $conexion->query($C013) or die ("fallo al consultar kms: ".$C013);
			$LTsPv = $frm_rgcmb002;
			$i = 0;
			$IMsPv = $frm_rgcmb003;
			echo '<pre>';
			while($DdKMA = $S013->fetch_array()){
				$xkm1D = $DdKMA['xkIDms'];
				$xkmll = $DdKMA['xkTLLms'];
				$xkmKm = $DdKMA['xkkm7rGms'];
				$xkml7 = $DdKMA['xkLTSms'];
				$xkmRN = $DdKMA['xkRNDms'];
				$xkmiM = $DdKMA['xkIMPms'];

				if($frm_rgcmb009 == 1){
					if($xkmll == 1){
						if($i == 0){
							$DRcD = $frm_rgcmb001 - $xkmKm;
							
						}
						$diFKm = $frm_rgcmb001 - $xkmKm;
						$xkRNDms = $diFKm / $LTsPv;
						$xkCKms = $diFKm / $IMsPv;
						
						break;
					}
					elseif($xkmll > 1){
						if($i == 0){
							$DRcD = $frm_rgcmb001 - $xkmKm;
						}
						$LTsPv = $xkml7 + $LTsPv;
						$IMsPv = $xkmiM + $IMsPv;
						$diFKm = $frm_rgcmb001 - $xkmKm;
						$xkRNDms = NULL;
						$xkCKms = NULL;
					}

				}
				else{
						if($i == 0){
							$DRcD = $frm_rgcmb001 - $xkmKm;
						}
						$LTsPv = $xkml7 + $LTsPv;
						$IMsPv = $xkmiM + $IMsPv;
						$diFKm = $frm_rgcmb001 - $xkmKm;
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
			'xkkm7rGms' => $frm_rgcmb001,
			'xkVh3IDms' => $frm_rgcmb007,
			'xkNTms' => $frm_rgcmb004,
			'xkFKms' => date('Y-m-d H:i:s'),
			'xkFRms' => $frm_rgcmb010,
			'xku5uIDms' => $frm_rgcmb008,
			'xkIDPms' => $frm_rgcmb006,
			'xkLTSms' => $frm_rgcmb002,
			'xkIMPms' => $frm_rgcmb003,
			'xkPLms' => $xkPLms,
			'xkTLLms' => $frm_rgcmb009,
			'xkTKms' => $w3bp,
			'xkCKms' => $xkCKms,
			'xkRNDms' => $xkRNDms,
			'xkDRCms' => $DRcD,
			'Universo' => $Universo
		];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0400.$pp_xx0100;
		bi74c0('4ctKm', $_SESSION['m3ns4J3'], '');

		unset($_SESSION['NERR_hY778']);
		unset($_SESSION['FRM_hY778']);
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Por favor revisa la información';
	}
	llevame('../app?accion=xkmtr4G&vh3UjI6Did='.$eCry($frm_rgcmb007));
	/*echo '<pre>';
	print_r($sQl_d474_4rr4y);
	echo '</pre>';*/
}