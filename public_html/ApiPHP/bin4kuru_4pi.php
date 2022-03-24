<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
//include('../front/idiomas/'.$iDi['u5h8ir5_iDi'].'/i_Bin4kuru.php');
$afectados = [
    1 => 'Usuario',
    2 => 'cliente',
    3 => 'mascota',
  ];

if($accion === 'eDtDpp'){
	include('conexion.php');
 	include('funciones.php');
}

if($accion === "bin4kuru"){
	$usuario = $_SESSION['usuarioID'];
	$universo = $_SESSION['Universo'];
	$fecha = date('Y-m-d');
	$C001 = "SELECT * FROM binakuru WHERE bi_fecha BETWEEN '$fecha 00:00:00' AND '$fecha 23:59:59' AND universo = $universo ORDER BY bi_fecha DESC";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar bitacora: ".$C001);
	$ldi = [];
	while ($DdB = $S001->fetch_assoc()) {
		$biID = $DdB['bi_id'];
		$biCambios = dCry2($DdB['bi_cambios']);
		$biTipoA = $DdB['bi_tipoA'];
		$biIDA = $DdB['bi_IDA'];
		$biUsuario = $DdB['bi_usuario'];
		$biAccion = $DdB['bi_accion'];
		$biFecha = $DdB['bi_fecha'];	


if($biTipoA == 1){
	$C002 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biIDA ";
	$S002 = $conexion->query($C002) or die ("Fallo al consultar usuario: ".$C002);
	$datosUsuario = $S002->fetch_assoc();
	$afectadoID = $datosUsuario['u5hUS8ir5'];
	$biTipoA = $afectados[$DdB['bi_tipoA']];

	$C003 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biUsuario ";
	$S003 = $conexion->query($C003) or die ("Fallo al consultar usuario: ".$C003);
	$datosUsuarioU = $S003->fetch_assoc();
	$biUsuario = $datosUsuarioU['u5hUS8ir5'];


}
elseif($biTipoA == 2){

}

		/*if(!empty($biTipoA)){
			$C002 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biTipoA";
			$S002 = $conexion->query($C002) or die ("fallo al seleccionar usuario: ".$C002);
			$DDU = $S002->fetch_assoc();
			$EdUS =  $DDU['u5hUS8ir5'];
		}

		if(!empty($biIDA)){
			$C003 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biIDA";
			$S003 = $conexion->query($C003) or die ("fallo al seleccionar usuario: ".$C003);
			$DDu = $S003->fetch_assoc();
			$Edu =  $DDu['u5hUS8ir5'];
		}

		if(!empty($biAccion)){
			$C004 = "SELECT eMNICEm FROM eMpR3sA5 WHERE eMIDEm = $biAccion";
			$S004 = $conexion->query($C004) or die ("Fallo al seleccionar empresa: ".$C004);
			$DDe = $S004->fetch_assoc();
			if($S004->num_rows == 0){
				$EeU = "";
			}
			else{
				$EeU = dCry2($DDe['eMNICEm']);
			}
		}

		if(!empty($biFecha)){
			$C005 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = $biFecha";
			$S005 = $conexion->query($C005) or die ("Fallo al seleccionar flota: ".$C005);
			$DDf = $S005->fetch_assoc();

			
			if($S005->num_rows == 0){
				$EfU = "";
			}
			else{
				$EfU = dCry2($DDf['xN4m37l0']);
			}
		}

		if(!empty($kuDIDx)){
			$C006 = "SELECT D0cD3SxS FROM D0cUM3n705 WHERE D0cIDxS = $kuDIDx";
			$S006 = $conexion->query($C006) or die ("Fallo al seleccionar documento: ".$C006);
			$DDd = $S006->fetch_assoc();
			if($S006->num_rows == 0){
				$EdD = "";
			}
			else{
				$EdD = dCry2($DDd['D0cD3SxS']);
			}
		}

		if(!empty($kuPIDx)){
			$C008 = "SELECT pR0nic FROM proveedores WHERE prov_id = $kuPIDx";
			$S008 = $conexion->query($C008) or die ("Fallo al seleccionar proveedor: ".$C008);
			$DDp = $S008->fetch_assoc();
			if($S008->num_rows == 0){
				$EdP = "";
			}
			else{
				$EdP = dCry2($DDp['pR0nic']);
			}
		}

		if(!empty($kuVEIDx)){
			$C007 = "SELECT xV3hi3C0Xu7l0s FROM v3hiXu7l0s WHERE xV3hiIDXu7l0s = $kuVEIDx";
			$S007 = $conexion->query($C007) or die ("Fallo al seleccionar Automovil: ".$C007);
			$DDv = $S007->fetch_assoc();
			if($S007->num_rows == 0){
				$EdV = "";
			}
			else{
				$EdV = dCry2($DDv['xV3hi3C0Xu7l0s']);
			}
		}*/

		/*if(!empty($biFecha)){
			$C005 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = $biFecha";
			$S005 = $conexion->query($C005) or die ("Fallo al seleccionar flota: ".$C005);
			$DDf = $S005->fetch_assoc();

			
			if($S005->num_rows == 0){
				$EfU = "";
			}
			else{
				$EfU = dCry2($DDf['xN4m37l0']);
			}
		}*/

		unset($it);
		
		$it = [
			'biID' => $biID,
			'biCambios' => $biCambios,
			'biTipoA' => $biTipoA,
			'biIDA' => $biIDA,
			'kuVEIDx' => $kuVEIDx,
			'biAccion' => $biAccion,
			'biFecha' => $biFecha,
			'afectadoID' => $afectadoID,	
			'biUsuario' => $biUsuario,
			'kuAXIx' => $kuAXIx,
			'kuTIMDx' => $kuTIMDx,
			'EdUS' => $EdUS,
			'Edu' => $Edu,
			'EeU' => $EeU,
			'EfU' => $EfU,
			'EdD' => $EdD,
			'EdV' => $EdV,
			'EdP' => $EdP
		];
		unset($biCambios);
		unset($biTipoA);
		unset($biIDA);
		unset($kuVEIDx);
		unset($biAccion);
		unset($biFecha);
		unset($afectadoID);
		unset($kuAXIx);
		unset($kuTIMDx);
		unset($EdUS);
		unset($Edu);
		unset($EeU);
		unset($EdD);
		unset($EdV);
		unset($EdP);
		unset($EfU);
		array_push($ldi, $it);
	}
}
