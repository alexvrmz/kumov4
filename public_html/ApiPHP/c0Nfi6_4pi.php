<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "aLs" || $accion === 'BrrS' || $accion === 'BrrA' || $accion === 'DrK' || $accion === 'cEfs' || $accion === '54v3c0nFi6' || $accion === 'mo0DStruX' || $accion === 'Ac7Vs7'){
	include('conexion.php');
 	include('funciones.php');
}
if($accion === '54v3c0nFi6'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$cc_x002."' ";
	$sQl_d474_4rr4y = [
		'config_7im3Bl0' => $cc_x001,
		'config_rDven' => $cc_x003
	];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_c0Nfi6.php');
	$m3ns4J3 = lbl_x002;
	bi74c0('actC0nF', $m3ns4J3, '');
	$_SESSION['m3ns4J3'] = $m3ns4J3;

	llevame('../app?accion=c0Nfi6');
}
elseif($accion === 'aLs'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$usr."' ";
	$ff = $color;
	$sQl_d474_4rr4y = ['config_brand' => $ff];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	$m3ns4J3 = lbl_8i7_x0700.$color;
	bi74c0('actLgCol', $m3ns4J3, '');
	echo $m3ns4J3;
}
elseif($accion === 'BrrS'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$usr."' ";
	$ff = $cls.' '.$color;
	$sQl_d474_4rr4y = ['config_navbar' => $ff];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	$m3ns4J3 = lbl_8i7_x0701.$ff;
	bi74c0('actBrrS', $m3ns4J3, '');
	echo $m3ns4J3;
}
elseif($accion === 'BrrA'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$usr."' ";
	$ff = $skin;
	$sQl_d474_4rr4y = ['config_sidebar' => $ff];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	$m3ns4J3 = lbl_8i7_x0702.$ff;
	bi74c0('actBrrA', $m3ns4J3, '');
	echo $m3ns4J3;
}
elseif($accion === 'DrK'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$usr."' ";
	$ff = $io;
	$sQl_d474_4rr4y = ['config_DrKm0d' => $ff];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if($ff == '1'){
		$m3ns4J3 = lbl_8i7_x0703;
	}
	else{
		$m3ns4J3 = lbl_8i7_x0704;
	}
	bi74c0('actDrK', $m3ns4J3, '');
	echo $m3ns4J3;
}
elseif($accion === 'cEfs'){
	unset($sQl_d474_4rr4y);		
	$accion = 'actualizar';
	$p4r4m37r05 = "usuarioID = '".$usr."' ";
	$ff = $accent_class;
	$sQl_d474_4rr4y = ['config_accent' => $ff];		
	ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
	
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	$m3ns4J3 = lbl_8i7_x0705.$ff;
	bi74c0('cHnEFs', $m3ns4J3);
	echo $m3ns4J3;
}
elseif($accion === 'mo0DStruX'){
	if($miumh != '' && $xas != ''){
		$miumh = $dCry($miumh);
		$xas = $dCry($xas);
		unset($sQl_d474_4rr4y);		
		$accion = 'actualizar';
		$p4r4m37r05 = "usuarioID = '".$miumh."' ";
		$ff = $accent_class;
		$sQl_d474_4rr4y = ['config_m0dstr' => $xas];		
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x0707.$xas;
		bi74c0('actMo0StrUc', $_SESSION['m3ns4J3'], '');
	}
	else{
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0708;
	}
	llevame('../app?accion=c0Nfi6');
}
elseif($accion === 'Ac7Vs7'){
	if($kjhu != '' && $huy != ''){
		$kjhu = $dCry($kjhu);
		$huy = $dCry($huy);
		unset($sQl_d474_4rr4y);		
		$accion = 'actualizar';
		$p4r4m37r05 = "usuarioID = '".$huy."' ";
		$sQl_d474_4rr4y = ['config_vista' => $kjhu];		
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
		
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		if($kjhu == 1){ $_SESSION['m3ns4J3'] = lbl_8i7_x0711; } else { $_SESSION['m3ns4J3'] = lbl_8i7_x0710; }
		bi74c0('chnvIs74', $_SESSION['m3ns4J3'], '');
	}else{
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0709;
	}
	llevame($_SESSION['url_previa']);
}
?>