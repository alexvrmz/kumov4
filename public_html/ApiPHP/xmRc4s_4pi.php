foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}
if($accion === "xmRc4s_o985" || $accion === 'usuarios_04' || $accion === '10300' || $accion === '10400'){
	include('conexion.php');
 	include('funciones.php');
}
/// --- accion Listado de marcas
if($accion === "xmRc4s"){
	
	// --- Consulta para listado de marcas
	$query_u5u405 = "SELECT * FROM m4rC45v3Hi LIMIT 12";
	$CMks3C = $conexion->query($query_u5u405) or die ("Falló listado de marcas" . $query_u5u405);
	$u5hy68 = [];
	while($MVh3C = $CMks3C->fetch_assoc()){
		
		$x4rr36l0 = array('rxCxID5' => $MVh3C['m4rCxID5s'],
										 'rxCxD35c5' => $MVh3C['m4rCxD35c5s'],
										 'rxCxIm463N5' => $MVh3C['m4rCxIm463N5s']
				);
		array_push($u5hy68, $x4rr36l0); 
	}
	$num_usr = $CMks3C->num_rows;




	$num_usr_off = $num_usr - $num_usr_on;
}
/// --- accion Consultar Datos de una marca
elseif($accion === "xmRc4s_o983"){
	$mk9ID = $dCry($mk9ID);
	if(!empty($mk9ID)){
    // --- Consulta para datos de una marca
    $q5u5xXd = "SELECT * FROM m4rC45v3Hi WHERE m4rCxID5s = '".$mk9ID."' ";
    $c5u5xXd = $conexion->query($q5u5xXd) or die ("Falló al obtener datos de marca " . $q5u5xXd);
    $d4705_u5u = [];
    while($dU5u4o = $c5u5xXd->fetch_assoc()){
			
      $x4rr36l0 = array(
				'm4rCxID5s' => $dU5u4o['m4rCxID5s'],
        'm4rCxD35c5s' => $dU5u4o['m4rCxD35c5s'],
        'm4rCxIm463N5s' => $dU5u4o['m4rCxIm463N5s']
			);
      array_push($d4705_u5u, $x4rr36l0); 
    }
  }
  else{
    $_SESSION['m3ns4J3'] = 'No habia ID de marca a editar! (m-01).';
    $_SESSION['m3n3Rr0R'] = 'si';
    llevame('app?accion=xmRc4s');
  }
 
}
/// --- accion Actualizar marca en BD
elseif ($accion === 'xmRc4s_o985') {
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if($mk76id != ''){
		if(isset($_FILES['pp_xx002']) && $_FILES['pp_xx002'] != ''){

			if (isset($_FILES['pp_xx002']) && $_FILES['pp_xx002']['error'] === UPLOAD_ERR_OK)	{
				$fileTmpPath = $_FILES['pp_xx002']['tmp_name'];
				$fileName = $_FILES['pp_xx002']['name'];
				$fileSize = $_FILES['pp_xx002']['size'];
				$fileType = $_FILES['pp_xx002']['type'];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));
				$newFileName = $mk76id. '.' . $fileExtension;

				$allowedfileExtensions = array('png');

				if (in_array($fileExtension, $allowedfileExtensions))	{
					$path = '../dist/img/m4rc45/';
					$dest_path = $path . $newFileName;

					if(move_uploaded_file($fileTmpPath, $dest_path)) {
						$accion = 'actualizar';
						$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

						unset($sQl_d474_4rr4y);
						$sQl_d474_4rr4y = [
							'm4rCxD35c5s' => $pp_xx001,
							'm4rCxIm463N5s' => $newFileName,
						];		
						ejecutaDB('m4rC45v3Hi', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
						$_SESSION['m3ns4J3'] = lbl_8i7_x0201.$pp_xx001;
						bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');

						
					}
					else {
						$_SESSION['m3n3Rr0R']  = 'si';
						$_SESSION['m3ns4J3'] = lbl_8i7_x0202.$dest_path;					
					}
				}
				else{
					$_SESSION['m3n3Rr0R']  = 'si';
					$frg = implode(',', $allowedfileExtensions);
					$_SESSION['m3ns4J3'] = lbl_8i7_x0203. $fileExtension;
				}
			}
			elseif($_FILES['pp_xx002']['error'] == '4'){
				$accion = 'actualizar';
				$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'm4rCxD35c5s' => $pp_xx001,
					'm4rCxIm463N5s' => '',
				];		
				ejecutaDB('m4rC45v3Hi', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
						
				$_SESSION['m3ns4J3'] = lbl_8i7_x0205.$pp_xx001;
				bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');
				
				
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
				$_SESSION['m3ns4J3'] = lbl_8i7_x0204.$_FILES['pp_xx002']['error'];
			}
		
		}
		else{
			$accion = 'actualizar';
			$p4r4m37r05 = "m4rCxID5s = '$mk76id'"; 

			unset($sQl_d474_4rr4y);
			$sQl_d474_4rr4y = ['m4rCxD35c5s' => $pp_xx001];		
			ejecutaDB('m4rC45v3Hi', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				
			$_SESSION['m3ns4J3'] = lbl_8i7_x0205.$pp_xx001;
			bi74c0('3dtmK', $_SESSION['m3ns4J3'], '');
		}


	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = lbl_8i7_x0200;
	}
	
  llevame('../app?accion=xmRc4s');
	
}
/// --- accion Actualizar Usuario en BD
elseif ($accion === 'usuarios_03') {
	if($pp_xx001 != ''){ $pp_xx001 = eCry2($pp_xx001); }
	if($pp_xx002 != ''){ $pp_xx002 = eCry2($pp_xx002); }
	if($pp_xx003 != ''){ $pp_xx003 = eCry2($pp_xx003); }
	if($pp_xx004 != ''){ $pp_xx004 = eCry2($pp_xx004); }
	//if($pp_xx005 != ''){ $pp_xx005 = eCry2($pp_xx005); }
	if($cxxt453 != ''){ $cxxt453 = md5($cxxt453); }


	if($u5h8ir5nm != '' && $pp_xx005 != ''){
		$accion = 'actualizar';
		$p455wMd5 = $cxxt453;
		$cxxt_A533n = $eCry($u5h34r5_pass_ase);
		$p4r4m37r05 = "usuarioID = '$u5h8ir5nm'"; 

		if($p455wMd5 == ''){
			unset($sQl_d474_4rr4y);
		
			$sQl_d474_4rr4y = ['usuarioN1' => $pp_xx001,
											 'usuarioN2' => $pp_xx002,
											 'usuarioA1' => $pp_xx003,
											 'usuarioA2' => $pp_xx004,
											 'u5hUS8ir5' => $pp_xx005
											];		
			ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			

			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x004.$pp_xx005;
			bi74c0('3dtu5u', $_SESSION['m3ns4J3'], '');
      
		}
		elseif ($p455wMd5 != '') {
			$sQl_d474_4rr4y = ['usuarioN1' => $pp_xx001,
											 'usuarioN2' => $pp_xx002,
											 'usuarioA1' => $pp_xx003,
											 'usuarioA2' => $pp_xx004,
											 'u5hUS8ir5' => $pp_xx005,
											 'u5hpW8ir5' => $p455wMd5
											];		
			ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			//$_SESSION['m3ns4J3'] = lbl_8i7_x005.$pp_xx005;
			$_SESSION['m3ns4J3'] = $te;
			bi74c0('3dtu5u2', $_SESSION['m3ns4J3'], '');
		}
		else {
			$_SESSION['m3n3Rr0R']  = 'si';
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x006.$pp_xx005;
			bi74c0('3dtu5u3', $_SESSION['m3ns4J3'], '');
		}
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x007.$pp_xx005;	
		bi74c0('3dtu5u4', $_SESSION['m3ns4J3'], '');
    
	}
  llevame('../app?accion=usuarios');
	
}
/// --- accion agregar usuario
elseif ($accion == 'usuarios_04') {
  
	if (empty($pp_xx001_add) OR empty($pp_xx005_add) OR empty($pp_xx003_add) OR empty($cxxt453_add)){
		$_SESSION['m3n3Rr0R']  = 'si';
		$m3ns4J31 = 'Faltan los datos: ';
		if(empty($pp_xx001_add)) { $_SESSION['m3ns4J3'] = ' Primer Nombre|' . $_SESSION['m3ns4J3']; }
		if(empty($pp_xx005_add)) { $_SESSION['m3ns4J3'] = ' Usuario|' . $_SESSION['m3ns4J3']; }
		if(empty($pp_xx003_add)) { $_SESSION['m3ns4J3'] = ' Primer Apellido|' . $_SESSION['m3ns4J3']; }
		if(empty($cxxt453_add)) { $_SESSION['m3ns4J3'] = ' Contraseña|' . $_SESSION['m3ns4J3']; }
		
		$_SESSION['m3ns4J3'] = $m3ns4J31 . ' ' .$_SESSION['m3ns4J3'];
	}
	else{
    $sql_existe_mail = "SELECT u5hUS8ir5 FROM u5u405 WHERE u5hUS8ir5 = '".$pp_xx005_add."' ";
    $consulra_em = $conexion->query($sql_existe_mail);
    $em = $consulra_em->num_rows;

    if($em == 0){ $existpp_xx005 = false; } else { $existpp_xx005 = true; }

		$foto = 'dist/img/usuario.png';
		$activo = '1';
		$p455wMd5 = md5($cxxt453_add);
		$On44P8ir5 = '0';
		$config_navbar = 'navbar-dark navbar-secondary';
		$config_accent = 'accent-navy';
		$config_sidebar = 'sidebar-dark-info';
		$config_brand = 'navbar-secondary';
		$u5h8ir5_iDi = 'es_MX';

		if($existpp_xx005 == false){

      unset($sQl_d474_4rr4y);
			if($pp_xx001_add != ''){ $pp_xx001_add = eCry2($pp_xx001_add);}
			if($pp_xx002_add != ''){ $pp_xx002_add = eCry2($pp_xx002_add);}
			if($pp_xx003_add != ''){ $pp_xx003_add = eCry2($pp_xx003_add);}
			if($pp_xx004_add != ''){ $pp_xx004_add = eCry2($pp_xx004_add);}

			$sQl_d474_4rr4y = ['usuarioN1' => $pp_xx001_add,
											 'usuarioN2' => $pp_xx002_add,
											 'usuarioA1' => $pp_xx003_add,
											 'usuarioA2' => $pp_xx004_add,
											 'u5hUS8ir5' => $pp_xx005_add,
                       'u5hpW8ir5' => $p455wMd5,
                       'u5hOn8ir5' => $activo,
                       'u5hFt8ir5' => $foto,
											 'u5hOn44P8ir5' => $On44P8ir5,
											 'config_navbar' => $config_navbar,
											 'config_accent' => $config_accent,
											 'config_sidebar' => $config_sidebar,
											 'config_brand' => $config_brand,
											 'u5h8ir5_iDi' => $u5h8ir5_iDi
											];		
      $accion = 'insertar';
			ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
											
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_x002.$pp_xx005_add;
			bi74c0('addu5u', $_SESSION['m3ns4J3'], '');
			
			$SqfR5 = "SELECT usuarioID FROM u5u405 WHERE u5hUS8ir5 = '".$pp_xx005_add."' ";
			$CSqfR5 = $conexion->query($SqfR5);
			$fh65G = $CSqfR5->fetch_assoc();

			
			unset($sQl_d474_4rr4y);	
			$sQl_d474_4rr4y = ['po_permiso_id' => '1',
											 'po_usuario_id' => $fh65G['usuarioID'],
											 'po_estado' => '1',
											 'po_registro' => date('Y-m-d H:i:s')
											];		
      $accion = 'insertar';
			ejecutaDB('permisosOtrogados', $sQl_d474_4rr4y, $accion, $p4r4m37r05);							
		}
		else{
			include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
			$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = $pp_xx005_add .lbl_8i7_x003;
			bi74c0('addu5u2', $_SESSION['m3ns4J3'], '');
		}

		
	}
	llevame('../app?accion=usuarios');
}
/// --- accion suspender usuario
elseif ($accion === '10300') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$accion = 'actualizar';
		$p4r4m37r05 = "usuarioID = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 0,
											 'u5hOn44P8ir5' => 0
											];		
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x008.$u5h8ir5nm;
		bi74c0('susPu5u', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x009;
		bi74c0('susPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  llevame('../app?accion=usuarios');
	
}
/// --- accion activar usuario
elseif ($accion === '10400') {
	$u5h8ir5nm = $dCry($u5h8ir5nm);
	if(!empty($u5h8ir5nm)){
		$accion = 'actualizar';
		$p4r4m37r05 = "usuarioID = '$u5h8ir5nm'"; 
		unset($sQl_d474_4rr4y);
		$sQl_d474_4rr4y = ['u5hOn8ir5' => 1,
											 'u5hOn44P8ir5' => 0
											];		
		ejecutaDB('u5u405', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x010.$u5h8ir5nm;
		bi74c0('4ctPu5u', $_SESSION['m3ns4J3'], '');
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
		$_SESSION['m3ns4J3'] = lbl_8i7_x011;
		bi74c0('4ctPu5u2', $_SESSION['m3ns4J3'], '');
    
	}
  llevame('../app?accion=usuarios');
	
}