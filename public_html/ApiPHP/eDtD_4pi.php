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

/// --- accion Listado de Usuarios
if($accion === "eDtD"){

	if(!empty($DidxD) && !empty($vh3iP)){
		$DidxD = $dCry($DidxD);
		$vh3iP = $dCry($vh3iP);
		$C001 = "SELECT * FROM D0cUM3n705 WHERE D0cIDxS = $DidxD";
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

			$C002 = "SELECT * FROM c4TD0cxxV WHERE d0C_xDc4t = $dcTp";
			$S002 = $conexion->query($C002) or die ("Fallo al seleccionar documento: ".$C002);
			$DdS = $S002->fetch_assoc();
			$sDes = $DdS['d0C_xDd35'];
			$DIdS = [
				'sDes' => $sDes
			];
		}
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'No se encontro ID de Documento y/o Vehiculo';
		//llevame('app?accion=escritorio');
	}
}
elseif($accion == 'eDtDpp'){
	if($xDsDx008 !== '' && $vh3iP !== '' && $xDsDx040 !== ''){
	include('../front/idiomas/'.$_SESSION['idioma'].'/i_8i74c0r4.php');
	if (isset($_FILES['xDsDx007']) && $_FILES['xDsDx007']['error'] === UPLOAD_ERR_OK)	{
		$seSub = true;
		$fileTmpPath = $_FILES['xDsDx007']['tmp_name'];
			$fileName = $_FILES['xDsDx007']['name'];
			$fileSize = $_FILES['xDsDx007']['size'];
			$fileType = $_FILES['xDsDx007']['type'];
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
					$_SESSION['m3n3Rr0R']  = 'si';
					$_SESSION['m3ns4J3'] = lbl_8i7_x0302.$dest_path;					
			}
			}
			else{
				$_SESSION['m3n3Rr0R']  = 'si';
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
		$p4r4 = "D0cIDxS =".$xDsDx008;
		$xDsDx001 = eCry2($xDsDx001);
		$xDsDx002 = eCry2($xDsDx002);
		if($seSub == true){
			$sql_arr =[
				'D0cD3SxS' => $xDsDx001,
				'D0cIMxS' => $xDsDx002,
				'D0cFil3xS' => $newFile,
				'D0cFDxS' => $xDsDx003,
				'D0cFVxS' => $xDsDx040,
				'D0cALTxS' => $xDsDx006
			];
		}
		elseif($seSub == false){
			$newFile = eCry2($ddFil);
			$sql_arr =[
				'D0cD3SxS' => $xDsDx001,
				'D0cIMxS' => $xDsDx002,
				'D0cFil3xS' => $newFile,
				'D0cFDxS' => $xDsDx003,
				'D0cFVxS' => $xDsDx040,
				'D0cALTxS' => $xDsDx006
			];
		}
		echo '<pre>';
		print_r($_FILES['xDsDx007']);
		echo '</pre>';
		ejecutaDB('D0cUM3n705', $sql_arr, $accion, $p4r4);
		bi74c0('4ct-d0c', 'Se actualizo el documento:'.$xDsDx008, '');
		$_SESSION['m3ns4J3'] = 'Se actualizo el Documento con exito!';
		llevame('../app?accion=eDtD&DidxD='.$eCry($xDsDx008).'&vh3iP='.$eCry($vh3iP));
	}
	else{
		$_SESSION['m3n3Rr0R']  = 'si';
		$_SESSION['m3ns4J3'] = 'No se encontro ID de Documento y/o Vehiculo';
		llevame('../app?accion=escritorio');
	}
}
