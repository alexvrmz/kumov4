<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
//include('../front/idiomas/'.$iDi['u5h8ir5_iDi'].'/i_Bin4kuru.php');
$afectados = [
    1 => 'Usuario',
    2 => 'Cliente',
    3 => 'Mascota',
    4 => 'Especie',
    5 => 'Raza'
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

		$C003 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biUsuario ";
		$S003 = $conexion->query($C003) or die ("Fallo al consultar usuario: ".$C003);
		$datosUsuarioU = $S003->fetch_assoc();
		$biUsuario = $datosUsuarioU['u5hUS8ir5'];

		if($biTipoA == 1){
			$C002 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $biIDA ";
			$S002 = $conexion->query($C002) or die ("Fallo al consultar usuario: ".$C002);
			$datosUsuario = $S002->fetch_assoc();
			$afectadoID = $datosUsuario['u5hUS8ir5'];
		}
		elseif($biTipoA == 2){
			$C002 = "SELECT cliente_usuario FROM clientes WHERE cliente_id = $biIDA ";
			$S002 = $conexion->query($C002) or die ("Fallo al consultar cliente: ".$C002);
			$datosCliente = $S002->fetch_assoc();
			$afectadoID = $datosCliente['cliente_usuario'];
		}
		elseif($biTipoA == 3){
			$C002 = "SELECT mascota_nombre FROM mascotas WHERE mascota_id = $biIDA ";
			$S002 = $conexion->query($C002) or die ("Fallo al consultar mascota: ".$C002);
			$datosMascota = $S002->fetch_assoc();
			$afectadoID = dCry2($datosMascota['mascota_nombre']);
		}
		elseif($biTipoA == 4){
			$C002 = "SELECT especie_descripcion FROM especies WHERE especie_id = $biIDA ";
			$S002 = $conexion->query($C002) or die ("Fallo al consultar especies: ".$C002);
			$datosEspecie = $S002->fetch_assoc();
			$afectadoID = $datosEspecie['especie_descripcion'];
		}
		elseif($biTipoA == 5){
			$C002 = "SELECT raza_descripcion FROM razas WHERE raza_id = $biIDA ";
			$S002 = $conexion->query($C002) or die ("Fallo al consultar razas: ".$C002);
			$datosRaza = $S002->fetch_assoc();
			$afectadoID = $datosRaza['raza_descripcion'];
		}
		
		$biTipoA = $afectados[$DdB['bi_tipoA']];

		

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
