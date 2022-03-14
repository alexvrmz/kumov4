<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaRaza" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
} 
//include('razasFunciones.php');
if($accion === 'razas'){
	$C001 = "SELECT * FROM razas WHERE (raza_universo = 1 OR raza_universo = 0)";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar razas");
	$numRazas = $S001->num_rows;

	$LdRazas = [];
	while ($raza = $S001->fetch_array()) {
		$razaNombre = $raza['raza_descripcion'];
		$estado = $raza['raza_estado'];
		$especieID = $raza['raza_especie'];
		$inicial =  $raza['raza_inicial'];
		
		$C018 = "SELECT especie_descripcion FROM especies WHERE especie_id = $especieID ";
		$S018 = $conexion->query($C018) or die ("Fallo al seleccionar Especie: ".$C018);
		$datosEspecie = $S018->fetch_assoc();
		$especie = $datosEspecie['especie_descripcion'];
		

		unset($datosRaza);
		$datosRaza = [
			'razaID' => $raza['raza_id'],
			'razaNombre' => $razaNombre,
			'razaEstado' => $estado,
			'razaEspecie' => $especie,
			'razaInicial' => $inicial,
		];
		array_push($LdRazas, $datosRaza);
	}

		$C019 = "SELECT especie_id, especie_descripcion FROM especies WHERE especie_estado = 1 AND (especie_universo = 1 || especie_universo = 0) ORDER BY especie_descripcion ASC ";
		$S019 = $conexion->query($C019) or die ("Fallo al consultar especies: ".$C019);
		$listaEspecies = [];
		while ($datosEspecie = $S019->fetch_array()) {
			unset($elEspe);
			$elEspe = [
				'especieNombre' => $datosEspecie['especie_descripcion'],
				'especieID' => $datosEspecie['especie_id']
			];
			array_push($listaEspecies, $elEspe);
		}


}
elseif($accion == 'editarRaza'){
	if($razaID != ''){
		$razaID = $dCry($razaID);
		$C001 = "SELECT * FROM razas WHERE raza_id = $razaID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Raza");
		$raza = $S001->fetch_assoc();

		$C019 = "SELECT especie_id, especie_descripcion FROM especies WHERE especie_estado = 1 AND (especie_universo = 1 || especie_universo = 0) ORDER BY especie_descripcion ASC ";
		$S019 = $conexion->query($C019) or die ("Fallo al consultar especies: ".$C019);
		$listaEspecies = [];
		while ($datosEspecie = $S019->fetch_array()) {
			unset($elEspe);
			$elEspe = [
				'especieNombre' => $datosEspecie['especie_descripcion'],
				'especieID' => $datosEspecie['especie_id']
			];
			array_push($listaEspecies, $elEspe);
		}

	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de raza a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=razas');
	}
}
elseif($accion == 'procesaRaza'){

	$razaNombre = limpia($razaNombre);

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;

	if(empty($razaNombre)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	if(empty($razaEspecie) || $razaEspecie == 'Nada'){ $_SESSION['mensajeForm'][] = 'No has sleccionado una Especie'; $_SESSION['formError']++; }

	$_SESSION['formRaza'] = [];
	$_SESSION['formRaza']['razaNombre'] = $razaNombre;
	$_SESSION['formRaza']['razaEspecie'] = $razaEspecie;
 
	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $razaID != ''){
			unset($sql_array);
			$sql_array = [
				'raza_descripcion' => $razaNombre,
				'raza_especie' => $razaEspecie,
				'raza_estado' => $razaEstado,
			];
			$accion = 'actualizar';
			$paramatros = 'raza_id = '.$razaID;
			ejecutaDB('razas', $sql_array, $accion, $paramatros);
			unset($_SESSION['formRaza']);
			//Bin4kuru('Se creo la raza -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=razas');
			$_SESSION['m3ns4J3'] = 'Se actualizo con exito la raza: '.$razaNombre;
		}
		else{
			unset($sql_array);
			$sql_array = [
				'raza_descripcion' => $razaNombre,
				'raza_estado' => 1,
				'raza_especie' => $razaEspecie,
				'raza_inicial' => 0,
				'raza_universo' => $Universo
			];
			$accion = 'insertar';
			$paramatros = NULL;
			$razaID = ejecutaDB('razas', $sql_array, $accion, $paramatros);
			unset($_SESSION['formRaza']);
			//Bin4kuru('Se creo la raza -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=razas');
			$_SESSION['m3ns4J3'] = 'Se agrego con exito la raza: '.$razaNombre;
		}
	}
	else{
		if($editar == 'editar' && $razaID != ''){
			llevame('../app?accion=editarRaza&razaID='.$eCry($razaID));
		}
		else{
			llevame('../app?accion=razas');
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formRaza']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=razas');
}