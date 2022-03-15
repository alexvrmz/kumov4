<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaCliente" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}
include('clientesFunciones.php');
if($accion === 'clientes'){
	$C001 = "SELECT * FROM clientes WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar clientes: ".$C001);
	$numClientes = $S001->num_rows;

	$LdClientes = [];
	while ($cliente = $S001->fetch_array()) {
		unset($datosCliente);
		
		$datosCliente = [
			'clienteID' => $cliente['cliente_id'],
			'clienteNombre1' => $cliente['cliente_nombre1'],
			'clienteNombre2' => $cliente['cliente_nombre2'],
			'clienteApellido1' => $cliente['cliente_apellido1'],
			'clienteApellido2' => $cliente['cliente_apellido2'],
			'clienteUsuario' => $cliente['cliente_usuario'],
			'clienteTel1' => $cliente['cliente_telefono1'],
			'clienteTel2' => $cliente['cliente_telefono2'],
			'clienteSexo' => $cliente['cliente_sexo'],
			'clienteNacimiento' => $cliente['cliente_nacimiento'],
			'clienteSistema' => $cliente['cliente_registro'],
		];
		array_push($LdClientes, $datosCliente);
	}

}
elseif($accion == 'editarCliente'){
	if($clienteID != ''){
		$clienteID = $dCry($clienteID);
		$C001 = "SELECT * FROM clientes WHERE cliente_id = $clienteID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Cliente");
		$cliente = $S001->fetch_assoc();
		$sexo = $cliente['cliente_sexo'];
		$clienteMunicipio = C0nMuniD($cliente['cliente_municipio']) == 'noid' ? $cliente['cliente_municipio']:C0nMuniD($cliente['cliente_municipio']);
		if($_SESSION['formCliente']['clientePaisActual'] != ''){
			$clientePais = $_SESSION['formCliente']['clientePaisActual'];
		}
		else{
			$clientePais = $cliente['cliente_pais'];
		}

		if($_SESSION['formCliente']['clienteEstadoActual'] != ''){
			$clienteEstado = $_SESSION['formCliente']['clienteEstadoActual'];
		}
		else{
			$clienteEstado = $cliente['cliente_estado'];
		}
	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de cliente a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=clientes');
	}
}
elseif($accion == 'procesaCliente'){

	$clienteNombre1 = limpia($clienteNombre1);
	$clienteNombre2 = limpia($clienteNombre2);
	$clienteApellido1 = limpia($clienteApellido1);
	$clienteApellido2 = limpia($clienteApellido2);
	$clienteNI = limpia($clienteNI);
	$clienteNE = limpia($clienteNE);
	$clienteCalle = limpia($clienteCalle);
	$clienteColonia = limpia($clienteColonia);
	$clienteCP = limpia($clienteCP);
	//$clientePais = limpia($clientePais);
	//$clienteEstado = limpia($clienteEstado);
	//$clienteMunicipio = limpia($clienteMunicipio);
	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;
	
	if(empty($clienteNombre1)){ $_SESSION['mensajeForm'][] = 'Necesitas Escribir por los menos un Nombre.'; $_SESSION['formError']++; }
	if(empty($clienteApellido1)){ $_SESSION['mensajeForm'][] = 'Necesitas Escribir el Apellido Paterno'; $_SESSION['formError']++; }
	if(!empty($clienteUsuario) && !v4lEm4Il($clienteUsuario)){ $_SESSION['mensajeForm'][] = 'El Email no es Válido'; $_SESSION['formError']++; }
	if(empty($clienteUsuario)){ $_SESSION['mensajeForm'][] = 'El Email es Obligatorio'; $_SESSION['formError']++; }
	if(!empty($clienteCP) && !v4l_cp($clienteCP)){ $_SESSION['mensajeForm'][] = 'El Código Postal no Válido	'; $_SESSION['formError']++; }
	if($clienteSexo == 'Ninguno'){ $_SESSION['mensajeForm'][] = 'Selecciona el Género de '.$clienteNombre1; $_SESSION['formError']++; }
	if($clientePaisActual != $clientePais){ $clienteEstado = ''; $clienteMunicipio = ''; }
	if($clienteEstadoActual != $clienteEstado){ $clienteMunicipio = ''; }
	if($clientePais == 'nada' || $clientePais == ''){ $_SESSION['mensajeForm'][] = 'Selecciona Pais.'; $_SESSION['formError']++; }
	if($clienteMunicipio == 'nada' || $clienteMunicipio == '' || $clienteMunicipio == 'Nada'){ $_SESSION['mensajeForm'][] = 'Selecciona Delegacón/Municipio.'; $_SESSION['formError']++; }
	if($clienteEstado == 'nada' || $clienteEstado == 'Nada' || $clienteEstado == ''){ $_SESSION['mensajeForm'][] = 'Selecciona Estado'; $_SESSION['formError']++; }
 
	$_SESSION['formCliente'] = [];
	$_SESSION['formCliente']['clientePaisActual'] = $clientePais;
	$_SESSION['formCliente']['clienteEstadoActual'] = $clienteEstado;
	$_SESSION['formCliente']['clienteNombre1'] = $clienteNombre1;
	$_SESSION['formCliente']['clienteNombre2'] = $clienteNombre2;
	$_SESSION['formCliente']['clienteApellido1'] = $clienteApellido1;
	$_SESSION['formCliente']['clienteApellido2'] = $clienteApellido2;
	$_SESSION['formCliente']['clienteUsuario'] = $clienteUsuario;
	$_SESSION['formCliente']['clienteNI'] = $clienteNI;
	$_SESSION['formCliente']['clienteNE'] = $clienteNE;
	$_SESSION['formCliente']['clienteEstado'] = $clienteEstado;
	$_SESSION['formCliente']['clienteCalle'] = $clienteCalle;
	$_SESSION['formCliente']['clienteColonia'] = $clienteColonia;
	$_SESSION['formCliente']['clienteMunicipio'] = $clienteMunicipio;
	$_SESSION['formCliente']['clienteCP'] = $clienteCP;
	$_SESSION['formCliente']['clienteTelefono1'] = $clienteTelefono1;
	$_SESSION['formCliente']['clienteTelefono2'] = $clienteTelefono2;
	$_SESSION['formCliente']['clienteSexo'] = $clienteSexo;
	$_SESSION['formCliente']['clienteNacimiento'] = $clienteNacimiento;
	$_SESSION['formCliente']['clientePais'] = $clientePais;

	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $clienteID != ''){
			unset($sql_array);
			$sql_array = [
				'cliente_nombre1' => eCry2($clienteNombre1),
				'cliente_nombre2' => eCry2($clienteNombre2),
				'cliente_apellido1' => eCry2($clienteApellido1),
				'cliente_apellido2' => eCry2($clienteApellido2),
				'cliente_usuario' => $clienteUsuario,
				//'cliente_psswd' => $clientePsswd,
				'cliente_ni' => eCry2($clienteNI),
				'cliente_sexo' => $clienteSexo,
				'cliente_ne' => eCry2($clienteNE),
				'cliente_calle' => eCry2($clienteCalle),
				'cliente_colonia' => eCry2($clienteColonia),
				'cliente_municipio' => $clienteMunicipio,
				'cliente_estado' => $clienteEstado,
				'cliente_pais' => $clientePais,
				'cliente_cp' => $clienteCP,
				'cliente_telefono1' => eCry2($clienteTelefono1),
				'cliente_telefono2' => eCry2($clienteTelefono2),
				'cliente_nacimiento' => $clienteNacimiento,
				'cliente_registro' => date("Y-m-d H:i:s"),
				'Universo' => $Universo
			];
			if($clientePsswd != ''){
				$sql_array['cliente_psswd'] = md5($clientePsswd);
			}
			$accion = 'actualizar';
			$paramatros = 'cliente_id = '.$clienteID;
			ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			unset($_SESSION['formCliente']);
			//Bin4kuru('Se creo la cliente -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=fichaCliente&clienteID='.$eCry($clienteID));
		}
		else{
			unset($sql_array);
			$contrasenaTemp = g3n_ps(8);
			$sql_array = [
				'cliente_usuario' => $clienteUsuario,
				'cliente_psswd' => md5($contrasenaTemp),
				'cliente_nombre1' => eCry2($clienteNombre1),
				'cliente_nombre2' => eCry2($clienteNombre2),
				'cliente_apellido1' => eCry2($clienteApellido1),
				'cliente_apellido2' => eCry2($clienteApellido2),
				'cliente_sexo' => $clienteSexo,
				'cliente_ni' => eCry2($clienteNI),
				'cliente_ne' => eCry2($clienteNE),
				'cliente_calle' => eCry2($clienteCalle),
				'cliente_colonia' => eCry2($clienteColonia),
				'cliente_municipio' => $clienteMunicipio,
				'cliente_estado' => $clienteEstado,
				'cliente_pais' => $clientePais,
				'cliente_cp' => $clienteCP,
				'cliente_telefono1' => eCry2($clienteTelefono1),
				'cliente_telefono2' => eCry2($clienteTelefono2),
				'cliente_nacimiento' => $clienteNacimiento,
				'cliente_registro' => date("Y-m-d H:i:s"),
				'Universo' => $Universo
			];
			$accion = 'insertar';
			$paramatros = NULL;
			$clienteID = ejecutaDB('clientes', $sql_array, $accion, $paramatros);
			$carpetaCliente = 'documentos/'.$_SESSION['Universo'].'/cliente-'.$clienteID;
			mkdir($carpetaCliente, 0777, true);
			chmod($carpetaCliente, 0777);
			unset($_SESSION['formCliente']);
			//Bin4kuru('Se creo la cliente -> ', $accion, $V=0, $U, $F=0, $E=0, $D=0, $P=0);
			llevame('../app?accion=fichaCliente&clienteID='.$eCry($clienteID).'&cltemp='.$eCry($contrasenaTemp));
		}
	}
	else{
		if($editar == 'editar' && $clienteID != ''){
			$_SESSION['formCliente']['clientePaisActual'] = $clientePais;
			$_SESSION['formCliente']['clienteEstadoActual'] = $clienteEstado;
			llevame('../app?accion=editarCliente&clienteID='.$eCry($clienteID));
		}
		else{
			/*$_SESSION['formCliente']['clientePaisActual'] = $clientePais;
			$_SESSION['formCliente']['clienteEstadoActual'] = $clienteEstado;*/
			llevame('../app?accion=clientes');
		}
	}

}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formCliente']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=clientes');
}
elseif($accion == 'fichaCliente'){
	$C004 = "SELECT * FROM clientes WHERE cliente_id = ".$dCry($clienteID)." ";
	$S004 = $conexion->query($C004) or die ("Fallo al seleccionar Cliente");
	$cliente = $S004->fetch_assoc();
	$nombre1 = dCry2($cliente['cliente_nombre1']);
	$nombre2 = dCry2($cliente['cliente_nombre2']);
	$apellido1 = dCry2($cliente['cliente_apellido1']);
	$apellido2 = dCry2($cliente['cliente_apellido2']);
	$nombreCompleto = $apellido1.' '.$apellido2.' '.$nombre1.' '.$nombre2;
	$clienteTelefono = $cliente['cliente_telefono1'] != '' ? dCry2($cliente['cliente_telefono1']):dCry2($cliente['cliente_telefono2']);
	$clienteCorreo = $cliente['cliente_usuario'];
	$clienteRegistro = $cliente['cliente_registro'];
	$clienteCalle = dCry2($cliente['cliente_calle']);
	$clienteNE = dCry2($cliente['cliente_ne']);
	$clienteNI = dCry2($cliente['cliente_ni']);
	$clienteColonia = dCry2($cliente['cliente_colonia']);
	//if(is_string($clienteMunicipio) == 1 && is_numeric($clienteMunicipio) == 0){
		$clienteMunicipio = C0nMuniD($cliente['cliente_municipio']) == 'noid' ? $cliente['cliente_municipio']:C0nMuniD($cliente['cliente_municipio']);

	//}
	//else{
		//$clienteMunicipio = $cliente['cliente_municipio'];
	//}
	//$clienteMunicipio = $cliente['cliente_municipio'] == 1 ? 'si':'no';
	$clientePais = $cliente['cliente_pais'];
	$clienteEstado = consulta_estado_id($cliente['cliente_estado']);
	$clienteCP = $cliente['cliente_cp'];
	$clientePais = $paises[$cliente['cliente_pais']];
	/*$C005 = "SELECT doc_archivo, doc_id FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$cliente['cliente_id']." ORDER BY doc_id ASC";
	$S005 = $conexion->query($C005) or die ("Fallo al consultar foto de cliente");
	$fotoCliente = $S005->fetch_assoc();*/

	/*$edadCompleta = calcularEdad($cliente['cliente_nacimiento']);
	$edad = $edadCompleta->format('%Y').' Año(s) '.$edadCompleta->format('%m').' Mes(es) y '.$edadCompleta->format('%d').' Dia(s)';*/

	$C001 = "SELECT * FROM mascotas WHERE mascota_universo = $Universo AND mascota_dueno = ".$dCry($clienteID)." AND mascota_estado = 1";
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

	if($fotoCliente['doc_archivo'] != ''){
		$flis = 'documentos/'.$Universo.'/cliente-'.$cliente['cliente_id'].'/'.$fotoCliente['doc_archivo'];
	}
	else{
		$flis = 'dist/img/usuario.png'; 
	}	
}