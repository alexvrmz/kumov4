<?php 
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';
session_start(); // --- Validar sesión ---
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
$usuario_id = $_SESSION['usuarioID'];
include ('ApiPHP/conexion.php');
include ('ApiPHP/funciones.php');

$paises = [
  //'AR' => 'Argentina',
  'US' => 'Estados Unidos',
  'MX' => 'México',
];
 
if(!isset($_SESSION['usuario'])){
	header("location:acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}

include ('front/idiomas/'.$iDi['u5h8ir5_iDi'].'/iDi.php');

$fjkj = $_SESSION['session_look'];
if ($fjkj === true) {
   	if($accion != 'l00k5cR3n'){
			llevame('app?accion=l00k5cR3n');
		}
}


///----
  //$C004 = "SELECT * FROM "

//$accion = $dCry($accion);
if(v4lID44x50("100-001", $usuario_id) == TRUE){          
          
	// ---- Hora actual
	$hora_actual = strftime("%A, %e $de %B $de %Y %R");

	// ---- Saludo de acuerdo a la hora del día
	$today = getdate();
	$hora=$today["hours"];
	if ($hora<12) {
		$saludo = '<i class="fad fa-sun fa-lg" style="color: #ffef00; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_1;
	}elseif($hora<19){
		$saludo = '<i class="fad fa-cloud-sun fa-lg" style="color: #faff50; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_2;
	}else{ 
		$saludo = '<i class="fad fa-moon fa-lg" style="color: blue; text-shadow: 0 0 5px #000;"></i>'.lbl_bi3nv3nid4_3; 
	}

	if(!isset($_SESSION['usuario'])){
		header("location:acceso.php?accion=entrar&m3ns4J3=".$m3ns4J3); // --- llevame a login si no hay sesión ---
	}

	if($accion == 'escritorio'){ /// --- Dash
		
		// ---- Marcar la sección en el menú ---
		$menu_escritorio = 'active';
    
    // --- BACKEND ----
		include('ApiPHP/escritorio_4pi.php');
		include('front/escritorio.php');
		
	}

	elseif($accion == 'cuenta'){ /// --- Cuenta
		
    // ---- Marcar la sección en el menú ---
		$menu_cuenta = 'active';		

		// --- BACKEND ----
		include('front/cuenta.php');		
	}
	elseif($accion == '5u540l'){ /// --- Usuarios

    if(v4lID44x50("500-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_u5u405_t = 'active';
      $menu_u5u405_abierto = 'menu-open';
      $menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/u5u405_4pi.php');
      include('front/u5u405.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 1';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
	elseif($accion == '5u540l_02'){	/// ---Editar usuario
		if(v4lID44x50("500-003", $usuario_id) == TRUE){
			
      // ---- Marcar la sección en el menú ---
			$menu_u5u405_t = 'active';
			$menu_u5u405_abierto = 'menu-open';
			$menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/u5u405_4pi.php');
			include('front/u5u405-3di7.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 2';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
	elseif($accion == '50200'){ /// --- Generar Token
		if(v4lID44x50("500-006", $usuario_id) == TRUE){	

      // ---- Marcar la sección en el menú ---
			$menu_u5u405_t = 'active';
			$menu_u5u405_abierto = 'menu-open';
			$menu_u5u405 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/g3nt0k3n_4pi.php');	
			include('front/g3n-t0k3n.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 3';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
	elseif($accion == '5u550l'){	/// --- accion Permisos
		/// --- ACCESO MODULO PERMISOS
		if(v4lID44x50("300-004", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos = 'active';
      $menu_permisos_0 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/p3rm5o5_4pi.php');
			include('front/p3rm5o5.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 4';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
  elseif($accion == 'permisosAsignados'){	/// --- ver Permisos otorgados
		/// --- ACCESO MODULO PERMISOS
		if(v4lID44x50("300-001", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'menu-open';
      $menu_permisos = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos_2 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/p3rm5o5_4pi.php');
			include('front/p3rm5o5-45i6.php');
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
	elseif($accion == 'xu5sdS7l'){ /// --- accion Permisos
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("300-003", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_permisos_t = 'active';
			$menu_permisos_abierto = 'menu-open';
			$menu_permisos = 'active';
			$menu_permisos_0 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/p3rm5o5_4pi.php');
			include('front/p3rm5o5-3di7.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
  elseif($accion == 'mascotas'){
    if(v4lID44x50("200-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_t = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/mascotas_api.php');
      include('front/mascotas.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'editarMascota'){
    if(v4lID44x50("200-003", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_editar = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/mascotas_api.php');
      include('front/mascotas_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'fichaMascota'){
    if(v4lID44x50("200-004", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_ficha = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      // --- BACKEND ----
      include('ApiPHP/mascotas_api.php');
      include('front/mascota_ficha.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'mascotasHuerfanas'){
    if(v4lID44x50("200-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_mascotas_t = 'active';
      $menu_mascotas_abierto = 'menu-open';
      $menu_mascotas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/mascotas_api.php');
      include('front/mascotasHuerfanas.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'especies'){
    if(v4lID44x50("1700-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_especies_t = 'active';
      $menu_especies_abierto = 'menu-open';
      $menu_especies = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/especies_api.php');
      include('front/especies.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'editarEspecie'){
    if(v4lID44x50("1700-002", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_especies_t = 'active';
      $menu_especies_abierto = 'menu-open';
      $menu_especies = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/especies_api.php');
      include('front/especie_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'razas'){
    if(v4lID44x50("1800-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_razas_t = 'active';
      $menu_razas_abierto = 'menu-open';
      $menu_razas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/razas_api.php');
      include('front/razas.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'editarRaza'){
    if(v4lID44x50("1800-002", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_razas_t = 'active';
      $menu_razas_abierto = 'menu-open';
      $menu_razas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/razas_api.php');
      include('front/razas_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'clientes'){
    if(v4lID44x50("200-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_t = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/clientes_api.php');
      include('front/clientes.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'editarCliente'){
    if(v4lID44x50("200-003", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_editar = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/clientes_api.php');
      include('front/clientes_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'fichaCliente'){
    if(v4lID44x50("200-004", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_clientes_ficha = 'active';
      $menu_clientes_abierto = 'menu-open';
      $menu_clientes = 'active';
      // --- BACKEND ----
      include('ApiPHP/clientes_api.php');
      include('front/cliente_ficha.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'consultas'){
    if(v4lID44x50("700-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_consultas_t = 'active';
      $menu_consultas_abierto = 'menu-open';
      $menu_consultas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/consultas_api.php');
      include('front/consultas.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'editarConsulta'){
    if(v4lID44x50("700-003", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_consultas_editar = 'active';
      $menu_consultas_abierto = 'menu-open';
      $menu_consultas = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/consultas_api.php');
      include('front/consultas_editar.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 'fichaConsulta'){
    if(v4lID44x50("700-004", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
      $menu_consultas_ficha = 'active';
      $menu_consultas_abierto = 'menu-open';
      $menu_consultas = 'active';
      // --- BACKEND ----
      include('ApiPHP/consultas_api.php');
      include('front/consulta_ficha.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'No tienes acceso a este Módulo';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
  }
  elseif($accion == 's3rv'){ /// --- accion Servicios
		/// --- ACCESO MODULO PERMISOS 
		if(v4lID44x50("1300-001", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			$menu_s3rv_t = 'active';
			$menu_s3rv_abierto = 'menu-open';
			$menu_s3rv = 'active';
			$menu_s3rv_0 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/s3rv_4pi.php');
			include('front/s3rv.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
  elseif($accion == 's3rv3Dt'){ /// --- editar Servicios (categoria)
		/// --- ACCESO MODULO Servicios 
		if(v4lID44x50("1300-003", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			//$menu_s3rv_t = 'active';
			//$menu_s3rv_abierto = 'menu-open';
			$menu_s3rv = 'active';
			$menu_s3rv_0 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/s3rv_4pi.php');
			include('front/s3rv3Dt.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
  elseif($accion == 'Tr43Dt'){ /// --- editar tramites (categoria)
		/// --- ACCESO MODULO Servicios 
		if(v4lID44x50("1400-101", $usuario_id) == TRUE){

      // ---- Marcar la sección en el menú ---
			//$menu_s3rv_t = 'active';
			//$menu_s3rv_abierto = 'menu-open';
			$menu_d0cx6y = 'active';
			$menu_d0cx6y_0 = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/d0cx6y_4pi.php');
			include('front/d0cx6yET.php');		
			
		}
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
	}
	elseif($accion == 'm0d78Os'){
		/// --- ACCESO MODULO MODULOS
		if(v4lID44x50("400-001", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_m0d78Os_t = 'active';
			$menu_m0d78Os_abierto = 'menu-open';
			$menu_m0d78Os = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/m0d78Os_4pi.php');
			include('front/m0d78Os.php');

			
			
		}
		else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'm0d7fdDs'){ /// --- actualizar modulos
		/// --- ACCESO MODULO MODULOS
		if(v4lID44x50("400-003", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_m0d78Os_t = 'active';
			$menu_m0d78Os_abierto = 'menu-open';
			$menu_m0d78Os = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/m0d78Os_4pi.php');
			include('front/m0d78Os-3di7.php');
			
		}
		
	}
  elseif($accion == 'pR0VxD'){ /// --- Proveedores
		/// --- ACCESO MODULO empresas
		if(v4lID44x50("1600-000", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/pR0VxD_4pi.php');
        include('front/pR0VxD.php');
		}
		
	}
  elseif($accion == 'pr0VxVW'){ /// --- Ver Proveedor
		if(v4lID44x50("1600-003", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/pR0VxD_4pi.php');
        include('front/pr0VxVW.php');
		}
		
	}
  elseif($accion == 'pr0VxDT'){ /// --- Editar Proveedor
		if(v4lID44x50("1600-002", $usuario_id) == TRUE){
      
      // ---- Marcar la sección en el menú ---
			$menu_pR0VxD_t = 'active';
			$menu_pR0VxD_abierto = 'menu-open';
			$menu_pR0VxD = 'active';
      
      // --- BACKEND ----
      include('ApiPHP/pR0VxD_4pi.php');
        include('front/pr0VxDT.php');
		}
		
	}
  elseif($accion == 'eDtSrv'){ /// --- Editar Servicio (documentos)

    if(v4lID44x50("1300-101", $usuario_id) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ApiPHP/eDtSrv_4pi.php');
      include('front/eDtSrv.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'eDtD'){ /// --- Editar Documentos (documentos)

    if(v4lID44x50("1400-101", $usuario_id) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ApiPHP/eDtD_4pi.php');
      include('front/eDtD.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'Tr4V'){ /// --- ver tramite (documentos)

    if(v4lID44x50("1400-004", $usuario_id) == TRUE){
      
      include('ApiPHP/N3wTr4_4pi.php');
      include('front/VwTr4.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'N3wTr4'){ /// --- nuevo tramite (documentos)

    if(v4lID44x50("1400-002", $usuario_id) == TRUE){
      // ---- Marcar la sección en el menú ---
			//$menu_v3hiXs_t = 'active';
      /*$menu_v3hiXs_abierto = 'menu-open';
      $menu_xkmtr4G = 'active';
			$menu_v3hiXs = 'active';*/
      // --- BACKEND ----
      include('ApiPHP/N3wTr4_4pi.php');
      include('front/N3wTr4.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'c0Nfi6'){ /// --- ajustes

    if(v4lID44x50("100-002", $usuario_id) == TRUE){
      		
      
      // --- BACKEND ----
      include('ApiPHP/c0Nfi6_4pi.php');
      include('front/c0Nfi6.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'v3r'){ /// --- ajustes

    if(v4lID44x50("100-001", $usuario_id) == TRUE){
      		

      // --- BACKEND ----
      include('ApiPHP/v3r_4pi.php');
      include('front/v3r.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion == 'bin4kuru'){ /// --- Biatcora

    if(v4lID44x50("1500-001", $usuario_id) == TRUE){
      		
      $menu_kuru_abierto = 'menu-open';
      $menu_kuru = 'active';
      // --- BACKEND ----
      include('ApiPHP/bin4kuru_4pi.php');
      include('front/bin4kuru.php');
      
    }
    else{
      $_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 7';
      $_SESSION['m3n3Rr0R'] = 'si';
      include('front/404.php');
    }
		
	}
  elseif($accion === 'l00k5cR3n'){ /// --- lookscreen
		/// --- ACCESO MODULO MODULOS
		
      
      // --- BACKEND ----
      //include('ApiPHP/m0d78Os_4pi.php');
			include('front/l00k5cR3n.php');
			
		
		
	}
	else{
    $_SESSION['m3ns4J3'] = 'LA PAGINA NO EXISTE';
    $_SESSION['m3n3Rr0R'] = 'si';
    include('front/404.php');
  }

}
else{
  $titulo_pagina = 'Error 404';
  //$_SESSION['m3ns4J3'] = 'NO TIENES ACCESO PERMITIDO A ESTA AREA 5';
	include('front/404.php');

}
?>
