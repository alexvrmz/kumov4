<?php
/// --- VALIDACIONES
  function V4lRQ($v4l){
    if(trim($v4l) == ''){
      return false;
    }
    else{
      return true;
    }
  }

  function v4lEm4Il($v4l){
    if(filter_var($v4l, FILTER_VALIDATE_EMAIL)){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }

  function v4l_rfc($rfc){
    $v4l_rfc = "/^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?+$/";
    if(preg_match($v4l_rfc, $rfc)){ $res = true; } else { $res = false; }
    return $res;
  }

  function v4l_cp($cp){
    $v4l_cp = "/^[0-9]{5}+$/";
    if(preg_match($v4l_cp, $cp)){ $res = true; } else { $res = false; }
    return $res;
  }

  function V4lPss($v4l, $min_len = 8, $max_len = 16, $req_digit = 1, $req_lower = 1, $req_upper = 1, $req_symbol = 1) {
    $regex = '/^';
    if ($req_digit == 1) { $regex .= '(?=.*\d)'; }              // Match at least 1 digit
    if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; }           // Match at least 1 lowercase letter
    if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; }           // Match at least 1 uppercase letter
    if ($req_symbol == 1) { $regex .= '(?=.*[^a-zA-Z\d])'; }    // Match at least 1 character that is none of the above
    $regex .= '.{' . $min_len . ',' . $max_len . '}$/';

    if(preg_match($regex, $v4l)) {
        return TRUE;
    } else {
        return FALSE;
    }
  }

/// --- LIMPIAR
  function limpia($v4l){
    $v4l = preg_replace('([^A-Za-z0-9 áéíóúüÁÉÍÓÚ])', '', $v4l);
    $v4l = trim($v4l);
    $v4l = ucwords(strtolower($v4l)); 
    return $v4l;
  }

/// --- CONSULTAS SELECT
  function pR0V5(){
    
  }

?>

