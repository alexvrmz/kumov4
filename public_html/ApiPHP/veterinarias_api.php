<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaVeterinaria" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}
if($accion === 'veterinarias'){
	$C001 = "SELECT * FROM veterinarias WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar veterinarias: ".$C001);
	$numVeterinarias = $S001->num_rows;

	$LdVeterinarias = [];
	while ($veterinaria = $S001->fetch_array()) {
		unset($datosVeterinaria);
		
		$datosVeterinaria = [ 
			'veterinariaID' => $veterinaria['veterinaria_id'],
			'veterinariaNombre' => $veterinaria['vet_nombre'],
			'veterinariaRZ' => $veterinaria['vet_razon'],
			'veterinariaRFC' => $veterinaria['vet_rfc'],
			'veterinariaApellido2' => $veterinaria['veterinaria_apellido2'],
			'veterinariaCorreo' => $veterinaria['vet_correo'],
			'veterinariaTel1' => $veterinaria['veterinaria_telefono1'],
			'veterinariaTel2' => $veterinaria['veterinaria_telefono2'],
			'veterinariaSexo' => $veterinaria['veterinaria_sexo'],
			'veterinariaFundacion' => $veterinaria['vet_fundacion'],
			'veterinariaSistema' => $veterinaria['vet_sistema'],
		];
		array_push($LdVeterinarias, $datosVeterinaria);
	}

}
elseif($accion == 'editarVeterinaria'){
	if($veterinariaID != ''){
		$veterinariaID = $dCry($veterinariaID);
		$C001 = "SELECT * FROM veterinarias WHERE veterinaria_id = $veterinariaID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Veterinaria");
		$veterinaria = $S001->fetch_assoc();
		$sexo = $veterinaria['veterinaria_sexo'];
		$veterinariaMunicipio = C0nMuniD($veterinaria['vet_mun']) == 'noid' ? $veterinaria['vet_mun']:C0nMuniD($veterinaria['vet_mun']);
		if($_SESSION['formVeterinaria']['veterinariaPaisActual'] != ''){
			$veterinariaPais = $_SESSION['formVeterinaria']['veterinariaPaisActual'];
		}
		else{
			$veterinariaPais = $veterinaria['vet_pais'];
		}

		if($_SESSION['formVeterinaria']['veterinariaEstadoActual'] != ''){
			$veterinariaEstado = $_SESSION['formVeterinaria']['veterinariaEstadoActual'];
		}
		else{
			$veterinariaEstado = $veterinaria['vet_estado'];
		}
	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de veterinaria a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=veterinarias');
	}
}
elseif($accion == 'procesaVeterinaria'){

	$veterinariaNombre = limpia($veterinariaNombre);
	$veterinariaRZ = limpia($veterinariaRZ);
	$veterinariaRFC = strtoupper(limpia($veterinariaRFC));
	$veterinariaNI = limpia($veterinariaNI);
	$veterinariaNE = limpia($veterinariaNE);
	$veterinariaCalle = limpia($veterinariaCalle);
	$veterinariaColonia = limpia($veterinariaColonia);
	$veterinariaCP = limpia($veterinariaCP);
	//$veterinariaPais = limpia($veterinariaPais);
	//$veterinariaEstado = limpia($veterinariaEstado);
	//$veterinariaMunicipio = limpia($veterinariaMunicipio);
	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;
	
	if(empty($veterinariaNombre)){ $_SESSION['mensajeForm'][] = 'Necesitas Escribir por los menos un Nombre.'; $_SESSION['formError']++; }
	if(!v4l_rfc($veterinariaRFC)){ $_SESSION['mensajeForm'][] = 'Necesitas Escribir el RFC valido!.'; $_SESSION['formError']++; }
	if(!empty($veterinariaCorreo) && !v4lEm4Il($veterinariaCorreo)){ $_SESSION['mensajeForm'][] = 'El Email no es Válido'; $_SESSION['formError']++; }
	if(empty($veterinariaCorreo)){ $_SESSION['mensajeForm'][] = 'El Email es Obligatorio'; $_SESSION['formError']++; }
	if(!empty($veterinariaCP) && !v4l_cp($veterinariaCP)){ $_SESSION['mensajeForm'][] = 'El Código Postal no Válido	'; $_SESSION['formError']++; }
	if($veterinariaPaisActual != $veterinariaPais){ $veterinariaEstado = ''; $veterinariaMunicipio = ''; }
	if($veterinariaEstadoActual != $veterinariaEstado){ $veterinariaMunicipio = ''; }
	if($veterinariaPais == 'nada' || $veterinariaPais == ''){ $_SESSION['mensajeForm'][] = 'Selecciona Pais.'; $_SESSION['formError']++; }
	if($veterinariaMunicipio == 'nada' || $veterinariaMunicipio == '' || $veterinariaMunicipio == 'Nada'){ $_SESSION['mensajeForm'][] = 'Selecciona Delegacón/Municipio.'; $_SESSION['formError']++; }
	if($veterinariaEstado == 'nada' || $veterinariaEstado == 'Nada' || $veterinariaEstado == ''){ $_SESSION['mensajeForm'][] = 'Selecciona Estado'; $_SESSION['formError']++; }
 
	$_SESSION['formVeterinaria'] = [];
	$_SESSION['formVeterinaria']['veterinariaPaisActual'] = $veterinariaPais;
	$_SESSION['formVeterinaria']['veterinariaEstadoActual'] = $veterinariaEstado;
	$_SESSION['formVeterinaria']['veterinariaNombre'] = $veterinariaNombre;
	$_SESSION['formVeterinaria']['veterinariaRZ'] = $veterinariaRZ;
	$_SESSION['formVeterinaria']['veterinariaRFC'] = $veterinariaRFC;
	$_SESSION['formVeterinaria']['veterinariaCorreo'] = $veterinariaCorreo;
	$_SESSION['formVeterinaria']['veterinariaNI'] = $veterinariaNI;
	$_SESSION['formVeterinaria']['veterinariaNE'] = $veterinariaNE;
	$_SESSION['formVeterinaria']['veterinariaEstado'] = $veterinariaEstado;
	$_SESSION['formVeterinaria']['veterinariaCalle'] = $veterinariaCalle;
	$_SESSION['formVeterinaria']['veterinariaColonia'] = $veterinariaColonia;
	$_SESSION['formVeterinaria']['veterinariaMunicipio'] = $veterinariaMunicipio;
	$_SESSION['formVeterinaria']['veterinariaCP'] = $veterinariaCP;
	$_SESSION['formVeterinaria']['veterinariaFundacion'] = $veterinariaFundacion;
	$_SESSION['formVeterinaria']['veterinariaPais'] = $veterinariaPais;

	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $veterinariaID != ''){
			unset($sql_array);
			$sql_array = [
				'vet_correo' => $veterinariaCorreo,
				'vet_nombre' => eCry2($veterinariaNombre),
				'vet_razon' => eCry2($veterinariaRZ),
				'vet_rfc' => eCry2($veterinariaRFC),
				'vet_int' => eCry2($veterinariaNI),
				'vet_ext' => eCry2($veterinariaNE),
				'vet_calle' => eCry2($veterinariaCalle),
				'vet_col' => eCry2($veterinariaColonia),
				'vet_mun' => $veterinariaMunicipio,
				'vet_estado' => $veterinariaEstado,
				'vet_pais' => $veterinariaPais,
				'vet_cp' => $veterinariaCP,
				'vet_fundacion' => $veterinariaFundacion,
			];
			if($veterinariaPsswd != ''){
				$sql_array['veterinaria_psswd'] = md5($veterinariaPsswd);
			}
			$accion = 'actualizar';
			$paramatros = 'veterinaria_id = '.$veterinariaID;
			ejecutaDB('veterinarias', $sql_array, $accion, $paramatros);
			unset($_SESSION['formVeterinaria']);

			///	----	Bitacora
				$usuario = $_SESSION['usuarioID'];
				$cambios = eCry2('El Usuario '.$usuario.' Edito datos del Veterinaria '.$veterinariaID);
				$tipoAfectado = 2;
				$IDAfectado = $veterinariaID;
				$accion = 300;
				$universo = $_SESSION['Universo'];
				Binakuru($cambios, $tipoAfectado, $IDAfectado, $usuario, $accion, $universo);
			///	----	Bitacora

			llevame('../app?accion=formVeterinaria&veterinariaID='.$eCry($veterinariaID));
		}
		else{
			unset($sql_array);
			$contrasenaTemp = g3n_ps(8);
			$sql_array = [
				'vet_correo' => $veterinariaCorreo,
				'vet_nombre' => eCry2($veterinariaNombre),
				'vet_razon' => eCry2($veterinariaRZ),
				'vet_rfc' => eCry2($veterinariaRFC),
				'vet_int' => eCry2($veterinariaNI),
				'vet_ext' => eCry2($veterinariaNE),
				'vet_calle' => eCry2($veterinariaCalle),
				'vet_col' => eCry2($veterinariaColonia),
				'vet_mun' => $veterinariaMunicipio,
				'vet_estado' => $veterinariaEstado,
				'vet_pais' => $veterinariaPais,
				'vet_cp' => $veterinariaCP,
				'vet_activa' => 1,
				'vet_fundacion' => $veterinariaFundacion,
				'vet_sistema' => date("Y-m-d H:i:s"),
				'vet_principal' => 1,
				'universo' => $Universo
			];
			echo '<pre>';
			print_r($sql_array);
			echo '/<pre>';
			$accion = 'insertar';
			$paramatros = NULL;
			$veterinariaID = ejecutaDB('veterinarias', $sql_array, $accion, $paramatros);
			$carpetaVeterinaria = 'documentos/'.$_SESSION['Universo'].'/veterinaria-'.$veterinariaID;
			mkdir($carpetaVeterinaria, 0777, true);
			chmod($carpetaVeterinaria, 0777);
			unset($_SESSION['formVeterinaria']);
			///	----	Bitacora
				$usuario = $_SESSION['usuarioID'];
				$cambios = eCry2('El Usuario '.$usuario.' Agrego al Veterinaria '.$veterinariaID);
				$tipoAfectado = 2;
				$IDAfectado = $veterinariaID;
				$accion = 301;
				$universo = $_SESSION['Universo'];
				Binakuru($cambios, $tipoAfectado, $IDAfectado, $usuario, $accion, $universo);
			///	----	Bitacora
			llevame('../app?accion=formVeterinaria&veterinariaID='.$eCry($veterinariaID).'&cltemp='.$eCry($contrasenaTemp));
		}
	}
	else{
		if($editar == 'editar' && $veterinariaID != ''){
			$_SESSION['formVeterinaria']['veterinariaPaisActual'] = $veterinariaPais;
			$_SESSION['formVeterinaria']['veterinariaEstadoActual'] = $veterinariaEstado;
			llevame('../app?accion=formVeterinaria&veterinariaID='.$eCry($veterinariaID));
		}
		else{
			/*$_SESSION['formVeterinaria']['veterinariaPaisActual'] = $veterinariaPais;
			$_SESSION['formVeterinaria']['veterinariaEstadoActual'] = $veterinariaEstado;*/
			llevame('../app?accion=formVeterinaria&veterinariaID='.$eCry($veterinariaID));
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formVeterinaria']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=formVeterinaria');
}
elseif($accion == 'fichaVeterinaria' || ($accion == 'formVeterinaria' && $dCry($veterinariaID) != '')){
	$C004 = "SELECT * FROM veterinarias WHERE vet_id = ".$dCry($veterinariaID)." ";
	$S004 = $conexion->query($C004) or die ("Fallo al seleccionar Veterinaria: ".$C004);
	$veterinaria = $S004->fetch_assoc();
	$nombre1 = dCry2($veterinaria['vet_nombre']);
	$nombre2 = dCry2($veterinaria['vet_razon']);
	$apellido1 = dCry2($veterinaria['vet_rfc']);
	$apellido2 = dCry2($veterinaria['veterinaria_apellido2']);
	$nombreCompleto = $apellido1.' '.$apellido2.' '.$nombre1.' '.$nombre2;
	$veterinariaTelefono = $veterinaria['veterinaria_telefono1'] != '' ? dCry2($veterinaria['veterinaria_telefono1']):dCry2($veterinaria['veterinaria_telefono2']);
	$veterinariaCorreo = $veterinaria['vet_correo'];
	$veterinariaRegistro = $veterinaria['vet_sistema'];
	$veterinariaCalle = dCry2($veterinaria['vet_calle']);
	$veterinariaNE = dCry2($veterinaria['vet_ext']);
	$veterinariaNI = dCry2($veterinaria['vet_int']);
	$veterinariaColonia = dCry2($veterinaria['vet_col']);
	//if(is_string($veterinariaMunicipio) == 1 && is_numeric($veterinariaMunicipio) == 0){
		$veterinariaMunicipio = C0nMuniD($veterinaria['vet_mun']) == 'noid' ? $veterinaria['vet_mun']:C0nMuniD($veterinaria['vet_mun']);

	//}
	//else{
		//$veterinariaMunicipio = $veterinaria['vet_mun'];
	//}
	//$veterinariaMunicipio = $veterinaria['vet_mun'] == 1 ? 'si':'no';
	$veterinariaPais = $veterinaria['vet_pais'];
	$veterinariaEstado = consulta_estado_id($veterinaria['vet_estado']);
	$veterinariaCP = $veterinaria['vet_cp'];
	$veterinariaPais = $paises[$veterinaria['vet_pais']];
	/*$C005 = "SELECT doc_archivo, doc_id FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$veterinaria['veterinaria_id']." ORDER BY doc_id ASC";
	$S005 = $conexion->query($C005) or die ("Fallo al consultar foto de veterinaria");
	$fotoVeterinaria = $S005->fetch_assoc();*/

	/*$edadCompleta = calcularEdad($veterinaria['vet_fundacion']);
	$edad = $edadCompleta->format('%Y').' Año(s) '.$edadCompleta->format('%m').' Mes(es) y '.$edadCompleta->format('%d').' Dia(s)';*/

	$C001 = "SELECT * FROM mascotas WHERE mascota_universo = $Universo AND mascota_dueno = ".$dCry($veterinariaID)." AND mascota_estado = 1";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar mascotas: ".$C001);
	$numMascotas = $S001->num_rows;

	$LdMascotas = [];
	while ($mascota = $S001->fetch_array()) {
		unset($datosMascota);
		$especie = $mascota['mascota_especie'];
		$raza = $mascota['mascota_raza'];

		$C002 = "SELECT * FROM especies WHERE especie_id = $especie";
		$S002 = $conexion->query($C002) or die ("Error al consultar especie de mascota");
		$datosEspecie = $S002->fetch_assoc();
		$especie = $datosEspecie['especie_descripcion'];

		$C003 = "SELECT * FROM razas WHERE raza_id = $raza";
		$S003 = $conexion->query($C003) or die ("Error al consultar raza");
		$datosRaza = $S003->fetch_assoc();
		$raza = $datosRaza['raza_descripcion'];

		$edadCompleta = calcularEdad($mascota['mascota_nacimiento']);
		$edad = $edadCompleta->format('%Y');
		if($edad == 1){
			$edad = $edad.' Año';
		}
		elseif($edad >= 2){
			$edad = $edad.' Años';
		}
		elseif($edad < 1){
			$edad = $edadCompleta->format('%m').' Mes(es)';
			$edad .= ' y '. $edadCompleta->format('%d').' día(s)';
		}

			/*$edad = $edadCompleta->format('%m').' Mes(es)';
			if($edad == 0){
				$edad = $edadCompleta->format('%d').' día(s)';
			}
		}*/
		
		$C005 = "SELECT doc_archivo FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$mascota['mascota_id']." ORDER BY doc_id ASC";
		$S005 = $conexion->query($C005) or die ("Fallo al consultar foto de mascota");
		$fotoMascota = $S005->fetch_assoc();
		if($fotoMascota != ''){
			$mascotaFoto = 'docs/'.$Universo.'/mascota-'.$mascota['mascota_id'].'/'.$fotoMascota['doc_archivo'];
		}
		else{
			$mascotaFoto = 'dist/img/gato_avatar.jpg';
		}

		$edad = ltrim($edad, '0');//.' año(s)';
		//$edad = $edad < 1 ? '- 1'.$edad:$edad;
		unset($datosMascota);
		$datosMascota = [
			'mascotaID' => $mascota['mascota_id'],
			'mascotaNombre' => dCry2($mascota['mascota_nombre']),
			'mascotaFoto' => $mascotaFoto,
			'mascotaEspecie' => $especie,
			'mascotaRaza' => $raza,
			'mascotaSexo' => $mascota['mascota_sexo'],
			'mascotaEsteril' => $mascota['mascota_esteril'],
			'mascotaColor' => $mascota['mascota_color'],
			'mascotaEdad' => $edad,
			'mascotaNacimiento' => $mascota['mascota_nacimiento'],
			'mascotaSistema' => $mascota['mascota_sistema'],
			'mascotaDueno' => $mascota['mascota_dueno'],
		];
		array_push($LdMascotas, $datosMascota);
	}

	if($fotoVeterinaria['doc_archivo'] != ''){
		$flis = 'documentos/'.$Universo.'/veterinaria-'.$veterinaria['veterinaria_id'].'/'.$fotoVeterinaria['doc_archivo'];
	}
	else{
		$flis = 'dist/img/usuario.png'; 
	}	
}