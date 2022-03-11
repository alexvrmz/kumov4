<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start(); // --- Validar sesión ---

if($accion == 'salir'){
	include('ApiPHP/conexion.php');
	include('ApiPHP/funciones.php');

	include('front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
  bi74c0('3xi7', lbl_8i7_x028.$_SESSION['usuarioID'], '');
	
	include('front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
	$accion = 101;
	$d3s = eCry2($Bin4kuru[$accion]);
	$U = $_SESSION['usuarioID'];
	Bin4kuru($d3s, $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);

	bi74c0('3xi7e', lbl_8i7_x031.$_SESSION['usuarioID'], ''); 

	session_destroy();
	

	header("location:index.php");

}

elseif(isset($_SESSION['usuario']) && $accion != 'x006' && $accion != 'entrar' ){ // ---- sesión iniciada, llevame a index ----

	header("location: index.php");

}


elseif($accion == 'entrar' && !isset($_SESSION['usuario'])){ // --- Iniciar sesión si es redirigido y la sessi´on no existe ---
	include('ApiPHP/conexion.php');
	include('ApiPHP/funciones.php');

	

	// ---- Include del front ----
	include('front/acceso.php');
	
} 
elseif($accion == 'r3g7r0'){
	
	include('front/r3g7r0.php');
}
elseif($accion == 'x005'){ // --- Validar datos ---
		
	include 'ApiPHP/conexion.php';
	include('front/idiomas/es_MX/i_8i74c0r4.php');
	include('ApiPHP/funciones.php');
	//include 'ApiPHP/funciones.php';
	
	$pp_xx005 = $conexion->real_escape_string(htmlentities($pp_xx005));
	$psbxX012s = $conexion->real_escape_string(htmlentities($psbxX012s));

	$passEncriptada = md5($psbxX012s);
	
	$query = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '" . $pp_xx005 . "' AND u5hpW8ir5 = '" . $passEncriptada . "' AND u5hOn8ir5 = 1";
	$consulta = $conexion->query($query) or die ("Falló " . $query);

	if($d4705 = $consulta->fetch_assoc()){

		session_unset();
		session_destroy(); 
		session_start();
		

		$n1TYt = dCry2($d4705['usuarioN1']);
		$n2TYt = dCry2($d4705['usuarioN2']);
		$A1TYt = dCry2($d4705['usuarioA1']);
		$A2TYt = dCry2($d4705['usuarioA2']);

		$_SESSION['usuario'] = [];
		$_SESSION['usuarioID'] = $d4705['usuarioID'];
		$_SESSION['idioma'] = $d4705['u5h8ir5_iDi'];
		$_SESSION['u5hUS8ir5'] = $d4705['u5hUS8ir5'];
		$_SESSION['usuarioN1'] = $n1TYt;
		$_SESSION['usuarioN2'] = $n2TYt;
		$_SESSION['usuarioA1'] = $A1TYt;
		$_SESSION['usuarioA2'] = $A2TYt;
		$_SESSION['nombre_corto'] = $A1TYt . ' ' . $n1TYt;
		$_SESSION['nombre_completo'] = $A1TYt . ' ' . $A2TYt . ' ' . $n1TYt . ' ' . $n2TYt;
		$_SESSION['u5hOn8ir5'] = $d4705['u5hOn8ir5'];
		$_SESSION['u5hFt8ir5'] = $d4705['u5hFt8ir5'];
		$_SESSION['config_navbar'] = $d4705['config_navbar'];
		$_SESSION['config_accent'] = $d4705['config_accent'];
		$_SESSION['config_sidebar'] = $d4705['config_sidebar'];
		$_SESSION['config_brand'] = $d4705['config_brand'];
		$_SESSION['Universo'] = $d4705['Universo'];
		$_SESSION['publicidad'] = $d4705['usuario_publicidad'];

	/*	mkdir('tmp/'.$_SESSION['Universo'], 0777, true);
		
		$fu = 'tmp/'.$_SESSION['Universo'].'/'.$_SESSION['usuarioID'];
		mkdir($fu, 0777, true);
		//chmod($fu, 0777);
		chmod('tmp/'.$_SESSION['Universo'], 0777);
		$fu2 = '../d0cUm3N70s/'.$_SESSION['Universo'];
		mkdir($fu2, 0777, true);
		//chmod($fu2, 0777);*/

		$m5y6 = lbl_8i7_x001 .' '. $_SESSION['usuarioID'].'<br>/= '.$_SERVER['HTTP_USER_AGENT'].'<br>/='.$_SERVER["REMOTE_ADDR"].'<br>/='.$_SERVER["REMOTE_PORT"];
		bi74c0('acceso', $m5y6, '');
		
		include('front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
		$accion = 100;
		$d3s = eCry2($Bin4kuru[$accion]);
		$U = $_SESSION['usuarioID'];
		Bin4kuru($d3s, $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);

		llevame('app?accion=escritorio');
	} else{ 
		//	include('ApiPHP/funciones.php');
		$m3ns4J3	= 'El usuario y/o Contraseña son Incorrectos!!!';
		llevame('acceso?accion=entrar&m3ns4J3='.$m3ns4J3.'&err=true');

	}

} 
elseif($accion == 'x006'){ 

	include 'ApiPHP/conexion.php';
	include 'ApiPHP/funciones.php';

	$Sq7yh = "SELECT u5hpW8ir5 FROM u5u405 WHERE usuarioID = '".$_SESSION['usuarioID']."'";
	$Cq7yh = $conexion->query($Sq7yh) or die ("Falló " . $Sq7yh);
	$d5tg5 = $Cq7yh->fetch_assoc();

	$psEcdDn45_xS = md5($cdDn45_xS);

	if($d5tg5['u5hpW8ir5'] == $psEcdDn45_xS){

		$_SESSION['session_look'] = false;
		llevame($_SESSION['url_previa']);

	}else{
		
		$_SESSION['m3ns4J3'] = 'Contraseña Incorrecta';
		llevame('app?accion=l00k5cR3n');
	}

}
elseif($accion == 'x007'){
	include('ApiPHP/conexion.php');
	include('ApiPHP/funciones.php');
	
	if(!empty($xcd) && !empty($cft)){
		$xcd = $dCry($xcd);
		//$cft = $dCry($cft);
		$C001 = "SELECT u5hUS8ir5, u5hHSH8ir5 FROM u5u405 WHERE u5hUS8ir5 LIKE '$xcd' AND u5hHSH8ir5 LIKE '$cft'"; 
		$S001 = $conexion->query($C001) or die ("Fallo al consultar hash de usuario: ".$C001);
		
		if($DDUH = $S001->fetch_assoc()){
			$p4r4 = "u5hUS8ir5 = '".$xcd."'";
			$ax = 'actualizar';
			unset($fg);
			$fg = [
				'u5hOn8ir5' => 1
			];
			ejecutaDB('u5u405', $fg, $ax, $p4r4);
			$m3ns4J3 = 'Tu cuenta se Activo con Exito!, ingresa tus credenciales.';
    	llevame('acceso?accion=entrar&m3ns4J3='.$eCry($m3ns4J3));
		}
		else{
			$m3ns4J3 = 'Enlace no Valido! 1<br>';
			$_SESSION['m3n3Rr0R'] = 'si';
    	llevame('acceso?accion=entrar&m3ns4J3='.$eCry($m3ns4J3));
		}

	}
	else{
		$m3ns4J3 = 'Enlace no Valido! 2';
		$_SESSION['m3n3Rr0R'] = 'si';
    llevame('acceso?accion=entrar&m3ns4J3='.$eCry($m3ns4J3));
	}

}
elseif($accion == 'x008'){ // --- Validar datos FB---
		
	include 'ApiPHP/conexion.php';
	include('front/idiomas/es_MX/i_8i74c0r4.php');
	include('ApiPHP/funciones.php');
	//include 'ApiPHP/funciones.php';
	
	$pp_xx005 = $conexion->real_escape_string(htmlentities($pp_xx005));
	//$psbxX012s = $conexion->real_escape_string(htmlentities($psbxX012s));

	//$passEncriptada = md5($psbxX012s);
	
	$query = "SELECT * FROM u5u405 WHERE u5hUS8ir5 = '" . $pp_xx005 . "' AND fb_id = '" . $fb_id . "' AND u5hOn8ir5 = 1";
	$consulta = $conexion->query($query) or die ("Falló " . $query);

	if($d4705 = $consulta->fetch_assoc()){

		session_unset();
		session_destroy(); 
		session_start();
		

		$n1TYt = dCry2($d4705['usuarioN1']);
		$n2TYt = dCry2($d4705['usuarioN2']);
		$A1TYt = dCry2($d4705['usuarioA1']);
		$A2TYt = dCry2($d4705['usuarioA2']);

		$_SESSION['usuario'] = [];
		$_SESSION['usuarioID'] = $d4705['usuarioID'];
		$_SESSION['idioma'] = $d4705['u5h8ir5_iDi'];
		$_SESSION['u5hUS8ir5'] = $d4705['u5hUS8ir5'];
		$_SESSION['usuarioN1'] = $n1TYt;
		$_SESSION['usuarioN2'] = $n2TYt;
		$_SESSION['usuarioA1'] = $A1TYt;
		$_SESSION['usuarioA2'] = $A2TYt;
		$_SESSION['nombre_corto'] = $A1TYt . ' ' . $n1TYt;
		$_SESSION['nombre_completo'] = $A1TYt . ' ' . $A2TYt . ' ' . $n1TYt . ' ' . $n2TYt;
		$_SESSION['u5hOn8ir5'] = $d4705['u5hOn8ir5'];
		$_SESSION['u5hFt8ir5'] = $d4705['u5hFt8ir5'];
		$_SESSION['config_navbar'] = $d4705['config_navbar'];
		$_SESSION['config_accent'] = $d4705['config_accent'];
		$_SESSION['config_sidebar'] = $d4705['config_sidebar'];
		$_SESSION['config_brand'] = $d4705['config_brand'];
		$_SESSION['Universo'] = $d4705['Universo'];

		$fu = 'tmp/'.$_SESSION['Universo'].'/'.$_SESSION['usuarioID'];
		mkdir($fu, 0777, true);
		//chmod($fu, 0777);
		chmod('tmp/'.$_SESSION['Universo'], 0777);
		$fu2 = '../d0cUm3N70s/'.$_SESSION['Universo'];
		mkdir($fu2, 0777, true);
		//chmod($fu2, 0777);

		$m5y6 = lbl_8i7_x001 .' '. $_SESSION['usuarioID'].'<br>/= '.$_SERVER['HTTP_USER_AGENT'].'<br>/='.$_SERVER["REMOTE_ADDR"].'<br>/='.$_SERVER["REMOTE_PORT"];
		bi74c0('acceso', $m5y6, '');
		
		include('front/idiomas/'.$_SESSION['idioma'].'/i_Bin4kuru.php');
		$accion = 100;
		$d3s = eCry2($Bin4kuru[$accion]);
		$U = $_SESSION['usuarioID'];
		Bin4kuru($d3s, $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);

		llevame('app?accion=escritorio');
	} else{ 
		//	include('ApiPHP/funciones.php');
		$m3ns4J3	= $pp_xx005;
		llevame('acceso?accion=entrar&m3ns4J3='.$m3ns4J3.'&err=true');

	}

} 

if($accion == '00001'){
	echo 'whoami';
}