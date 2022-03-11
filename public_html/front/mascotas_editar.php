<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_mascotas_editar.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>


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
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

        <div class="card-header">
          <h3 class="card-title"><?= datosMascota ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">
            <form method="POST" action="ApiPHP/mascotas_api?accion=procesaMascota" name="nuevaMascota">  
              
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
                    <input type="text" class="form-control" id="mascotaNombre" name="mascotaNombre" value="<?= $mascotaNombre = $mascota['mascota_nombre'] != '' ? $mascota['mascota_nombre']:$_SESSION['formMascota']['mascotaNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="mascotaEspecie"><?= especie ?>*</label>
                    <select class="form-control" id="mascotaEspecie" name="mascotaEspecie" required onchange="this.form.submit()">
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach (listaSelectEspecies() as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>" <?= $select = $mascota['mascota_especie'] == $especie['especieID'] ? 'selected':'' ?>><?= $especie['especieDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaRaza"><?= raza ?>*</label>
                    <select class="form-control" id="mascotaRaza" name="mascotaRaza" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($listaRazas as $key => $raza) { ?>
                        <option value="<?= $raza['razaID'] ?>" <?= $select = $mascota['mascota_raza'] == $raza['razaID'] ? 'selected':'' ?>><?= $raza['razaDescripcion'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="mascotaSexo" name="mascotaSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($sexo as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $mascota['mascota_sexo'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="mascotaEsteril"><?= esteril ?>*</label>
                    <select class="form-control" id="mascotaEsteril" name="mascotaEsteril" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($estadoSexual as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $mascota['mascota_esteril'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="mascotaColor"><?= color ?>*</label>
                    <select class="form-control" id="mascotaColor" name="mascotaColor" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($colores as $key => $valor) { ?>
                        <option value="<?= $key ?>" <?= $select = $mascota['mascota_color'] == $key ? 'selected':'' ?>><?= $valor ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label><?= nacimiento ?>*</label>
                    <div class="input-group date" id="mascotaNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#mascotaNacimiento" name="mascotaNacimiento" id="mascotaNacimiento" value="<?= $mascota['mascota_nacimiento'] ?>" />
                      <div class="input-group-append" data-target="#mascotaNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mascotaCliente"><?= cliente ?></label>
                    <select class="form-control" id="mascotaCliente" name="mascotaCliente" >
                      <option value="Ninguno"><?= selecciona ?></option>
                      <?php foreach ($listaClientes as $key => $cliente) { ?>
                        <option value="<?= $cliente['clienteID'] ?>" <?= $select = $mascota['mascota_dueno'] == $cliente['clienteID'] ? 'selected':'' ?>><?= $cliente['clienteNombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  
                  <input type="hidden" name="editar" id="editar" value="editar">
                  <input type="hidden" name="mascotaID" id="mascotaID" value="<?=$mascotaID ?>">
                  
                
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
            </form>

          </div>
        </div>
        <!--/.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
