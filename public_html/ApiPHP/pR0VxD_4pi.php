<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];
if($accion === "aDdPr0" || $accion === 'sV3DT' || $accion === 'Ac7r3L'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}
if($accion === "pR0VxD"){
	$u5u = $_SESSION['usuarioID'];
	if($px001 != ''){
		$px017 = json_decode($px017);
		$px018 = json_decode($px018);
		$px019 = json_decode($px019);
		$px020 = json_decode($px020);
		$px001 = $dCry($px001);	$px002 = $dCry($px002); $px003 = $dCry($px003);
		$px004 = $dCry($px004); $px005 = $dCry($px005); $px006 = $dCry($px006);
		$px007 = $dCry($px007);	$px008 = $dCry($px008); //$px009 = $dCry($px009);
		$px010 = $dCry($px010);	$px011 = $dCry($px011);	$px012 = $dCry($px012);
		$px013 = $dCry($px013);	$px014 = $dCry($px014);	$px015 = $dCry($px015);
		$px016 = $dCry($px016); /*$px017 = $dCry($px017);*/ /*$px018 = $dCry($px018); */
		/*$px019 = $dCry($px019); */
	}

	$C001 = "SELECT * FROM proveedores WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar proveedores: ".$C001);
	$LDP = [];
	while ($DDP = $S001->fetch_array()) {
		$xPrIDx = $DDP['prov_id'];
		$xPrNICx = dCry2($DDP['pR0nic']);
		$xPrRZx = dCry2($DDP['pR0RZ']);
		$xPrRFCx = $DDP['pR0RFC'];
		$xPrACTx = $DDP['pR0ACT'];
		$dcpA = [
			'xPrIDx' => $xPrIDx,
			'xPrNICx' => $xPrNICx,
			'xPrRZx' => $xPrRZx,
			'xPrRFCx' => $xPrRFCx,
			'xPrACTx' => $xPrACTx
		];
		array_push($LDP, $dcpA);
		unset($xPrIDx);
		unset($xPrNICx);
		unset($xPrRZx);
		unset($xPrRFCx);
		unset($xPrACTx);
		unset($dcpA);
	}
	$nP = $S001->num_rows;
	if(!empty($px019)){
		$LDM = [];
		$LDS = [];
		$LDT = [];
		foreach ($px019 as $key) {
			$C004 = "SELECT s3R_xDID, s3R_xDd35, s3R_xDtv FROM c4TS3rxxV WHERE Universo = $Universo";
			if($key != 'todos' && $key != 'ninguno'){
				$C004 .= "WHERE s3R_xDtv = $key AND ";
				$C004 .= "Universo = $Universo";
			}
			elseif($key == 'ninguno'){

			}
			$S004 = $conexion->query($C004) or die ("Fallo al seleccionar servicios: ".$C004);
			while ($eds = $S004->fetch_array()) {
				$xCIDx =  $eds['s3R_xDID'];
				$xCdeSx = $eds['s3R_xDd35'];
				$xCtPvx = $eds['s3R_xDtv'];
				$elm = [
					'xCIDx' => $xCIDx,
					'xCdeSx' => $xCdeSx,
					'xCtPvx' => $xCtPvx
				];
				array_push($LDS, $elm);
			}

			$C006 = "SELECT d0C_xDID, d0C_xDd35, d0C_xDtv FROM c4TD0cxxV WHERE Universo = $Universo";
			if($key != 'todos' && $key != 'ninguno'){
				$C006 .= "WHERE d0C_xDtv = $key AND ";
				$C006 .= "Universo = $Universo";
			}
			elseif($key == 'ninguno'){

			}
			$S006 = $conexion->query($C006) or die ("Fallo al seleccionar Tramites: ".$C006);
			while ($edt = $S006->fetch_array()) {
				$xCIDxt =  $edt['d0C_xDID'];
				$xCdeSxt = $edt['d0C_xDd35'];
				$xCtPvxt = $edt['d0C_xDtv'];
				$elmt = [
					'xCIDxt' => $xCIDxt,
					'xCdeSxt' => $xCdeSxt,
					'xCtPvxt' => $xCtPvxt
				];
				array_push($LDT, $elmt);
			}

			$C005 = "SELECT m4rCxID5s, m4rCxD35c5s, m4rCxTV FROM m4rC45v3Hi ";
			if($key != 'todos'  && $key != 'ninguno'){
				$C005 .= "WHERE m4rCxTV = $key";
			}
			$S005 = $conexion->query($C005) or die ("Fallo al seleccionar marcas: ".$C005);
			while ($edM = $S005->fetch_array()) {
				$xMIDx =  $edM['m4rCxID5s'];
				$xMdeSx = $edM['m4rCxD35c5s'];
				$xMTPx = $edM['m4rCxTV'];
				$elmM = [
					'xMIDx' => $xMIDx,
					'xMdeSx' => $xMdeSx,
					'xMTPx' => $xMTPx
				];
				array_push($LDM, $elmM);
			}
		}
	}
		
}

/// --- accion agregar Proveedor
elseif ($accion == 'aDdPr0') {
	/// --- las partes de pp007 comentadas corresponden a colonias cuando esten en bd (2021/05/26)
	$_SESSION['err'] = 0;
	unset($_SESSION['m3ns4j3Frm']);
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');

	if(!v4l_rfc($pp_xx012)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0100;
		$_SESSION['err'] ++;
	}
	elseif(!V4lRQ($pp_xx012)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0101;
		$_SESSION['err'] ++;
	}
	else{
		$SQ3s725 = "SELECT pR0RFC FROM proveedores WHERE pR0RFC = '".$pp_xx012."' AND Universo = $Universo";
		$CQ3s725 = $conexion->query($SQ3s725) or die ("Falló listado de proveedores" . $SQ3s725);
		$ckRfse = $CQ3s725->num_rows;
		if($ckRfse != 0){
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0102;
			$_SESSION['err'] ++;
		}
	}

	if(!v4l_cp($pp_xx008) && !V4lRQ($pp_xx008)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0103;
		$_SESSION['err'] ++;
	}

	/*if(!v4l_tel($pp_xx014) && !empty($pp_xx014)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0104;
		$_SESSION['err'] ++;
	}*/

	if(!V4lRQ($pp_xx002)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0105;
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx002) > 256){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0106;
		$_SESSION['err'] ++;
	}

	if(!V4lRQ($pp_xx003)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0107;
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx003) > 256){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0108;
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx004) > 256){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0109;
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx005) > 256){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0110;
		$_SESSION['err'] ++;
	}
	
	if(strlen($pp_xx006) > 256){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0111;
		$_SESSION['err'] ++;
	}
	
	
	
	if(!V4lRQ($pp_xx010) || $pp_xx010 == 'nada' || !is_numeric($pp_xx010) ){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0114;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!V4lRQ($pp_xx011) || $pp_xx011 == 'nada' || !is_numeric($pp_xx011) ){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0115;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx007) > 256){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0116;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx013) > 256){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0117;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx014) > 20){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0118;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}
	/*elseif(/*!is_numeric($pp_xx014) && !empty($pp_xx014)){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0119;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}*/
	
	if(!v4lEm4Il($pp_xx015) && !empty($pp_xx015)){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0120;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx019)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo de Vehiculo';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx017)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo Servicios';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx020)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo Trámites';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx018)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Marcas';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	$pp_xx002 = limpia($pp_xx002);
	$pp_xx003 = limpia($pp_xx003);
	$pp_xx004 = limpia($pp_xx004);
	$pp_xx005 = limpia($pp_xx005);
	$pp_xx006 = limpia($pp_xx006);
	$pp_xx007 = limpia($pp_xx007);
	$pp_xx012 = strtoupper(limpia($pp_xx012));
	$pp_xx013 = limpia($pp_xx013);
	$pp_xx014 = limpia($pp_xx014);
	$pp_xx015 = strtolower($pp_xx015);
		
	if($_SESSION['m3n3Rr0R'] != 'si'){

		$ex01 = eCry2($pp_xx001);
		$ex02 = eCry2($pp_xx002);
		$ex03 = eCry2($pp_xx003);
		$ex04 = eCry2($pp_xx004);
		$ex05 = eCry2($pp_xx005);
		$ex06 = eCry2($pp_xx006);
		$ex07 = eCry2($pp_xx007);
		$ex08 = eCry2($pp_xx008);
		$ex09 = '52';//mexico
		$ex10 = $pp_xx010;
		$ex11 = $pp_xx011;
		$ex12 = $pp_xx012;
		$ex13 = eCry2($pp_xx013);
		$ex14 = eCry2($pp_xx014);
		$ex15 = eCry2($pp_xx015);
		$ex16 = $_SESSION['usuarioID'];

		if(in_array("ninguno", $pp_xx017)){	$ex17 = 1;	}	elseif(in_array("todos", $pp_xx017)){	$ex17 = 2;	}	else{	$ex17 = 3;	}
		if(in_array("ninguna", $pp_xx018)){	$ex18 = 1;	}	elseif(in_array("todos", $pp_xx018)){	$ex18 = 2;	}	else{	$ex18 = 3;	}
		if(in_array("ninguno", $pp_xx019)){	$ex19 = 1;	}	elseif(in_array("todos", $pp_xx019)){	$ex19 = 2;	}	else{	$ex19 = 3;	}
		if(in_array("ninguno", $pp_xx020)){	$ex20 = 1;	}	elseif(in_array("todos", $pp_xx020)){	$ex20 = 2;	}	else{	$ex20 = 3;	}
		/*if($pp_xx017 == "['ninguno']"){	$ex17 = 1;	}	elseif($pp_xx017 == "['todos']"){	$ex17 = 2;	}	else{	$ex17 = 3;	}
		if($pp_xx018 == "['ninguna']"){	$ex18 = 1;	}	elseif($pp_xx018 == "['todos']"){	$ex18 = 2;	}	else{	$ex18 = 3;	}
		if($pp_xx019 == "['ninguno']"){	$ex19 = 1;	}	elseif($pp_xx019 == "['todos']"){	$ex19 = 2;	}	else{	$ex19 = 3;	}
		if($pp_xx020 == "['ninguno']"){	$ex20 = 1;	}	elseif($pp_xx020 == "['todos']"){	$ex20 = 2;	}	else{	$ex20 = 3;	}*/

		$accion = 'insertar';
		$p4r4m37r05 = '';//"usuarioID = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y); 
		$f = date('Y-m-d H:i:s');
		$sQl_d474_4rr4y = [
			'pR0RZ' => $ex02,
			'pR0USI' => $ex16,
			'pR0nic' => $ex03,
			'pR0CLL' => $ex04,
			'pR0NE' => $ex05,
			'pR0NI' => $ex06,
			'pR0C0L' => $ex07,
			'pR0CP' => $ex08,
			'pR0MuAl' => $ex11,
			'pR0ED0' => $ex10,
			'pR0PAS' => $ex09,
			'pR0RFC' => $ex12,
			'pR0R3P' => $ex13,
			'pR0T3L1' => $ex14,
			'pR0MAL' => $ex15,
			'pR0FR' => $f,
			'pR0ACT' => '1',
			'pR0TV' => $ex19,
			'pR0TS' => $ex17,
			'pR0TT' => $ex20,
			'pR0TM' => $ex18,
			'Universo' => $Universo
		];	
		/*echo '<pre>';
		print_r($sQl_d474_4rr4y);
		echo '</pre>';*/
		
		$np = ejecutaDB('proveedores', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0122.$pp_xx003;
		bi74c0('addPr0', $_SESSION['m3ns4J3'], '');

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
		$accion = 600;
		$d3s = eCry2($Bin4kuru[$accion]);
		Bin4kuru($d3s, $accion, $V=0, $U=0, $F=0, $E=0, $D=0, $np);
		$accion = 'insertar';

		if(!empty($pp_xx017) && !in_array("todos", $pp_xx017) && !in_array("ninguno", $pp_xx017)){
			foreach ($pp_xx017 as $key) {
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'r3fPiDs' => $np,
					'r3fSiDs' => $key,
					'Universo' => $Universo
				];	
				ejecutaDB('r3l3PSr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			}
		}

		if(!empty($pp_xx020) && !in_array("todos", $pp_xx020) && !in_array("ninguno", $pp_xx020)){
			foreach ($pp_xx020 as $key) {
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'r3fPiDt' => $np,
					'r3fTiDt' => $key,
					'Universo' => $Universo
				];	
				ejecutaDB('r3l3PTr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			}
		}

		if(!empty($pp_xx018) && !in_array("todos", $pp_xx018) && !in_array("ninguna", $pp_xx018)){
			foreach ($pp_xx018 as $key) {
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'rFPiDk' => $np,
					'rFMiDk' => $key,
					'Universo' => $Universo
				];	
				ejecutaDB('r3l3PM', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			}
		}

		if(!empty($pp_xx019 && !in_array("todos", $pp_xx019) && !in_array("ninguno", $pp_xx019))){
			
				foreach ($pp_xx019 as $key) {
					unset($sQl_d474_4rr4y); 
					$sQl_d474_4rr4y = [
						'r3PiDu' => $np,
						'r3TViDu' => $key,
						'Universo' => $Universo
					];	
					ejecutaDB('r3l3PTV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				}
			
		}
		
		$brr4 = true;
		unset($px001); unset($px002);	unset($px003);	unset($px004);	unset($px005); unset($px006);	unset($px007); unset($px008);
		/*unset($px001);*/unset($px010);	unset($px011);	unset($px012); unset($px013);	unset($px014); unset($px015);	unset($px016);
	
	} 
	

	if($brr4 == false){
		$rl = '../app?accion=pR0VxD';
		$pp_xx017 = json_encode($pp_xx017);
		$pp_xx018 = json_encode($pp_xx018);
		$pp_xx019 = json_encode($pp_xx019);
		$pp_xx020 = json_encode($pp_xx020);
		$rl .= '&px001='.$eCry($pp_xx001);	$rl .= '&px002='.$eCry($pp_xx002); $rl .= '&px003='.$eCry($pp_xx003);	$rl .= '&px004='.$eCry($pp_xx004);
		$rl .= '&px005='.$eCry($pp_xx005);	$rl .= '&px006='.$eCry($pp_xx006);	$rl .= '&px007='.$eCry($pp_xx007);	$rl .= '&px008='.$eCry($pp_xx008);
		/*$rl .= '&px009='.$eCry($pp_xx009);*/	$rl .= '&px010='.$eCry($pp_xx010);	$rl .= '&px011='.$eCry($pp_xx011);	$rl .= '&px012='.$eCry($pp_xx012);
		$rl .= '&px013='.$eCry($pp_xx013);	$rl .= '&px014='.$eCry($pp_xx014);	$rl .= '&px015='.$eCry($pp_xx015);	$rl .= '&px016='.$eCry($pp_xx016);
		$rl .= '&px017='.$pp_xx017;	$rl .= '&px018='.$pp_xx018;	$rl .= '&px019='.$pp_xx019; $rl .= '&px020='.$pp_xx020;
	}
	elseif($brr4 == true){
		$rl = '../app?accion=pr0VxVW&pXRoI='.$eCry($np);
	}
	llevame($rl);
	//print_r($pp_xx017);
}
elseif($accion == 'pr0VxVW' || $accion == 'pr0VxDT'){
	if(!empty($pXRoI)){
		$frm_001 = $dCry($frm_001);	$frm_004 = $dCry($frm_004);	$frm_007 = $dCry($frm_007);	$frm_010 = $dCry($frm_010);
		$frm_002 = $dCry($frm_002);	$frm_005 = $dCry($frm_005);	$frm_008 = $dCry($frm_008);	$frm_011 = $dCry($frm_011);
		$frm_003 = $dCry($frm_003);	$frm_006 = $dCry($frm_006);	$frm_009 = $dCry($frm_009);	$frm_012 = $dCry($frm_012);
		$frm_013 = $dCry($frm_013);	$frm_014 = $dCry($frm_014);	$frm_015 = $dCry($frm_015);	

		$pXRoI = $dCry($pXRoI);
		$C002 = "SELECT * FROM proveedores WHERE prov_id = $pXRoI";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar proveedor: ".$C002);
		$DP = $S002->fetch_assoc();
		$xPxIDH = $DP['prov_id'];
		$xPxNICH = $DP['pR0nic']; if($xPxNICH != ''){ $xPxNICH = dCry2($DP['pR0nic']); }
		$xPxRZH = $DP['pR0RZ']; if($xPxRZH != ''){ $xPxRZH = dCry2($DP['pR0RZ']); }
		$xPxRFCH = $DP['pR0RFC'];
		$xPxCLLH = $DP['pR0CLL']; if($xPxCLLH != ''){ $xPxCLLH = dCry2($DP['pR0CLL']); }
		$xPxNeH = $DP['pR0NE']; if($xPxNeH != ''){ $xPxNeH = dCry2($DP['pR0NE']); }
		$xPxNiH = $DP['pR0NI']; if($xPxNiH != ''){ $xPxNiH = dCry2($DP['pR0NI']); }
		$xPxC0lH = $DP['pR0C0L']; if($xPxC0lH != ''){ $xPxC0lH = dCry2($DP['pR0C0L']); }
		$xPxcPH = $DP['pR0CP']; if($xPxcPH != ''){ $xPxcPH = dCry2($DP['pR0CP']); }
		$xPxMAlH = C0nMuniD($DP['pR0MuAl']);
		$xPxMAlHid = $DP['pR0MuAl'];
		$xPxEd0H = consulta_estado_id($DP['pR0ED0']);
		$xPxEd0Hid = $DP['pR0ED0'];
		$xPxPisH = 'México';
		$xPxR3pH = $DP['pR0R3P']; if($xPxR3pH != ''){ $xPxR3pH = dCry2($DP['pR0R3P']); }
		$xPxTl1H = $DP['pR0T3L1']; if($xPxTl1H != ''){ $xPxTl1H = dCry2($DP['pR0T3L1']); }
		$xPxTl2H = $DP['pR0T3L2']; if($xPxTl2H != ''){ $xPxTl2H = dCry2($DP['pR0T3L2']); }
		$xPxeMlH = $DP['pR0MAL']; if($xPxeMlH != ''){ $xPxeMlH = dCry2($DP['pR0MAL']); }
		$xPxIVAH = $DP['pR0IVA'];
		$xPxTVH = $DP['pR0TV'];
		$xPxTTH = $DP['pR0TT'];
		$xPxTSH = $DP['pR0TS'];
		$xPxTMH = $DP['pR0TM'];
		$xPxFRH = $DP['pR0FR'];
		$xPxACTH = $DP['pR0ACT'];

		$C006 = "SELECT * FROM r3l3PTV WHERE r3PiDu = $xPxIDH";
		$S006 = $conexion->query($C006) or die ("Fallo al seleccionar relaciones tipo de vehiculos: ".$C006);
		$LDTP = [];
		while ($DDTV = $S006->fetch_array()) {
			$xIDtv = $DDTV['r3iDu'];
			$xTVtv = $DDTV['r3TViDu'];
			//if($xTVtv == 1){ $tdv = 'Automoviles'; }
			//elseif($xTVtv == 2){ $tdv = 'Motocicletas'; }
			$letv = [
				'xIDtv' => $xIDtv,
				'xTVtv' => $xTVtv,
				//'tdv' => $tdv
			];
			array_push($LDTP, $letv);
		}
 
		$C007 = "SELECT * FROM r3l3PSr WHERE r3fPiDs = $xPxIDH";
		$S007 = $conexion->query($C007) or die ("Fallo al seleccionar relaciones de servicios: ".$C007);
		$LDTS = [];
		while ($DDTS = $S007->fetch_array()) {
			$xIDts = $DDTS['r3fiDs'];
			$xSVts = $DDTS['r3fSiDs'];

			$C008 = "SELECT s3R_xDd35, s3R_xDtv FROM c4TS3rxxV WHERE s3R_xDID = $xSVts";
			$S008 = $conexion->query($C008) or die ("Fallo al seleccionar servicio: ".$C008);
			$DdS = $S008->fetch_assoc();
			$Sdes = $DdS['s3R_xDd35'];
			$tP67 = $DdS['s3R_xDtv'];

			$lesv = [
				'xIDts' => $xIDts,
				'xSVts' => $xSVts,
				'Sdes' => $Sdes,
				'tP67' => $tP67
			];
			array_push($LDTS, $lesv);
		}

		$C010 = "SELECT * FROM r3l3PTr WHERE r3fPiDt = $xPxIDH";
		$S010 = $conexion->query($C010) or die ("Fallo al seleccionar relaciones de trámites: ".$C010);
		$LDTT = [];
		while ($DDTT = $S010->fetch_array()) {
			$xIDtt = $DDTT['r3fiDt'];
			$xSVtt = $DDTT['r3fTiDt'];

			$C011 = "SELECT d0C_xDd35, d0C_xDtv FROM c4TD0cxxV WHERE d0C_xDID = $xSVtt";
			$S011 = $conexion->query($C011) or die ("Fallo al seleccionar tramites: ".$C011);
			$DdS = $S011->fetch_assoc();
			$Sdest = $DdS['d0C_xDd35'];
			$tP67t = $DdS['d0C_xDtv'];

			$lesvt = [
				'xIDtt' => $xIDtt,
				'xSVtt' => $xSVtt,
				'Sdest' => $Sdest,
				'tP67t' => $tP67t
			];
			array_push($LDTT, $lesvt);
		}

		$C009 = "SELECT * FROM r3l3PM WHERE rFPiDk = $xPxIDH";
		$S009 = $conexion->query($C009) or die ("Fallo al seleccionar relaciones de marcas: ".$C009);
		$LDMk = [];
		while ($DDMK = $S009->fetch_array()) {
			$xIDmk = $DDMK['rFiDk'];
			$xMmk = $DDMK['rFMiDk'];
			$mD3s = c0nM4rkID($xMmk);
			$mD3t6PV = c0nM4rkTPV($xMmk);
			$lemk = [
				'xIDmk' => $xIDmk,
				'xMmk' => $xMmk,
				'mD3s' => $mD3s,
				'mD3t6PV' => $mD3t6PV
			];
			array_push($LDMk, $lemk);
		}

		$C012 = "SELECT * FROM c4TD0cxxV WHERE Universo = $Universo AND d0C_xDED0 = 1";
		$S012 = $conexion->query($C012) or die ("Fallo error al seleccionar tramites: ".$C012);
		$ALDT = [];
		while($LDST = $S012->fetch_array()){
			unset($artr);
			$artr = [
				'xDID' => $LDST['d0C_xDID'],
				'xDd35' => $LDST['d0C_xDd35'],
				'xDtv' => $LDST['d0C_xDtv']
			];
			array_push($ALDT, $artr);
		}

		$C013 = "SELECT * FROM c4TS3rxxV WHERE Universo = $Universo AND s3R_xDED0 = 1";
		$S013 = $conexion->query($C013) or die ("Fallo error al seleccionar servicios: ".$C013);
		$ALDS = [];
		while($LDSS = $S013->fetch_array()){
			unset($artr);
			$artr = [
				'sxDID' => $LDSS['s3R_xDID'],
				'sxDd35' => $LDSS['s3R_xDd35'],
				'sxDtv' => $LDSS['s3R_xDtv']
			];
			array_push($ALDS, $artr);
		}

		$C014 = "SELECT * FROM m4rC45v3Hi WHERE m4rCxTV = 1";
		$S014 = $conexion->query($C014) or die ("Fallo error al seleccionar marcas: ".$C014);
		$ALDM = [];
		while($LDSM = $S014->fetch_array()){
			unset($artr);
			$artr = [
				'MDID' => $LDSM['m4rCxID5s'],
				'MDd35' => $LDSM['m4rCxD35c5s'],
				'MDtv' => $LDSM['m4rCxTV']
			];
			array_push($ALDM, $artr);
		}

	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta ID de Proveedor';
		$rl = 'app?accion=pR0VxD';
		llevame($rl);
	}
}
elseif($accion == 'sV3DT'){
	if($pXRoI == ''){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta el ID de Proveedor';
		$rl = '../app?accion=pR0VxD';
		llevame($rl);
	}
	else{
		

		$_SESSION['m3n3Rr0R_num'] = 0;
		$_SESSION['tXFrm'] = [];
	
		if(!V4lRQ($frm_001)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_001'] = 'El NIC es obligatorio.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_001']);
		} 
		
		if(!V4lRQ($frm_002)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_002'] = 'La Razón Social es obligatoria.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_002']);
		}
		
		if(!V4lRQ($frm_003)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_003'] = 'El RFC es obligatorio.';
		}
		elseif(!v4l_rfc($frm_003)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_003'] = 'El RFC no es válido';
		}else {
			unset($_SESSION['tXFrm']['frm_003']);
		} 

		if(!v4l_cp($frm_008)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_008'] = 'El Código Postal no es válido.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_008']);
		}
		
		if(!v4lEm4Il($frm_014)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_014'] = 'El Correo Eléctronico no es válido.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_008']);
		}

		if($frm_015 == 'nada') {
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_015'] = 'El Campo Activo es obligatorio.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_015']);
		}

		$frm_001 = limpia($frm_001);
		$frm_002 = limpia($frm_002);
		$frm_003 = strtoupper(limpia($frm_003));
		$frm_004 = limpia($frm_004);
		$frm_005 = limpia($frm_006);
		$frm_006 = limpia($frm_006);
		$frm_007 = limpia($frm_007);
		$frm_012 = limpia($frm_012);
		$frm_013 = limpia($frm_013);
		$frm_014 = strtolower($frm_014);

	
	
		if($_SESSION['m3n3Rr0R_num'] === 0){

			$C003 = "SELECT prov_id, pR0nic, pR0RZ, pR0RFC FROM proveedores"; // WHERE pR0nic LIKE '%$frm_001%' OR pR0RZ LIKE '%$frm_002%' OR pR0RFC LIKE '%$frm_003%'"
			$S003 = $conexion->query($C003) or die ("Fallo al consultar proveedores: ".$C003);
			while ($DDPV = $S003->fetch_array()) {
				$pNIcxD = dCry2($DDPV['pR0nic']);
				$pRzxD = dCry2($DDPV['pR0RZ']);
				$pRFcxD = $DDPV['pR0RFC'];
				$pIDxD = $DDPV['prov_id'];
				if($pRFcxD == $frm_003 && $pXRoI != $pIDxD){
					$_SESSION['tXFrm']['frm_003'] = 'El RFC es Ya esta registrado '.$pRFcxD.' == '.$frm_003.' && '.$pXRoI.' == '.$pIDxD;
					$_SESSION['m3n3Rr0R_num']++;
				}
				else{
				}
			}
			if($_SESSION['m3n3Rr0R_num'] === 0){
				unset($aRrr4y);
				$frm_001 = eCry2($frm_001);
				$frm_002 = eCry2($frm_002);
				$frm_004 = eCry2($frm_004);
				$frm_005 = eCry2($frm_005);
				$frm_006 = eCry2($frm_006);
				$frm_007 = eCry2($frm_007);
				$frm_008 = eCry2($frm_008);
				$frm_012 = eCry2($frm_012);
				$frm_013 = eCry2($frm_013);
				$frm_014 = eCry2($frm_014);
				$aRrr4y = [
					'pR0RZ' => $frm_002,
					'pR0nic' => $frm_001,
					'pR0CLL' => $frm_004,
					'pR0NE' => $frm_005,
					'pR0NI' => $frm_005,
					'pR0C0L' => $frm_007,
					'pR0CP' => $frm_008,
					'pR0MuAl' => $frm_011,
					'pR0ED0' => $frm_010,
					'pR0PAS' => '52',
					'pR0RFC' => $frm_003,
					'pR0R3P' => $frm_012,
					'pR0T3L1' => $frm_013,
					'pR0MAL' => $frm_014,
					'pR0ACT' => $frm_015
				];
				$p4r4m37r05 = "prov_id = $pXRoI";
				$accion = "actualizar";
				echo '<pre>';print_r($aRrr4y);echo '</pre>';
				ejecutaDB('proveedores', $aRrr4y, $accion, $p4r4m37r05);
				$_SESSION['m3ns4J3'] = 'Se actualizo el proveedor '.dCry2($frm_001);
				bi74c0('eDTPr0V', $_SESSION['m3ns4J3'], '');
				include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
				$accion = 602;
				$d3s = eCry2($Bin4kuru[$accion]);
				Bin4kuru($d3s, $accion, $V=0, $U=0, $F=0, $E=0, $D=0, $pXRoI);

				$exc = TRUE;
				$rl = '../app?accion=pr0VxDT&pXRoI='.$eCry($pXRoI);
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
				$rl = '../app?accion=pr0VxDT&pXRoI='.$eCry($pXRoI);
			}
		}	
		else{
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
			$rl = '../app?accion=pr0VxDT&pXRoI='.$eCry($pXRoI);
		}
		if($exc != TRUE){
			$rl .= '&frm_001='.$eCry($frm_001).'&frm_004='.$eCry($frm_004).'&frm_007='.$eCry($frm_007).'&frm_010='.$eCry($frm_010);
			$rl .= '&frm_002='.$eCry($frm_002).'&frm_005='.$eCry($frm_005).'&frm_008='.$eCry($frm_008).'&frm_011='.$eCry($frm_011);
			$rl .= '&frm_003='.$eCry($frm_003).'&frm_006='.$eCry($frm_006).'&frm_009='.$eCry($frm_009).'&frm_012='.$eCry($frm_012);
			$rl .= '&frm_013='.$eCry($frm_013).'&frm_014='.$eCry($frm_014).'&frm_015='.$eCry($frm_015);	
		}
		llevame($rl);
	}
	//echo $rl;

}
elseif($accion == 'Ac7r3L'){

	if(empty($pp_xx019)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo de Vehiculo';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx017)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo Servicios';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx020)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Tipo Trámites';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(empty($pp_xx018)){
		$_SESSION['m3ns4j3Frm'][] = 'Selecciona Marcas';
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(in_array("ninguno", $pp_xx017)){	$ex17 = 1;	}	elseif(in_array("todos", $pp_xx017)){	$ex17 = 2;	}	else{	$ex17 = 3;	}
	if(in_array("ninguna", $pp_xx018)){	$ex18 = 1;	}	elseif(in_array("todos", $pp_xx018)){	$ex18 = 2;	}	else{	$ex18 = 3;	}
	if(in_array("ninguno", $pp_xx019)){	$ex19 = 1;	}	elseif(in_array("todos", $pp_xx019)){	$ex19 = 2;	}	else{	$ex19 = 3;	}
	if(in_array("ninguno", $pp_xx020)){	$ex20 = 1;	}	elseif(in_array("todos", $pp_xx020)){	$ex20 = 2;	}	else{	$ex20 = 3;	}

	$accion = 'actualizar';
	$p4r4m37r05 = 'prov_id = '.$pp_xx015;//"usuarioID = '$u5h8ir5nm'"; 
	unset($sQl_d474_4rr4y); 
	$sQl_d474_4rr4y = [
		'pR0TV' => $ex19,
		'pR0TS' => $ex17,
		'pR0TT' => $ex20,
		'pR0TM' => $ex18,
	];	
		
	ejecutaDB('proveedores', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

	$C015 = "SELECT * FROM r3l3PM WHERE rFPiDk = $pp_xx015";
	$S015 = $conexion->query($C015) or die ("Fallo al seleccionar Relacion Marca: ".$C015);
	while ($LDDM = $S015->fetch_array()) {
		$iduY = $LDDM['rFPiDk'];
		$p4r4m37r05 = 'rFPiDk = "'.$iduY.'"'; 
		unset($sQl_d474_4rr4y);
		$accion = 'eliminar';
		ejecutaDB('r3l3PM', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	}

	$C016 = "SELECT * FROM r3l3PSr WHERE r3fPiDs = $pp_xx015";
	$S016 = $conexion->query($C016) or die ("Fallo al seleccionar Relacion servicios: ".$C016);
	while ($LDDS = $S016->fetch_array()) {
		$iduY2 = $LDDS['r3fPiDs'];
		$p4r4m37r05 = 'r3fPiDs = "'.$iduY2.'"'; 
		unset($sQl_d474_4rr4y);
		$accion = 'eliminar';
		ejecutaDB('r3l3PSr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	}

	$C017 = "SELECT * FROM r3l3PTr WHERE r3fPiDt = $pp_xx015";
	$S017 = $conexion->query($C017) or die ("Fallo al seleccionar Relacion tramites: ".$C017);
	while ($LDDT = $S017->fetch_array()) {
		$iduY3 = $LDDT['r3fPiDt'];
		$p4r4m37r05 = 'r3fPiDt = "'.$iduY3.'"'; 
		unset($sQl_d474_4rr4y);
		$accion = 'eliminar';
		ejecutaDB('r3l3PTr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	}

	$C018 = "SELECT * FROM r3l3PTV WHERE r3PiDu = $pp_xx015";
	$S018 = $conexion->query($C018) or die ("Fallo al seleccionar Relacion tramites: ".$C018);
	while ($LDDV = $S018->fetch_array()) {
		$iduY4 = $LDDV['r3PiDu'];
		$p4r4m37r05 = 'r3PiDu = "'.$iduY4.'"'; 
		unset($sQl_d474_4rr4y);
		$accion = 'eliminar';
		ejecutaDB('r3l3PTV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	}

	$accion = 'insertar';

	if(!empty($pp_xx017) && !in_array("todos", $pp_xx017) && !in_array("ninguno", $pp_xx017)){
		foreach ($pp_xx017 as $key) {
			unset($sQl_d474_4rr4y); 
			$sQl_d474_4rr4y = [
				'r3fPiDs' => $pp_xx015,
				'r3fSiDs' => $key,
				'Universo' => $Universo
			];	
			ejecutaDB('r3l3PSr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		}
	}

	if(!empty($pp_xx020) && !in_array("todos", $pp_xx020) && !in_array("ninguno", $pp_xx020)){
		foreach ($pp_xx020 as $key) {
			unset($sQl_d474_4rr4y); 
			$sQl_d474_4rr4y = [
				'r3fPiDt' => $pp_xx015,
				'r3fTiDt' => $key,
				'Universo' => $Universo
			];	
			ejecutaDB('r3l3PTr', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		}
	}

	if(!empty($pp_xx018) && !in_array("todos", $pp_xx018) && !in_array("ninguna", $pp_xx018)){
		foreach ($pp_xx018 as $key) {
			unset($sQl_d474_4rr4y); 
			$sQl_d474_4rr4y = [
				'rFPiDk' => $pp_xx015,
				'rFMiDk' => $key,
				'Universo' => $Universo
			];	
			ejecutaDB('r3l3PM', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		}
	}

	if(!empty($pp_xx019 && !in_array("todos", $pp_xx019) && !in_array("ninguno", $pp_xx019))){
		
			foreach ($pp_xx019 as $key) {
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'r3PiDu' => $pp_xx015,
					'r3TViDu' => $key,
					'Universo' => $Universo
				];	
				ejecutaDB('r3l3PTV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			}
		
	}
	llevame('../app?accion=pr0VxVW&pXRoI='.$eCry($pp_xx015));

}
//echo '<pre>';
//print_r($_SESSION['m3ns4J3']);
//print_r($_SESSION['m3n3Rr0R_num']);
//print_r($pp_xx016);
/*foreach ($pp_xx016 as $key => $value) {
	echo '$key: '.$key.' => $value: '.$value.'<br>';
	/*if($key == 'pp_xx016'){
		echo '---------------> ';
		//print_r($value);
		//if (is_array($value) || is_object($value)){
    	foreach ($value as $value1)    {
				echo '$key: '.$value1.' => $value: '.$value.'<br>';
    	}
		//}
	}
}*/
//print_r($_REQUEST);
//echo '</pre>';