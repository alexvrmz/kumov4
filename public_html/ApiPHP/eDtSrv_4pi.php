<?php
foreach($_REQUEST as $k => $v){$$k=$v;} // echo $k.' -> '.$v.' | ';

session_start(); 
if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}

if($accion === 'eDtSpp'){
	include('conexion.php');
 	include('funciones.php');
}

/// --- accion Listado de Usuarios
if($accion === "eDtSrv"){

	if(!empty($SidxD) && !empty($vh3iP)){
		$SidxD = $dCry($SidxD);
		$vh3iP = $dCry($vh3iP);
		$C001 = "SELECT * FROM D0cUM3n705 WHERE D0cIDxS = $SidxD";
		$S001 = $conexion->query($C001) or die ("Fallo al seleccionar documentos: ".$C001);
		$DdSs = [];
		while ($Ddd = $S001->fetch_array()) {
			$dcTp = $Ddd['D0c7ip0xS'];
			$dd3s = dCry2($Ddd['D0cD3SxS']);
			$ddImP = dCry2($Ddd['D0cIMxS']);
			$ddFil = dCry2($Ddd['D0cFil3xS']);
			$ddVhI = $Ddd['D0cv3HiDxS'];
			$ddVaCt = $Ddd['D0c4c7iv0xS'];
			$ddFD = $Ddd['D0cFDxS'];
			$ddFS = $Ddd['D0cFSxS'];
			$ddFV = $Ddd['D0cFVxS'];
			$ddTA = $Ddd['D0cALTxS'];
			$ddID = $Ddd['D0cIDxS'];
			$ddCA = $Ddd['D0c7ip0xS'];
			
			$lddd = [
				'dd3s' => $dd3s,
				'ddImP' => $ddImP,
				'ddFil' => $ddFil,
				'ddVhI' => $ddVhI,
				'ddVaCt' => $ddVaCt,
				'ddFD' => $ddFD,
				'ddFS' => $ddFS,
				'ddFV' => $ddFV,
				'ddTA' => $ddTA,
				'ddID' => $ddID,
				'ddCA' => $ddCA
			];
			array_push($DdSs, $lddd);

			$C002 = "SELECT * FROM c4TS3rxxV WHERE s3R_xDID = $dcTp";
			$S002 = $conexion->query($C002) or die ("Fallo al seleccionar servicio: ".$C002);
			$DdS = $S002->fetch_assoc();
			$sDes = $DdS['s3R_xDd35'];
			$DIdS = [
				'sDes' => $sDes
			];
		}
	}
	else{
		//$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'No se encontro ID de Servicio y/o Vehiculo';
		llevame('app?accion=escritorio');
	}
}
elseif($accion == 'eDtSpp'){
	if($xDsSx008 !== '' && $xDsSx005 !== '' && $xDsSx004 !== ''){
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if (isset($_FILES['xDsSx007']) && $_FILES['xDsSx007']['error'] === UPLOAD_ERR_OK)	{
		$seSub = true;
		$fileTmpPath = $_FILES['xDsSx007']['tmp_name'];
			$fileName = $_FILES['xDsSx007']['name'];
			$fileSize = $_FILES['xDsSx007']['size'];
			$fileType = $_FILES['xDsSx007']['type'];
			$fileNameCmps = explode(".", $fileName);
			$fileExtension = strtolower(end($fileNameCmps));
			$do9j = $ddCA;
			$yu7u = time();
			$newFileName = $vh3iP. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;

			$allowedfileExtensions = array('png', 'webp', 'jpeg', 'jpg', 'pdf', 'doc', 'docx');

			if (in_array($fileExtension, $allowedfileExtensions))	{
			
				$path = '../../d0cUm3N70s/';
				$dest_path = $path . $newFileName;

				if(move_uploaded_file($fileTmpPath, $dest_path)) {
					$w3bp = $vh3iP. '-'.$do9j.'-'.$yu7u.'.'.$fileExtension;
					$w3bpP47h = $path . $w3bp;
					
					$nf = '../tmp/'.$_SESSION['usuarioID'].'/'.$w3bp;
					if (!copy($w3bpP47h, $nf)) {
							//echo "Error al copiar $nf...\n";
					}
					//c0nVt0Jp3g($dest_path, $w3bpP47h);

					$newFile = eCry2($w3bp);
				}
				else {
					//$_SESSION['m3n3Rr0R']  = 'si';
					$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
			}
			}
			else{
				//$_SESSION['m3n3Rr0R']  = 'si';
				$frg = implode(',', $allowedfileExtensions);
				$_SESSION['m3ns4J3'] = lbl_8i7_x0303. $fileExtension;
			}
		}
		else{
			$seSub = false;
			/*$_SESSION['m3n3Rr0R']  = 'si';
			$_SESSION['m3ns4J3'] = lbl_8i7_x0304.$_FILES['ags_x003']['error'];*/
		}
		
		
		
		
		$accion = "actualizar";
		unset($sql_arr);
		$p4r4 = "D0cIDxS =".$xDsSx008;
		$xDsSx001 = eCry2($xDsSx001);
		$xDsSx002 = eCry2($xDsSx002);
		if($seSub == true){
			$sql_arr =[
				'D0cD3SxS' => $xDsSx001,
				'D0cIMxS' => $xDsSx002,
				'D0cFil3xS' => $newFile,
				'D0cFDxS' => $xDsSx003,
				'D0cFVxS' => $xDsSx004,
				'D0cALTxS' => $xDsSx006
			];
		}
		elseif($seSub == false){
			$newFile = eCry2($ddFil);
			$sql_arr =[
				'D0cD3SxS' => $xDsSx001,
				'D0cIMxS' => $xDsSx002,
				'D0cFil3xS' => $newFile,
				'D0cFDxS' => $xDsSx003,
				'D0cFVxS' => $xDsSx004,
				'D0cALTxS' => $xDsSx006
			];
		}
		echo '<pre>';
		print_r($_FILES['xDsSx007']);
		echo '</pre>';
		ejecutaDB('D0cUM3n705', $sql_arr, $accion, $p4r4);
		bi74c0('4ct-s3r', 'Se actualizo el servicio:'.$xDsSx008, '');
		$_SESSION['m3ns4J3'] = 'Se actualizo el servicio con exito!';
		llevame('../app?accion=eDtSrv&SidxD='.$eCry($xDsSx008).'&vh3iP='.$eCry($vh3iP));
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'No se encontro ID de Servicio y/o Vehiculo';
		llevame('../app?accion=escritorio');
	}
}
