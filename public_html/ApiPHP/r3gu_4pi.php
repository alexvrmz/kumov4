<?php
foreach($_REQUEST as $k => $v){$$k=$v;}  //echo $k.' -> '.$v.' | ';
session_start();
//$accion = $dCry($accion);
/*if(!isset($_SESSION['usuario'])){
	header("location:../acceso.php?accion=entrar"); // --- llevame a login si no hay sesión ---
}*/
define('r001E', 'Correo Eléctronico es Obligatorio');
define('r001E2', 'Correo Eléctronico no es válido');
define('r002E', 'Primer Nombre es Obligatorio');
define('r004E', 'Primer Apellido es Obligatorio');
define('r006E', 'Contraseña es Obligatoria');
define('r006E2', 'Tu contraseña debe tener al menos 8 caracteres:<br> ->1 número<br> ->1 minúscula<br> ->1 mayúscula<br> ->1 carácter (, _ @ #. + * / -))');
define('r007E', 'Las contraseñas no coinciden');
define('r009E', 'Debes Aceptar Términos y Condiciones');
define('r008E', 'Selecciona tipo de cuenta');
define('r010E', 'Selecciona Sexo');


if($accion == 'r3gu'){
	include('conexion.php');
 	include('funciones.php');
 	include('fncnesF0rM5.php');
}
if ($accion == 'r3gu') {
  $_SESSION['m3n3Rr0R'] = [];
	$_SESSION['ne'] = 0;
	$tm = date("Y-m-d H:i:s");

	if(v4lRQ($r001) == FALSE){ $_SESSION['m3n3Rr0R']['r001'] = r001E;	$_SESSION['ne']++; } else { if(v4lEm4Il($r001) == FALSE) { $_SESSION['m3n3Rr0R']['r001'] = r001E2; $_SESSION['ne']++; } }
	if(v4lRQ($r002) == FALSE){ $_SESSION['m3n3Rr0R']['r002'] = r002E;	$_SESSION['ne']++; }  else { $r002 = limpia($r002); }
	if(v4lRQ($r004) == FALSE){ $_SESSION['m3n3Rr0R']['r004'] = r004E;	$_SESSION['ne']++; }  else { $r004 = limpia($r004); }
	if(v4lRQ($r006) == FALSE){ $_SESSION['m3n3Rr0R']['r006'] = r006E;	$_SESSION['ne']++; }	else { if($r006 != $r007){ $_SESSION['m3n3Rr0R']['r007'] = r007E;	$_SESSION['ne']++; } else { if(V4lPss($r006) == FALSE){ $_SESSION['m3n3Rr0R']['r006'] = r006E2; $_SESSION['ne']++; }}	}
	if(v4lRQ($r008) == FALSE){ $_SESSION['m3n3Rr0R']['r008'] = r008E; $_SESSION['ne']++; }
	if(v4lRQ($r009) == FALSE){ $_SESSION['m3n3Rr0R']['r009'] = r009E; $_SESSION['ne']++; }
	if(v4lRQ($r010) == FALSE){ $_SESSION['m3n3Rr0R']['r010'] = r010E; $_SESSION['ne']++; }
	$r001 = strtolower($r001); 
	$r003 = limpia($r003);
	$r005 = limpia($r005); 
	
	if($_SESSION['ne'] == 0){

		$c001 = "SELECT u5hUS8ir5 FROM u5u405 WHERE u5hUS8ir5 = '".$r001."' ";
		$s001 = $conexion->query($c001) or die ("Fallo al consultar correo: ".$c001);
		$dU = $s001->num_rows;
		
		if($dU == 0){
			$ex = false;
			$r002 = eCry2($r002);
			$r003 = eCry2($r003);
			$r004 = eCry2($r004);
			$r005 = eCry2($r005);
			$r006m = md5($r006);

			if($r010 == 1){ $imF = 'dist/img/avatar5.png'; }else { $imF = 'dist/img/avatar3.png'; }
			
			$p4r4 = '';
			$ax = 'insertar';
			$fg = ['xXUIDTPXx' => $tm];
			$Universo = ejecutaDB('Universo', $fg, $ax, $p4r4);
			unset($SQA);
			$FRGF = md5(rand(0,1000));
			$SQA = array(
				'u5hUS8ir5' => $r001,
				'usuarioN1' => $r002,
				'usuarioN2' => $r003,
				'usuarioA1' => $r004,
				'usuarioA2' => $r005,
				'u5hSX8ir5' => $r010,
				'u5hpW8ir5' => $r006m,
				'u5hHSH8ir5' => $FRGF,
				'u5hpV8ir5' => 0,
				'u5hpU8ir5' => 0,
				'u5hDpID8ir5' => 0,
				'u5hDpNm8ir5' => 0,
				'u5htK8ir5' => 0,
				'u5hOn8ir5' =>	1,
				'u5hOn44P8ir5' => 0,
				'u5hFt8ir5' => $imF,
				'config_navbar' => 'navbar-light navbar-warning',
				'config_accent' => 'accent-warning',
				'config_sidebar' => 'sidebar-dark-warning',
				'config_brand' => 'navbar-warning',
				'config_7im3Bl0' => 10,
				'config_DrKm0d' => 1,
				'config_m0dstr' => 1,
				'config_vista' => 2,
				'config_rDven' => 30,
				'u5h8ir5_iDi' => 'es_MX',
				'u5hpR0lr5' => 2,
				'u5hFR8ir5' => $tm,
				'Universo' => $Universo
			);
			$u = ejecutaDB('u5u405', $SQA, $ax, $p4r4);
			include('../front/idiomas/es_MX/i_8i74c0r4.php');
			$_SESSION['m3ns4J3'] = lbl_8i7_r001.$r001;
			$bi = bi74c0('regu5u', $_SESSION['m3ns4J3'], $u);
			
			$PA = [
				1,
				9,
				10,
				11,
				12,
				13,
				14,
				15,
				16,
				19,
				27,
				28,
				29,
				30,
				31,
				32,
				33,
				34,
				35,
				36,
				37,
				38,
				39,
				40,
				41,
				42,
				43,
				44,
				45,
				46,
				47,
				48,
				50,
				51,
				52,
				53,
				54,
				55,
				56,
				57,
				58,
				59,
				60,
				61,
				62,
				63,
				64,
				65,
				66,
				67,
				68,
				69,
				70,
				71,
				72
			];
			
			foreach ($PA as $key => $value) {
				$p4r4 = '';
				$ax = 'insertar';
				unset($fg);
				$fg = [
					'p3rXoNmRs' => $value,
					'p3rXou5Rs' => $u,
					'p3rXo3PRs' => 1,
					'p3rXoFPRs' => $tm
				];
				ejecutaDB('p3rXo70R64D0s', $fg, $ax, $p4r4);
				echo 'se agrego permiso: '.$value.' al usuario: '.$u.'<br>';
			}
			/// ---
				$accion = 'insertar';
				$p4r4m37r05 = '';
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'eMRZEm' => eCry2('Mi Empresa'),
					'eMiDuS3Em' => $u,
					'eMNICEm' => eCry2('Mi Empresa'),
					'eMCLLEm' => eCry2('Calle'),
					'eMNEEm' => eCry2('s/n'),
					'eMNIEm' => eCry2('s/n'),
					'eMCOLEm' => eCry2('Colonia'),
					'eMCPEm' => eCry2('56700'),
					'eMMUNEm' => 287,
					'eMEDOEm' => 9,
					'eMP4ISEm' => '52',
					'eMRFCEm' => 'XAXX010101000',
					'eMREPEm' => eCry2($r004.' '.$r002),
					'eMTELEm' => eCry2('5555555555'),
					'eMEMLEm' => eCry2('email@empresa.com'),
					'eMFSEm' => $tm,
					'eMACTEm' => 1,
					'Universo' => $Universo
				];	
			
				$eee = ejecutaDB('eMpR3sA5', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
			
			/// ---
				$accion = 'insertar'; 
				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'xN4m37l0' => eCry2('Mi Flota'),
					'x3MPID7l0' => $eee,
					'xu5uID7l0' => $u,
					'xFR7l0' => $tm,
					'x3D07l0' => 1,
					'Universo' => $Universo
				];		

			/// ---
				
				$ffflo0 = ejecutaDB('x7l07', $sQl_d474_4rr4y, $accion, $p4r4m37r05);
				unset($sQl_d474_4rr4y);
				$sQl_d474_4rr4y = [
					'r3F3mP00' => $eee,
					'r3FFloO00' => $ffflo0,
					'Universo' => $Universo
				];		
				$fff = ejecutaDB('r3l3mpfl00', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

			/// ---
			unset($yarra);
			$yarra = [
				'UEFUxTU' => $u,
				'UEFExTU' => $eee,
				'UEFFxTU' => $fff,
				'UEFVxTU' => 0,
				'UEFTxTU' => $tm,
			];
			$accion = 'insertar';
			ejecutaDB('r3l3UEF', $yarra, $accion, $p4r4m37r05);
				
			/// ---
				$accion = 'insertar';
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'd0C_xDd35' => 'Tarjeta de Circulación',
					'd0C_xDTMP' => 180,
					'd0C_xDOTR' => NULL,
					'd0C_xDico' => 'credit-card-front',
					'd0C_xDED0' => 1,
					'd0C_xDtv' => 1,
					'd0C_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'd0C_xDd35' => 'Póliza de Seguro',
					'd0C_xDTMP' => 365,
					'd0C_xDOTR' => NULL,
					'd0C_xDico' => 'file-contract',
					'd0C_xDED0' => 1,
					'd0C_xDtv' => 1,
					'd0C_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'd0C_xDd35' => 'Verificación',
					'd0C_xDTMP' => 180,
					'd0C_xDOTR' => NULL,
					'd0C_xDico' => 'leaf',
					'd0C_xDED0' => 1,
					'd0C_xDtv' => 1,
					'd0C_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					'd0C_xDd35' => 'Tenencia',
					'd0C_xDTMP' => 365,
					'd0C_xDOTR' => NULL,
					'd0C_xDico' => 'hand-holding-box',
					'd0C_xDED0' => 1,
					'd0C_xDtv' => 1,
					'd0C_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TD0cxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

			/// ---
				$accion = 'insertar';
				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					's3R_xDd35' => 'Alineación y balanceo',
					's3r_xDTMP' => 180,
					's3r_xDOTR' => 10000,
					's3R_xDico' => 'balance-scale',
					's3R_xDtv' => 1,
					's3R_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TS3rxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

				unset($sQl_d474_4rr4y); 
				$sQl_d474_4rr4y = [
					's3R_xDd35' => 'Afinación',
					's3r_xDTMP' => 180,
					's3r_xDOTR' => 10000,
					's3R_xDico' => 'filter',
					's3R_xDtv' => 1,
					's3R_xDini' => 1,
					'Universo' => $Universo
				];
				ejecutaDB('c4TS3rxxV', $sQl_d474_4rr4y, $accion, $p4r4m37r05);

			
			/// ---

		
			$r002 = dCry2($r002);
			$r004 = dCry2($r004);
			$subg3t = $r002.' '.$r004.' | Bienvenido! Verifica tu correo para terminar tu registro en Mieke.mx';
			$men = '<!DOCTYPE html>';
			$men .= '<html lang="es_MX" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">';
			$men .= '	<head>';
			$men .= '		<meta charset="utf-8"> <!-- utf-8 works for most cases -->';
			$men .= '		<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldnt be necessary -->';
			$men .= '		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->';
			$men .= '		<meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->';
			$men .= '		<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->';
			$men .= '		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">';
			$men .= '		<style>
        						html,
										body {
												margin: 0 auto !important;
												padding: 0 !important;
												height: 100% !important;
												width: 100% !important;
												background: #6c757d;
										}

										/* What it does: Stops email clients resizing small text. */
										* {
												-ms-text-size-adjust: 100%;
												-webkit-text-size-adjust: 100%;
										}

										/* What it does: Centers email on Android 4.4 */
										div[style*="margin: 16px 0"] {
												margin: 0 !important;
										}

										/* What it does: Stops Outlook from adding extra spacing to tables. */


										/* What it does: Fixes webkit padding issue. */
										table {
												border-spacing: 0 !important;
												border-collapse: collapse !important;
												table-layout: fixed !important;
												margin: 0 auto !important;
										}

										/* What it does: Uses a better rendering method when resizing images in IE. */
										img {
												-ms-interpolation-mode:bicubic;
										}

										/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
										a {
												text-decoration: none;
										}

										/* What it does: A work-around for email clients meddling in triggered links. */
										*[x-apple-data-detectors],  /* iOS */
										.unstyle-auto-detected-links *,
										.aBn {
												border-bottom: 0 !important;
												cursor: default !important;
												color: inherit !important;
												text-decoration: none !important;
												font-size: inherit !important;
												font-family: inherit !important;
												font-weight: inherit !important;
												line-height: inherit !important;
										}

										/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
										.a6S {
												display: none !important;
												opacity: 0.01 !important;
										}

										/* What it does: Prevents Gmail from changing the text color in conversation threads. */
										.im {
												color: inherit !important;
										}

										/* If the above doesnt work, add a .g-img class to any image in question. */
										img.g-img + div {
												display: none !important;
										}

										/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
										/* Create one of these media queries for each additional viewport size youd like to fix */

										/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
										@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
												u ~ div .email-container {
														min-width: 320px !important;
												}
										}
										/* iPhone 6, 6S, 7, 8, and X */
										@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
												u ~ div .email-container {
														min-width: 375px !important;
												}
										}
										/* iPhone 6+, 7+, and 8+ */
										@media only screen and (min-device-width: 414px) {
												u ~ div .email-container {
														min-width: 414px !important;
												}
										}

									</style>';
			$men .= '<style>
	    						.primary{
										background: #ffc107;
									}
									.bg_white{
										background: #ffffff;
									}
									.bg_light{
										background: #fafafa;
									}
									.bg_black{
										background: #000000;
									}
									.bg_dark{
										background: rgba(0,0,0,.8);
									}
									.email-section{
										padding:2.5em;
									}

									/*BUTTON*/
									.btn{
										padding: 10px 15px;
										display: inline-block;
									}
									.btn.btn-primary{
										border-radius: 5px;
										background: #ffc107;
										color: #ffffff;
									}
									.btn.btn-white{
										border-radius: 5px;
										background: #ffffff;
										color: #000000;
									}
									.btn.btn-white-outline{
										border-radius: 5px;
										background: transparent;
										border: 1px solid #fff;
										color: #fff;
									}
									.btn.btn-black-outline{
										border-radius: 0px;
										background: transparent;
										border: 2px solid #000;
										color: #000;
										font-weight: 700;
									}

									h1,h2,h3,h4,h5,h6{
										font-family: "Poppins";
										color: #FFF;
										margin-top: 0;
										font-weight: 400;
									}

									body{
										font-family: "Poppins";
										font-weight: 400;
										font-size: 15px;
										line-height: 1.8;
										color: rgba(0,0,0,.4);
									}

									a{
										color: #ffc107;
									}


									/*LOGO*/

									.logo h1{
										margin: 0;
									}
									.logo h1 a{
										color: #ffc107;
										font-size: 24px;
										font-weight: 700;
										font-family: "Poppins";
									}'; 
									$men .='

									/*HERO*/
									.hero{
										position: relative;
										z-index: 0;
									}

									.hero .text{
										color: #FFF;
									}
									.hero .text h2{
										color: #FFF;
										font-size: 30px;
										margin-bottom: 0;
										font-weight: 400;
										line-height: 1.4;
									}
									.hero .text h3{
										font-size: 16px;
										font-weight: 300;
									}
									.hero .text h2 span{
										font-weight: 600;
										color: #ffc107;
									}';
									$men .= '


									/*HEADING SECTION*/

									.heading-section h2{
										color: #FFF;
										font-size: 28px;
										margin-top: 0;
										line-height: 1.4;
										font-weight: 400;
									}
									.heading-section .subheading{
										margin-bottom: 20px !important;
										display: inline-block;
										font-size: 13px;
										text-transform: uppercase;
										letter-spacing: 2px;
										color: rgba(0,0,0,.4);
										position: relative;
									}'; 
									$men .= '	
									.heading-section .subheading::after{
										position: absolute;
										left: 0;
										right: 0;
										bottom: -10px;
										width: 100%;
										height: 2px;
										background: #ffc107;
										margin: 0 auto;
									}'; 
									$men .= '

									.heading-section-white{
										color: rgba(255,255,255,.8);
									}
									.heading-section-white h2{
										font-family: "Poppins";
										line-height: 1;
										padding-bottom: 0;
									}
									.heading-section-white h2{
										color: #ffffff;'; 
									$men .= '
									}
									.heading-section-white .subheading{
										margin-bottom: 0;
										display: inline-block;
										font-size: 13px;
										text-transform: uppercase;
										letter-spacing: 2px;
										color: rgba(255,255,255,.4);
									}'; 
									$men .= '
									ul.social{
										padding: 0;
									}
									ul.social li{
										display: inline-block;
										margin-right: 10px;
									}
									/*FOOTER*/
									.footer{
										border-top: 1px solid rgba(0,0,0,.05);
										color: rgba(0,0,0,.5);
									}'; 
									$men .= '
									.footer .heading{
										color: #000;
										font-size: 20px;
									}
									.footer ul{
										margin: 0;
										padding: 0;
									}
									.footer ul li{
										list-style: none;
										margin-bottom: 10px;
									}
									.footer ul li a{
										color: rgba(0,0,0,1);
									}
									@media screen and (max-width: 500px) {'; 
									$men .='}	</style>';
			$men .= '</head>';
			$men .= '<body width="100%" style="margin: 0; padding: 0 !important; background-color: #6c757d;">
									<div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; font-family: Poppins;">
										&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
									</div>
									<div style="max-width: 600px; margin: 0 auto;" class="email-container">
										<!-- BEGIN BODY -->
										<table role="presentation" cellspacing="0" cellpadding="0" width="100%" style="margin: auto;">
											<tr>
												<td valign="top" class="bg_black" style="padding: 1em 2.5em 0 2.5em;">
													<table role="presentation" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="logo" style="text-align: center;">
																<h1><a href="#">NoPixcua Mieke</a></h1>
															</td>
														</tr>
													</table>
												</td>
											</tr><!-- end tr -->
											<tr>
												<td valign="middle" class="hero bg_black" style="padding: 3em 0 2em 0;">
													<img src="https://mieke.mx/email.png" alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
												</td>
											</tr><!-- end tr -->
											<tr>
												<td valign="middle" class="hero bg_black" style="padding: 2em 0 4em 0;">
													<table>
														<tr>
															<td>
																<div class="text" style="padding: 0 2.5em; text-align: center;">
																	<h2>';
																	$men .= $r002.' '.$r004;
																	$men .= ', Por favor Verifica tu Correo Electrónico</h2>
																	<h3>Gracias por registarte con nosotros!.<br>
																		Tu cuenta se ha creado exitosamente, <br>
																		puedes iniciar sesión con las siguientes <br>
																		credenciales despues de activar tu cuenta.<br><br>
																		
																		===================================<br>
																		Usuario/Email: ';
																		$men .= $r001; 
				$men .= '										<br>
																		Contraseña: ';
																		$men .= $r006;
				$men .= '										<br>
																		===================================<br>
																		Para activar tu cuenta,<br>
																		da clic en el botón o copia y pega<br>
																		en la barra de tu navegador:<br>
																		https://mieke.mx/acceso?accion=x007&xcd='; $men .= $eCry($r001);	$men .= '&cft='; $men .= $FRGF; $men .= '<br></h3>
																	<p><a href="https://mieke.mx/acceso?accion=x007&xcd='; $men .= $eCry($r001);	$men .= '&cft='; $men .= $FRGF; $men .= '" class="btn btn-primary">Activar Mi Cuenta</a></p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr><!-- end tr -->
										<!-- 1 Column Text + Button : END -->
										</table>
										<table role="presentation" cellspacing="0" cellpadding="0"  width="100%" style="margin: auto;">
											<tr>
												<td valign="middle" class="bg_light footer email-section">
													<table>
														<tr>
															<td valign="top" width="33.333%" style="padding-top: 20px;">
																<table role="presentation" cellspacing="0" cellpadding="0"  width="100%">
																	<tr>
																		<td style="text-align: left; padding-right: 10px;">
																			<h3 class="heading">Acerca de</h3>
																			<p>NoPixcua Mieke es un Sitema de Administración de Flotillas</p>
																		</td>
																	</tr>
																</table>
															</td>
															<td valign="top" width="33.333%" style="padding-top: 20px;">
																<table role="presentation" cellspacing="0" cellpadding="0"  width="100%">
																	<tr>
																		<td style="text-align: left; padding-left: 5px; padding-right: 5px;">
																			<h3 class="heading">Contacto</h3>
																			<ul>
																				<li><span class="text">contacto@mieke.mx</span></li>
																				<li><span class="text">(55) 22-30-30-31</span></a></li>
																			</ul>
																		</td>
																	</tr>
																</table>
															</td>
															<td valign="top" width="33.333%" style="padding-top: 20px;">
																<table role="presentation" cellspacing="0" cellpadding="0"  width="100%">
																	<tr>
																		<td style="text-align: left; padding-left: 10px;">
																			<h3 class="heading">Enlaces</h3>
																			<ul>
																				<li><a href="https://mieke.mx">Inicio</a></li>
																				<li><a href="https://mieke.mx">Acerca de</a></li>
																				<li><a href="https://mieke.mx">Servicios</a></li>
																			</ul>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr><!-- end: tr -->
											<tr>
												<td class="bg_light" style="text-align: center;">
													<p>¿No quieres recibir correos electrónicos? <a href="#" style="color: rgba(0,0,0,.8);">Desuscribete Aqui</a></p>
												</td>
											</tr>
										</table>
									</div>
							</body>
						</html>';

			
													
			$headers = 'From: Equipo de NoPixcua Mieke <activacion@mieke.mx>' . "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			mail($r001, $subg3t, $men, $headers);

		}
		else{
			$ex = true;
		}
	}

	if($bi == true){
		$r3 = '../acceso?accion=entrar&m3ns4J3='.$eCry('Registro Exitoso, solo falta validar tu email, por favor revisa tu correo (si es necesario revisa en SPAM)');
	}
	else{
	$r3 = '../acceso?accion=r3g7r0';
		if($ex == true){ $r3 .= '&m3ns4J3='.$eCry('El usuario '.$r001.' '.' ya esta registrado!.');}
		if($r001 != ''){ $r3 .= '&r001='.$eCry($r001);}
		if($r002 != ''){ $r3 .= '&r002='.$eCry($r002);}
		if($r003 != ''){ $r3 .= '&r003='.$eCry($r003);}
		if($r004 != ''){ $r3 .= '&r004='.$eCry($r004);}
		if($r005 != ''){ $r3 .= '&r005='.$eCry($r005);}
		if($r008 != ''){ $r3 .= '&r008='.$eCry($r008);}
		if($r009 != ''){ $r3 .= '&r009='.$eCry($r009);}
		if($r010 != ''){ $r3 .= '&r010='.$eCry($r010);}
		if($m3ns4J3 != ''){ $r3 .= '&m3ns4J3='.$eCry($m3ns4J3);}
	}
	
	llevame($r3);
}

echo '<pre>'; print_r($fg); echo '</pre>';