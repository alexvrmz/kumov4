<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_clientes_editar.php');
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
            <a href="app?accion=clientes" class="btn btn-app bg-success">
              <i class="fad fa-arrow-left"></i> <?= regresar ?>
            </a>   
  
          </div>

        </div>
      </div>
      <!-- acciones -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

        <div class="card-header">
          <h3 class="card-title"><?= datosCliente ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">
            <form method="POST" action="ApiPHP/clientes_api?accion=procesaCliente" name="nuevaCliente">  
              
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
                    <input type="text" class="form-control" id="clienteNombre1" name="clienteNombre1" value="<?= $clienteNombre1 = $cliente['cliente_nombre1'] != '' ? dCry2($cliente['cliente_nombre1']):$_SESSION['formCliente']['clienteNombre1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteNombre2"><?= nombre2 ?></label>
                    <input type="text" class="form-control" id="clienteNombre2" name="clienteNombre2" value="<?= $clienteNombre2 = $cliente['cliente_nombre2'] != '' ? dCry2($cliente['cliente_nombre2']):$_SESSION['formCliente']['clienteNombre2'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteApellido1"><?= apellido1 ?>*</label>
                    <input type="text" class="form-control" id="clienteApellido1" name="clienteApellido1" value="<?= $clienteApellido1 = $cliente['cliente_apellido1'] != '' ? dCry2($cliente['cliente_apellido1']):$_SESSION['formCliente']['cliente_apellido1'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteApellido2"><?= apellido2 ?></label>
                    <input type="text" class="form-control" id="clienteApellido2" name="clienteApellido2" value="<?= $clienteApellido2 = $cliente['cliente_apellido2'] != '' ? dCry2($cliente['cliente_apellido2']):$_SESSION['formCliente']['cliente_apellido2'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteSexo"><?= sexo ?>*</label>
                    <select class="form-control" id="clienteSexo" name="clienteSexo" required>
                      <option value="Ninguno"><?= selecciona ?></option>
                      <option value="1" <?= $select = $cliente['cliente_sexo'] == 1 ? 'selected':'' ?>><?= masculino ?></option>
                      <option value="2" <?= $select = $cliente['cliente_sexo'] == 2 ? 'selected':'' ?>><?= femenino ?></option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="clienteUsuario"><?= usuario ?></label>
                    <input type="text" class="form-control" id="clienteUsuario" name="clienteUsuario" value="<?= $clienteUsuario = $cliente['cliente_usuario'] != '' ? $cliente['cliente_usuario']:$_SESSION['formCliente']['cliente_usuario'] ?>">
                  </div>

                  
                  <div class="form-group">
                    <label><?= nacimiento ?>*</label>
                    <div class="input-group date" id="clienteNacimiento" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#clienteNacimiento" name="clienteNacimiento" id="clienteNacimiento" value="<?= $cliente['cliente_nacimiento'] ?>" />
                      <div class="input-group-append" data-target="#clienteNacimiento" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <h3 class="card-title"><?= direccionCliente ?></h3>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="clientePais"><?= pais ?></label>
                    <select class="form-control" id="clientePais" name="clientePais" onchange="this.form.submit()" >
                      <option value="nada" <?php if ($clientePais === 'nada'){ echo ' selected'; } ?>><?= selecciona ?></option>
                        <?php foreach ($paises as $key => $ps) {  ?>
                          <option value="<?= $key ?>"<?php if ($clientePais === $key){ echo ' selected'; } ?> ><?= $ps ?></option>    
                        <?php } ?>
                    </select>
                  </div>
                  <?= $clienteEstadoActual ?>

                  <div class="form-group">
                    <label for="clienteEstado"><?= estado ?></label>
                    <select class="form-control" id="clienteEstado" name="clienteEstado" onchange="this.form.submit()" >
                      <option value="nada" selected><?= selecciona ?></option>
                        <?php foreach (consulta_estados($clientePais) as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['estadoID'] ?>"<?php if ($clienteEstado == $tR4ns['estadoID']){ echo ' selected'; }  ?> ><?= $tR4ns['estadoNombre'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>
                  <?php if($clientePais == 'MX'){ ?>
                    <div class="form-group">
                      <label for="clienteMunicipio"><?= municipio ?></label>
                      <select class="form-control" id="clienteMunicipio" name="clienteMunicipio" >
                        <option value="nada" selected><?= selecciona ?></option>
                          <?php foreach (C0nMun($clienteEstado) as $key => $tR4ns) {  ?>
                            <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($cliente['cliente_municipio'] == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                          <?php } ?>
                      </select>
                    </div>
                  <?php } else { //$mun = $cliente['cliente_municipio'] == 'nada' ? '':$cliente['cliente_municipio'];
                    $mun = $cliente['cliente_municipio'] != '' ? $cliente['cliente_municipio']:$_SESSION['formCliente']['clienteMunicipioActual'];
                   ?>
                    <div class="form-group">
                      <label for="clienteMunicipio"><?= municipio ?></label>
                      <input type="text" class="form-control" id="clienteMunicipio" name="clienteMunicipio" value="<?= $mun ?>">
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="clienteCalle"><?= calle ?></label>
                    <input type="text" class="form-control" id="clienteCalle" name="clienteCalle" value="<?= $clienteCalle = $cliente['cliente_calle'] != '' ? dCry2($cliente['cliente_calle']):$_SESSION['formCliente']['cliente_calle'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteNE"><?= ne ?></label>
                    <input type="text" class="form-control" id="clienteNE" name="clienteNE" value="<?= $clienteNE = $cliente['cliente_ne'] != '' ? dCry2($cliente['cliente_ne']):$_SESSION['formCliente']['cliente_ne'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteNI"><?= ni ?></label>
                    <input type="text" class="form-control" id="clienteNI" name="clienteNI" value="<?= $clienteNI = $cliente['cliente_ni'] != '' ? dCry2($cliente['cliente_ni']):$_SESSION['formCliente']['cliente_ni'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteColonia"><?= colonia ?></label>
                    <input type="text" class="form-control" id="clienteColonia" name="clienteColonia" value="<?= $clienteColonia = $cliente['cliente_colonia'] != '' ? dCry2($cliente['cliente_colonia']):$_SESSION['formCliente']['cliente_colonia'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="clienteCP"><?= cp ?></label>
                    <input type="text" class="form-control" id="clienteCP" name="clienteCP" value="<?= $clienteCP = $cliente['cliente_cp'] != '' ? $cliente['cliente_cp']:$_SESSION['formCliente']['cliente_cp'] ?>">
                  </div>

                  <input type="hidden" name="editar" id="editar" value="editar">
                  <input type="hidden" name="clienteID" id="clienteID" value="<?=$clienteID ?>">
                  <input type="hidden" name="clientePaisActual" value="<?= $clientePais ?>">
                  <input type="hidden" name="clienteEstadoActual" value="<?= $clienteEstado ?>">

              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
include('parciales/3p1416e.php');
 ?>
