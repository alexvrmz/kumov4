<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_clientes_ficha.php');
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
            <a href="app?accion=clientes" class="btn btn-app bg-success">
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
                <h3 class="widget-user-username text-left" style="background-color: #8a8a8a80;padding-top: 10px;padding-bottom: 10px;width: max-content;padding-left: 10px;padding-right: 10px;"><?= $nombreCompleto ?></h3>
                <h5 class="widget-user-desc text-left" style="background-color: #8a8a8a80;padding-top: 10px;padding-bottom: 10px;width: max-content;padding-left: 10px;padding-right: 10px;"><?= $sexo[$cliente['cliente_sexo']] ?></h5>
              </div>
              <div class="widget-user-image" id="pop">
                <img class="img-circle" id="imageresource" src="<?= $flis ?>" alt="Foto Cliente" style="width: 250px;height: 250px;border-radius: 160px;border: 10px solid #666;margin-left: -85px;margin-top: 26px;object-fit: cover;">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?= ntel ?></h5>
                      <span class="description-text"><?= $clienteTelefono ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?= correo ?></h5>
                      <span class="description-text"><?= $clienteCorreo ?></span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?= registro ?></h5>
                      <span class="description-text"><?= $clienteRegistro ?></span>
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
              <h5><?= datosCliente ?></h5>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b><?= calle ?></b> <a class="float-right"><?= $clienteCalle ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= ne ?></b> <a class="float-right"><?= $clienteNE ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= ni ?></b> <a class="float-right"><?= $clienteNI ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= colonia ?></b> <a class="float-right"><?= $clienteColonia ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= municipio ?></b> <a class="float-right"><?= $clienteMunicipio ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= estado ?></b> <a class="float-right"><?= $clienteEstado ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= pais ?></b> <a class="float-right"><?= $clientePais ?></a>
                  </li>
                  <li class="list-group-item">
                    <b><?= cp ?></b> <a class="float-right"><?= $clienteCP ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Fecha Nacimiento</b> <a class="float-right"><?= $cliente['cliente_nacimiento'] ?></a>
                  </li>
                </ul>
                

                <?php if(v4lID44x50("200-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                  <a href="app?accion=editarCliente&clienteID=<?= $eCry($cliente['cliente_id']) ?>" class="btn btn-warning btn-block"><i class="fad fa-edit"></i> <?= editar ?></a>
                <?php } ?>

                
              </div>
       
            </div>
        </div>

        <div class="col-lg-9">
          <div class="card <?= $brr4 ?> card-outline">
          

            <div class="card-header">
              <h3 class="card-title"><?= mascotas_cliente.$nombre1 ?></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fad fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="card-body p-0">
                <table class="table table-bordered table-hover table-responsive" id="example1" style="border: 0px;">
                  <thead>
                    <tr>
                      <th class="corta-texto"><?= acciones ?></th>
                      <th class="corta-texto"><?= id ?> <i class="fad fa-sort-alt"></i></th>
                      <th ><?= foto ?> </th>
                      <th class="corta-texto"><?= nombre ?> <i class="fad fa-sort-alt"></i></th>
                      <th class="corta-texto"><?= especie ?> <i class="fad fa-sort-alt"></i></th>
                      <th class="corta-texto"><?= raza ?> <i class="fad fa-sort-alt"></i></th>
                      <th class="corta-texto"><?= sexoMascota ?> <i class="fad fa-sort-alt"></i></th>
                      <th class="corta-texto"><?= color ?> <i class="fad fa-sort-alt"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($LdMascotas as $key => $mascota) { ?>
                      <tr>
                        <td style="text-align: center;">
                          <div class="btn-group" role="group">
                            <?php if(v4lID44x50("200-004", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                              <a href="app?accion=fichaMascota&mascotaID=<?= $eCry($mascota['mascotaID']) ?>" class="btn bg-gradient-info btn-sm"><i class="fad fa-eye"></i></a>
                            <?php } ?>
                            <?php if(v4lID44x50("200-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                              <a href="app?accion=editarMascota&mascotaID=<?= $eCry($mascota['mascotaID']) ?>" class="btn bg-gradient-warning btn-sm"><i class="fad fa-edit"></i></a>
                            <?php } ?>
                          </div>
                        </td>
                        <td><?= $mascota['mascotaID'] ?></td>
                        <td style="text-align: center;">
                          <a href="app?accion=fichaMascota&mascotaID=<?= $eCry($mascota['mascotaID']) ?>">
                            <img class="direct-chat-img" style="margin-top: -9px;padding-left: 0px;margin-left: 16px;" src="<?= $mascota['mascotaFoto'] ?>" alt="<?= $mascota['mascotaNombre'] ?>">
                          </a>
                        </td>
                        <td><?= $mascota['mascotaNombre'] ?></td>
                        <td class="corta-texto"><?= $mascota['mascotaEspecie'] ?></td>
                        <td class="corta-texto"><?= $mascota['mascotaRaza'] ?></td>
                        <td><?= $sexoMascota[$mascota['mascotaSexo']] ?></td>
                        <td><?= $colores[$mascota['mascotaColor']] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>


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