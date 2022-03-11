<?php
include ('ApiPHP/conexion.php');
include ('ApiPHP/funciones.php');

?>

<!DOCTYPE html>
<html lang="es_MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>noPixcua Mieke | Registro</title>
 
  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="dist/css/fonts/poppins/poppins.css?family=Poppins:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page" style="min-height: 373.2px;background-color: #454d55; color:white;background-image: url('dist/img/fondo-vel.jpeg');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 10%;padding-bottom: 10%;">
<div class="register-box" style="background-color: #00000014;">
  <div class="card card-outline card-primary" style="background-color: #343a4000; color:white;box-shadow: 0px 0px 81px #007BFF;">
    <div class="card-header text-center">
      <a href="index.php" class="texto-neon-azul" style="color: white;"><b>noPixcua</b> Mieke</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Formulario de Registro</p>
      <?php if($_SESSION['m3n3Rr0R'] != '' ){ ?>
            <div class="col-12"> 
                <ul style="color: white;font-size: 15px;" >
                  <?php foreach ($_SESSION['m3n3Rr0R'] as $key => $value) { ?>
                    <li><?= $value ?></li>
                  <?php } ?>
                </ul>
            </div>
          <?php } ?>
      <form action="ApiPHP/r3gu_4pi.php?accion=r3gu" method="post" id="quickForm">

        <div class="form-group">
          <label for="r001" >Correo Eléctronico*</label>
          <input type="text" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r001" name="r001" value="<?= $dCry($r001) ?>">
        </div>

        <div class="form-group">
          <label for="r002">Primer Nombre*</label>
          <input type="text" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r002" name="r002" value="<?= $dCry($r002) ?>" >
        </div>

        <div class="form-group">
          <label for="r003">Segundo Nombre</label>
          <input type="text" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r003" name="r003" value="<?= $dCry($r003) ?>">
        </div>

        <div class="form-group">
          <label for="r004">Apellido Paterno*</label>
          <input type="text" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r004" name="r004" value="<?= $dCry($r004) ?>" > 
        </div>

        

        <div class="form-group">
          <label for="r005">Apellido Materno</label>
          <input type="text" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r005" name="r005" value="<?= $dCry($r005) ?>"> 
        </div>

        <div class="form-group"> 
          <label for="r010">Sexo*</label>
          <select class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r010" name="r010" >
            <option value="">Selecciona...</option>
            <option value="1" <?php if($dCry($r010) == 1){ echo 'selected'; } ?>>Masculino</option>
            <option value="2" <?php if($dCry($r010) == 2){ echo 'selected'; } ?>>Femenino</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="r006">Contraseña*</label>
          <input type="password" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r006" name="r006" value="<?= $dCry($r006) ?>" > 
        </div>

        <div class="form-group">
          <label for="r007">Repite Contraseña*</label>
          <input type="password" class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r007" name="r007" > 
        </div>
        
        <div class="form-group"> 
          <label for="r008">Tipo de Cuenta*</label>
          <select class="form-control texto-neon-azul" style="background-color: #ffffff30;color: white;" id="r008" name="r008" >
            <option value="">Selecciona...</option>
            <option value="1" <?php if($dCry($r008) == 1){ echo 'selected'; } ?> disabled>Particular</option>
            <option value="2" <?php if($dCry($r008) == 2){ echo 'selected'; } ?>>Flotillas</option>
          </select>
        </div>
        
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="r009" name="r009" value="agree" <?php if($dCry($r009) == 'agree'){ echo 'checked'; } ?> >
              <label for="r009">
               Acepto los <a href="#">Terminos y Condiciones</a>
              </label>
            </div>
          </div>
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-flat">Registrarme</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="index.php" class="text-center">Ya tengo una Cuenta!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<style>
    .texto-neon-azul{
      color: #FFFFFF;
      text-shadow: 0 0 8px #007bff, 0 0 2px #007bff, 0 0 10px #007bff, 0 0 6px #007bff, 0 0 20px #007bff, 0 0 20px #007bff, 0 0 1px #007bff, 0 0 12px #007bff;
    }
    .texto-neon-rojo{
      text-shadow: 0 0 8px #f00, 0 0 2px #f00, 0 0 10px #f00, 0 0 6px #f00, 0 0 20px #f00, 0 0 20px #f00, 0 0 1px #f00, 0 0 12px #f00;
    }
    .texto-neon-verde{
      color: #FFFFFF;
      text-shadow: 0 0 8px #12d71e, 0 0 2px #12d71e, 0 0 10px #12d71e, 0 0 6px #12d71e, 0 0 20px #12d71e, 0 0 20px #12d71e, 0 0 1px #12d71e, 0 0 12px #12d71e;
    }
  </style>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
