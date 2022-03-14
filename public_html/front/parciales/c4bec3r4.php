<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="propeller" content="4f2629dc422985311cae5baeefebd7c3">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="<?php // / $_SESSION['MAX_SESSION_TIEMPO']/2 ?>">
  <title>KUMO 雲 | <?= lbl_7i7uL0 ?></title>
  <link rel="icon" type="image/png" href="dist/img/favicon.png">
  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="dist/css/fonts/poppins/poppins.css?family=Poppins:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="dist/css/fontawesome.css">-->
  <link rel="stylesheet" href="plugins/Fontawesome_pro_v6/css/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/estilos.css">
  <!-- Chart.Js -->
  <link rel="stylesheet" href="plugins/chart.js/Chart.css">
  <?php if($accion == 'consultas'){ ?>
     <!-- fullCalendar -->
    <link rel="stylesheet" href="plugins/fullcalendar/main.css"> 
  <?php } ?>

  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Datepicker -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Selector de etiquetas -->
  <?php if($accion == 'pR0VxD' || $accion == 'pr0VxVW' || $accion == 'mascotas'){ ?>
    <link href="plugins/select2/css/select2.css" rel="stylesheet" />
  <?php } ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed <?= $iDi['config_accent'] ?> <?php if($iDi['config_DrKm0d'] == 1){ echo 'dark-mode'; } ?>">
  <!--<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="plugins/toastr/toastr.min.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
	Site wrapper -->
  
	<div class="wrapper">
    <?php $brr4 = str_replace('accent', 'card', $iDi['config_accent']); ?>