<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_mascotas_ficha.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

  <section class="content"> 
      

    <div class="container-fluid">
    <!-- Main content -->
      <!-- acciones -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= acciones ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
            <!-- 
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fad fa-times"></i>
            </button>-->
          </div>
        </div>
        <div class="card-body">
          
          <div class="card-body p-0">     
            <a href="app?accion=mascotas" class="btn btn-app bg-success">
              <i class="fad fa-arrow-left"></i> <?= regresar ?>
            </a>   
  
          </div>

        </div>
      </div>
      <!-- acciones -->
      <div class="row">

          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow-lg">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" style="background: url('<?= $carpetaFondos ?><?= fondoRandom() ?>') center center; height: 300px; background-size: cover;">
                <h3 class="widget-user-username text-left" style="background-color: #8a8a8a80;padding-top: 10px;padding-bottom: 10px;width: max-content;padding-left: 10px;padding-right: 10px;"><?= $mascota['mascota_nombre'] ?></h3>
                <h5 class="widget-user-desc text-left" style="background-color: #8a8a8a80;padding-top: 10px;padding-bottom: 10px;width: max-content;padding-left: 10px;padding-right: 10px;"><?= $mascotaEspecie ?> / <?= $sexo[$mascota['mascota_sexo']] ?></h5>
              </div>
              <div class="widget-user-image" id="pop">
                <img class="img-circle" id="imageresource" src="<?=$flis ?>" alt="Foto Mascota" style="width: 250px;height: 250px;border-radius: 160px;border: 10px solid #666;margin-left: -85px;margin-top: 26px;object-fit: cover;">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?= raza ?></h5>
                      <span class="description-text"><?= $mascotaRaza ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?= pelaje ?></h5>
                      <span class="description-text"><?= $colores[$mascota['mascota_color']] ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?= edad ?></h5>
                      <span class="description-text"><?= $edad ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

        <div class="col-lg-3">
        <div class="card <?= $brr4 ?> card-outline">
              <div class="card-body box-profile">
              <h5><?= datosMascota ?></h5>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b><?= estadoReproductivo ?></b> <a class="float-right"><?= $estadoSexual[$mascota['mascota_esteril']] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= propietario ?></b> <a class="float-right"><?= $mascota['mascota_dueno'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= fechaNacimiento ?></b> <a class="float-right"><?= $mascota['mascota_nacimiento'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= fechaRegistro ?></b> <a class="float-right"><?= $mascota['mascota_sistema'] ?></a>
                  </li>
                </ul>

                <?php if(v4lID44x50("200-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                  <a href="app?accion=editarMascota&mascotaID=<?= $eCry($mascota['mascota_id']) ?>" class="btn btn-warning btn-block"><i class="fad fa-edit"></i> <?= editar ?></a>
                <?php } ?>
              </div>
            </div>
        </div>

        <div class="col-lg-9">
          <div class="card <?= $brr4 ?> card-outline">
            <div class="card-header">
              <h3 class="card-title"><?= expedienteTitulo.$mascota['mascota_nombre'] ?></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fad fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="card-body p-0">
              </div>
            </div>
            <!--/.card-body -->
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </section>
    <!-- /.content -->


    

<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <img src="" id="imagepreview" style="width: 100%; height: 100%;" >
  </div>
</div>



  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
<script>
  $("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});
</script>