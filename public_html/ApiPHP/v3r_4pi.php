<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
$Universo = $_SESSION['Universo'];

if($accion === '4dds3r' || $accion === 'sV3S3rv'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}

if($accion == 'v3r'){
	$C001 = "SELECT version, fecha FROM features GROUP BY version ORDER BY version DESC";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar caracteristicas: ".$C001);
	$LDC = [];
	while ($DCD = $S001->fetch_array()) {
		//if($xVxR != $DCD['version'] ||  empty($xVxR)){
			/**/
			$xVxR = $DCD['version'];
			$xFxE = $DCD['fecha'];

			$C002 = "SELECT * FROM features WHERE version = '".$xVxR."' ORDER BY fecha DESC";
			$S002 = $conexion->query($C002) or die ("Fallo al consultAR detalles version: ".$C002);
			while ($DdCV = $S002->fetch_array()) {
				$xixD = $DdCV['id'];
				$xTxT = $DdCV['titulo'];
				$xDxE = $DdCV['descripcion'];
				$xTxM = substr($DdCV['fecha'], 10);
				$xLxN = $DdCV['link'];
				$xIxC = $DdCV['ico'];
				$xCxL = $DdCV['color'];
				unset($v3r);
				$v3r = [
					$xVxR => [
						'xTxT' => $xTxT,
						'xDxE' => $xDxE,
						'xTxM' => $xTxM,
						'xLxN' => $xLxN,
						'xIxC' => $xIxC,
						'xCxL' => $xCxL
					],
					'xVxR' => $xVxR,
					'xFxE' => $xFxE
				];
				array_push($LDC, $v3r);
			}
			
		//}
	}
}