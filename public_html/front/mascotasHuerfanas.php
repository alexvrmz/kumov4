<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_mascotas.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
    <div class="card <?= $brr4 ?> card-outline col-md-12">
      <div class="card-header">
        <h3 class="card-title"><?= lbl_1er7i7u ?></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fad fa-minus"></i>
          </button>
        </div> 
      </div>
      <div class="card-body">
        <div class="card-body p-0">
          <div class="btn-group" role="group">
            <a href="app?accion=mascotas" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-dog-leashed"></i> <?= regresarMascotasRelacion ?></a>
          </div>
        </div>
      </div>
    </div>

      <div class="card <?= $brr4 ?> card-outline col-md-12">
        <div class="card-header">
          <h3 class="profile-username text-center"><?= listadoMascotasHuerfanas ?></h3>  
        </div>
        <div class="card-body">
          <?php if($numMascotas == 0){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h3><i class="icon fad fa-cat-space fa-2x"></i> Upsss!</h3>
              <h4>No encontre ninguna mascota por aquí, agrega <a data-toggle="modal" data-target="#modal-nuevo">una!!!</a></h4>
            </div>
          <?php }else { ?>
            <table class="table table-bordered table-hover table-responsive" id="example1" style="border: 0px;">
              <thead>
                <tr>
                  <th class="corta-texto"><?= acciones ?></th>
                  <th class="corta-texto"><?= id ?> <i class="fad fa-sort-alt"></i></th>
                  <th ><?= foto ?> </th>
                  <th  class="corta-texto"><?= nombre ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= especie ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= raza ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= esteril ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= sexo ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= color ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= edad ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= nacimiento ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= sistema ?> <i class="fad fa-sort-alt"></i></th>
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
                    <td><?= $estadoSexual[$mascota['mascotaEsteril']] ?></td>
                    <td><?= $sexo[$mascota['mascotaSexo']] ?></td>
                    <td class="corta-texto"><?= $colores[$mascota['mascotaColor']] ?></td>
                    <td class="corta-texto"><?= $mascota['mascotaEdad'] ?></td>
                    <td ><?= $mascota['mascotaNacimiento'] ?></td>
                    <td class="corta-texto"><?= $mascota['mascotaSistema'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          <?php } ?>
        </div>

        
        <!-- /.card-body -->
      </div>



      <div class="modal fade " id="modal-nuevo">
        <div class="modal-dialog ">
          <div class="modal-content <?= $brr4 ?> card-outline">
            <form method="POST" action="ApiPHP/mascotas_api?accion=procesaMascota" name="nuevaMascota" enctype="multipart/form-data">  
            
              <div class="modal-header">
                <h4 class="modal-title"><i class="fad fa-paw"></i> <?= nuevaMascota ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                  <?php if(!empty($_SESSION['mensajeForm'])){ ?>
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="fad fa-cat-space fa-2x" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black ; --fa-secondary-color: #0080ff91; --fa-flash-opacity: 0.67; --fa-flash-scale: 1.075;"></i> Por favor verifica <?= $_SESSION['formError'] ?> pendiete(s):</h5>
                      <ul>
                        <?php foreach ($_SESSION['mensajeForm'] as $key => $value) { ?>
                          <li><?= $value ?></li>
                        <?php } ?>
                      </ul> 
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="mascotaNombre"><?= nombre ?>*</label>
                    <input type="text" class="form-control" id="mascotaNombre" name="mascotaNombre" value="<?= $_SESSION['formMascota']['mascotaNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="mascotaEspecie"><?= especie ?>*</label>
                    <select class="form-control" id="mascotaEspecie" name="mascotaEspecie" required onchange="this.form.submit()">
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach (listaSelectEspecies() as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>" <?= $select = $_SESSION['formMascota']['mascotaEspecie'] == $especie['especieID'] ? 'selected':'' ?>><?= $especie['especieDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaRaza"><?= raza ?>*</label>
                    <select class="form-control" id="mascotaRaza" name="mascotaRaza" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($listaRazas as $key => $raza) { ?>
                        <option value="<?= $raza['razaID'] ?>" <?= $select = $_SESSION['formMascota']['mascotaRaza'] == $raza['razaID'] ? 'selected':'' ?>><?= $raza['razaDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="mascotaSexo" name="mascotaSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($sexo as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $_SESSION['formMascota']['mascotaSexo'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="mascotaEsteril"><?= esteril ?>*</label>
                    <select class="form-control" id="mascotaEsteril" name="mascotaEsteril" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($estadoSexual as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $_SESSION['formMascota']['mascotaEsteril'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaColor"><?= color ?>*</label>
                    <select class="form-control" id="mascotaColor" name="mascotaColor" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($colores as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $_SESSION['formMascota']['mascotaColor'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><?= nacimiento ?>*</label>
                    <div class="input-group date" id="mascotaNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#mascotaNacimiento" name="mascotaNacimiento" id="mascotaNacimiento" value="<?= $_SESSION['formMascota']['mascotaNacimiento'] ?>" />
                      <div class="input-group-append" data-target="#mascotaNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>


                  <div style="margin-bottom: 16px;">
                    <label for="mascotaCliente"><?= cliente ?></label><br>
                    <select class="js-example-basic-multiple1" name="mascotaCliente[]">
                      <option value="ninguno" <?php if(!empty($_SESSION['formMascota']['mascotaCliente']) && array_keys($_SESSION['formMascota']['mascotaCliente'], 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                        <?php foreach ($LdClientes as $key => $value) { /*$ca = array_rand($cls, 1);*/?>
                          <?php if(array_keys($_SESSION['formMascota']['mascotaCliente'], $value['clienteID'])) { $sLt = 'selected'; } ?>
                            <option value="<?= $value['clienteID'] ?>" <?= $sLt ?>><?= $value['clienteApellido1'] ?> <?= $value['clienteApellido2'] ?> <?= $value['clienteNombre1'] ?> <?= $value['clienteNombre2'] ?> | <?= $value['clienteUsuario'] ?> | <?= $value['clienteTel1'] ?></option>
                          <?php unset($sLt); }  ?> 
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="mascotaFoto"><?= foto ?></label>
                    <input type="file" class="form-control" id="mascotaFoto" name="mascotaFoto">
                  </div>
                  
                  
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= cerrar ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
              
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->



      </div>

      
  </section>
</div>
<?php include('parciales/3p1416e.php'); 
unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["copy", "csv", "excel", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
 <script>
    $(function () {
      $('#mascotaNacimiento').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fad fa-clock-o',
          date: 'fad fa-calendar',
          up: 'fad fa-arrow-up',
          down: 'fad fa-arrow-down',
          previous: 'fad fa-chevron-left',
          next: 'fad fa-chevron-right',
          today: 'fad fa-calendar-day',
          clear: 'fad fa-trash',
          close: 'fad fa-times'
        },
        //calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
    });
  </script>
<?php if(isset($_SESSION['formMascota']) == true){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-nuevo').modal('show');
    });
  </script>
<?php } ?>
<script src="plugins/select2/js/select2.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple1').select2();
    });
  </script>