<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaConsulta" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
} 
//include('consultasFunciones.php');
if($accion === 'consultas'){
	$C001 = "SELECT * FROM consultas WHERE con_universo = 1 ORDER BY con_fecha ASC";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar consultas: ".$C001);
	$numConsultas = $S001->num_rows;

	$LdConsultas = [];
	while ($consulta = $S001->fetch_array()) {
		$mascotaID = $consulta['con_mascota'];
		$C019 = "SELECT mascota_nombre FROM mascotas WHERE mascota_id = $mascotaID";
		$S019 = $conexion->query($C019) or die ("Fallo al consultar Mascota: ".$C019);
		$datosMascota = $S019->fetch_assoc();
		$consultaMascota = dCry2($datosMascota['mascota_nombre']);
		unset($datosConsulta);
		$datosConsulta = [
			'consultaID' => $consulta['con_id'],
			'consultaMascota' => $consultaMascota,
			'consultaEstado' => $consulta['con_estado'],
			'consultaFecha' => $consulta['con_fecha']
		];
		array_push($LdConsultas, $datosConsulta);
	}

}
elseif($accion == 'editarConsulta'){
	if($consultaID != ''){
		$consultaID = $dCry($consultaID);
		$C001 = "SELECT * FROM consultas WHERE con_id = $consultaID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Consulta");
		$consulta = $S001->fetch_assoc();

	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de consulta a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=consultas');
	}
}
elseif($accion == 'procesaConsulta'){

	$consultaNombre = limpia($consultaNombre);

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;

	//if(empty($consultaNombre)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	//if(empty($consultaEspecie) || $consultaEspecie == 'Nada'){ $_SESSION['mensajeForm'][] = 'No has sleccionado una Especie'; $_SESSION['formError']++; }

	$_SESSION['formConsulta'] = [];
	//$_SESSION['formConsulta']['consultaNombre'] = $consultaNombre;
 
	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $consultaID != ''){
			unset($sql_array);
			$sql_array = [
			];
			$accion = 'actualizar';
			$paramatros = 'con_id = '.$consultaID;
			ejecutaDB('consultas', $sql_array, $accion, $paramatros);
			unset($_SESSION['formConsulta']);
			//Bin4kuru('Se creo la consulta -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=consultas');
			$_SESSION['m3ns4J3'] = 'Se actualizo con exito la consulta: '.$consultaNombre;
		}
		else{
			unset($sql_array);
			$sql_array = [
			];
			$accion = 'insertar';
			$paramatros = NULL;
			$consultaID = ejecutaDB('consultas', $sql_array, $accion, $paramatros);
			unset($_SESSION['formConsulta']);
			//Bin4kuru('Se creo la consulta -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=consultas');
			$_SESSION['m3ns4J3'] = 'Se agrego con exito la consulta: '.$consultaNombre;
		}
	}
	else{
		if($editar == 'editar' && $consultaID != ''){
			llevame('../app?accion=editarConsulta&consultaID='.$eCry($consultaID));
		}
		else{
			llevame('../app?accion=consultas');
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formConsulta']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=consultas');
}