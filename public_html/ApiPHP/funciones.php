<?php

function v4lID44x50($fhn4, $u53) {
  global $conexion;
  $p4r73 = explode('-', $fhn4);
  $m0DuxS = $p4r73[0];
  $mxM7 = $p4r73[1]; 

  $Qsd7Hd5td = "SELECT * FROM p3rM5sx_e WHERE p3ry6m0DuXx = '".$m0DuxS."' AND p3ry6nUm3Xx = '".$mxM7."' ";
  $Csd7Hd5td = $conexion->query($Qsd7Hd5td) or die ("Falló listado de permisos" . $Qsd7Hd5td);
  $p = $Csd7Hd5td->fetch_array();

  $Qjdf87 = "SELECT * FROM permisosOtrogados WHERE po_usuario_id = '".$u53."' AND po_permiso_id = '".$p['p3ry6IDXx']."' ";
  $Cjdf87 = $conexion->query($Qjdf87) or die ("Falló listado de usuarios" . $Qjdf87);
  $po = $Cjdf87->fetch_array();

  $Cjdf87 = $p['p3ry6m0DuXx'].'-'.$p['p3ry6nUm3Xx'];

  if($Cjdf87 == $fhn4 && $po['po_estado'] == 1){
    $res = true;
  }
  else{
    $res = FALSE;
  }
  return $res;
}

function mostrarTexto($texto) {
  return $texto;
}

function ejecutaDB($table, $data, $action, $parameters) {
    
    reset($data);
    global  $conexion;
    if($action == 'insertar'){
      
      $query = 'INSERT INTO ' . $table . ' (';
      //while(list($columns, ) = each($data)){
      foreach($data as $columns => $value) {  
        $query .= $columns . ', ';

      }
      
      $query = substr($query, 0, -2) . ') values (';
      reset($data);
     // while(list(, $value) = each($data)){
      foreach($data as $columns => $value) {
        switch ((string)$value) {
          case 'now()':
            $query .= 'now(), ';
            break;
          case 'null':
            $query .= 'null, ';
            break;
          default:
            $query .= '\'' . addslashes($value) . '\', ';
            break;
        }

      }

      $query = substr($query, 0, -2) . ')';
      
    } elseif ($action == 'actualizar'){

      $query = 'UPDATE ' . $table . ' SET ';
      //while(list($columns, $value) = each($data)){
      foreach($data as $columns => $value) {

        switch ((string)$value) {
          case 'now()':
            $query .= $columns . ' = now(), ';
            break;
          case 'null':
            $query .= $columns .= ' = null, ';
            break;
          default:
            $query .= $columns . ' = \'' . addslashes($value) . '\', ';
            break;
        }
      }
      $query = substr($query, 0, -2) . ' WHERE ' . $parameters;

    } elseif ($action == 'eliminar'){
      
      $query = 'DELETE FROM ' . $table . ' WHERE ' . $parameters;

    }
        //    echo $query;
    $conexion -> query($query) or die($mysqli_error($conexion));
    $result = $conexion->insert_id;
    return $result;

}

function llevame($url) {
  $host  = $_SERVER['HTTP_HOST'];
  header('Location:' . $url);
  exit();
}

function bi74c0($Fxc47374, $Fxd3scR74, $u53) {
  
  $Fxf3ch474 = date("Y-m-d H:i:s");
  $data = [];
  if($u53 == ''){
    $Fx5u53r74 = $_SESSION['usuarioID'];
  }
  else{
    $Fx5u53r74 = $u53;
  }
  $data = ['x8ic47374' => $Fxc47374, 
           'x8iu5uR74' => $Fx5u53r74, 
           'x8if3cH474' => $Fxf3ch474, 
           'x8id35c74' => $Fxd3scR74
          ];
  if(ejecutaDB('8i74c0r4', $data, 'insertar', $paramtros)){
    return true;
  }
  else{
    return false;
  }
}

function Bin4kuru($d3s=0, $accion=0, $V=0, $U=0, $F=0, $E=0, $D=0, $P=0) {
  $Fxf3ch474 = date("Y-m-d H:i:s");
  $data = [];
  $Fx5u53r74 = $_SESSION['usuarioID'];

  $data = [
    'kuRuD3SBiN' => $d3s, 
    'kuRuUSIDBiN' => $Fx5u53r74, 
    'kuRuUUIDBiN' => $U, 
    'kuRuVEIDBiN' => $V, 
    'kuRuEMDBiN' => $E,
    'kuRuFLIDBiN' => $F,
    'kuRuDIDBiN' => $D,
    'kuRuPIDBiN' => $P,
    'kuRuAXIBiN' => $accion,
    'kuRuTIMBiN' => $Fxf3ch474
  ];
  if(ejecutaDB('1Bin4kuru', $data, 'insertar', $paramtros)){
    return true;
  }
  else{
    return false;
  }
}

function Binakuru($cambios='', $tipoAfectado=0, $IDAfectado, $usuario=0, $accion=0, $universo=0) {
  $fecha = date("Y-m-d H:i:s");
  $data = [];
  $usuario = $_SESSION['usuarioID'];

  

  

  $data = [
    'bi_cambios' => $cambios, 
    'bi_tipoA' => $tipoAfectado, 
    'bi_IDA' => $IDAfectado, 
    'bi_usuario' => $usuario, 
    'bi_accion' => $accion,
    'bi_fecha' => $fecha,
    'universo' => $universo,
  ];
  if(ejecutaDB('binakuru', $data, 'insertar', $paramtros)){
    return true;
  }
  else{
    return false;
  }
}

function su8iM6($Fxc47374, $Fxd3scR74) {
  
  // -- desarrollar fn subir imagenes en base a api de marcar
}
  /// --- URL ENC
      /////////////////////////////////////////////////////////////////////////////////////////
      //Configuración del algoritmo de encriptación

        $clave_en  = '38365119959639461c19a0b8dc84b61e';

        //Metodo de encriptación
        $method = 'aes-256-cbc';

        // Puede generar una diferente usando la funcion $getIV()
        $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");

        /*
        Encripta el contenido de la variable, enviada como parametro.
          */
        $eCry = function ($valor) use ($method, $clave_en, $iv) {
            return urlencode(openssl_encrypt($valor, $method, $clave_en, false, $iv));
        };

        /*
        Desencripta el texto recibido
        */
        $dCry = function ($valor) use ($method, $clave_en, $iv) {
            //$encrypted_data = base64_decode($valor);
            return openssl_decrypt($valor, $method, $clave_en, false, $iv);
        };

        /*
        Genera un valor para IV
        */
        $getIV = function () use ($method) {
            return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
        };

      
    
  /// ---

function eCry2($txtt){
    global $puk3y;
    if(openssl_public_encrypt($txtt, $encrypted, $puk3y)){
      $txtt = base64_encode($encrypted);
      //$txtt = $encrypted;
    }
    else{
      $txtt = 'error1';
    }
    return $txtt;
}
    
function dCry2($txtt) {
    global $puk3y; global $prk3y;
    $txtt = base64_decode($txtt);
    if(openssl_private_decrypt($txtt, $decrypted, $prk3y)){
      $txtt = $decrypted;
    }
    else{
      $txtt = 'error2';
    }
    return $txtt;
}
  
function ueCry($txtt, $u5u5){
    global  $conexion; global $grdV;
    $SQjhg = "SELECT * FROM L4v3s WHERE L4v3s_id = '".$u5u5."' ORDER BY L4v3s_id DESC LIMIT 1";
		$CQjhg = $conexion->query($SQjhg) or die ("Fallo al ontener llaves");
		$ded = $CQjhg->fetch_assoc();
    $uIdlLv = $ded['L4v3s_uid'];
    $uLllLv = $ded['L4v3s_pv'];
    $r74 = $grdV.$uIdlLv.'/puk-'.$uLllLv.'-'.$uIdlLv.'.pem'; 
    $pukiud = file_get_contents($r74);
    
    if(openssl_public_encrypt($txtt, $encrypted, $pukiud)){
      $txtt = base64_encode($encrypted);
      //$txtt = $encrypted;
    }
    else{
      $txtt = $pukiud;
    }
    return $txtt;
}
    
function udCry($txtt, $u5u5) {
    global  $conexion; global $grdV;
    $SQjhg = "SELECT * FROM L4v3s WHERE L4v3s_id = '".$u5u5."' ORDER BY L4v3s_id DESC LIMIT 1";
		$CQjhg = $conexion->query($SQjhg) or die ("Fallo al ontener llaves");
		$ded = $CQjhg->fetch_assoc();
    $uIdlLv = $ded['L4v3s_uid'];
    $uLllLv = $ded['L4v3s_pv'];
    $r74 = $grdV.$uIdlLv.'/puk-'.$uLllLv.'-'.$uIdlLv.'.pem'; 
    $prk3y = file_get_contents($r74);

    $txtt = base64_decode($txtt);
    if(openssl_public_decrypt($txtt, $decrypted, $prk3y)){
      $txtt = $decrypted;
    }
    else{
      $txtt = 'error10';
    }
    return $txtt;
}

function gLl4v3($ifg, $pvk, $puk){
    $txm = time();

    $n0m8r3 = '../llaves/'.$ifg.'/pvk-'.$txm.'-'.$ifg.'.pem';
    $n0m8r2 = '../llaves/'.$ifg.'/puk-'.$txm.'-'.$ifg.'.pem';
    $c4rp374 = '../llaves/'.$ifg;
    if (!file_exists($c4rp374)) {
        mkdir($c4rp374, 0777, true);
    }

    
    if (file_exists($n0m8r3)){
      $archivo = fopen($n0m8r3, "a");
      fwrite($archivo, "-----BEGIN RSA PRIVATE KEY-----".PHP_EOL);
      $Ghyt = str_split($pvk, 64);
      foreach ($Ghyt as $key => $value) {
        fwrite($archivo, $value.PHP_EOL);      
      }
      fwrite($archivo, "-----END RSA PRIVATE KEY-----");
      fclose($archivo);
      
    }
    else{
      $archivo = fopen($n0m8r3, "w");
      fwrite($archivo, "-----BEGIN RSA PRIVATE KEY-----".PHP_EOL);
      $Ghyt = str_split($pvk, 64);
      foreach ($Ghyt as $key => $value) {
        fwrite($archivo, $value.PHP_EOL);      
      }
      fwrite($archivo, "-----END RSA PRIVATE KEY-----");
      fclose($archivo);
    }
    if (file_exists($n0m8r2)){
      $archivo = fopen($n0m8r2, "a"); 
      fwrite($archivo, "-----BEGIN PUBLIC KEY-----".PHP_EOL);
      $Ghyt = str_split($puk, 64);
      foreach ($Ghyt as $key => $value) {
        fwrite($archivo, $value.PHP_EOL);      
      }
      fwrite($archivo, "-----END PUBLIC KEY----- ");
      fclose($archivo);
    }
    else{
      $archivo = fopen($n0m8r2, "w");
      fwrite($archivo, "-----BEGIN PUBLIC KEY-----".PHP_EOL);
      $Ghyt = str_split($puk, 64);
      foreach ($Ghyt as $key => $value) {
        fwrite($archivo, $value.PHP_EOL);      
      }
      fwrite($archivo, "-----END PUBLIC KEY----- ");
      fclose($archivo);
    }
}

function url_completa($forwarded_host = false) {
    $ssl   = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
    $proto = strtolower($_SERVER['SERVER_PROTOCOL']);
    $proto = substr($proto, 0, strpos($proto, '/')) . ($ssl ? 's' : '' );
    if ($forwarded_host && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    } else {
        if (isset($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
        } else {
            $port = $_SERVER['SERVER_PORT'];
            $port = ((!$ssl && $port=='80') || ($ssl && $port=='443' )) ? '' : ':' . $port;
            $host = $_SERVER['SERVER_NAME'] . $port;
        }
    }
    $request = $_SERVER['REQUEST_URI'];
    return $proto . '://' . $host . $request;
}

function c0nVt0Jp3g($im6, $n3wN4m3, $quality = 80) {

    if ($quality < 0 || $quality > 100) {
        throw new \Exception("Fuera de rango.");
    }

    if (!file_exists($im6)) {
        throw new \Exception("no esta el archivo.");
    }

    $ext = pathinfo($im6, PATHINFO_EXTENSION);

    if (preg_match('/jpg|jpeg/i', $ext)) {
        $image = imagecreatefromjpeg($im6);
    } else if (preg_match('/png/i', $ext)) {
        $image = imagecreatefrompng($im6);
    } else if (preg_match('/gif/i', $ext)) {
        $image = imagecreatefromgif($im6);
    } else if (preg_match('/webp/i', $ext)) {
        $image = imagecreatefromwebp($im6);
    } else {
        throw new \Exception("No se reconoce la imagen.");
    }

    $result = imagejpeg($image, $n3wN4m3, $quality);

    if (!$result) {
        throw new \Exception("Saving to file exception.");
    }
    imagedestroy($image);
    if($n3wN4m3 != $im6){
      unlink($im6);
    }
    
}

function c0nUs($flo0 = 0, $ePr3 = 0, $xux = 0){
    global $conexion;
		if($flo0 != 0 && $ePr3 == 0 && $xux == 0){
			$S001 = "SELECT * FROM x7l07 WHERE x3MPID7l0 = $flo0";
			$Q001 = $conexion->query($S001) or die ("Falló Obtener datos de Flota");
			$DL = $Q001->fetch_assoc();
			$iI = $DL['x3MPID7l0'];
			$STE = 'UEFFxTU';
			$OUJ = $flo0;
		}
		elseif($ePr3 != '' || $ePr3 != 0){
			$S001 = "SELECT * FROM eMpR3sA5 WHERE eMIDEm = $ePr3";
			$Q001 = $conexion->query($S001) or die ("Falló Obtener datos de Empresa");
			$DL = $Q001->fetch_assoc();
			$iI = $DL['eMIDEm'];
			$STE = 'UEFExTU';
			$OUJ = $ePr3;
		}
    elseif($xux !== 0){
      $C001 = "SELECT * FROM u5u405 WHERE usuarioID = $xux";
      $S001 = $conexion->query($C001) or die ("Falló al consultar datos de usuario");
      $DU = $S001->fetch_assoc();
      $u5hy68 = [];
      $xVnUDnVx = $DU['usuarioID'];
      $xVUSnVx = $DU['u5hUS8ir5'];
      $xVN1nVx = dCry2($DU['usuarioN1']);
      $xVN2nVx = dCry2($DU['usuarioN2']);
      $xVA1nVx = dCry2($DU['usuarioA1']);
      $xVA2nVx = dCry2($DU['usuarioA2']);
      $xVNCnVx = $xVA1nVx.' '.$xVA2nVx.' '.$xVN1nVx.' '.$xVN2nVx;
      $u5hy68 = [
        'usuarioID' => $xVnUDnVx,
        'u5hUS8ir5' => $xVUSnVx,
        'u5h8ir5_nombre' => $xVNCnVx,
      ];
    }

    if(($flo0 != 0 || $ePr3 != 0) && $xux === 0){
      $Q002 = "SELECT * FROM r3l3UEF WHERE ".$STE." = '".$OUJ."' ";
      $S002 = $conexion->query($Q002) or die ("Fallo al obtener relaciones de usuario: <b>".$Q002.'</b>'); 
      $u5hy68 = [];
      while ($DR = $S002->fetch_assoc()) {
        $U = $DR['UEFUxTU'];
        $Q003 = "SELECT * FROM u5u405 WHERE usuarioID = $U ORDER BY usuarioID ASC";
        $S003 = $conexion->query($Q003) or die ("Falló listado de usuarios: " . $Q003);
        $lista_u5u405 = $S003->fetch_assoc();
        if($lista_u5u405['usuarioID'] != ''){ $ID8ir5 = /*dCry2(*/$lista_u5u405['usuarioID']/*)*/; }
        if($lista_u5u405['u5hUS8ir5'] != ''){ $US8ir5 = /*dCry2(*/$lista_u5u405['u5hUS8ir5']/*)*/; }
        if($lista_u5u405['u5hFt8ir5'] != ''){ $FT8ir5 = /*dCry2(*/$lista_u5u405['u5hFt8ir5']/*)*/; }
        if($lista_u5u405['u5hOn8ir5'] != ''){ $ON8ir5 = /*dCry2(*/$lista_u5u405['u5hOn8ir5']/*)*/; }
        if($lista_u5u405['usuarioA1'] != ''){ $A18ir5 = dCry2($lista_u5u405['usuarioA1']); }
        if($lista_u5u405['usuarioA2'] != ''){ $A28ir5 = dCry2($lista_u5u405['usuarioA2']); }
        if($lista_u5u405['usuarioN1'] != ''){ $A28ir5 = dCry2($lista_u5u405['usuarioN1']); }
        if($lista_u5u405['usuarioN2'] != ''){ $N28ir5 = dCry2($lista_u5u405['usuarioN2']); }
        $u5h34r5_nombre = $A18ir5. ' ' .$A28ir5. ' ' .$N18ir5. ' ' .$N28ir5;
        unset($x4rr36l0);
        $x4rr36l0 = array(
          'usuarioID' => $ID8ir5,
          'u5hUS8ir5' => $US8ir5,
          'u5h8ir5_nombre' => $u5h34r5_nombre,
          'u5hFt8ir5' => $FT8ir5,
          'u5hOn8ir5' => $ON8ir5
        );
        array_push($u5hy68, $x4rr36l0); 
          
        unset($ID8ir5); unset($US8ir5); unset($u5h34r5_nombre); 
        unset($FT8ir5); unset($ON8ir5); unset($A18ir5); 
        unset($A28ir5); unset($N18ir5); unset($N28ir5); 
        
        $num_usr = $S003->num_rows;
      }
    }
    return $u5hy68;
}

function c0nNumUs($flo0 = 0, $ePr3 = 0){
  global $conexion;
  if($flo0 != 0){
    $S001 = "SELECT UEFIxTU FROM r3l3UEF WHERE UEFFxTU = $flo0";
    $Q001 = $conexion->query($S001) or die ("Falló obtener numero de usuarios");
  }
  elseif($ePr3 != 0){
    $S001 = "SELECT UEFIxTU FROM r3l3UEF WHERE UEFExTU = $ePr3";
    $Q001 = $conexion->query($S001) or die ("Falló obtener numero de usuarios");
  }
  $DL = $Q001->num_rows;
  return $DL;
}

function c0nNumFl($ePr3 = 0, $u5U = 0){
  global $conexion;
  if($ePr3 != ''){
    $S001 = "SELECT r3FID00 FROM r3l3mpfl00 WHERE r3F3mP00 = $ePr3";
  }
  elseif($u5U != ''){
    $S001 = "SELECT xu5uID7l0 FROM x7l07 WHERE xu5uID7l0 = $u5U";
  }
  $Q001 = $conexion->query($S001) or die ("Falló obtener numero de flotas");
  
  $DL = $Q001->num_rows;
  return $DL;
}

function c0nM4rk(){
  global $conexion;
  $m4rC4s = [];
  $SQm4R = "SELECT * FROM m4rC45v3Hi"; 
  $CQm4R = $conexion->query($SQm4R) or die ("Falló al cargar marcas: ".$SQm4R);
  while ($li57M4rKkk = $CQm4R->fetch_array()) {
    $x4rr3 = array(
      'm4xID5s' => $li57M4rKkk['m4rCxID5s'],
      'm4xD35c5s' => $li57M4rKkk['m4rCxD35c5s'],
      'm4xIm463N5s' => $li57M4rKkk['m4rCxIm463N5s']		
    );
    array_push($m4rC4s, $x4rr3);
  }
  return $m4rC4s;
}

function c0nM4rkID($ID){
  global $conexion;
  $m4rC4s = [];
  $SQm4R = "SELECT m4rCxD35c5s FROM m4rC45v3Hi WHERE m4rCxID5s = $ID"; 
  $CQm4R = $conexion->query($SQm4R) or die ("Falló al cargar marcas: ".$SQm4R);
  $li57M4rKkk = $CQm4R->fetch_assoc();
  $m4xD35c5s = $li57M4rKkk['m4rCxD35c5s'];
  return $m4xD35c5s;
}

function c0nM4rkTPV($T6){
  global $conexion;
  $m4rC4s = [];
  $SQm4R = "SELECT m4rCxTV FROM m4rC45v3Hi WHERE m4rCxID5s = $T6"; 
  $CQm4R = $conexion->query($SQm4R) or die ("Falló al cargar marcas: ".$SQm4R);
  $li57M4rKkk = $CQm4R->fetch_assoc();
  $m4xD35c5s = $li57M4rKkk['m4rCxTV'];
  return $m4xD35c5s;
}

function c0n5ub($MK){
  global $conexion;
  $MD = [];
  /*$SQm4R = "SELECT * FROM m0d3loS WHERE j5uBxMIDx = '".$MK.' "; 
  $CQm4R = $conexion->query($SQm4R) or die ("Falló al cargar modelos: ".$SQm4R);
  while ($li57M4rKkk = $CQm4R->fetch_assoc()) {
    $x4rr3 = array(
      'BxIDx' => $su8['j5uBxIDx'],
			'BxD35x' => $su8['j5uBxD35x'],
			'BxMIDx' => $su8['j5uBxMIDx']
    );
    array_push($MD, $x4rr3);
  }
  return $MD*/;

  $SQ5u8M4 = "SELECT * FROM m0d3loS WHERE j5uBxMIDx = '".$MK."' ";
		$CQ5u8M4 = $conexion->query($SQ5u8M4) or die ("Falló al cargar submarcas: ".$SQ5u8M4);
		$MD = [];
		while ($su8 = $CQ5u8M4->fetch_array()) {
			$arRg = array(
				'BxIDx' => $su8['j5uBxIDx'],
				'BxD35x' => $su8['j5uBxD35x'],
				'BxMIDx' => $su8['j5uBxMIDx']
			);
			array_push($MD, $arRg);
		}
    return $MD;
}

function c0nEmP($flo0 = 0, $mdr = 0, $eid = 0){
  global $conexion;
  if(($flo0 != 0 || $flo0 != '') && $mdr == 2){
    //$flo0 = $dCry($flo0);
    $SQ3s702 = "SELECT * FROM r3l3mpfl00 WHERE r3FFloO00 = '".$flo0."' ";
    $CQ3s702 = $conexion->query($SQ3s702) or die ("Falló listado de relaciones" . $SQ3s730);

    $SQ3s730 = "SELECT xN4m37l0 FROM x7l07 WHERE xID7l0 = '".$flo0."' ";
    $CQ3s730 = $conexion->query($SQ3s730) or die ("Falló listado de flotas" . $SQ3s730);
    $DF = $CQ3s730->fetch_assoc();
    $NF = dCry2($DF['xN4m37l0']);
  }
  elseif($eid != 0 && $flo0 == 0 && $mdr == 0){
    $SQ3s702 = "SELECT eMIDEm, eMRZEm, eMNICEm, eMRFCEm FROM eMpR3sA5 WHERE eMIDEm = ".$eid." ";
    $CQ3s702 = $conexion->query($SQ3s702) or die ("Falló listado de empresas" . $SQ3s702);
  }
  else{
    $SQ3s702 = "SELECT eMIDEm, eMRZEm, eMNICEm, eMRFCEm FROM eMpR3sA5 WHERE eMiDuS3Em = ".$_SESSION['usuarioID']." ";
    $CQ3s702 = $conexion->query($SQ3s702) or die ("Falló listado de empresas" . $SQ3s702);
  }

  $d3m = [];
  while($LeMs4 = $CQ3s702->fetch_assoc()){
    
    if($flo0 != '' && $mdr == 2){
      $ghy = $LeMs4['r3F3mP00'];
      $SQ3s755 = "SELECT eMIDEm, eMRZEm, eMNICEm, eMRFCEm FROM eMpR3sA5 WHERE eMIDEm = '".$ghy."' ";
      $CQ3s755 = $conexion->query($SQ3s755) or die ("Falló listado de empresas" . $SQ3s755);
      $dEM = $CQ3s755->fetch_assoc();
      $SQ3s725 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = ".$dEM['eMIDEm']." ";
      $CQ3s725 = $conexion->query($SQ3s725) or die ("Falló listado de relaciones" . $SQ3s725);
      $SQ3s735 = "SELECT xV3hi3MPrXu7l0s FROM v3hiXu7l0s WHERE xV3hi3MPrXu7l0s = ".$dEM['eMIDEm']." ";
      $CQ3s735 = $conexion->query($SQ3s735) or die ("Falló listado de vehiculos" . $SQ3s735);
      $nv = $CQ3s735->num_rows;
      $arr4y = array(
        'XrIDEx' => $dEM['eMIDEm'],
        'XrRZEx' => $dEM['eMRZEm'], 
        'XrNICEx' => $dEM['eMNICEm'],
        'XrRFCEx' => $dEM['eMRFCEm'],
        'nv' => $nv
      );
      array_push($d3m, $arr4y);
    }
    else{
      $ghy = $LeMs4['eMIDEm'];
      $SQ3s755 = "SELECT r3F3mP00 FROM r3l3mpfl00 WHERE r3F3mP00 = '".$ghy."' ";
      $CQ3s755 = $conexion->query($SQ3s755) or die ("Falló listado de flotas" . $SQ3s755);
      $SQ3s735 = "SELECT xV3hi3MPrXu7l0s FROM v3hiXu7l0s WHERE xV3hi3MPrXu7l0s = ".$ghy." ";
      $CQ3s735 = $conexion->query($SQ3s735) or die ("Falló listado de vehiculos" . $SQ3s735);
      $nv = $CQ3s735->num_rows;

      $arr4y = array(
        'XrIDEx' => $LeMs4['eMIDEm'],
        'XrRZEx' => $LeMs4['eMRZEm'],
        'XrNICEx' => $LeMs4['eMNICEm'],
        'XrRFCEx' => $LeMs4['eMRFCEm'],
        'nv' => $nv
      );
      array_push($d3m, $arr4y);
    }
  }
  return $d3m;
}
 
function c0nNuEmP($flo0, $mdr){
  global $conexion;
  if($flo0 != '' && $mdr == 2){
    //$flo0 = $dCry($flo0);
    $SQ3s702 = "SELECT * FROM r3l3mpfl00 WHERE r3FFloO00 = '".$flo0."' ";
    $CQ3s702 = $conexion->query($SQ3s702) or die ("Falló numero de empresas" . $SQ3s730);
    $r = 1;
  }
  else{
    $SQ3s702 = "SELECT eMIDEm FROM eMpR3sA5 WHERE eMiDuS3Em = ".$_SESSION['usuarioID']." ";
    $CQ3s702 = $conexion->query($SQ3s702) or die ("Falló numero de empresas" . $SQ3s702);
    $r = 2;
  }
  $ne = $CQ3s702->num_rows;
  return $ne;
}

function consulta_estados($pais){
  global $conexion;
  $SQ3s742 = "SELECT * FROM 3s7A2";
  if($pais != 'todos'){
    $SQ3s742 .= " WHERE estado_pais LIKE '%".$pais."%' ";
  }
	$CQ3s742 = $conexion->query($SQ3s742) or die ("Falló listado de estados" . $SQ3s742);
	$l3st4 = [];
	while ($LEs7A = $CQ3s742->fetch_assoc()) {
		$arr3 = array(
			'estadoID' => $LEs7A['xXid3s742x'],
			'estadoNombre' => $LEs7A['xXN00Ms742x'],
      'assss' => $SQ3s742
		);
		array_push($l3st4, $arr3);
	}
  return $l3st4;
}

function consulta_estado_id($ED){
  global $conexion;
  $SQ3s742 = "SELECT xXid3s742x, xXN00Ms742x FROM 3s7A2 WHERE xXid3s742x = $ED";
	$CQ3s742 = $conexion->query($SQ3s742) or die ("Falló listado de estados" . $SQ3s742);
	$LEs7A = $CQ3s742->fetch_assoc();
	$Ed0N0m = $LEs7A['xXN00Ms742x'];
  return $Ed0N0m;
}

function C0nMuniD($MD){
  global $conexion;
  $SQ3s745 = "SELECT zSMNcPi0sidX, zSMNcPi0sN0omX FROM MNcPi0s WHERE zSMNcPi0sidX = '".$MD."' ";
	$CQ3s745 = $conexion->query($SQ3s745) or die ("Falló municipios " . $SQ3s745);
	$LEpi0s = $CQ3s745->fetch_assoc();
  $nr = $CQ3s745->num_rows;
  if($nr >= 1){
    $MuNNM09o = $LEpi0s['zSMNcPi0sN0omX'];
  }
  else{
    $MuNNM09o = 'noid';
  }
  return $MuNNM09o;
}

function C0nMun($px010){
  global $conexion;
  $SQ3s745 = "SELECT zSMNcPi0sidX, zSMNcPi0sN0omX FROM MNcPi0s WHERE zSMNcPi0sX3DOIDIx = '".$px010."' ";
	$CQ3s745 = $conexion->query($SQ3s745) or die ("Falló listado de municipios " . $SQ3s745);
	$lPi0s = [];
	while ($LEpi0s = $CQ3s745->fetch_assoc()) {
		$arre = array(
			'MuNID09o' => $LEpi0s['zSMNcPi0sidX'],
			'MuNNM09o' => $LEpi0s['zSMNcPi0sN0omX']
		);
		array_push($lPi0s, $arre);
	}
  return $lPi0s;
}

function c0nNumAu($flo0, $ePr3){
  global $conexion;
  if($flo0 != 0){
    $S001 = "SELECT xV3hiIDXu7l0s FROM v3hiXu7l0s WHERE xV3hiFl074Xu7l0s = $flo0";
    $Q001 = $conexion->query($S001) or die ("Falló obtener numero de autos");
  }
  elseif($ePr3 != 0){
    $S001 = "SELECT xV3hiIDXu7l0s FROM v3hiXu7l0s WHERE xV3hi3MPrXu7l0s = $ePr3";
    $Q001 = $conexion->query($S001) or die ("Falló obtener numero de autos");
  }
  $DL = $Q001->num_rows;
  return $DL;
}

function adDp3($r50l){
  global $conexion;
  switch ($r50l) {
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
  }


}

function C0nFl0($u5u = 0, $eMp = 0){
  global $conexion;
  if($u5u != 0){
    $C001 = "SELECT * FROM x7l07 WHERE xu5uID7l0 = '".$u5u."' ";
    $S001 = $conexion->query($C001) or die ("Fallo al seleccionar flotas");
    $fl = [];
    while ($DF = $S001->fetch_assoc()) {
      $xfdifx = $DF['xID7l0'];
      $xfmnfx = dCry2($DF['xN4m37l0']);
      $a4rr = array(
        'xfdifx' => $xfdifx,
        'xfmnfx' => $xfmnfx,
      );
      array_push($fl, $a4rr);
    }
  }
  elseif($eMp != 0){
    $C002 = "SELECT * FROM r3l3mpfl00 WHERE r3F3mP00 = '".$eMp."' ";
    $S002 = $conexion->query($C002) or die ("Fallo al seleccionar flotas");
    while ($DR = $S002->fetch_assoc()) {
      $xDfir = $DR['r3FFloO00'];
      $C001 = "SELECT * FROM x7l07 WHERE xID7l0 = '".$xDfir."' ";
      $S001 = $conexion->query($C001) or die ("Fallo al seleccionar flotas");
      $fl = [];
      while ($DF = $S001->fetch_assoc()) {
        $xfdifx = $DF['xID7l0'];
        $xfmnfx = dCry2($DF['xN4m37l0']);
        $a4rr = array(
          'xfdifx' => $xfdifx,
          'xfmnfx' => $xfmnfx,
        );
        array_push($fl, $a4rr);
      }
    }
  }

  return $fl;
}

function val_VIN($vin){
  $val_VIN = "/^[a-zA-Z0-9]{9}+[a-zA-Z0-9-]{2}+[0-9]{6}+$/";
	if(preg_match($val_VIN, $vin)){ $res = true; } else { $res = false; }
  return $res;
}

function val_m4t($m4t){
  $val_m4t = "/^[-a-zA-Z0-9]{5,15}+$/";
	if(preg_match($val_m4t, $m4t)){ $res = true; } else { $res = false; }
  return $res;
}

function v4l_eco($eco){
  $v4l_eco = "/^[- a-zA-Z0-9]{3,25}+$/";
	if(preg_match($v4l_eco, $eco)){ $res = true; } else { $res = false; }
  return $res;
}

function v4l_srmtr($nsm){
  $v4l_srmtr = "/^[- a-zA-Z0-9]{3,25}+$/";
	if(preg_match($v4l_srmtr, $nsm)){ $res = true; } else { $res = false; }
  return $res;
}

function v4l_anho($anho){
  $val_anho = "/^[0-9]{4}+$/";
	if(preg_match($val_anho, $anho)){ $res = true; } else { $res = false; }
  return $res;
}

function v4l_tel($tel){
  $v4l_tel = "/^[0-9]{10}+$/";
	if(preg_match($v4l_tel, $tel)){ $res = true; } else { $res = false; }
  return $res;
}

function v4l_mail($mail){
  //if(filter_var($mail, FILTER_VALIDATE_EMAIL) == true){
    $res = true;
  /*}
  else{
    $res = false;
  }*/
  return $res;
}

function g3n_ps($lng = 8, $o_ltrs_m = true, $o_nm = true, $o_ltrs_M = true, $o_sp = true){
  $ltrs_m ="abcdefghijklmnopqrstuvwxyz";
  $nm = "1234567890";
  $ltrs_M = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $sp ="@#$%()=*+.,-_";
  $lt4 = "jkl%(78)D"; 
  $p5 = "";
  if ($o_ltrs_m == true) $lt4 .= $ltrs_m;
  if ($o_nm == true) $lt4 .= $nm;
  if($o_ltrs_M == true) $lt4 .= $ltrs_M;
  if($o_sp == true) $lt4 .= $sp;
  
  for( $i=1; $i<=$lng; $i++) {
  $ch = $lt4[rand(0,strlen($lt4)-1)];
  $p5.=$ch;
  $lt4 = str_shuffle($lt4);
  }
  return $p5;
}

function x_sisM($m){
  global $conexion;

  $C001 = "SELECT u5hUS8ir5 FROM u5u405 WHERE u5hUS8ir5 = '".$m."' ";
  $S001 = $conexion->query($C001) or die ("Fallo al consultar email: ".$C001);
  $x = $S001->num_rows;
  if($x != 0){ $r = true; } else { $r = false; }
  return $r;
}


function AES_Salt(){
	return base64_encode(random_bytes("128"));
}

function AES_Encrypt($password,$salt,$text_to_encrypt){

	$IVbytes = random_bytes("16");

	$salt = str_replace(" ", "+", $salt);

	$method = "AES-128-CBC";

	$key = mb_convert_encoding($password, "UTF-8");//Encoding to UTF-8

	$iteration = '10000';
	$keylength = '384';
	$methodoption = 'sha1';

	$hash = openssl_pbkdf2($key,base64_decode($salt),$keylength/8,$iteration,$methodoption);

	$cipherKey = substr($hash, 0, 16);
	$integritykey = substr($hash, 16, 32);


	$encryptedtext = openssl_encrypt($text_to_encrypt, $method, $cipherKey, OPENSSL_RAW_DATA, $IVbytes);

	$ivCipherConcat = $IVbytes.$encryptedtext;
	$sig = hash_hmac('sha256', $ivCipherConcat, $integritykey, true);

	$all[0] = base64_encode($IVbytes);
	$all[1] = base64_encode($sig);
	$all[2] = base64_encode($encryptedtext);


	$iv_mac_cyphertext = implode(":", $all);
	return $iv_mac_cyphertext;
}


function AES_Decrypt($password,$salt,$text_to_decrypt){

	//$password = base64_decode($password);

	$salt = str_replace(" ", "+", $salt);

	$exploded = explode(":", $text_to_decrypt);

	$ivString = $exploded[0];

	$ivString = str_replace(" ", "+", $ivString);

	$macString = $exploded[1];

	$macString = str_replace(" ", "+", $macString);

	$cipherTextString = $exploded[2];

	$cipherTextString = str_replace(" ", "+", $cipherTextString);


	$macdecoded = base64_decode($macString);
	$dataEncrypted = base64_decode($cipherTextString);
	$salt1 = base64_decode($salt);
	$IVbytes = base64_decode($ivString);

					$method = "AES-128-CBC";
					$key1 = mb_convert_encoding($password, "UTF-8");

					$iteration = '10000';
					$keylength = '384';
					$methodoption = 'sha1';

					$hash = openssl_pbkdf2($key1,$salt1,$keylength,$iteration,$methodoption);   //$hash = openssl_pbkdf2($key1,$salt1,'256','65556', 'sha1');
					// Decrypt
	$cipherKey = substr($hash, 0, 16);
	$integritykey = substr($hash, 16, 32);

	$ivCipherConcat = $IVbytes.$dataEncrypted;
	$sig = hash_hmac('sha256', $ivCipherConcat, $integritykey, true);

	if($macdecoded === $sig){
	  return openssl_decrypt($dataEncrypted, $method, $hash, OPENSSL_RAW_DATA, $IVbytes);
  }
  else{
    return "No se pudo procesar";
  }
}
function fondoRandom() {
  global $carpetaFondos;
  $fondos = [];
  $i = 0;
  if ($handler = opendir($carpetaFondos)) {
    while (false !== ($file = readdir($handler))) {
      $fondo = [
        'fondo' => $file
      ];
      array_push($fondos, $fondo);
      $i++;
    }
    closedir($handler);
  }
  $i = rand( 0, $i );
  $fondo = $fondos[$i]['fondo'];
  return $fondo;
}

function calcularEdad($fecha){
  $fecha_nac = new DateTime(date('Y-m-d',strtotime($fecha))); // Creo un objeto DateTime de la fecha ingresada
  $fecha_hoy =  new DateTime(date('Y-m-d',time())); // Creo un objeto DateTime de la fecha de hoy
  $edad = date_diff($fecha_hoy,$fecha_nac); // La funcion ayuda a calcular la diferencia, esto seria un objeto
  return $edad;
}

function add728x90(){ 
  $codigo = "<div class=\"callout callout-info col-12 text-center\">";
  $codigo .= "<p><i class=\"fad fa-ad\"></i> Patrocinadores</p>";
  $codigo .= "<script type=\"text/javascript\">";
  $codigo .=  "atOptions = {";
  $codigo .=  " 'key' : '95c3337887f2a21fd7fd04c86e9cdc1c',";
  $codigo .=  " 'format' : 'iframe',";
  $codigo .=  " 'height' : 90,";
  $codigo .=  " 'width' : 728,";
  $codigo .=  " 'params' : {}";
  $codigo .=  "};";
  $codigo .=  "document.write('<scr' + 'ipt type=\"text/javascript\" src=\"http' + (location.protocol === 'https:' ? 's' : '') + '://writtenanonymousgum.com/95c3337887f2a21fd7fd04c86e9cdc1c/invoke.js\"></scr' + 'ipt>');";
  $codigo .=  "</script>";
  $codigo .= "</div>";
  return $codigo;
}

?>

