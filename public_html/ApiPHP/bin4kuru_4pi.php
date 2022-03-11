<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}

if($accion === 'eDtDpp'){
	include('conexion.php');
 	include('funciones.php');
}

if($accion === "bin4kuru"){
	$U = $_SESSION['usuarioID'];
	$H = date('Y-m-d');
	$C001 = "SELECT * FROM 1Bin4kuru WHERE kuRuUSIDBiN = $U AND kuRuTIMBiN LIKE '$H%' ORDER BY kuRuTIMBiN DESC";
	$S001 = $conexion->query($C001) or die ("Fallo al consultar bitacora: ".$C001);
	$ldi = [];
	while ($DdB = $S001->fetch_assoc()) {
		$kuIDx = $DdB['kuRuIDBiN'];
		$kuD3Sx = dCry2($DdB['kuRuD3SBiN']);
		$kuUSIDx = $DdB['kuRuUSIDBiN'];
		$kuUUIDx = $DdB['kuRuUUIDBiN'];
		$kuVEIDx = $DdB['kuRuVEIDBiN'];
		$kuEMDx = $DdB['kuRuEMDBiN'];
		$kuFLIDx = $DdB['kuRuFLIDBiN'];	
		$kuDIDx = $DdB['kuRuDIDBiN'];	
		$kuPIDx = $DdB['kuRuPIDBiN'];	
		$kuAXIx = $DdB['kuRuAXIBiN'];
		$kuTIMDx = $DdB['kuRuTIMBiN'];

		if(!empty($kuUSIDx)){
			$C002 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $kuUSIDx";
			$S002 = $conexion->query($C002) or die ("fallo al seleccionar usuario: ".$C002);
			$DDU = $S002->fetch_assoc();
			$EdUS =  $DDU['u5hUS8ir5'];
		}

		if(!empty($kuUUIDx)){
			$C003 = "SELECT u5hUS8ir5 FROM u5u405 WHERE usuarioID = $kuUUIDx";
			$S003 = $conexion->query($C003) or die ("fallo al seleccionar usuario: ".$C003);
			$DDu = $S003->fetch_assoc();
			$Edu =  $DDu['u5hUS8ir5'];
		}

		if(!empty($kuEMDx)){
			$C004 = "SELECT eMNICEm FROM eMpR3sA5 WHERE eMIDEm = $kuEMDx";
			$S004 = $conexion->query($C004) or die ("Fallo al seleccionar empresa: ".$C004);
			$DDe = $S004->fetch_assoc();
			if($S004->num_rows == 0){
				$EeU = "";
			}
			else{
				$EeU = dCry2($DDe['eMNICEm']);
			}
		}

		if(!empty($kuFLIDx)){
			$C005 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = $kuFLIDx";
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
		}

		/*if(!empty($kuFLIDx)){
			$C005 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = $kuFLIDx";
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
			'kuIDx' => $kuIDx,
			'kuD3Sx' => $kuD3Sx,
			'kuUSIDx' => $kuUSIDx,
			'kuUUIDx' => $kuUUIDx,
			'kuVEIDx' => $kuVEIDx,
			'kuEMDx' => $kuEMDx,
			'kuFLIDx' => $kuFLIDx,
			'kuDIDx' => $kuDIDx,	
			'kuPIDx' => $kuPIDx,
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
		unset($kuD3Sx);
		unset($kuUSIDx);
		unset($kuUUIDx);
		unset($kuVEIDx);
		unset($kuEMDx);
		unset($kuFLIDx);
		unset($kuDIDx);
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
