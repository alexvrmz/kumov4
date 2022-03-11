<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();

if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "50210"){
	include('conexion.php');
 	include('funciones.php');
}
/// --- accion Generar Token
if ($accion === '50210') {
	if(!empty($u5h8ir5nm)){
		$u5h8ir5nm = $dCry($u5h8ir5nm);

		$Q001 = "SELECT u5hpV8ir5 FROM u5u405 WHERE usuarioID = '$u5h8ir5nm' ";
		$S001 = $conexion->query($Q001) or die ("Fallo al seleccionar usuario");
		$DU = $S001->fetch_assoc();
		$IDLL = $DU['u5hpV8ir5'];

		$accion = 'actualizar';
		$p4r4m37r05 = "usuarioID = '$u5h8ir5nm'"; 
    /*$cadenaToken = $id_dispositivo.'.'.$nombre_dispositivo;
    $tokenGenerado = base64_encode($cadenaToken);*/
    $sQl_d474_4rr4y = [/*'u5hDpID8ir5' => $id_dispositivo,
											 'u5hDpNm8ir5' => $nombre_dispositivo,
                       'u5htK8ir5' => $tokenGenerado,*/
                       'u5hOn44P8ir5' => 1,
											 //'u5hpV8ir5' => 0
											];		
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		
		$p4r4m37r05 = "L4v3s_id = '$IDLL'";
		unset($sQl_d474_4rr4y);
		$FF = date("Y-m-d H:i:s");
		$sQl_d474_4rr4y = [
			'L4v3s_ff' => $FF
		];
		ejecutaDB('L4v3s', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x012.$u5h8ir5nm;
		bi74c0('gN7kn', $_SESSION['m3ns4J3'], '');
		
	}
	else{
		$_SESSION['m3n3Rr0R']   = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x013.$u5h8ir5nm;
		bi74c0('gN7kn2', $_SESSION['m3ns4J3'], '');
    
	}
	llevame('../app?accion=5u540l_02&u5u4oxX='.$eCry($u5h8ir5nm));
	
}
elseif ($accion === '50200') {
	$u5u4oxX = $dCry($u5u4oxX);
	// --- Consulta para datos de usuario
	$q5u5xXd = "SELECT * FROM u5u405 WHERE usuarioID = '".$u5u4oxX."' ";
	$c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener datos de usuario " . $q5u5xXd);
	$d4705_u5u = [];
	while($dU5u4o = $c5u5xXd->fetch_assoc()){
		
		$u5h34r5_nombre = $dU5u4o['usuarioA1']. ' ' .$dU5u4o['usuarioA2']. ' ' .$dU5u4o['usuarioN1']. ' ' .$dU5u4o['usuarioN2'];

		$x4rr36l0 = array('usuarioID' => $dU5u4o['usuarioID'],
										 'u5hUS8ir5' => $dU5u4o['u5hUS8ir5'],
										 'u5h8ir5_nombre' => $u5h34r5_nombre,
										 'u5hFt8ir5' => $dU5u4o['u5hFt8ir5'],
										 'usuarioN1' => $dU5u4o['usuarioN1'],
										 'usuarioN2' => $dU5u4o['usuarioN2'],
										 'usuarioA1' => $dU5u4o['usuarioA1'],
										 'usuarioA2' => $dU5u4o['usuarioA2'],
                     'u5h8ir5_llave_privada' => $dU5u4o['u5hpV8ir5'],
                     'u5h8ir5_llave_publica' => $dU5u4o['u5hpU8ir5'],
                     'u5htK8ir5' => $dU5u4o['u5htK8ir5'],
                     'u5hOn8ir5' => $dU5u4o['u5hOn8ir5'],
                     'u5hOn44P8ir5' => $dU5u4o['u5hOn44P8ir5'],
                     'u5h8ir5_dispositivo_id' => $dU5u4o['u5hDpID8ir5'],
                     'u5h8ir5_dispositivo_nombre' => $dU5u4o['u5hDpNm8ir5']
				);
		array_push($d4705_u5u, $x4rr36l0); 
	}

}
