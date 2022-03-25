<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_veterinarias_editar.php');
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
            <a href="app?accion=veterinarias" class="btn btn-app bg-success">
              <i class="fad fa-arrow-left"></i> <?= regresar ?>
            </a>   
  
          </div>

        </div>
      </div>
      <!-- acciones -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

        <div class="card-header">
          <h3 class="card-title"><?= datosVeterinaria ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">
            <form method="POST" action="ApiPHP/veterinarias_api?accion=procesaVeterinaria" name="nuevaVeterinaria">  
              
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
                    <label for="veterinariaNombre"><?= nombre1 ?>*</label>
                    <input type="text" class="form-control" id="veterinariaNombre" name="veterinariaNombre" value="<?= $veterinariaNombre = $veterinaria['vet_nombre'] != '' ? dCry2($veterinaria['vet_nombre']):$_SESSION['formVeterinaria']['veterinariaNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaRZ"><?= nombre2 ?></label>
                    <input type="text" class="form-control" id="veterinariaRZ" name="veterinariaRZ" value="<?= $veterinariaRZ = $veterinaria['vet_razon'] != '' ? dCry2($veterinaria['vet_razon']):$_SESSION['formVeterinaria']['veterinariaRZ'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaRFC"><?= apellido1 ?>*</label>
                    <input type="text" class="form-control" id="veterinariaRFC" name="veterinariaRFC" value="<?= $veterinariaRFC = $veterinaria['vet_rfc'] != '' ? dCry2($veterinaria['vet_rfc']):$_SESSION['formVeterinaria']['vet_rfc'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaCorreo"><?= usuario ?></label>
                    <input type="text" class="form-control" id="veterinariaCorreo" name="veterinariaCorreo" value="<?= $veterinariaCorreo = $veterinaria['vet_correo'] != '' ? $veterinaria['vet_correo']:$_SESSION['formVeterinaria']['vet_correo'] ?>">
                  </div>

                  
                  <div class="form-group">
                    <label><?= nacimiento ?>*</label>
                    <div class="input-group date" id="veterinariaFundacion" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#veterinariaFundacion" name="veterinariaFundacion" id="veterinariaFundacion" value="<?= $veterinaria['vet_fundacion'] ?>" />
                      <div class="input-group-append" data-target="#veterinariaFundacion" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <h3 class="card-title"><?= direccionVeterinaria ?></h3>
                  <br>
                  <br>

                  <div class="form-group">
                    <label for="veterinariaPais"><?= pais ?></label>
                    <select class="form-control" id="veterinariaPais" name="veterinariaPais" onchange="this.form.submit()" >
                      <option value="nada" <?php if ($veterinariaPais === 'nada'){ echo ' selected'; } ?>><?= selecciona ?></option>
                        <?php foreach ($paises as $key => $ps) {  ?>
                          <option value="<?= $key ?>"<?php if ($veterinariaPais === $key){ echo ' selected'; } ?> ><?= $ps ?></option>    
                        <?php } ?>
                    </select>
                  </div>
                  <?= $veterinariaEstadoActual ?>

                  <div class="form-group">
                    <label for="veterinariaEstado"><?= estado ?></label>
                    <select class="form-control" id="veterinariaEstado" name="veterinariaEstado" onchange="this.form.submit()" >
                      <option value="nada" selected><?= selecciona ?></option>
                        <?php foreach (consulta_estados($veterinariaPais) as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['estadoID'] ?>"<?php if ($veterinariaEstado == $tR4ns['estadoID']){ echo ' selected'; }  ?> ><?= $tR4ns['estadoNombre'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>
                  <?php if($veterinariaPais == 'MX'){ ?>
                    <div class="form-group">
                      <label for="veterinariaMunicipio"><?= municipio ?></label>
                      <select class="form-control" id="veterinariaMunicipio" name="veterinariaMunicipio" >
                        <option value="nada" selected><?= selecciona ?></option>
                          <?php foreach (C0nMun($veterinariaEstado) as $key => $tR4ns) {  ?>
                            <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($veterinaria['vet_mun'] == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                          <?php } ?>
                      </select>
                    </div>
                  <?php } else { //$mun = $veterinaria['vet_mun'] == 'nada' ? '':$veterinaria['vet_mun'];
                    $mun = $veterinaria['vet_mun'] != '' ? $veterinaria['vet_mun']:$_SESSION['formVeterinaria']['veterinariaMunicipioActual'];
                   ?>
                    <div class="form-group">
                      <label for="veterinariaMunicipio"><?= municipio ?></label>
                      <input type="text" class="form-control" id="veterinariaMunicipio" name="veterinariaMunicipio" value="<?= $mun ?>">
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="veterinariaCalle"><?= calle ?></label>
                    <input type="text" class="form-control" id="veterinariaCalle" name="veterinariaCalle" value="<?= $veterinariaCalle = $veterinaria['vet_calle'] != '' ? dCry2($veterinaria['vet_calle']):$_SESSION['formVeterinaria']['vet_calle'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaNE"><?= ne ?></label>
                    <input type="text" class="form-control" id="veterinariaNE" name="veterinariaNE" value="<?= $veterinariaNE = $veterinaria['vet_ext'] != '' ? dCry2($veterinaria['vet_ext']):$_SESSION['formVeterinaria']['vet_ext'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaNI"><?= ni ?></label>
                    <input type="text" class="form-control" id="veterinariaNI" name="veterinariaNI" value="<?= $veterinariaNI = $veterinaria['vet_int'] != '' ? dCry2($veterinaria['vet_int']):$_SESSION['formVeterinaria']['vet_int'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaColonia"><?= colonia ?></label>
                    <input type="text" class="form-control" id="veterinariaColonia" name="veterinariaColonia" value="<?= $veterinariaColonia = $veterinaria['vet_col'] != '' ? dCry2($veterinaria['vet_col']):$_SESSION['formVeterinaria']['vet_col'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="veterinariaCP"><?= cp ?></label>
                    <input type="text" class="form-control" id="veterinariaCP" name="veterinariaCP" value="<?= $veterinariaCP = $veterinaria['vet_cp'] != '' ? $veterinaria['vet_cp']:$_SESSION['formVeterinaria']['vet_cp'] ?>">
                  </div>

                  <input type="hidden" name="editar" id="editar" value="editar">
                  <input type="hidden" name="veterinariaID" id="veterinariaID" value="<?=$veterinariaID ?>">
                  <input type="hidden" name="veterinariaPaisActual" value="<?= $veterinariaPais ?>">
                  <input type="hidden" name="veterinariaEstadoActual" value="<?= $veterinariaEstado ?>">

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
