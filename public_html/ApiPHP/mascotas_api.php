<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "procesaMascota" || $accion == 'borrarFormulario'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
} 
include('mascotasFunciones.php');
if($accion === 'mascotas' || $accion === 'mascotasHuerfanas'){
	$C001 = "SELECT * FROM mascotas WHERE mascota_universo = $Universo";
	if($accion === 'mascotasHuerfanas'){
		$C001 .= " AND mascota_dueno = 0";
	}
	else{ 
		$C001 .= " AND mascota_dueno != 0";
	}
	$S001 = $conexion->query($C001) or die ("Fallo al consultar mascotas");
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


	if($_SESSION['formMascota']['mascotaEspecie'] != 'Ninguno' && !empty($_SESSION['formMascota']['mascotaEspecie'])){
		$listaRazas = listaSelectRazas($_SESSION['formMascota']['mascotaEspecie']);
	} 

	$C001 = "SELECT * FROM clientes WHERE Universo = $Universo";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar clientes");
	$numClientes = $S001->num_rows;

	$LdClientes = [];
	while ($cliente = $S001->fetch_array()) {
		unset($datosCliente);
		
		$datosCliente = [
			'clienteID' => $cliente['cliente_id'],
			'clienteNombre1' => dCry2($cliente['cliente_nombre1']),
			'clienteNombre2' => dCry2($cliente['cliente_nombre2']),
			'clienteApellido1' => dCry2($cliente['cliente_apellido1']),
			'clienteApellido2' => dCry2($cliente['cliente_apellido2']),
			'clienteUsuario' => $cliente['cliente_usuario'],
			'clienteTel1' => dCry2($cliente['cliente_telefono1'])
		];
		array_push($LdClientes, $datosCliente);
	}

}
elseif($accion == 'editarMascota'){
	if($mascotaID != ''){
		$mascotaID = $dCry($mascotaID);
		$C001 = "SELECT * FROM mascotas WHERE mascota_id = $mascotaID";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar Mascota");
		$mascota = $S001->fetch_assoc();
		$mascota['mascota_nombre'] = dCry2($mascota['mascota_nombre']);

		$listaRazas = listaSelectRazas($mascota['mascota_especie']);

		$C002 = "SELECT cliente_id, cliente_usuario, cliente_nombre1, cliente_nombre2, cliente_apellido1, cliente_apellido2, cliente_telefono1 FROM clientes WHERE Universo = $Universo AND cliente_activo = 1";
		$S002 = $conexion->query($C002) or die ("Fallo al consultar clientes: ".$C002);
		$listaClientes = [];
		while ($datosCliente = $S002->fetch_array()){
			unset($cliente);
			$clienteNombre = dCry2($datosCliente['cliente_apellido1']).' '.dCry2($datosCliente['cliente_apellido2']).' '.dCry2($datosCliente['cliente_nombre1']).' '.dCry2($datosCliente['cliente_nombre2']);
			$cliente = [
				'clienteID' => $datosCliente['cliente_id'],
				'clienteUsuario' => $datosCliente['cliente_usuario'],
				'clienteNombre' => $clienteNombre,
				'clienteTelefono' => $datosCliente['clienteTelefono1']
			];
			array_push($listaClientes, $cliente);
		}

	}
	else{
		$_SESSION['m3ns4J3'] = 'No habia ID de mascota a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=mascotas');
	}
}
elseif($accion == 'procesaMascota'){

	$mascotaNombre = limpia($mascotaNombre);
	//$mascotaEspecie = limpia($mascotaEspecie);
	//$mascotaRaza = limpia($mascotaRaza);
	///$mascotaSexo = limpia($mascotaSexo);
	//$mascotaEsteril = limpia($mascotaEsteril);
	///$mascotaColor = limpia($mascotaColor);
	///$mascotaCliente = limpia($mascotaCliente);

	$_SESSION['mensajeForm'] = [];
	$_SESSION['formError'] = 0;

	if(empty($mascotaNombre)){ $_SESSION['mensajeForm'][] = 'No has escrito un Nombre'; $_SESSION['formError']++; }
	if($mascotaNombre == 'Puto'){ $_SESSION['mensajeForm'][] = 'No seas basura! <i class="fad fa-trash"></i>'; $_SESSION['formError']++; }
	if($mascotaNombre == 'Kina'){ $_SESSION['mensajeForm'][] = 'Kina!!!, TE AMO <i class="fad fa-heart" style="--fa-secondary-opacity: 1.0; --fa-primary-color: pink; --fa-secondary-color: red;"></i> <i class="fad fa-disease" style="--fa-secondary-opacity: 1.0; --fa-primary-color: dodgerblue; --fa-secondary-color: gold;"></i>'; }
	if($mascotaEspecie == 'Ninguno' || empty($mascotaEspecie)){ $_SESSION['mensajeForm'][] = 'Selecciona una especie para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaRaza == 'Ninguno' || empty($mascotaRaza)){ $_SESSION['mensajeForm'][] = 'Selecciona una raza para '.$mascotaNombre; $_SESSION['formError']++; }
	//if($mascotaCliente == 'Ninguno' || empty($mascotaCliente)){ $_SESSION['mensajeForm'][] = 'Selecciona un dueño para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaSexo == 'Ninguno' || empty($mascotaSexo)){ $_SESSION['mensajeForm'][] = 'Selecciona el sexo para '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaEsteril == 'Ninguno' || empty($mascotaEsteril)){ $_SESSION['mensajeForm'][] = 'Selecciona el Estado Reproductivo de '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaColor == 'Ninguno' || empty($mascotaColor)){ $_SESSION['mensajeForm'][] = 'Selecciona el Pelaje de '.$mascotaNombre; $_SESSION['formError']++; }
	if(empty($mascotaNacimiento)){ $_SESSION['mensajeForm'][] = 'Cuando se festeja el cumpleaños <i class="fad fa-birthday-cake" style="--fa-secondary-opacity: 1.0; --fa-primary-color: pink; --fa-secondary-color: palevioletred;"></i> de '.$mascotaNombre; $_SESSION['formError']++; }
	if($mascotaNacimiento >= date("Y-m-d")){ $_SESSION['mensajeForm'][] = 'Como crees?? '.$mascotaNombre.' aún no nace!!!'; $_SESSION['formError']++; }

	$_SESSION['formMascota'] = [];
	$_SESSION['formMascota']['mascotaNombre'] = $mascotaNombre;
	$_SESSION['formMascota']['mascotaEspecie'] = $mascotaEspecie;
	$_SESSION['formMascota']['mascotaRaza'] = $mascotaRaza;
	$_SESSION['formMascota']['mascotaSexo'] = $mascotaSexo;
	$_SESSION['formMascota']['mascotaEsteril'] = $mascotaEsteril;
	$_SESSION['formMascota']['mascotaColor'] = $mascotaColor;
	$_SESSION['formMascota']['mascotaNacimiento'] = $mascotaNacimiento;
	$_SESSION['formMascota']['mascotaCliente'] = $mascotaCliente; 
	if($mascotaCliente == 'ninguno'){ $mascotaCliente = 0;}

	if(!empty($mascotaCliente) && !in_array("ninguno", $mascotaCliente)){
		foreach ($mascotaCliente as $key) {
			$mascotaCliente = $key;
		}
	}
 
	if($_SESSION['formError'] == 0){
		if($editar == 'editar' && $mascotaID != ''){
			unset($sql_array);
			$sql_array = [
				'mascota_nombre' => eCry2($mascotaNombre),
				'mascota_especie' => $mascotaEspecie,
				'mascota_raza' => $mascotaRaza,
				'mascota_sexo' => $mascotaSexo,
				'mascota_esteril' => $mascotaEsteril,
				'mascota_color' => $mascotaColor,
				'mascota_nacimiento' => $mascotaNacimiento,
				'mascota_dueno' => $mascotaCliente,
				//'mascota_sistema' => date("Y-m-d H:i:s"),
				//'mascota_universo' => $Universo
			];
			$accion = 'actualizar';
			$paramatros = 'mascota_id = '.$mascotaID;
			/*echo '<pre>';
			print_r($sql_array);
			echo '</pre>';*/
			ejecutaDB('mascotas', $sql_array, $accion, $paramatros);
			unset($_SESSION['formMascota']);
			///	----	Bitacora
				$usuario = $_SESSION['usuarioID'];
				$cambios = eCry2('El Usuario '.$usuario.' Modifico la Mascota '.$mascotaID);
				$tipoAfectado = 3;
				$IDAfectado = $mascotaID;
				$accion = 400;
				$universo = $_SESSION['Universo'];
				Binakuru($cambios, $tipoAfectado, $IDAfectado, $usuario, $accion, $universo);
			///	----	Bitacora
			llevame('../app?accion=fichaMascota&mascotaID='.$eCry($mascotaID));
		}
		else{
			unset($sql_array);
			$sql_array = [
				'mascota_nombre' => eCry2($mascotaNombre),
				'mascota_especie' => $mascotaEspecie,
				'mascota_raza' => $mascotaRaza,
				'mascota_sexo' => $mascotaSexo,
				'mascota_esteril' => $mascotaEsteril,
				'mascota_color' => $mascotaColor,
				'mascota_nacimiento' => $mascotaNacimiento,
				'mascota_sistema' => date("Y-m-d H:i:s"),
				'mascota_dueno' => $mascotaCliente,
				'mascota_estado' => 1,
				'mascota_universo' => $Universo
			];
			$accion = 'insertar';
			$paramatros = NULL;
			echo '<pre>';
			print_r($sql_array);
			echo '</pre>';
			$mascotaID = ejecutaDB('mascotas', $sql_array, $accion, $paramatros);
			
			$carpetaMascota = '../docs/'.$Universo;
			if(mkdir($carpetaMascota)){
				//echo "<p>La carpeta fue creada</p>";
				chmod($carpetaMascota, 0777);
			}

			//mkdir($carpetaMascota, 0777, true);

			$carpetaMascota = '../docs/'.$Universo.'/mascota-'.$mascotaID;
			mkdir($carpetaMascota, 0777, true);
			chmod($carpetaMascota, 0777);

			if(isset($_FILES['mascotaFoto']) && $_FILES['mascotaFoto'] != ''){
			
				if (isset($_FILES['mascotaFoto']) && $_FILES['mascotaFoto']['error'] === UPLOAD_ERR_OK)	{
					
					$fileTmpPath = $_FILES['mascotaFoto']['tmp_name'];
					$fileName = $_FILES['mascotaFoto']['name'];
					$fileSize = $_FILES['mascotaFoto']['size'];
					$fileType = $_FILES['mascotaFoto']['type'];
					$fileNameCmps = explode(".", $fileName);
					$fileExtension = strtolower(end($fileNameCmps));
					/*$C009 = "SELECT D0cIDxS FROM D0cUM3n705 WHERE D0cv3HiDxS = $mascotaID AND D0c4c7iv0xS = 1 AND D0c7ip0xS = $do9j";
					$S009 = $conexion->query($C009) or die ("Fallo al seleccionar documentos: ".$C009);
					while ($DeD = $S009->fetch_array()) {
						$accion = 'actualizar';
						unset($sql4rr);
						$ddxID = $DeD['D0cIDxS'];
						$p4r5 = 'D0cIDxS = '.$ddxID;
						$sql4rr = [
							'D0c4c7iv0xS' => 0
						];
						ejecutaDB('D0cUM3n705', $sql4rr, $accion, $p4r5);
						bi74c0('4ctTcir', 'Se desactivo la tarjeta de circulación: '.$ddxID, '');
					}*/
				
	
					$allowedfileExtensions = array('png', 'jpeg', 'jpg');
	
					if (in_array($fileExtension, $allowedfileExtensions))	{
					
						$tiempo = time();
						$newFileName = 'fotoPrincipal-'.$mascotaID. '-'.$tiempo.'.'.$fileExtension;

						$path = '../docs/'.$Universo.'/mascota-'.$mascotaID.'/';
						$dest_path = $path . $newFileName;
	
						if(move_uploaded_file($fileTmpPath, $dest_path)/*copy($_FILES['mascotaFoto']['tmp_name'], $dest_path)*/) {
	
							$w3bp = 'fotoPrincipal-'.$mascotaID. '-'.$tiempo.'.'.$fileExtension;
							$w3bpP47h = $path . $w3bp;
	
							//if($fileExtension != 'pdf'){
							c0nVt0Jp3g($dest_path, $w3bpP47h);
							//}
	
							$fotoDescripcion = 'Foto Principal';
							$newFile = $w3bp;
							$fechaSistema = date('Y-m-d H:i:s');
							
							$accion = 'insertar';
							$p4r4m37r05 = "";
							unset($sQl_d474_4rr4y);
							$sQl_d474_4rr4y = [
								'doc_descripcion' => $fotoDescripcion,
								'doc_archivo' => $newFile,
								'doc_individuo' => $mascotaID,
								'doc_tipoIndividuo' => 2,
								'doc_tipo' => 1,
								'doc_usuario' => $_SESSION['usuarioID'],
								'doc_Sistema' => $fechaSistema,
								'doc_estado' => 1,
								'doc_fecha' => $fechaSistema,
								'doc_vencimiento' => $fechaSistema,
								'doc_alarma' => 0,
								'doc_consulta' => 0,
								'Universo' => $Universo
							];		
							/*echo '<pre>';
							print_r($sQl_d474_4rr4y);
							echo '<pre>';*/
							ejecutaDB('documentos', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
							//$_SESSION['m3ns4J3'] = lbl_8i7_x0301.$fotoDescripcion_add.'';
						}
						else {
							$_SESSION['m3n3Rr0R']  = 'si';
							$_SESSION['m3ns4J3'] = 'No se pudo subir el archivo '.$dest_path;		
							//No se pudo subir el archivo docs/1/mascota-58/fotoPrincipal-58-1647016406.jpg			
						}
					}
					else{
						$_SESSION['m3n3Rr0R']  = 'si';
						$frg = implode(',', $allowedfileExtensions);
						$_SESSION['m3ns4J3'] = 'Tipo de Archivo no permitido: '. $fileExtension;
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$_SESSION['m3ns4J3'] = 'Error al subir la foto: '.$_FILES['mascotaFoto']['error'];
				}
			
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = ''.$_FILES['mascotaFoto']['error'];
			}
			unset($_SESSION['formMascota']);
			///	----	Bitacora
				$usuario = $_SESSION['usuarioID'];
				$cambios = eCry2('El Usuario '.$usuario.' Agrego la Mascota '.$mascotaID);
				$tipoAfectado = 3;
				$IDAfectado = $mascotaID;
				$accion = 401;
				$universo = $_SESSION['Universo'];
				Binakuru($cambios, $tipoAfectado, $IDAfectado, $usuario, $accion, $universo);
			///	----	Bitacora
			llevame('../app?accion=fichaMascota&mascotaID='.$eCry($mascotaID));
		}
	}
	else{
		if($editar == 'editar' && $mascotaID != ''){
			llevame('../app?accion=editarMascota&mascotaID='.$eCry($mascotaID));
		}
		else{
			llevame('../app?accion=mascotas');
		}
	}


		/*
echo '<pre>';
			print_r($_REQUEST);
			echo '</pre>';*/




	


}
elseif($accion == 'borrarFormulario'){
	unset($_SESSION['formMascota']);
	unset($_SESSION['formError']);
	unset($_SESSION['mensajeForm']);
	llevame('../app?accion=mascotas');
}
elseif($accion == 'fichaMascota'){
	$C004 = "SELECT * FROM mascotas WHERE mascota_id = ".$dCry($mascotaID)." ";
	$S004 = $conexion->query($C004) or die ("Fallo al seleccionar Mascota");
	$mascota = $S004->fetch_assoc();
	$mascota['mascota_nombre'] = dCry2($mascota['mascota_nombre']); 

	$C005 = "SELECT doc_archivo, doc_id FROM documentos WHERE doc_tipo = 1 AND doc_individuo = ".$mascota['mascota_id']." ORDER BY doc_id ASC";
	$S005 = $conexion->query($C005) or die ("Fallo al consultar foto de mascota");
	$fotoMascota = $S005->fetch_assoc();

	$C007 = "SELECT raza_descripcion FROM razas WHERE raza_id = ".$mascota['mascota_raza'];
	$S007 = $conexion->query($C007) or die ("Fallo al seleccionar raza de mascota");
	$datoRaza = $S007->fetch_assoc();
	$mascotaRaza = $datoRaza['raza_descripcion'];
	if($mascota['mascota_dueno'] == 0){
		$mascota['mascota_dueno'] = 'Sin Relaci&oacute;n';
	}
	else{
		$C009 = "SELECT cliente_nombre1, cliente_nombre2, cliente_apellido1, cliente_apellido2, cliente_id FROM clientes WHERE Universo = $Universo AND cliente_id = ".$mascota['mascota_dueno']." ";
		$S009 = $conexion->query($C009) or die ("Fallo al consultar cliente: ".$C009);
		$datoCliente = $S009->fetch_assoc();
		$mascota['mascota_dueno'] = dCry2($datoCliente['cliente_apellido1']).' '.dCry2($datoCliente['cliente_nombre1']);
		$mascota['mascota_duenoID'] = $datoCliente['cliente_id'];
	}

	$edadCompleta = calcularEdad($mascota['mascota_nacimiento']);
	$edad = $edadCompleta->format('%Y').' Año(s) '.$edadCompleta->format('%m').' Mes(es) y '.$edadCompleta->format('%d').' Dia(s)';

	if($fotoMascota['doc_archivo'] != ''){
		$flis = 'docs/'.$Universo.'/mascota-'.$mascota['mascota_id'].'/'.$fotoMascota['doc_archivo'];
	}
	else{
		$flis = 'dist/img/gato_avatar.jpg'; 
	}

	$C006 = "SELECT especie_descripcion FROM especies WHERE especie_id = ".$mascota['mascota_especie'];
	$S006 = $conexion->query($C006) or die ("Fallo al consultar especie");
	$datoEspecie = $S006->fetch_assoc();
	$mascotaEspecie = $datoEspecie['especie_descripcion'];
	
}