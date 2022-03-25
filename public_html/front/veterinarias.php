<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_veterinarias.php');
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
            <?php if(isset($_SESSION['formVeterinaria']) == true){ ?>
              <a data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-hospital"></i> <?= continuarFormulario ?></a>
              <a href="ApiPHP/veterinarias_api?accion=borrarFormulario" class="btn bg-gradient-danger btn-app" style="padding-top: 6px;" ><i class="fad fa-trash"></i> <?= eliminarFormulario ?></a>
            <?php }elseif(isset($_SESSION['formVeterinaria']) == false){ ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-hospital"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

      <div class="card <?= $brr4 ?> card-outline col-md-12">
        <div class="card-header">
          <h3 class="profile-username text-center"><?= listadoVeterinarias ?></h3>  
        </div>
        <div class="card-body">
          <?php if($numVeterinarias == 0){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h3><i class="icon fad fa-cat-space fa-2x"></i> Upsss!</h3>
              <h4>No encontre ninguna veterinaria por aquí, agrega <a data-toggle="modal" data-target="#modal-nuevo">una!!!</a></h4>
            </div>
          <?php }else { ?>
            <table class="table table-bordered table-hover table-responsive" id="example1" style="border: 0px;">
              <thead>
                <tr>
                  <th class="corta-texto"><?= acciones ?></th>
                  <th class="corta-texto"><?= id ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= nombre1 ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= nombre2 ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= apellido1 ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= apellido2 ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= correo ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= telefono1 ?> </th>
                  <th class="corta-texto"><?= telefono2 ?> </th>
                  <th class="corta-texto"><?= sexo ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= nacimiento ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= sistema ?> <i class="fad fa-sort-alt"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($LdVeterinarias as $key => $veterinaria) { ?>
                  <tr>
                    <td style="text-align: center;">
                      <div class="btn-group" role="group">
                        <?php if(v4lID44x50("200-004", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                          <a href="app?accion=fichaVeterinaria&veterinariaID=<?= $eCry($veterinaria['veterinariaID']) ?>" class="btn bg-gradient-info btn-sm"><i class="fad fa-eye"></i></a>
                        <?php } ?>
                        <?php if(v4lID44x50("200-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                          <a href="app?accion=editarVeterinaria&veterinariaID=<?= $eCry($veterinaria['veterinariaID']) ?>" class="btn bg-gradient-warning btn-sm"><i class="fad fa-edit"></i></a>
                        <?php } ?>
                      </div>
                    </td>
                    <td class="corta-texto"><?= $veterinaria['veterinariaID'] ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaNombre1']) ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaNombre2']) ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaRFC']) ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaApellido2']) ?></td>
                    <td class="corta-texto"><?= $veterinaria['veterinariaUsuario'] ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaTel1']) ?></td>
                    <td class="corta-texto"><?= dCry2($veterinaria['veterinariaTel2']) ?></td>
                    <td class="corta-texto"><?= $sexo[$veterinaria['veterinariaSexo']] ?></td>
                    <td ><?= $veterinaria['veterinariaNacimiento'] ?></td>
                    <td class="corta-texto"><?= $veterinaria['veterinariaSistema'] ?></td>
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
            <form method="POST" action="ApiPHP/veterinarias_api?accion=procesaVeterinaria" name="nuevoVeterinaria" enctype="multipart/form-data">  
            
              <div class="modal-header">
                <h4 class="modal-title"><i class="fad fa-hospital"></i> <?= nuevoVeterinaria ?></h4>
                
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
                    <label for="veterinariaNombre1"><?= nombre1 ?>*</label>
                    <input type="text" class="form-control" id="veterinariaNombre1" name="veterinariaNombre1" value="<?= $_SESSION['formVeterinaria']['veterinariaNombre1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaNombre2"><?= nombre2 ?></label>
                    <input type="text" class="form-control" id="veterinariaNombre2" name="veterinariaNombre2" value="<?= $_SESSION['formVeterinaria']['veterinariaNombre2'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaRFC"><?= apellido1 ?>*</label>
                    <input type="text" class="form-control" id="veterinariaRFC" name="veterinariaRFC" value="<?= $_SESSION['formVeterinaria']['veterinariaRFC'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaApellido2"><?= apellido2 ?></label>
                    <input type="text" class="form-control" id="veterinariaApellido2" name="veterinariaApellido2" value="<?= $_SESSION['formVeterinaria']['veterinariaApellido2'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="veterinariaUsuario"><?= correo ?></label>
                    <input type="email" class="form-control" id="veterinariaUsuario" name="veterinariaUsuario" value="<?= $_SESSION['formVeterinaria']['veterinariaUsuario'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="veterinariaSexo" name="veterinariaSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($sexo as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $_SESSION['formVeterinaria']['veterinariaSexo'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="veterinariaNI"><?= ni ?></label>
                    <input type="text" class="form-control" id="veterinariaNI" name="veterinariaNI" value="<?= $_SESSION['formVeterinaria']['veterinariaNI'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaNE"><?= ne ?></label>
                    <input type="text" class="form-control" id="veterinariaNE" name="veterinariaNE" value="<?= $_SESSION['formVeterinaria']['veterinariaNE'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaCalle"><?= calle ?></label>
                    <input type="text" class="form-control" id="veterinariaCalle" name="veterinariaCalle" value="<?= $_SESSION['formVeterinaria']['veterinariaCalle'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaColonia"><?= colonia ?></label>
                    <input type="text" class="form-control" id="veterinariaColonia" name="veterinariaColonia" value="<?= $_SESSION['formVeterinaria']['veterinariaColonia'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaPais"><?= pais ?></label>
                    <select class="form-control" id="veterinariaPais" name="veterinariaPais" onchange="this.form.submit()" >
                      <option value="nada" <?php if ($_SESSION['formVeterinaria']['veterinariaPais'] === 'nada'){ echo ' selected'; } ?>><?= selecciona ?></option>
                        <?php foreach ($paises as $key => $ps) {  ?>
                          <option value="<?= $key ?>"<?php if ($_SESSION['formVeterinaria']['veterinariaPais'] === $key){ echo ' selected'; } ?> ><?= $ps ?></option>    
                        <?php } ?>
                    </select>
                  </div>

                  <!--<pre>
                    <?= print_r(C0nMun($_SESSION['formVeterinaria']['veterinariaEstado'])) ?>
                  </pre>-->

                  <div class="form-group">
                    <label for="veterinariaEstado"><?= estado ?></label>
                    <select class="form-control" id="veterinariaEstado" name="veterinariaEstado" onchange="this.form.submit()" >
                      <option value="nada" ><?= selecciona ?></option>
                        <?php foreach (consulta_estados($_SESSION['formVeterinaria']['veterinariaPais']) as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['estadoID'] ?>"<?php if ($_SESSION['formVeterinaria']['veterinariaEstado'] == $tR4ns['estadoID']){ echo ' selected'; } ?> ><?= $tR4ns['estadoNombre'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>

                  <?php if($_SESSION['formVeterinaria']['veterinariaPais'] == 'MX'){ ?>
                    <div class="form-group">
                      <label for="veterinariaMunicipio"><?= municipio ?></label>
                      <select class="form-control" id="veterinariaMunicipio" name="veterinariaMunicipio" >
                        <option value="nada" selected><?= selecciona ?></option>
                          <?php foreach (C0nMun($_SESSION['formVeterinaria']['veterinariaEstado']) as $key => $tR4ns) {  ?>
                            <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($_SESSION['formVeterinaria']['veterinariaMunicipio'] == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                          <?php } ?>
                      </select>
                    </div>
                  <?php } else { $mun = $_SESSION['formVeterinaria']['veterinariaMunicipio'] == 'nada' ? '':$_SESSION['formVeterinaria']['veterinariaMunicipio']; ?>
                    <div class="form-group">
                      <label for="veterinariaMunicipio"><?= municipio ?></label>
                      <input type="text" class="form-control" id="veterinariaMunicipio" name="veterinariaMunicipio" value="<?= $mun ?>">
                    </div>
                  <?php } ?>


                  <div class="form-group">
                    <label for="veterinariaCP"><?= cp ?></label>
                    <input type="text" class="form-control" id="veterinariaCP" name="veterinariaCP" value="<?= $_SESSION['formVeterinaria']['veterinariaCP'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaTelefono1"><?= telefono1 ?></label>
                    <input type="text" class="form-control" id="veterinariaTelefono1" name="veterinariaTelefono1" value="<?= $_SESSION['formVeterinaria']['veterinariaTelefono1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaTelefono2"><?= telefono2 ?></label>
                    <input type="text" class="form-control" id="veterinariaTelefono2" name="veterinariaTelefono2" value="<?= $_SESSION['formVeterinaria']['veterinariaTelefono2'] ?>">
                  </div>

                  <div class="form-group">
                    <label><?= nacimiento ?></label>
                    <div class="input-group date" id="veterinariaNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#veterinariaNacimiento" name="veterinariaNacimiento" id="veterinariaNacimiento" value="<?= $_SESSION['formVeterinaria']['veterinariaNacimiento'] ?>" />
                      <div class="input-group-append" data-target="#veterinariaNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer justify-content-between">
                <input type="hidden" name="veterinariaPaisActual" value="<?= $_SESSION['formVeterinaria']['veterinariaPais'] ?>">
                <input type="hidden" name="veterinariaEstadoActual" value="<?= $_SESSION['formVeterinaria']['veterinariaEstado'] ?>">
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
      $('#veterinariaNacimiento').datetimepicker({
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
<?php if(isset($_SESSION['formVeterinaria']) == true){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-nuevo').modal('show');
    });
  </script>
<?php } ?>