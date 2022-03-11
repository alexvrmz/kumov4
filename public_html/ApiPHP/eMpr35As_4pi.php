<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}

$Universo = $_SESSION['Universo'];

if($accion === "eMprxXx21" || $accion == "sV3EMp"){
	include('conexion.php');
 	include('fncnesF0rM5.php');
 	include('funciones.php');
}
if($accion === "eMpr35As" ){
	$u5u = $_SESSION['usuarioID'];
	$flo0 = $dCry($flo0);
	
		$d3m = c0nEmP($flo0, $mdr);
	
	$n_e = c0nNuEmP($flo0, $mdr);
	 
	if($px010 != ''){

		$px001 = $dCry($px001);	$px002 = $dCry($px002); $px003 = $dCry($px003);
		$px004 = $dCry($px004); $px005 = $dCry($px005); $px006 = $dCry($px006);
		$px007 = $dCry($px007);	$px008 = $dCry($px008); //$px009 = $dCry($px009);
		$px010 = $dCry($px010);	$px011 = $dCry($px011);	$px012 = $dCry($px012);
		$px013 = $dCry($px013);	$px014 = $dCry($px014);	$px015 = $dCry($px015);
		$px016 = $dCry($px016);

		/*$SQ3s747 = "SELECT kol0iDn, kol0NoMbn FROM kol0nIAs WHERE kol0MuNn = '".$px011."' ";
		$CQ3s747 = $conexion->query($SQ3s747) or die ("Falló listado de colonias " . $SQ3s747);
		$kol0 = [];
		while ($Lkol0 = $CQ3s747->fetch_assoc()) {
			$arr3 = array(
				'KID09o' => $Lkol0['kol0iDn'],
				'kNoMbn' => $Lkol0['kol0NoMbn']
			);
			array_push($kol0, $arr3);

		}*/
	}


	if($flo0 != ''){
	
		//	$flo0 = $dCry($flo0);
			$QvH3 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiFl074Xu7l0s = '".$flo0."' ";
	
			$Q005 = "SELECT xID7l0, xN4m37l0 FROM x7l07 WHERE xID7l0 = ".$flo0." ";
			$C005 = $conexion->query($Q005) or die ("Falló listado de empresas1" . $Q005);
			$D3MP1 = $C005->fetch_assoc();
			$EPAN = dCry2($D3MP1['xN4m37l0']);
			$EPAR = dCry2($D3MP1['xID7l0']);
			
		
		
	
		$QvH3 .= "ORDER BY xV3hiIDXu7l0s ASC";
		$CvH3 = $conexion->query($QvH3) or die ("Falló listado de Autos" . $QvH3);
		$u5hy68 = []; 
		$NDos = 0;
		while($LVh3C = $CvH3->fetch_assoc()){
			if($LVh3C['xV3hi3C0Xu7l0s'] != ''){ $eC0Xu7l0s = dCry2($LVh3C['xV3hi3C0Xu7l0s']); }
			if($LVh3C['xV3hiPl4c45Xu7l0s'] != ''){ $Pl4c45Xu7l0s = dCry2($LVh3C['xV3hiPl4c45Xu7l0s']); }
			if($LVh3C['xV3hi5ub7ip0Xu7l0s'] != ''){ $ub7ip = dCry2($LVh3C['xV3hi5ub7ip0Xu7l0s']); }
			if($LVh3C['xV3hic0l0rXu7l0s'] != ''){ $c0l0rXu = $LVh3C['xV3hic0l0rXu7l0s']; }
			
	
			$QvH4 = "SELECT * FROM m4rC45v3Hi WHERE m4rCxID5s = '".$LVh3C['xV3hiM4rc4Xu7l0s']."'";
			$CvH4 = $conexion->query($QvH4) or die ("Falló al cargar marcas: ".$QvH4);
	
			$m4r = $CvH4->fetch_array();
			if (empty($m4r['m4rCxIm463N5s'])) {
				if($vst == 1){
					$m4rk = '<p class="card-img-top" style="margin: 11px;margin-left: 0;margin-right: 0; font-weight: bold;font-size: 1.6rem;">'.$m4r['m4rCxD35c5s'].'</p>';
				}
				else{ 
					$m4rk = $m4r['m4rCxD35c5s']; 
				}
			} 
			else {
				if($vst == 1){
					$m4rk = '<img src="dist/img/m4rc45/'.$m4r['m4rCxIm463N5s'].'" class="card-img-top" style="height;height: 32px;width: auto;margin-top: 14px;margin-bottom: 14px;">';
				}
				else {
					$m4rk = $m4r['m4rCxD35c5s'];
	
				}
			}
	
			$QvH5 = "SELECT * FROM m0d3loS WHERE j5uBxIDx = '".$LVh3C['xV3hi5uBm4rc4Xu7l0s']."'";
			$CvH5 = $conexion->query($QvH5) or die ("Falló al cargar modelos: ".$QvH5);
	
			$m0dr = $CvH5->fetch_array();
			if(empty($m0dr['j5uBxMiMgx'])){
				if($vst == 1){
					$mmdl = '<img src="dist/img/m0d3l0s/0.png" class="card-img-top"> ';
				}
				else{
					$mmdl = '<img src="dist/img/m0d3l0s/0.png" class="card-img-top" style="object-fit: cover;width: 55px;height: 22px;">';
				}
			}
			else{
				if($vst == 1){
					$mmdl = '<img src="dist/img/m0d3l0s/'.$m0dr['j5uBxMiMgx'].'" class="card-img-top">';
				}
				else{
					$mmdl = '<img src="dist/img/m0d3l0s/'.$m0dr['j5uBxMiMgx'].'" class="card-img-top" style="object-fit: cover;width: 55px;height: 22px;">';
				}
			}
			
			$fl0t4 = $LVh3C['xV3hiFl074Xu7l0s'];
	
			if($fl0t4 == 0){
				include('front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
				$fl0t4 = lbl_v3h_X0003;
			}
			else{
				$QR67003 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = '".$fl0t4."' ";
				$CR67003 = $conexion->query($QR67003) or die ("Falló listado de flotas" . $QR67003);
	
				$fl0 = $CR67003->fetch_assoc();
				$fl0t4 = dCry2($fl0['xN4m37l0']);
			}
	
			$eMp3 = $LVh3C['xV3hi3MPrXu7l0s'];
			if($eMp3 == 0){
				include('front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
				$eMp3 = lbl_v3h_X0004;
			}
			else{
				$QR67004 = "SELECT eMNICEm FROM eMpR3sA5 WHERE eMIDEm = '".$eMp3."' ";
				$CR67004 = $conexion->query($QR67004) or die ("Falló listado de empresas" . $QR67004);
	
				$Dr3MP = $CR67004->fetch_assoc();
				$eMp3 = dCry2($Dr3MP['eMNICEm']);
			}
	
		
			$veid = $LVh3C['xV3hiIDXu7l0s'];
			$QR6705 = "SELECT D0cIDxS, D0c7ip0xS FROM D0cUM3n705 WHERE D0cv3HiDxS = '".$LVh3C['xV3hiIDXu7l0s']."' ";
			$CR67005 = $conexion->query($QR6705) or die ("Falló listado de docs" . $QR6705);
			$NDos = 0;
			$numd0c = $CR67005->num_rows;
			
			while ($dds = $CR67005->fetch_array()) {
				if($dds['D0c7ip0xS'] == 1 || $dds['D0c7ip0xS'] == 2){
					$NDos++;
				}
			}
			
	
			$x4rr36l0 = array('IDXu7l0s' => $LVh3C['xV3hiIDXu7l0s'],
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
											 'fl0t4' => $fl0t4,
											 'eMp3' => $eMp3,
											 'numd0c' => $numd0c,
											 'NDos' => $NDos,
											 'eD0' => $LVh3C['xV3hiEDOXu7l0s']
	
					);
			array_push($u5hy68, $x4rr36l0); 
			$NDos = 0;
			
		}
	
		$num_v3h = $CvH3->num_rows;
	
		if($_SESSION['v3_c016'] != ''){
			$Q002 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = ".$_SESSION['v3_c016']." ";
			$C002 = $conexion->query($Q002) or die ("Falló listado de relaciones1" . $Q002);
			$fl0 = [];
			while($fl = $C002->fetch_assoc()){
				$fl7iD = $fl['r3FFloO00'];
				$QR6704 = "SELECT xID7l0, xN4m37l0 FROM x7l07 WHERE xID7l0 = ".$fl7iD." ";
				$CR67004 = $conexion->query($QR6704) or die ("Falló listado de flotas" . $QR6704);
				$dFlo0 = $CR67004->fetch_assoc();
				$xN4m37 = dCry2($dFlo0['xN4m37l0']);
				$arr4 = array(
					'xID7' => $fl['xID7l0'],
					'xN4m37' => $xN4m37
				);
				array_push($fl0, $arr4);
			}		
			$numfl0 = $C002->num_rows;
		}
	
		
	
		$Q001 = "SELECT eMIDEm, eMRZEm, eMNICEm FROM eMpR3sA5 WHERE Universo = '".$Universo."' ";
		$C001 = $conexion->query($Q001) or die ("Falló listado de Empresas" . $Q001);
	
		$eMpT6 = [];
		while($eMy6 = $C001->fetch_assoc()){
			$Q003 = "SELECT r3F3mP00 FROM r3l3mpfl00 WHERE r3F3mP00 = ".$eMy6['eMIDEm']." ";
			$C003 = $conexion->query($Q003) or die ("Falló listado de relaciones2" . $Q003);
			$nuR3 = $C003->num_rows;
	
			$xN4m37 = dCry2($eMy6['eMRZEm']);
			$XNc = dCry2($eMy6['eMNICEm']);
			$arr4a = array(
				'A001' => $eMy6['eMIDEm'],
				'A002' => $xN4m37,
				'A003' => $XNc,
				'A004' => $nuR3
			);
			array_push($eMpT6, $arr4a);
		}
		$num3m = $C001->num_rows;
	
	}

	
}

/// --- accion agregar Empresa
elseif ($accion == 'eMprxXx21') {
	/// --- las partes de pp007 comentadas corresponden a colonias cuando esten en bd (2021/05/26)
	$_SESSION['err'] = 0;
	unset($_SESSION['m3ns4j3Frm']);
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');

	if(!v4l_rfc($pp_xx012) && V4lRQ($pp_xx012)){
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
		$SQ3s725 = "SELECT eMRFCEm FROM eMpR3sA5 WHERE eMRFCEm = '".$pp_xx012."' ";
		$CQ3s725 = $conexion->query($SQ3s725) or die ("Falló listado de empresas" . $SQ3s725);
		$ckRfse = $CQ3s725->num_rows;
		if($ckRfse != 0){
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0102;
			$_SESSION['err'] ++;
		}
	}

	if(!v4l_cp($pp_xx008) && V4lRQ($pp_xx008)){
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
	elseif(strlen($pp_xx002) > 64){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0106;
		$_SESSION['err'] ++;
	}

	if(!V4lRQ($pp_xx003)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0107;
		$_SESSION['err'] ++;
	}
	elseif(strlen($pp_xx003) > 30){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0108;
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx004) > 30){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0109;
		$_SESSION['err'] ++;
	}

	if(strlen($pp_xx005) > 20){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0110;
		$_SESSION['err'] ++;
	}
	
	if(strlen($pp_xx006) > 20){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0111;
		$_SESSION['err'] ++;
	}
	
	if(!V4lRQ($pp_xx009 || $pp_xx009 != '52')){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0113;
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

	if(strlen($pp_xx007) > 25){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0116;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}
	if(strlen($pp_xx013) > 15){
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
	
	if(!v4lEm4Il($pp_xx015)){
		$_SESSION['m3ns4j3Frm'][] = lbl_8i7_x0120;
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}
		
	$pp_xx002 = limpia($pp_xx002);
	$pp_xx003 = limpia($pp_xx003);
	$pp_xx004 = limpia($pp_xx004);
	$pp_xx005 = limpia($pp_xx005);
	$pp_xx006 = limpia($pp_xx006);
	$pp_xx007 = limpia($pp_xx007);
	$pp_xx012 = strtoupper($pp_xx012);
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
		$ex17 = $pp_xx017;

		$accion = 'insertar';
		$p4r4m37r05 = '';//"usuarioID = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y); 
		$f = date('Y-m-d H:i:s');
		$sQl_d474_4rr4y = [
			'eMRZEm' => $ex02,
			'eMiDuS3Em' => $ex16,
			'eMNICEm' => $ex03,
			'eMCLLEm' => $ex04,
			'eMNEEm' => $ex05,
			'eMNIEm' => $ex06, 
			'eMCOLEm' => $ex07,
			'eMCPEm' => $ex08,
			'eMMUNEm' => $ex11,
			'eMEDOEm' => $ex10,
			'eMP4ISEm' => $ex09,
			'eMRFCEm' => $ex12,
			'eMREPEm' => $ex13,
			'eMTELEm' => $ex14,
			'eMEMLEm' => $ex15,
			'eMFSEm' => $f,
			'eMACTEm' => '1',
			'Universo' => $Universo
		];	
		
		$ne = ejecutaDB('eMpR3sA5', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0121.$pp_xx003;
		bi74c0('addEmpR', $_SESSION['m3ns4J3'], '');

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
		$accion = 300;
		$d3s = eCry2($Bin4kuru[$accion]);
		Bin4kuru($d3s, $accion, $V=0, $U=0, $F=0, $ne, $D=0, $P=0);
		
		$brr4 = true;
		if($pp_xx017 != ''){
			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = [
				'r3F3mP00' => $ne,
				'r3FFloO00' => $ex17
			];	
			$accion = 'insertar';
				ejecutaDB('r3l3mpfl00', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		}

		unset($px001); unset($px002);	unset($px003);	unset($px004);	unset($px005); unset($px006);	unset($px007); unset($px008);
		/*unset($px001);*/unset($px010);	unset($px011);	unset($px012); unset($px013);	unset($px014); unset($px015);	unset($px016);
	
	} 
	

	if($pp_xx017 != ''){
		$rl = '../app?accion=eMpr35As&flo0='.$eCry($pp_xx017);
	}
	else {
		$rl = '../app?accion=eMpr35As';
	}

	if($brr4 == false){
		$rl .= '&px001='.$eCry($pp_xx001);	$rl .= '&px002='.$eCry($pp_xx002); $rl .= '&px003='.$eCry($pp_xx003);	$rl .= '&px004='.$eCry($pp_xx004);
		$rl .= '&px005='.$eCry($pp_xx005);	$rl .= '&px006='.$eCry($pp_xx006);	$rl .= '&px007='.$eCry($pp_xx007);	$rl .= '&px008='.$eCry($pp_xx008);
		/*$rl .= '&px009='.$eCry($pp_xx009);*/	$rl .= '&px010='.$eCry($pp_xx010); 	$rl .= '&px011='.$eCry($pp_xx011);	$rl .= '&px012='.$eCry($pp_xx012);
		$rl .= '&px013='.$eCry($pp_xx013);	$rl .= '&px014='.$eCry($pp_xx014);	$rl .= '&px015='.$eCry($pp_xx015);	$rl .= '&px016='.$eCry($pp_xx016).'&px017='.$eCry($pp_xx017);
	}
	llevame($rl);
}
elseif($accion == 'emPr3Edi7'){
	if(!empty($eMpr3)){
		$frm_001 = $dCry($frm_001);	$frm_004 = $dCry($frm_004);	$frm_007 = $dCry($frm_007);	$frm_010 = $dCry($frm_010);
		$frm_002 = $dCry($frm_002);	$frm_005 = $dCry($frm_005);	$frm_008 = $dCry($frm_008);	$frm_011 = $dCry($frm_011);
		$frm_003 = $dCry($frm_003);	$frm_006 = $dCry($frm_006);	$frm_009 = $dCry($frm_009);	$frm_012 = $dCry($frm_012);
		$frm_013 = $dCry($frm_013);	$frm_014 = $dCry($frm_014);	$frm_015 = $dCry($frm_015);	

		$eMpr3 = $dCry($eMpr3);
		$C002 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = $eMpr3";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar empresa: ".$C002);
		$DP = $S002->fetch_assoc();
		$xPxIDH = $DP['eMIDEm'];
		$xPxNICH = $DP['eMNICEm']; if($xPxNICH != ''){ $xPxNICH = dCry2($DP['eMNICEm']); }
		$xPxRZH = $DP['eMRZEm']; if($xPxRZH != ''){ $xPxRZH = dCry2($DP['eMRZEm']); }
		$xPxRFCH = $DP['eMRFCEm'];
		$xPxCLLH = $DP['eMCLLEm']; if($xPxCLLH != ''){ $xPxCLLH = dCry2($DP['eMCLLEm']); }
		$xPxNeH = $DP['eMNEEm']; if($xPxNeH != ''){ $xPxNeH = dCry2($DP['eMNEEm']); }
		$xPxNiH = $DP['eMNIEm']; if($xPxNiH != ''){ $xPxNiH = dCry2($DP['eMNIEm']); }
		$xPxC0lH = $DP['eMCOLEm']; if($xPxC0lH != ''){ $xPxC0lH = dCry2($DP['eMCOLEm']); }
		$xPxcPH = $DP['eMCPEm']; if($xPxcPH != ''){ $xPxcPH = dCry2($DP['eMCPEm']); }
		$xPxMAlH = C0nMuniD($DP['eMMUNEm']);
		$xPxMAlHid = $DP['eMMUNEm'];
		$xPxEd0H = consulta_estado_id(($DP['eMEDOEm']);
		$xPxEd0Hid = $DP['eMEDOEm'];
		$xPxPisH = 'México';
		$xPxR3pH = $DP['eMREPEm']; if($xPxR3pH != ''){ $xPxR3pH = dCry2($DP['eMREPEm']); }
		$xPxTl1H = $DP['eMTELEm']; if($xPxTl1H != ''){ $xPxTl1H = dCry2($DP['eMTELEm']); }
		$xPxeMlH = $DP['eMEMLEm']; if($xPxeMlH != ''){ $xPxeMlH = dCry2($DP['eMEMLEm']); }
		$xPxFRH = $DP['eMFSEm'];
		$xPxACTH = $DP['eMACTEm'];
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta ID de Empresa';
		$rl = 'app?accion=eMpr35As';
		llevame($rl);
	}
}
elseif($accion == 'sV3EMp'){
	if($eMpr3 == ''){
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Falta el ID de Empresa';
		$rl = '../app?accion=eMpr35As';
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
		
		if(!v4l_rfc($frm_003)){
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_003'] = 'El RFC es incorrecto.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_003']);
		} 
		
		if($frm_015 == 'nada') {
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_015'] = 'El Campo Activo es obligatorio.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_015']);
		}

		if(!v4l_cp($frm_008)) {
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_008'] = 'El CP es Incorrecto.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_008']);
		}

		if(!v4lEm4Il($frm_014)) {
			$_SESSION['m3n3Rr0R_num']++;
			$_SESSION['tXFrm']['frm_014'] = 'El Email es Incorrecto.';
		}
		else{
			unset($_SESSION['tXFrm']['frm_014']);
		}
	
		$frm_001 = limpia($frm_001);
		$frm_002 = limpia($frm_002);
		$frm_003 = limpia($frm_003);
		$frm_003 = strtoupper($frm_003);
		$frm_004 = limpia($frm_004);
		$frm_005 = limpia($frm_005);
		$frm_006 = limpia($frm_006);
		$frm_007 = limpia($frm_007);
		$frm_012 = limpia($frm_012);
		$frm_013 = limpia($frm_013);
		$frm_014 = strtolower($frm_014);
	
		if($_SESSION['m3n3Rr0R_num'] === 0){

			$C003 = "SELECT eMIDEm, eMNICEm, eMRZEm, eMRFCEm FROM eMpR3sA5"; // WHERE eMNICEm LIKE '%$frm_001%' OR eMRZEm LIKE '%$frm_002%' OR eMRFCEm LIKE '%$frm_003%'"
			$S003 = $conexion->query($C003) or die ("Fallo al consultar empresas: ".$C003);
			while ($DDPV = $S003->fetch_array()) {
				$pNIcxD = dCry2($DDPV['eMNICEm']);
				$pRzxD = dCry2($DDPV['eMRZEm']);
				$pRFcxD = $DDPV['eMRFCEm'];
				$pIDxD = $DDPV['eMIDEm'];
				if($pRFcxD == $frm_003 && $eMpr3 != $pIDxD){
					$_SESSION['tXFrm']['frm_003'] = 'El RFC es Ya esta registrado '.$pRFcxD.' == '.$frm_003.' && '.$eMpr3.' == '.$pIDxD;
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
					'eMRZEm' => $frm_002,
					'eMNICEm' => $frm_001,
					'eMCLLEm' => $frm_004,
					'eMNEEm' => $frm_005,
					'eMNIEm' => $frm_006,
					'eMCOLEm' => $frm_007,
					'eMCPEm' => $frm_008,
					'eMMUNEm' => $frm_011,
					'eMEDOEm' => $frm_010,
					'eMP4ISEm' => '52',
					'eMRFCEm' => $frm_003,
					'eMREPEm' => $frm_012,
					'eMTELEm' => $frm_013,
					'eMEMLEm' => $frm_014,
					'eMACTEm' => $frm_015
				];
				$p4r4m37r05 = "eMIDEm = $eMpr3";
				$accion = "actualizar";
				echo '<pre>';print_r($aRrr4y);echo '</pre>';
				ejecutaDB('eMpR3sA5', $aRrr4y, $accion, $p4r4m37r05);
				$_SESSION['m3ns4J3'] = 'Se actualizo la empresa '.dCry2($frm_001);
				bi74c0('eDTEmpR', $_SESSION['m3ns4J3'], '');
				include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
				$accion = 301;
				$d3s = eCry2($Bin4kuru[$accion]);
				Bin4kuru($d3s, $accion, $V=0, $U=0, $F=0, $eMpr3, $D=0, $P=0);

				$rl = '../app?accion=emPr3Edi7&eMpr3='.$eCry($eMpr3);
				$exc = TRUE;
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
				$rl = '../app?accion=emPr3Edi7&eMpr3='.$eCry($eMpr3);
			}
		}	
		else{
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = 'Revisa los Campos indicados';
			$rl = '../app?accion=emPr3Edi7&eMpr3='.$eCry($eMpr3);
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