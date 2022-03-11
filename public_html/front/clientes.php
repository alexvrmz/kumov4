<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_clientes.php');
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
            <?php if(isset($_SESSION['formCliente']) == true){ ?>
              <a data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-user"></i> <?= continuarFormulario ?></a>
              <a href="ApiPHP/clientes_api?accion=borrarFormulario" class="btn bg-gradient-danger btn-app" style="padding-top: 6px;" ><i class="fad fa-trash"></i> <?= eliminarFormulario ?></a>
            <?php }elseif(isset($_SESSION['formCliente']) == false){ ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-user"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

      <div class="card <?= $brr4 ?> card-outline col-md-12">
        <div class="card-header">
          <h3 class="profile-username text-center"><?= listadoClientes ?></h3>  
        </div>
        <div class="card-body">
          <?php if($numClientes == 0){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h3><i class="icon fad fa-cat-space fa-2x"></i> Upsss!</h3>
              <h4>No encontre ningun cliente por aquí, agrega <a data-toggle="modal" data-target="#modal-nuevo">uno!!!</a></h4>
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
                <?php foreach ($LdClientes as $key => $cliente) { ?>
                  <tr>
                    <td style="text-align: center;">
                      <div class="btn-group" role="group">
                        <?php if(v4lID44x50("200-004", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                          <a href="app?accion=fichaCliente&clienteID=<?= $eCry($cliente['clienteID']) ?>" class="btn bg-gradient-info btn-sm"><i class="fad fa-eye"></i></a>
                        <?php } ?>
                        <?php if(v4lID44x50("200-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                          <a href="app?accion=editarCliente&clienteID=<?= $eCry($cliente['clienteID']) ?>" class="btn bg-gradient-warning btn-sm"><i class="fad fa-edit"></i></a>
                        <?php } ?>
                      </div>
                    </td>
                    <td class="corta-texto"><?= $cliente['clienteID'] ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteNombre1']) ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteNombre2']) ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteApellido1']) ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteApellido2']) ?></td>
                    <td class="corta-texto"><?= $cliente['clienteUsuario'] ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteTel1']) ?></td>
                    <td class="corta-texto"><?= dCry2($cliente['clienteTel2']) ?></td>
                    <td class="corta-texto"><?= $sexo[$cliente['clienteSexo']] ?></td>
                    <td ><?= $cliente['clienteNacimiento'] ?></td>
                    <td class="corta-texto"><?= $cliente['clienteSistema'] ?></td>
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
            <form method="POST" action="ApiPHP/clientes_api?accion=procesaCliente" name="nuevoCliente" enctype="multipart/form-data">  
            
              <div class="modal-header">
                <h4 class="modal-title"><i class="fad fa-user"></i> <?= nuevoCliente ?></h4>
                
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
                    <label for="clienteNombre1"><?= nombre1 ?>*</label>
                    <input type="text" class="form-control" id="clienteNombre1" name="clienteNombre1" value="<?= $_SESSION['formCliente']['clienteNombre1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteNombre2"><?= nombre2 ?></label>
                    <input type="text" class="form-control" id="clienteNombre2" name="clienteNombre2" value="<?= $_SESSION['formCliente']['clienteNombre2'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteApellido1"><?= apellido1 ?>*</label>
                    <input type="text" class="form-control" id="clienteApellido1" name="clienteApellido1" value="<?= $_SESSION['formCliente']['clienteApellido1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteApellido2"><?= apellido2 ?></label>
                    <input type="text" class="form-control" id="clienteApellido2" name="clienteApellido2" value="<?= $_SESSION['formCliente']['clienteApellido2'] ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="clienteUsuario"><?= correo ?></label>
                    <input type="email" class="form-control" id="clienteUsuario" name="clienteUsuario" value="<?= $_SESSION['formCliente']['clienteUsuario'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="clienteSexo" name="clienteSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($sexo as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $_SESSION['formCliente']['clienteSexo'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="clienteNI"><?= ni ?></label>
                    <input type="text" class="form-control" id="clienteNI" name="clienteNI" value="<?= $_SESSION['formCliente']['clienteNI'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteNE"><?= ne ?></label>
                    <input type="text" class="form-control" id="clienteNE" name="clienteNE" value="<?= $_SESSION['formCliente']['clienteNE'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteCalle"><?= calle ?></label>
                    <input type="text" class="form-control" id="clienteCalle" name="clienteCalle" value="<?= $_SESSION['formCliente']['clienteCalle'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteColonia"><?= colonia ?></label>
                    <input type="text" class="form-control" id="clienteColonia" name="clienteColonia" value="<?= $_SESSION['formCliente']['clienteColonia'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clientePais"><?= pais ?></label>
                    <select class="form-control" id="clientePais" name="clientePais" onchange="this.form.submit()" >
                      <option value="nada" <?php if ($_SESSION['formCliente']['clientePais'] === 'nada'){ echo ' selected'; } ?>><?= selecciona ?></option>
                        <?php foreach ($paises as $key => $ps) {  ?>
                          <option value="<?= $key ?>"<?php if ($_SESSION['formCliente']['clientePais'] === $key){ echo ' selected'; } ?> ><?= $ps ?></option>    
                        <?php } ?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="clienteEstado"><?= estado ?></label>
                    <select class="form-control" id="clienteEstado" name="clienteEstado" onchange="this.form.submit()" >
                      <option value="nada" selected><?= selecciona ?></option>
                        <?php foreach (consulta_estados($_SESSION['formCliente']['clientePais']) as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['estadoID'] ?>"<?php if ($_SESSION['formCliente']['clienteEstado'] == $tR4ns['estadoID']){ echo ' selected'; } ?> ><?= $tR4ns['estadoNombre'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>

                  <?php if($_SESSION['formCliente']['clientePais'] == 'MX'){ ?>
                    <div class="form-group">
                      <label for="clienteMunicipio"><?= municipio ?></label>
                      <select class="form-control" id="clienteMunicipio" name="clienteMunicipio" >
                        <option value="nada" selected><?= selecciona ?></option>
                          <?php foreach (C0nMun($_SESSION['formCliente']['clienteEstado']) as $key => $tR4ns) {  ?>
                            <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($_SESSION['formCliente']['clienteMunicipio'] == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                          <?php } ?>
                      </select>
                    </div>
                  <?php } else { $mun = $_SESSION['formCliente']['clienteMunicipio'] == 'nada' ? '':$_SESSION['formCliente']['clienteMunicipio']; ?>
                    <div class="form-group">
                      <label for="clienteMunicipio"><?= municipio ?></label>
                      <input type="text" class="form-control" id="clienteMunicipio" name="clienteMunicipio" value="<?= $mun ?>">
                    </div>
                  <?php } ?>


                  <div class="form-group">
                    <label for="clienteCP"><?= cp ?></label>
                    <input type="text" class="form-control" id="clienteCP" name="clienteCP" value="<?= $_SESSION['formCliente']['clienteCP'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteTelefono1"><?= telefono1 ?></label>
                    <input type="text" class="form-control" id="clienteTelefono1" name="clienteTelefono1" value="<?= $_SESSION['formCliente']['clienteTelefono1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteTelefono2"><?= telefono2 ?></label>
                    <input type="text" class="form-control" id="clienteTelefono2" name="clienteTelefono2" value="<?= $_SESSION['formCliente']['clienteTelefono2'] ?>">
                  </div>

                  <div class="form-group">
                    <label><?= nacimiento ?></label>
                    <div class="input-group date" id="clienteNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#clienteNacimiento" name="clienteNacimiento" id="clienteNacimiento" value="<?= $_SESSION['formCliente']['clienteNacimiento'] ?>" />
                      <div class="input-group-append" data-target="#clienteNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
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
      $('#clienteNacimiento').datetimepicker({
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
<?php if(isset($_SESSION['formCliente']) == true){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-nuevo').modal('show');
    });
  </script>
<?php } ?>