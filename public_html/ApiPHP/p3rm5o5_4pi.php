<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}

if($accion === "5u5v78Ds" || $accion === 'p3rf5Gg' || $accion === 'sD4xG5d5' || $accion == 'psDef4Gg'){
	include('conexion.php');
 	include('funciones.php');
}

/// --- accion Listado de Usuarios
if($accion === "5u550l"){

	// --- Consulta para listado de modulos
	$Qm0d78Os = "SELECT * FROM m0d78Os";
	$Cm0d78Os = $conexion->query($Qm0d78Os) or die ("Falló listado de modulos" . $Qm0d78Os);
	$L74m0d78Os = [];
	while($Li574m0d7 = $Cm0d78Os->fetch_assoc()){
    unset($x4rr36l0);
		$x4rr36l0 = array('m0ds6L0iD' => $Li574m0d7['m0DxL0_id'],
										 'm0ds6L0d3s5cRp' => $Li574m0d7['m0DxL0_descripcion'],
										 'm0ds6L0nM' => $Li574m0d7['m0DxL0_numero'],
										 'm0ds6L03574d0' => $Li574m0d7['m0DxL0_estado']
				);
		array_push($L74m0d78Os, $x4rr36l0); 
	}


	$QseP3rMi505 = "SELECT * FROM p3rM5sx_e ORDER BY p3ry6m0DuXx, p3ry6nUm3Xx ASC";
	$CseP3rMi505 = $conexion->query($QseP3rMi505) or die ("Falló listado de permisos" . $QseP3rMi505);
	$LseP3r505 = [];
	while($LsxP3r705 = $CseP3rMi505->fetch_assoc()){
		$rfrf = $LsxP3r705['p3ry6m0DuXx'];
		$Qm0d78O2 = "SELECT m0DxL0_descripcion, m0DxL0_numero FROM m0d78Os WHERE m0DxL0_numero = '".$rfrf."' ";
		$Cm0d78O2 = $conexion->query($Qm0d78O2) or die ("Falló listado de modulos" . $Qm0d78O2);
		$Li574m0d2 = $Cm0d78O2->fetch_assoc();
		$sh7j = $Li574m0d2['m0DxL0_descripcion'].' - '.$Li574m0d2['m0DxL0_numero'];

    unset($x4rr36l0);
		$x4rr36l0 = array('p3ry6IDXpP' => $LsxP3r705['p3ry6IDXx'],
										 'p3ry6d35cRpP' => $LsxP3r705['p3ry6d35cRXx'],
										 'p3ry6m0DupP' => $sh7j,
										 'p3ry6nUm3pP' => $LsxP3r705['p3ry6nUm3Xx']
				);
		array_push($LseP3r505, $x4rr36l0); 
	}
	
	

	

}
elseif ($accion == '5u5v78Ds') {

	if(!empty($pt5_xx01)){

    $accion = 'insertar';
		unset($sQl_d474_4rr4y); 
		$sQl_d474_4rr4y = ['p3ry6d35cRXx' => $pt5_xx01,
											 'p3ry6m0DuXx' => $pt5_xx02,
											 'p3ry6nUm3Xx' => $pt5_xx03
											];		
    ejecutaDB('p3rM5sx_e', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
    
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x024.$pt5_xx01;
		bi74c0('p3r4r', $_SESSION['m3ns4J3'], '');

    llevame('../app?accion=5u550l');
	}
  else{
    $_SESSION['m3n3Rr0R'] = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x025;
		bi74c0('p3r4r2', $_SESSION['m3ns4J3'], '');
    llevame('../app?accion=5u550l');
  }

}

elseif ($accion == 'xu5sdS7l') { /// --- Accion cargar datos de permiso
	$p3ry6I = $dCry($p3ry6I);
	if(!empty($p3ry6I)){
    // --- Consulta para datos de usuario
    $q5u5xXd = "SELECT * FROM p3rM5sx_e WHERE p3ry6IDXx = '".$p3ry6I."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener datos de permiso " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
    
      $x4rr36l0 = ['p3ry6IDp9' => $dU5u4o['p3ry6IDXx'],
                   'p3ry6d35cRp9' => $dU5u4o['p3ry6d35cRXx'],
                   'p3ry6m0Dup9' => $dU5u4o['p3ry6m0DuXx'],
                   'p3ry6nUm3p9' => $dU5u4o['p3ry6nUm3Xx']
                  ];
      array_push($d4705_u5u, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de permiso a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=5u540l');
  }
		
}


elseif ($accion == 'p3rf5Gg') { /// --- Accion actualizar

	if(!empty($pp_xx004)){
		$accion = 'actualizar';
		$p4r4m37r05 = "p3ry6IDXx = '$pp_xx004'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['p3ry6d35cRXx' => $pp_xx001,
											 'p3ry6m0DuXx' => $pp_xx002,
											 'p3ry6nUm3Xx' => $pp_xx003
											];		
		

		ejecutaDB('p3rM5sx_e', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x026.$pp_xx004;
		bi74c0('4c7p3r', $_SESSION['m3ns4J3'], '');
		llevame('../app?accion=5u550l');

	}
  else {
    $_SESSION['m3n3Rr0R'] = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x027.$pp_xx004;
		bi74c0('4c7p3r2', $_SESSION['m3ns4J3'], '');

    llevame('../app?accion=5u550l');
  }
		
}
elseif ($accion === '5uXds4H') {
	$u5u4oxX = $dCry($u5u4oxX);
	if(!empty($u5u4oxX)){
    // --- Consulta para permisos de usuario
    $q5u5xXd = "SELECT * FROM p3rXo70R64D0s WHERE p3rXou5Rs = '".$u5u4oxX."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener permisos de usuario " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			
			$n66p33r = $dU5u4o['p3rXoNmRs'];
			
			$q5u5xXer4 = "SELECT p3ry6d35cRXx FROM p3rM5sx_e WHERE p3ry6IDXx = '".$n66p33r."' ";
    	$c5u5xdsXd = $conexion->query($q5u5xXer4) or die ("Falló al obtener permisos de usuario " . $q5u5xXer4);
			$dUefu4o = $c5u5xdsXd->fetch_assoc();
			$n6shb = $dUefu4o['p3ry6d35cRXx'];
			



      $x4rr36l0 = ['p3gThiDRs' => $dU5u4o['p3rXoiDRs'],
                   'p3gThNmRs' => $dU5u4o['p3rXoNmRs'],
									 'p3d3scr' => $n6shb,
                   'p3gThu5Rs' => $dU5u4o['p3rXou5Rs'],
                   'p3gTh3PRs' => $dU5u4o['p3rXo3PRs'],
									 'p3gThFPRs' => $dU5u4o['p3rXoFPRs']
                  ];
      array_push($d4705_u5u, $x4rr36l0); 
    }

		$Qm0d78Os = "SELECT * FROM m0d78Os";
		$Cm0d78Os = $conexion->query($Qm0d78Os) or die ("Falló listado de modulos" . $Qm0d78Os);
		$L74m0d78Os = [];
		while($Li574m0d7 = $Cm0d78Os->fetch_assoc()){
			unset($x4rr36l0);
			$x4rr36l0 = array('m0ds6L0iD' => $Li574m0d7['m0DxL0_id'],
											'm0ds6L0d3s5cRp' => $Li574m0d7['m0DxL0_descripcion'],
											'm0ds6L0nM' => $Li574m0d7['m0DxL0_numero'],
											'm0ds6L03574d0' => $Li574m0d7['m0DxL0_estado']
					);
			array_push($L74m0d78Os, $x4rr36l0); 
		}
	

  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de permiso a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=5u540l');
  }
}
elseif ($accion === 'sD4xG5d5') { /// --- carga permisos por modulo
	if($pt5_xx02 != '' && ($pt5_xx05 == '' ||  $pt5_xx05 == 'nada')){
    // --- Consulta para permisos de usuario
    $q5u5xXd = "SELECT * FROM p3rM5sx_e WHERE p3ry6m0DuXx = '".$pt5_xx02."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener permisos " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			
			$x4rr36l0 = ['p3gThiDRs' => $dU5u4o['p3ry6IDXx'],
                   'p3gThNmRs' => $dU5u4o['p3ry6d35cRXx'],
									 'p3d3scr' => $dU5u4o['p3ry6m0DuXx'],
                   'p3gThu5Rs' => $dU5u4o['p3ry6nUm3Xx']
                  ];
      array_push($d4705_u5u, $x4rr36l0); 
    }

		$_SESSION['pt5_xx02'] = $pt5_xx02;
		unset($_SESSION['pt5_xx05']);
		$_SESSION['pt5_xx05'] = $d4705_u5u;
		
		llevame('../app?accion=5uXds4H&u5u4oxX='.$eCry($pt5_xx04));
		/// --- guardar en SESSION los permisos de modulo
  }
	elseif($pt5_xx05 != '' || $pt5_xx05 != 'nada'){
		$accion = 'insertar';
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['p3rXoNmRs' => $pt5_xx05,
											 'p3rXou5Rs' => $pt5_xx04,
											 'p3rXo3PRs' => 1,
											 'p3rXoFPRs' => date("Y-m-d H:i:s")
											];		
    ejecutaDB('p3rXo70R64D0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		$_SESSION['m3n3Rr0R'] = 'no';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x014.$pt5_xx05.' / '.$pt5_xx04;
		bi74c0('4ddP3rm', $_SESSION['m3ns4J3'], '');
		unset($_SESSION['pt5_xx02']);
		unset($_SESSION['pt5_xx05']);
		llevame('../app?accion=5uXds4H&u5u4oxX='.$eCry($pt5_xx04));
		
	}
  else{
    $_SESSION['m3n3Rr0R'] = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x015;
		bi74c0('4ddP3rm2', $_SESSION['m3ns4J3'], '');
    llevame('../app?accion=5uXds4H&u5u4oxX='.$eCry($pt5_xx04));
  }
}

elseif ($accion == 'psDef4Gg') { /// --- Accion actualizar estado permiso
	$h7gr =  $dCry($h7gr);
	$txgt5 = $dCry($txgt5);
	$u5u4oxX = $dCry($u5u4oxX);
	$f4G55t7 = $dCry($f4G55t7);

	if(!empty($h7gr)){
		$accion = 'actualizar';
		$p4r4m37r05 = "p3rXoiDRs = '$h7gr'"; //-- id
		unset($sQl_d474_4rr4y);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		if($txgt5 == 'd3547iV'){ $txgt5 = 0; $ssx = lbl_8i7_x017; } elseif ($txgt5 == '47iV'){ $txgt5 = 1; $ssx = lbl_8i7_x018; }
		$sQl_d474_4rr4y = ['p3rXou5Rs' => $u5u4oxX,//-usuario
											 'p3rXo3PRs' => $txgt5,//- estado
											 'p3rXoNmRs' => $f4G55t7,//- numero perm
											 'p3rXoFPRs' => date("Y-m-d H:i:s")
											];		
		

		ejecutaDB('p3rXo70R64D0s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		
		$_SESSION['m3ns4J3'] = $ssx.lbl_8i7_x016.' '.$h7gr;
		bi74c0('3dtP3rm', $_SESSION['m3ns4J3'], '');

    llevame('../app?accion=5uXds4H&u5u4oxX='.$eCry($u5u4oxX));

	}
  else {
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
    $_SESSION['m3ns4J3'] = lbl_8i7_x019;
    $_SESSION['m3n3Rr0R'] = 'si';
		bi74c0('3dtP3rm2', $_SESSION['m3ns4J3'], '');
    llevame('../app?accion=5uXds4H&u5u4oxX='.$eCry($u5u4oxX));
  }
		
}