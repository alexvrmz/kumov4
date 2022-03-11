<?php
$_SESSION['session_look'] = true;

?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kumo 雲 | Pantalla Bloqueada</title>
 
  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/fontawesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen" style="min-height: 373.2px;background-color: #454d55; color:white;background-image: url('<?= $carpetaFondos ?><?= fondoRandom() ?>'); height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 10%;padding-bottom: 10%;">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper" style="background-color: #00000014;margin-top: 10%;" >
  <div class="lockscreen-logo" >
    <a href="index.php" class="texto-neon-azul" style="color: white;"><b>KUMO</b> 雲</a>
  </div>
  <?php if($_SESSION['m3ns4J3'] != ''){ ?>
    <p class="text-danger" style="text-align: center;"><?= $_SESSION['m3ns4J3'] ?></p>
  <?php } ?>
  <!-- User name -->
  <div class="lockscreen-name texto-neon-azul" style="color: white;"><?= $_SESSION['nombre_corto'] ?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item" style="background-color: #343a4000; color:white;box-shadow: 0px 0px 81px #007BFF;">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?= $_SESSION['u5hFt8ir5'] ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form method="post" action="acceso.php?accion=x006">
      <div class="input-group lockscreen-credentials " >
        <input type="password" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" placeholder="Contraseña" name="cdDn45_xS" required>
          <button type="submit" class="btn texto-neon-azul" style="background-color: #0000;box-shadow: 0px 0px 20px #007BFF;" >
            <i class="fad fa-arrow-right text-muted"></i>
          </button>
     
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Escribe tu contraseña para continuar tu sesión.
  </div>
  <div class="text-center" style="text-align: center;">
 
      <a href="acceso.php?accion=salir">O Salir para ingresar con otro usuario.</a>
  
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2021 <b><a href="https://kumo.click" class="text-black">kumo.click</a></b><br>
    Todos los Derechos Reservados.
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<!--<script src="plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap 4 -->
<!--<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<style>
    .texto-neon-azul{
      color: #FFFFFF;
      text-shadow: 0 0 8px #007bff, 0 0 2px #007bff, 0 0 10px #007bff, 0 0 6px #007bff, 0 0 20px #007bff, 0 0 20px #007bff, 0 0 1px #007bff, 0 0 12px #007bff;
    }
    .texto-neon-rojo{
      text-shadow: 0 0 8px #f00, 0 0 2px #f00, 0 0 10px #f00, 0 0 6px #f00, 0 0 20px #f00, 0 0 20px #f00, 0 0 1px #f00, 0 0 12px #f00;
    }
  </style>
</body>
</html>
<?php
unset($_SESSION['m3ns4J3']); ?>