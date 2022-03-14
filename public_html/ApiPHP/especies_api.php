<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaEspecie" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
} 
//include('especiesFunciones.php');
if($accion === 'especies'){
	$C001 = "SELECT * FROM especies WHERE (especie_universo = 1 OR especie_universo = 0)";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar especies");
	$numEspecies = $S001->num_rows;

	$LdEspecies = [];
	while ($especie = $S001->fetch_array()) {
		unset($datosEspecie);
		$especieNombre = $especie['especie_descripcion'];
		$estado = $especie['especie_estado'];
		$inicial =  $especie['especie_inicial'];

		unset($datosEspecie);
		$datosEspecie = [
			'especieID' => $especie['especie_id'],
			'especieNombre' => $especieNombre,
			'especieEstado' => $estado,
			'especieInicial' => $inicial,
		];
		array_push($LdEspecies, $datosEspecie);
	}
}
elseif($accion == 'editarEspecie'){
	if($especieID != ''){
		$especieID = $dCry($especieID);
		$C001 = "SELECT * FROM especies WHERE especie_id = $especieID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Especie");
		$especie = $S001->fetch_assoc();

	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de especie a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=especies');
	}
}
elseif($accion == 'procesaEspecie'){

	$especieNombre = limpia($especieNombre);

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;

	if(empty($especieNombre)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }

	$_SESSION['formEspecie'] = [];
	$_SESSION['formEspecie']['especieNombre'] = $especieNombre;
 
	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $especieID != ''){
			unset($sql_array);
			$sql_array = [
				'especie_descripcion' => $especieNombre,
				'especie_estado' => $especieEstado,
			];
			$accion = 'actualizar';
			$paramatros = 'especie_id = '.$especieID;
			ejecutaDB('especies', $sql_array, $accion, $paramatros);
			unset($_SESSION['formEspecie']);
			//Bin4kuru('Se creo la especie -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=especies');
			$_SESSION['m3ns4J3'] = 'Se actualizo con exito la especie: '.$especieNombre;
		}
		else{
			unset($sql_array);
			$sql_array = [
				'especie_descripcion' => $especieNombre,
				'especie_estado' => 1,
				'especie_inicial' => 0,
				'especie_universo' => $Universo
			];
			$accion = 'insertar';
			$paramatros = NULL;
			$especieID = ejecutaDB('especies', $sql_array, $accion, $paramatros);
			unset($_SESSION['formEspecie']);
			//Bin4kuru('Se creo la especie -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=especies');
			$_SESSION['m3ns4J3'] = 'Se agrego con exito la especie: '.$especieNombre;
		}
	}
	else{
		if($editar == 'editar' && $especieID != ''){
			llevame('../app?accion=editarEspecie&especieID='.$eCry($especieID));
		}
		else{
			llevame('../app?accion=especies');
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formEspecie']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=especies');
}
