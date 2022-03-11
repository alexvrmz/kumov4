<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];

if($accion === "sDrft5" || $accion === 'ghYtD85' || $accion === 'jHyytR3' || $accion === 'hY776' || $accion === 'd3letkm' ||
	 $accion === "EdI7kM" || $accion === 'Eda70' || $accion === 'd3svA' ){
	include('conexion.php');
 	include('funciones.php'); 
 	include('fncnesF0rM5.php');
}

/// --- accion Listado de Autos
if($accion === "v3hiXs"){

	if($eMpr3 != '' && $mdr == 2){
		$eMpr3 = $dCry($eMpr3);
		$QvH3 = "SELECT * FROM v3hiXu7l0s WHERE xV3hi3MPrXu7l0s = '".$eMpr3."' ";

		$Q005 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = '".$eMpr3."'";
		$C005 = $conexion->query($Q005) or die ("Falló listado de empresas" . $Q005);
		$D3MP1 = $C005->fetch_assoc();
		$EPAN = dCry2($D3MP1['eMNICEm']);
		$EPAR = dCry2($D3MP1['eMRZEm']);
		$EPAC = dCry2($D3MP1['eMCLLEm']);
		$EPANE = dCry2($D3MP1['eMNEEm']);
		$EPANI = dCry2($D3MP1['eMNIEm']);
		$EPACO = dCry2($D3MP1['eMCOLEm']);
		$EPACP = dCry2($D3MP1['eMCPEm']);
		$EPAMN = $D3MP1['eMMUNEm'];
		$EPAES = $D3MP1['eMEDOEm'];
		$EPAPS = $D3MP1['eMP4ISEm'];
		$EPARF = $D3MP1['eMRFCEm'];
		$EPARP = dCry2($D3MP1['eMREPEm']);
		$EPATL = dCry2($D3MP1['eMTELEm']);
		$EPAEM = dCry2($D3MP1['eMEMLEm']);
		
	}
	elseif($flo0 != '' && $mdr == 1){
		$flo0 = $dCry($flo0);
		$QvH3 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiFl074Xu7l0s = '".$flo0."' ";

		$Q005 = "SELECT xID7l0, xN4m37l0 FROM x7l07 WHERE xID7l0 = ".$flo0." ";
		$C005 = $conexion->query($Q005) or die ("Falló listado de empresas" . $Q005);
		$D3MP1 = $C005->fetch_assoc();
		$EPAN = dCry2($D3MP1['xN4m37l0']);
		$EPAR = dCry2($D3MP1['xID7l0']);
		$u5hy68 = c0nUs($flo0, 0);
	}
	else{
		$QvH3 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiUIDXu7l0s = '".$usuario_id."' ";
		if($flo0 != ''){
			$fl0o0 = $dCry($flo0);
			$QvH3 .= "AND xV3hiFl074Xu7l0s = '".$fl0o0."' ";
		}
	}

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

	if($_SESSION['v3_c016'] != 'nada' && !empty($_SESSION['v3_c016'])){
		$Q002 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = ".$_SESSION['v3_c016']." ";
		$C002 = $conexion->query($Q002) or die ("Falló listado de relaciones 1: " . $Q002);
		$fl0 = [];
		while($fl = $C002->fetch_assoc()){
			$fl7iD = $fl['r3FFloO00'];
			$QR6704 = "SELECT xID7l0, xN4m37l0 FROM x7l07 WHERE xID7l0 = ".$fl7iD." ";
			$CR67004 = $conexion->query($QR6704) or die ("Falló listado de flotas" . $QR6704);
			$dFlo0 = $CR67004->fetch_assoc();
			$xN4m37 = dCry2($dFlo0['xN4m37l0']);
			$arr4 = array(
				'xID7' => $dFlo0['xID7l0'],
				'xN4m37' => $xN4m37
			);
			array_push($fl0, $arr4);
		}		
		$numfl0 = $C002->num_rows;
	}

	

	$Q001 = "SELECT eMIDEm, eMRZEm, eMNICEm FROM eMpR3sA5 WHERE eMiDuS3Em = '".$usuario_id."' ";
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
/// --- accion Consultar Datos de un Autos
elseif($accion === "v3hFh4_sd04"){

	$gju8UUy = $dCry($gju8UUy);
	$px01 = $dCry($px01);	$px02 = $dCry($px02);	$px03 = $dCry($px03);	$px04 = $dCry($px04);	//$px05 = $dCry($px05);
	$px06 = $dCry($px06);	$px07 = $dCry($px07);	$px08 = $dCry($px08);	$px09 = $dCry($px09);	$px10 = $dCry($px10);
	$px11 = $dCry($px11);	$px12 = $dCry($px12); $px13 = $dCry($px13); $px14 = $dCry($px14);	$px15 = $dCry($px15);
 
	if(!empty($gju8UUy)){
    // --- Consulta para datos de Auto
    $q5u5xXd = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = '".$gju8UUy."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener datos de Auto " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			if(empty($px04) || !is_numeric($px04)){ $m0f = $dU5u4o['xV3hiM4rc4Xu7l0s']; } else { $m0f = $px04;}
			$QvH5 = "SELECT * FROM m0d3loS WHERE j5uBxMIDx = ".$m0f.""; 
			// WHERE j5uBxIDx = '".$dU5u4o['xV3hi5uBm4rc4Xu7l0s']."'";
			$CvH5 = $conexion->query($QvH5) or die ("Falló al cargar modelos: ".$QvH5);
			
			$suBmk = [];
			while($m0dr = $CvH5->fetch_array()){
				$x4rr36l0x = array(
					'BxIDx' => $m0dr['j5uBxIDx'],
					'BxD35x' =>$m0dr['j5uBxD35x'],
					//'BxMIDx' => $m0dr['j5uBxMIDx']
				);
				array_push($suBmk, $x4rr36l0x); 
			}

			
			$v3c0 = dCry2($dU5u4o['xV3hi3C0Xu7l0s']);
			$Pl4c45X = dCry2($dU5u4o['xV3hiPl4c45Xu7l0s']);
			$vINX = dCry2($dU5u4o['xV3hivINXu7l0s']);
			$Su87ip0Xu = dCry2($dU5u4o['xV3hi5ub7ip0Xu7l0s']);
			$m070rs = dCry2($dU5u4o['xV3him070rXu7l0s']);

			$fl0t4 = $dU5u4o['xV3hiFl074Xu7l0s'];

			$QR67003 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = '".$fl0t4."' ";
			$CR67003 = $conexion->query($QR67003) or die ("Falló listado de flotas" . $QR67003);

			$fl0 = $CR67003->fetch_assoc();
			$fl0t4 = $fl0['xN4m37l0'];

      $x4rr36l0 = array(
				'v3hiIDXu' => $dU5u4o['xV3hiIDXu7l0s'],
				'v3hi3C0Xu' => $v3c0,
				'Pl4c45X' => $Pl4c45X,
				'vINX' => $vINX,
				'Su87ip0Xu' => $Su87ip0Xu,
				'4nh0s' =>$dU5u4o['xV3hi4n0Xu7l0s'],
				'c0l0rs' => $dU5u4o['xV3hic0l0rXu7l0s'],
				'Pu3rt45' => $dU5u4o['xV3hiPu3rt45Xu7l0s'],
				'm070rs' => $m070rs,
				'Mot0r7p' => $dU5u4o['xV3hi7Mot0rXu7l0s'],
				'cIlInDross' => $dU5u4o['xV3hicIlInDrossXu7l0s'],
				'lI7r05s' => $dU5u4o['xV3hilI7r05Xu7l0s'],
				'M4rc4s' => $dU5u4o['xV3hiM4rc4Xu7l0s'],
				'SuBm4rc4' => $dU5u4o['xV3hi5uBm4rc4Xu7l0s'],
				'7r4N5' => $dU5u4o['xV3hi7r4N5Xu7l0s'],
				'fl0t4' => $QR67003
			);
      array_push($d4705_u5u, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de usuario a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=5u540l');
  }
 
}
/// --- accion Actualizar Auto en BD
elseif ($accion === 'ghYtD85') {
	if(!empty($gju8UUy)){
		$_SESSION['err'] = 0;
		unset($_SESSION['m3ns4j3Frm']);
		if(!V4lRQ($pp_xx001)){
			$_SESSION['m3ns4j3Frm']['pp_xx001'] = "El Campo ECO es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!V4lRQ($pp_xx002)){
			$_SESSION['m3ns4j3Frm']['pp_xx002'] = "El Campo Matricula es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		

		if(!V4lRQ($pp_xx003)){
			$_SESSION['m3ns4j3Frm']['pp_xx003'] = "El Campo VIN es Obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!V4lRQ($pp_xx004)){
			$_SESSION['m3ns4j3Frm']['pp_xx004'] = "El Campo Marca es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		elseif(!is_numeric($pp_xx004)){
			$_SESSION['m3ns4j3Frm']['pp_xx004'] = "El Campo Marca no es válido.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!V4lRQ($pp_xx005)){
			$_SESSION['m3ns4j3Frm']['pp_xx005'] = "El Campo Modelo es obligatorio, se recupero información previa.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		elseif(!is_numeric($pp_xx005)){
			$_SESSION['m3ns4j3Frm']['pp_xx005'] = "El Campo Modelo no es válido.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!V4lRQ($pp_xx007)){
			$_SESSION['m3ns4j3Frm']['pp_xx007'] = "El Campo Año es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		elseif(!v4l_anho($pp_xx007)){
			$_SESSION['m3ns4j3Frm']['pp_xx007'] = "El Campo Año puede contener 4 Digitos ejemplo: \"2021\".";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!V4lRQ($pp_xx008)){
			$_SESSION['m3ns4j3Frm']['pp_xx008'] = "El Campo Color es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		elseif(!is_numeric($pp_xx008)){
			$_SESSION['m3ns4j3Frm']['pp_xx008'] = "El Campo Color no es válido.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!is_numeric($pp_xx009) || strlen($pp_xx009) > 2){
			$_SESSION['m3ns4j3Frm']['pp_xx009'] = "El Campo Puertas no es válido, solo se permiten 2 Digitos.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		

		if(!V4lRQ($pp_xx011)){
			$_SESSION['m3ns4j3Frm']['pp_xx011'] = "El Campo Tipo Motor es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		elseif(!is_numeric($pp_xx011)){
			$_SESSION['m3ns4j3Frm']['pp_xx011'] = "El Campo Tipo Motor no es válido.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		
		if(!V4lRQ($pp_xx010)){
			$_SESSION['m3ns4j3Frm']['pp_xx010'] = "El Campo Número de Motor es obligatorio";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!is_numeric($pp_xx012) && strlen($pp_xx012) > 2){
			$_SESSION['m3ns4j3Frm']['pp_xx012'] = "El Campo Cilindros solo puede contener 2 digitos";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!is_numeric($pp_xx013) && strlen($pp_xx013) > 4){
			$_SESSION['m3ns4j3Frm']['pp_xx013'] = "El Campo Litros no es válido, solo se permite hasta 4 digitos.";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		if(!is_numeric($pp_xx014) || !V4lRQ($pp_xx014)){
			$_SESSION['m3ns4j3Frm']['pp_xx014'] = "El Campo Transmisión no es válido";
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}

		$pp_xx001 = strtoupper(limpia($pp_xx001));
		$pp_xx002 = strtoupper(limpia($pp_xx002));
		$pp_xx003 = strtoupper(limpia($pp_xx003));
		$pp_xx006 = strtoupper(limpia($pp_xx006));
		$pp_xx007 = limpia($pp_xx007);
		$pp_xx009 = limpia($pp_xx009);
		$pp_xx010 = strtoupper(limpia($pp_xx010));
		$pp_xx012 = limpia($pp_xx012);
		$pp_xx013 = limpia($pp_xx013);

		$C006 = "SELECT xV3hivINXu7l0s, xV3hiPl4c45Xu7l0s, xV3him070rXu7l0s, xV3hiIDXu7l0s FROM v3hiXu7l0s"; // WHERE xV3hivINXu7l0s = '".."' OR xV3hiPl4c45Xu7l0s = '".."' ";
		$S006 = $conexion->query($C006) or die ("Fallo al consultar VIN y Matricula");
		while ($DV = $S006->fetch_assoc()) {
			$v = dCry2($DV['xV3hivINXu7l0s']);
			$p = dCry2($DV['xV3hiPl4c45Xu7l0s']);
			$m = dCry2($DV['xV3him070rXu7l0s']);
			$vi = $DV['xV3hiIDXu7l0s'];
		
			if($v === $pp_xx003 && $vi !== $gju8UUy){
				$msv = true;
			}
			if($p === $pp_xx002 && $vi !== $gju8UUy){
				$msp = true;
			}
			if($m === $pp_xx010 && $vi !== $gju8UUy){
				$msm = true;
			}
				
		}

		if($msv == true && $msp != true && $msm != true && !empty($pp_xx003)){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm']['pp_xx003'] = 'El VIN ('.$pp_xx003.') ya esta registrado, se recupera el anterior';
			$_SESSION['err'] ++;
		}
		elseif($msp == true && $msv != true && $msm != true){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm']['pp_xx002'] = 'La Matricula ('.$pp_xx002.') ya esta registrada, se recupera la anterior';
			$_SESSION['err'] ++;
		}
		/*elseif($msm == true && $msv != true && $msp != true){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El número de motor ('.$pp_xx010.') ya esta registrado';
			$_SESSION['err'] ++;
		}*/
		elseif($msv == true && $msp == true && $msm != true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN ('.$pp_xx003.') y la Matricula ('.$pp_xx002.') ya estan registrados, se recuperan los anteriores';
			$_SESSION['err'] ++;
		}
		elseif($msv != true && $msp == true && $msm == true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'La Matricula ('.$pp_xx002.') y el número de motor ('.$pp_xx010.') estan registrados';
			$_SESSION['err'] ++;
		}
		elseif($msv == true && $msm == true && $msp != true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN ('.$pp_xx003.') y el número de motor ('.$pp_xx010.') estan registrados';
			$_SESSION['err'] ++;
		}
		elseif($msv == true && $msm == true && $msp == true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN ('.$pp_xx003.'), la matricula ('.$pp_xx002.') y el número de motor ('.$pp_xx010.') estan registrados';
			$_SESSION['err'] ++;
		}

		if($_SESSION['err'] == 0 && $_SESSION['m3n3Rr0R'] != 'si'){

			$px01 = eCry2($pp_xx001);	$px02 = eCry2($pp_xx002);	$px03 = eCry2($pp_xx003);	$px04 = $pp_xx004;	$px05 = $pp_xx005;
			$px06 = eCry2($pp_xx006);	$px07 = $pp_xx007;	$px08 = $pp_xx008;	$px09 = $pp_xx009;	
			$px10 = eCry2($pp_xx010);	$px11 = $pp_xx011;	$px12 = $pp_xx012;	$px13 = $pp_xx013; $px14 = $pp_xx014;
			
			$accion = 'actualizar';
			unset($sQl_d474_4rr4y);
			$dfg = date('Y-m-d H:i:s');
			$sQl_d474_4rr4y = [
				'xV3hi3C0Xu7l0s' => $px01,
				'xV3hiPl4c45Xu7l0s' => $px02,
				'xV3hivINXu7l0s' => $px03,
				'xV3hiM4rc4Xu7l0s' => $px04,
				'xV3hi5uBm4rc4Xu7l0s' => $px05,
				'xV3hi5ub7ip0Xu7l0s' => $px06,
				'xV3hi4n0Xu7l0s' => $px07,
				'xV3hic0l0rXu7l0s' => $px08,
				'xV3hiPu3rt45Xu7l0s' => $px09,
				'xV3him070rXu7l0s' => $px10,
				'xV3hi7Mot0rXu7l0s' => $px11,
				'xV3hicIlInDrossXu7l0s' => $px12,
				'xV3hilI7r05Xu7l0s' => $px13,
				'xV3hi7r4N5Xu7l0s' => $px14
			];	
			$p4r4m37r05 = "xV3hiIDXu7l0s = '$gju8UUy'"; 
			ejecutaDB('v3hiXu7l0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
			$accion = 502;
			$d3s = eCry2($Bin4kuru[$accion]);
			Bin4kuru($d3s, $accion, $gju8UUy, $U=0, $F=0, $E=0, $D=0, $P=0);
					
			$C007 = "SELECT * FROM D0cUM3n705 WHERE D0cv3HiDxS = $gju8UUy AND D0c7ip0xS = 13 ORDER BY `D0cUM3n705`.`D0cIDxS` DESC LIMIT 1 ";
			$S007 = $conexion->query($C007) or die ("Fallo al consultar placas: ".$C007);
			$DP = $S007->fetch_assoc();
			$PAC = dCry2($DP['D0cD3SxS']);
			$PACID = $DP['D0cIDxS'];
			
			if($PAC != $pp_xx002){
				$accion = 'insertar';
				unset($p4r4m37r05);
				unset($sQl_d474_4rr4y);
				$dfg = date('Y-m-d H:i:s');
				$sQl_d474_4rr4y = [
					'D0cD3SxS' => $px02,
					'D0cIMxS' => 0,
					'D0cFil3xS' => NULL,
					'D0cv3HiDxS' => $gju8UUy,
					'D0cu53RxS' => 0,
					'D0cALTxS' => NULL,
					'D0c4c7iv0xS' => 1,
					'D0c7ip0xS' => 13,
					'D0cFSxS' => $dfg,
					'D0cFVxS' => $dfg,
					'D0cFDxS' => $dfg,
					'Universo' => $Universo
				];	
				$ddiD = ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				bi74c0('addPl4', 'Se Agregarón las Placas: '.$pp_xx002.' al Auto: '.$pp_xx001, '');	
				$accion = 'actualizar';
				unset($p4r4m37r05);
				unset($sQl_d474_4rr4y);
				$p4r4m37r05 = "D0cIDxS = '$PACID'";
				$sQl_d474_4rr4y = [
					'D0c4c7iv0xS' => 0
				];	
				ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				bi74c0('addPl4', 'Se Desactivaron las Placas: '.$PAC.' al Auto: '.$pp_xx001, '');	

				$accion = 503;
				$d3s = eCry2($Bin4kuru[$accion]);
				Bin4kuru($d3s, $accion, $gju8UUy, $U=0, $F=0, $E=0, $PACID, $P=0);	
				$accion = 501;
				$d3s = eCry2($Bin4kuru[$accion]);
				Bin4kuru($d3s, $accion, $gju8UUy, $U=0, $F=0, $E=0, $ddiD, $P=0);	
							
			}
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x029.$pp_xx001;
			bi74c0('3dtVh3', $_SESSION['m3ns4J3'], '');
			
		}
	}
	
	$rl = '../app?accion=v3hFh4_sd04';
	$rl .= '&gju8UUy='.$eCry($gju8UUy);
	$rl .= '&px01='.$eCry($pp_xx001);	$rl .= '&px02='.$eCry($pp_xx002);	$rl .= '&px03='.$eCry($pp_xx003);
	if(!empty($pp_xx004)) { $rl .= '&px04='.$eCry($pp_xx004); }	/*$rl .= '&px05='.$eCry($pp_xx005);*/	$rl .= '&px06='.$eCry($pp_xx006);
	$rl .= '&px07='.$eCry($pp_xx007);	$rl .= '&px08='.$eCry($pp_xx008);	$rl .= '&px09='.$eCry($pp_xx009);
	$rl .= '&px10='.$eCry($pp_xx010);	$rl .= '&px11='.$eCry($pp_xx011);	$rl .= '&px12='.$eCry($pp_xx012);
	$rl .= '&px13='.$eCry($pp_xx013);	$rl .= '&px14='.$eCry($pp_xx014);

  llevame($rl);
	
}
/// --- accion agregar Auto
elseif ($accion == 'sDrft5') {

  

	$_SESSION['err'] = 0;
	if(!V4lRQ($v3_c001)){
    $_SESSION['m3ns4j3Frm'][] = "El nombre (ECO) es Obligatorio";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!V4lRQ($v3_c002)){
    $_SESSION['m3ns4j3Frm'][] = "La matricula es Obligatoria";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!V4lRQ($v3_c003)){
    $_SESSION['m3ns4j3Frm'][] = "EL VIN (Número de Serie) es Obligatior";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!v4l_anho($v3_c007)){
    $_SESSION['m3ns4j3Frm'][] = "La Fecha solo puede contener 4 Digitos \"2021\" ";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}
	if(!v4l_srmtr($v3_c010) && $v3_c010 != ''){
		$_SESSION['m3ns4j3Frm'][] = "El Número de Motor Contiene Caracteres no Validos o esta vacio.";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!is_numeric($v3_c012) && !empty($v3_c012)){
		$_SESSION['m3ns4j3Frm'][] = "El campo Cilindros solo se permiten Números";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!is_numeric($v3_c009)){
		$_SESSION['m3ns4j3Frm'][] = "El campo Puertas solo se permiten Números";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!is_numeric($v3_c013)){
		$_SESSION['m3ns4j3Frm'][] = "El campo Litros Puertas solo se permiten Números";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	if(!is_numeric($v3_c017)){
		$_SESSION['m3ns4j3Frm'][] = "El campo Kilometraje solo se permiten Números";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}
	elseif(empty($v3_c017)){
		$_SESSION['m3ns4j3Frm'][] = "El campo Kilometraje es obligatorio";
		$_SESSION['m3n3Rr0R'] = 'si';
		$_SESSION['err'] ++;
	}

	$_SESSION['v3_c001'] = strtoupper(limpia($v3_c001));	$_SESSION['v3_c002'] = strtoupper(limpia($v3_c002));	$_SESSION['v3_c003'] =  strtoupper(limpia($v3_c003));
	$_SESSION['v3_c004'] = $v3_c004; 	$_SESSION['v3_c005'] = $v3_c005;	$_SESSION['v3_c006'] = limpia($v3_c006);
	$_SESSION['v3_c007'] = limpia($v3_c007);	$_SESSION['v3_c008'] = $v3_c008;	$_SESSION['v3_c009'] = limpia($v3_c009);	
	$_SESSION['v3_c010'] = limpia($v3_c010);	$_SESSION['v3_c011'] = $v3_c011;	$_SESSION['v3_c012'] = limpia($v3_c012);
	$_SESSION['v3_c013'] = limpia($v3_c013);	$_SESSION['v3_c014'] = $v3_c014;	$_SESSION['v3_c015'] = $v3_c015;
	$_SESSION['v3_c016'] = $v3_c016; 	$_SESSION['v3_c017'] = $v3_c017;


	$C006 = "SELECT xV3hivINXu7l0s, xV3hiPl4c45Xu7l0s, xV3him070rXu7l0s, xV3hi3C0Xu7l0s FROM v3hiXu7l0s WHERE Universo = $Universo"; // WHERE xV3hivINXu7l0s = '".."' OR xV3hiPl4c45Xu7l0s = '".."' ";
		$S006 = $conexion->query($C006) or die ("Fallo al consultar VIN y Matricula");
		while ($DV = $S006->fetch_assoc()) {
			$v = dCry2($DV['xV3hivINXu7l0s']);
			$p = dCry2($DV['xV3hiPl4c45Xu7l0s']);
			$m = dCry2($DV['xV3him070rXu7l0s']);
			$e = dCry2($DV['xV3hi3C0Xu7l0s']);

			if($v == $v3_c003){
				$msv = true;
			}
			if($p == $v3_c002){
				$msp = true;
			}
			if($m == $v3_c010){
				$msm = true;
			}
			if($e == $v3_c001){
				$mse = true;
			}
		}

		if($mse == true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El Nombre (ECO) ya esta registrado';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}

		if($msv == true && $msp != true && $msm != true){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN ya esta registrado';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}
		elseif($msp == true && $msv != true && $msm != true){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'La Matricula ya esta registrada';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}
		/*elseif($msm == true && $msv != true && $msp != true){ 
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El número de motor ya esta registrado';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}*/
		elseif($msv == true && $msp == true && $msm != true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN y la Matricula ya estan registrados';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}
		elseif($msv != true && $msp == true && $msm == true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'La Matricula y el número de motor estan registrados';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}
		elseif($msv == true && $msm == true && $msp != true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN '/*y el número de motor estan registrados*/.'esta registrado';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}
		elseif($msv == true && $msm == true && $msp == true){
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['m3ns4j3Frm'][] = 'El VIN, la matricula y el número de motor estan registrados';
			$_SESSION['err'] ++;
			llevame($_SESSION['url_previa']);
		}

	if($_SESSION['m3n3Rr0R'] != 'si'){
		if(	!empty($v3_c001) && !empty($v3_c002) && !empty($v3_c003) && !empty(is_numeric($v3_c016)) && !empty(is_numeric($v3_c015)) && 
				!empty(is_numeric($v3_c004)) && !empty(is_numeric($v3_c005)) &&	!empty($v3_c007) &&	!empty(is_numeric($v3_c008)) &&
				!empty(is_numeric($v3_c009)) &&	!empty(is_numeric($v3_c011)) &&	/*!empty(is_numeric($v3_c012)) &&*/
				!empty(is_numeric($v3_c013)) && !empty(is_numeric($v3_c014)) &&	!empty(is_numeric($usuario_id)) ) {

				unset($sQl_d474_4rr4y);
				unset($p4r4m37r05);
				$v3_c001 = eCry2($_SESSION['v3_c001']); $v3_c002 = eCry2($_SESSION['v3_c002']);
				$v3_c003 = eCry2($_SESSION['v3_c003']); $v3_c006 = eCry2($_SESSION['v3_c006']);
				$v3_c010 = eCry2($_SESSION['v3_c010']); $v3_c015 = $_SESSION['v3_c015'];
				
				$fdcH = date('Y-m-d H:i:s');
					$sQl_d474_4rr4y = [
						'xV3hi3C0Xu7l0s' => $v3_c001,
						'xV3hiPl4c45Xu7l0s' => $v3_c002,
						'xV3hivINXu7l0s' => $v3_c003,
						'xV3hiM4rc4Xu7l0s' => $v3_c004,
						'xV3hi5uBm4rc4Xu7l0s' => $v3_c005,
						'xV3hi5ub7ip0Xu7l0s' => $v3_c006,
						'xV3hi4n0Xu7l0s' => $v3_c007,
						'xV3hic0l0rXu7l0s' => $v3_c008,
						'xV3hiPu3rt45Xu7l0s' => $v3_c009,
						'xV3him070rXu7l0s' => $v3_c010,
						'xV3hi7Mot0rXu7l0s' => $v3_c011,
						'xV3hicIlInDrossXu7l0s' => $v3_c012,
						'xV3hilI7r05Xu7l0s' => $v3_c013,
						'xV3hi7r4N5Xu7l0s' => $v3_c014,
						'xV3hiFl074Xu7l0s' => $v3_c015,
						'xV3hi3MPrXu7l0s' => $v3_c016,
						'xV3hiUIDXu7l0s' => $_SESSION['usuarioID'],
						'xV3hiFRGSXu7l0s' => $fdcH,
						'Universo' => $Universo
					];		
					$accion = 'insertar';
					$aid = ejecutaDB('v3hiXu7l0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);					
					include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
					$_SESSION['m3ns4J3'] = lbl_v3h_x0001.dCry2($v3_c001);
					bi74c0('addv3H', $_SESSION['m3ns4J3'], '');
					include('../front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
					$accion = 500;
					$d3s = eCry2($Bin4kuru[$accion]);
					Bin4kuru($d3s, $accion, $aid, $U=0, $F=0, $E=0, $D=0, $P=0);

					if($v3_c002 != ''){
						$accion = 'insertar';
						unset($sQl_d474_4rr4y);
						$dfg = date('Y-m-d H:i:s');
						$sQl_d474_4rr4y = [
							'D0cD3SxS' => $v3_c002,
							'D0cIMxS' => NULL,
							'D0cFil3xS' => NULL,
							'D0cv3HiDxS' => $aid,
							'D0cu53RxS' => $usuario_id,
							'D0c4c7iv0xS' => 1,
							'D0c7ip0xS' => 13,
							'D0cFDxS' => $dfg,
							'D0cFSxS' => $dfg,
							'D0cFVxS' => $dfg,
							'D0cALTxS' => NULL,
							'Universo' => $Universo
						];	
						$hgj = dCry2($v3_c002);
						$kjh = dCry2($v3_c001);
						
						$ddi = ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
						bi74c0('addPl4', 'Se Agregarón las Placas: '.$hgj.' al Auto: '.$kjh, '');	
						$accion = 501;
						$d3s = eCry2($Bin4kuru[$accion]);
						Bin4kuru($d3s, $accion, $aid, $U=0, $F=0, $E=0, $ddi, $P=0);

						unset($_SESSION['v3_c001']);	unset($_SESSION['v3_c002']);	unset($_SESSION['v3_c003']);
						unset($_SESSION['v3_c004']);	unset($_SESSION['v3_c005']);	unset($_SESSION['v3_c006']);
						unset($_SESSION['v3_c007']);	unset($_SESSION['v3_c008']);	unset($_SESSION['v3_c009']);	
						unset($_SESSION['v3_c010']);	unset($_SESSION['v3_c011']);	unset($_SESSION['v3_c012']);
						unset($_SESSION['v3_c013']);	unset($_SESSION['v3_c014']);	unset($_SESSION['v3_c015']);
						unset($_SESSION['v3_c016']);	unset($_SESSION['v3_c017']);
						unset($_SESSION['su8M']);
					}

					$accion = 'insertar';
					unset($sQl_d474_4rr4y);
					$dfg = date('Y-m-d H:i:s');
					$sQl_d474_4rr4y = [
						'xkNTms' => NULL,
						'xkkm7rGms' => $v3_c017,
						'xkVh3IDms' => $aid,
						'xkFKms' => $dfg,
						'xkFRms' => $dfg,
						'xku5uIDms' => $usuario_id,
						'xkIDPms' => NULL,
						'xkLTSms' => NULL,
						'xkIMPms' => NULL,
						'xkPLms' => NULL,
						'xkTLLms' => 3,
						'xkTKms' => NULL,
						'xkODms' => NULL,
						'xkCKms' => NULL,
						'xkRNDms' => NULL,
						'xkDRCms' => $v3_c017,
						'Universo' => $Universo
					];	
				ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				
				
				
		}
		else{
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4j3Frm'][] = 'Completa todos los campos marcados con *';//lbl_vh3_x0002;
			$_SESSION['m3n3Rr0R'] = 'si';
			$_SESSION['err'] ++;
		}
		if($aid != ''){
			llevame('../app?accion=v3hFh4&vh3iP='.$eCry($aid));
		}
		else{
			llevame('../app?accion=v3hiXs');
		}

	}
	llevame('../app?accion=v3hiXs');
	
}
/// --- accion agrgar dcos
elseif($accion == 'jHyytR3'){
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if(isset($_FILES['pp_xx001_add']) && $_FILES['pp_xx001_add'] != ''){
		
		if (isset($_FILES['pp_xx001_add']) && $_FILES['pp_xx001_add']['error'] === UPLOAD_ERR_OK)	{
			$fileTmpPath = $_FILES['pp_xx001_add']['tmp_name'];
			$fileName = $_FILES['pp_xx001_add']['name'];
			$fileSize = $_FILES['pp_xx001_add']['size'];
			$fileType = $_FILES['pp_xx001_add']['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$do9j = $pp_xx005_add;
			$C009 = "SELECT D0cIDxS FROM D0cUM3n705 WHERE D0cv3HiDxS = $pp_xx002_add AND D0c4c7iv0xS = 1 AND D0c7ip0xS = $do9j";
			$S009 = $conexion->query($C009) or die ("Fallo al seleccionar documentos: ".$C009);
			while ($DeD = $S009->fetch_array()) {
				$accion = 'actualizar';
				unset($sql4rr);
				$ddxID = $DeD['D0cIDxS'];
				$p4r5 = 'D0cIDxS = '.$ddxID;
				$sql4rr = [
					'D0c4c7iv0xS' => 0
				];
				ejecutaDB('D0cUM3n705', $sql4rr, $accion, $p4r5);
				bi74c0('4ctTcir', 'Se desactivo la tarjeta de circulación: '.$ddxID, '');
			}
			$yu7u = time();
			$newFileName = $pp_xx002_add. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;

			$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');

			if (in_array($fileExtension, $allowedfileExtensions))	{
			
				$path = '../../d0cUm3N70s/';
				$dest_path = $path . $newFileName;

				if(move_uploaded_file($fileTmpPath, $dest_path)) {
					$w3bp = $pp_xx002_add. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
					$w3bpP47h = $path . $w3bp;

					if($fileExtension != 'pdf'){
						//c0nVt0Jp3g($dest_path, $w3bpP47h);
					}

					$pp_xx003 = eCry2($pp_xx003_add);
					$newFile = eCry2($w3bp);
					$pp_xx006 = eCry2($pp_xx006_add);
					$fg = date('Y-m-d H:i:s');
					if($pp_xx004_add == ''){
						$pp_xx004_add = $fg;
					}
					$accion = 'insertar';
					$p4r4m37r05 = "";
					unset($sQl_d474_4rr4y);
					$sQl_d474_4rr4y = [
						'D0cD3SxS' => $pp_xx003,
						'D0cIMxS' => $pp_xx006,
						'D0cFil3xS' => $newFile,
						'D0cv3HiDxS' => $pp_xx002_add,
						'D0cu53RxS' => $pp_xx007_add,
						'D0c4c7iv0xS' => 1,
						'D0c7ip0xS' => $do9j,
						'D0cFDxS' => $pp_xx009_add,
						'D0cFSxS' => $fg,
						'D0cFVxS' => $pp_xx004_add,
						'D0cALTxS' => $pp_xx008_add,
						'Universo' => $Universo
				];		
					ejecutaDB('D0cUM3n705', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0301.$pp_xx003_add.'';
					bi74c0('4ddTcir', $_SESSION['m3ns4J3'], '');
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
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['pp_xx001_add']['error'];
		}
	
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = ''.$_FILES['pp_xx001_add']['error'];
	}
	
	llevame('../app?accion=v3hFh4&vh3iP='.$eCry($pp_xx002_add));
}
elseif($accion == 'xkmtr4G'){
	if(!empty($vh3UjI6Did)){
		$vh3UjI6Did = $dCry($vh3UjI6Did);

		if(!empty($fil_FHF) && !empty($fil_FHI)){
			$_SESSION['fil_FHF'] = $fil_FHF;
			$_SESSION['fil_FHI'] = $fil_FHI;
		}

		if(!empty($trash)){
			unset($_SESSION['fil_FHI']);
			unset($_SESSION['fil_FHF']);
			$_SESSION['m3ns4J3'] = 'Se limpiaron las fechas';
		}

		$C013 = "SELECT * FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $vh3UjI6Did";
		$S013 = $conexion->query($C013) or die ("Fallo al consultar Vehiculo: ".$C013);
		$DDV = $S013->fetch_assoc();
		$xEC0x = dCry2($DDV['xV3hi3C0Xu7l0s']);
		$xPLAx = dCry2($DDV['xV3hiPl4c45Xu7l0s']);

		if($_SESSION['fil_FHI'] > $_SESSION['fil_FHF']){
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = 'La Fecha final no puede ser mayor a la Fecha de inicio.';
		}

		if(!empty($_SESSION['fil_FHF']) && !empty($_SESSION['fil_FHI'])){
			$QR67003 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '".$vh3UjI6Did."' AND xkFRms BETWEEN '".$_SESSION['fil_FHI']." 00:00:00' AND '".$_SESSION['fil_FHF']." 23:59:59' ORDER BY xkIDms ASC";
			$CR67003 = $conexion->query($QR67003) or die ("Falló listado de kilometrajes" . $QR67003);
		}
		else {
			$QR67003 = "SELECT * FROM x5KIl0mS WHERE xkVh3IDms = '".$vh3UjI6Did."' ORDER BY xkIDms ASC LIMIT 10";
			$CR67003 = $conexion->query($QR67003) or die ("Falló listado de kilometrajes" . $QR67003);
		}
		$NM = $CR67003->num_rows;

		$i = 0;
		$xCRN = 0;
		$xCK = 0;
		$xCLTP = 0;
		$xCCTC = 0;
		$kil0ms = [];
		$ulKM = 0;
		$i2 = 0;
		while($kmtrs = $CR67003->fetch_array()){
			if($kmtrs['xkPLms'] != ''){
				$xCLTP = $xCLTP + $kmtrs['xkPLms'];
				$i2++;
			}

			if($kmtrs['xkTLLms'] == 1 && $kmtrs['xkRNDms'] != '' && $kmtrs['xkCKms'] != ''){
				$xCRN = $xCRN + $kmtrs['xkRNDms'];
				$xCK = $xCK + $kmtrs['xkCKms'];
				$i++;
			}
			

			$xCCTC = $xCCTC + $kmtrs['xkIMPms'];
			$ulKM = $kmtrs['xkkm7rGms'];
			$arr4 = array(
				'vIDdO' => $kmtrs['xkIDms'],
				'vkmdO' => $kmtrs['xkkm7rGms'],
				'vFKdO' => $kmtrs['xkFKms'],
				'vFRdO' => $kmtrs['xkFRms'],
				'vNTdO' => $kmtrs['xkNTms'],
				'vVH3dO' => $kmtrs['xkVh3IDms'],
				'vUSIdO' => $kmtrs['xku5uIDms'],
				'vPVdO' => $kmtrs['xkIDPms'],
				'vLTSdO' => $kmtrs['xkLTSms'],
				'vIMPdO' => $kmtrs['xkIMPms'],
				'vTLLdO' => $kmtrs['xkTLLms'],
				'vTKdO' => $kmtrs['vTKdO'],
				'xkCKms' => $kmtrs['xkCKms'],
				'xkRNDms' => $kmtrs['xkRNDms'],
				'xkFTKms' => $kmtrs['xkTKms'],
				'xkFTOms' => $kmtrs['xkODms'],
				'xkDRCms' => $kmtrs['xkDRCms'],
				'xkPLms' => $kmtrs['xkPLms']
			);
			array_push($kil0ms, $arr4);
		}
		if($i!=0){
			$xCRN = $xCRN / $i;
			$xCK = $xCK / $i;
		}
		if($i2!=0){
			$xCLTP = $xCLTP / $i2;
		}

		
		$QR67004 = "SELECT xkkm7rGms FROM x5KIl0mS WHERE xkVh3IDms = '".$vh3UjI6Did."' ORDER BY xkIDms DESC LIMIT 1";
		$CR67004 = $conexion->query($QR67004) or die ("Falló listado de kilometrajes" . $QR67004);
		$ultkm = $CR67004->fetch_assoc();
		$ujkm = $ultkm['xkkm7rGms'];
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0600;
	}
	//llevame('app?accion=v3hFh4&vh3iP='.$eCry($vh3UjI6Did));

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
}
elseif($accion === 'hY776'){
	if(!empty($pp_xx0100)){
		$accion = 'insertar';
		$p4r4m37r05 = ""; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['xkkm7rGms' => $pp_xx0100,
											 'xkVh3IDms' => $pp_xx0101,
											 'xkFKms' => date('Y-m-d H:i:s'),
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
	llevame('../app?accion=xkmtr4G&vh3UjI6Did='.$eCry($pp_xx0101));
}
elseif($accion === 'd3letkm'){
	if(!empty($p3ry6I)){
		$p3ry6I = $dCry($p3ry6I);
		$vh3id = $dCry($vh3id);
		$accion = 'eliminar'; 
		$p4r4m37r05 = "xkIDms = '".$p3ry6I."' "; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0601.$p3ry6I;
		bi74c0('d3ltKm', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = 'Falta el id Kilometraje';
	}
	llevame('../app?accion=xkmtr4G&vh3UjI6Did='.$eCry($vh3id));
}
elseif($accion === 'EdI7kM'){
	if(!empty($pp_xx0101)){		
		$accion = 'actualizar';
		$p4r4m37r05 = "xkIDms = '".$pp_xx0101."' "; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xkkm7rGms' => $pp_xx0100,
			'xku5uIDms' => $pp_xx0103
		];		
		ejecutaDB('x5KIl0mS', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0602.$pp_xx0101;
		bi74c0('edi7tKm', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = 'Falta el id Kilometraje';
	}
	llevame('../app?accion=xkmtr4G&vh3UjI6Did='.$eCry($pp_xx0102));
}
elseif($accion === 'Eda70'){
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if($Ah76G != '' && $sdFR != '' && $lIi != '' && $e != ''){
		$Ah76G = $dCry($Ah76G);
		$sdFR = $dCry($sdFR);
		$lIi = $dCry($lIi); 
		$e = $dCry($e);
		$accion = 'actualizar';
		$p4r4m37r05 = "xV3hiIDXu7l0s = '".$Ah76G."'";
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xV3hiEDOXu7l0s' => $sdFR
		];		
		ejecutaDB('v3hiXu7l0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		$_SESSION['m3ns4J3'] = lbl_a001.$lIi.lbl_a001_a.$e.'</b>';
		bi74c0('4ctEdoAu', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_error_a001;
	}
	llevame('../app?accion=v3hiXs');
}
elseif($accion === 'd3svA'){
	$eoi = $dCry($eoi);	
	if($aIDdx != '' && $uxu != '' && $r3l != ''){
		$aIDdx = $dCry($aIDdx);
		$uxu = $dCry($uxu);
		$r3l = $dCry($r3l);
	}
	
	if($aIDdx != '' && empty($uxu) && empty($r3l)){
		$aIDdx = $dCry($aIDdx);
		$C008 = "SELECT * FROM `r3l3UEF` WHERE `UEFVxTU` = $aIDdx ";
		$S008 = $conexion->query($C008) or die ("Fallo al consultar relacion de auto: ".$C008);
		$DRA = $S008->fetch_assoc();
		$r3l = $DRA['UEFIxTU'];
		$uxu = $DRA['UEFUxTU'];

	}

		$accion = 'actualizar';
		$p4r4m37r05 = "UEFIxTU = '".$r3l."'";
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'UEFVxTU' => 0 
		];		
		ejecutaDB('r3l3UEF', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		$accion = 'actualizar';
		$p4r4m37r05 = "xV3hiIDXu7l0s = '".$aIDdx."'";
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = [
			'xV3hiEDOXu7l0s' => $eoi
		];		
		ejecutaDB('v3hiXu7l0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		$_SESSION['m3ns4J3'] = 'Cambio de Estado el Auto: '.$aIDdx;
		bi74c0('d3sVAu', $_SESSION['m3ns4J3'], '');
		bi74c0('4ctEdoAu', 'El auto:'.$aIDdx.' cambia a estatus Disponible', '');
	
	if(empty($aIDdx) && empty($uxu) && empty($r3l) ){
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'Faltan Datos';
	}
	llevame($_SESSION['url_previa']);
}
