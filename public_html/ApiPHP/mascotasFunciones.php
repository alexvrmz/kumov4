<?php

function listaSelectEspecies(){
	Global $conexion;
	$C004 = "SELECT * FROM especies WHERE especie_estado = 1 AND especie_inicial = 1 AND especie_universo = 0";
	$S004 = $conexion->query($C004) or die ("Error al consultar especies");
	$listaEspecies = [];
	while ($datosEspecie = $S004->fetch_array()) {
		unset($especie);
		$especie = [
			'especieID' => $datosEspecie['especie_id'],
			'especieDescripcion' => $datosEspecie['especie_descripcion'],
		];
		array_push($listaEspecies, $especie);
	}
	return $listaEspecies;
}

function listaSelectRazas($especie){
  Global $conexion;
  $C005 = "SELECT * FROM razas WHERE raza_especie = ".$especie."";
  $S005 = $conexion->query($C005) or die ("Fallo al seleccionar razas");
  $listaRazas = [];
  while ($datosRaza = $S005->fetch_array()) {
    unset($raza);
    $raza = [
      'razaID' => $datosRaza['raza_id'],
      'razaDescripcion' => $datosRaza['raza_descripcion']
    ];
    array_push($listaRazas, $raza);
  }
  return $listaRazas;
}

?>