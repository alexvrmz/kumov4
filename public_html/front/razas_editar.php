<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_razas_editar.php');
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
            <a href="app?accion=razas" class="btn btn-app bg-success">
              <i class="fad fa-arrow-left"></i> <?= regresar ?>
            </a>   
  
          </div>

        </div>
      </div>
      <!-- acciones -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

        <div class="card-header">
          <h3 class="card-title"><?= datosRaza ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">
            <form method="POST" action="ApiPHP/razas_api?accion=procesaRaza" name="nuevaRaza">  
              
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
                    <label for="razaNombre"><?= nombre ?>*</label>
                    <input type="text" class="form-control" id="razaNombre" name="razaNombre" value="<?= $razaNombre = $raza['raza_descripcion'] != '' ? $raza['raza_descripcion']:$_SESSION['formRaza']['razaNombre'] ?>">
                  </div>


                  <div class="form-group">
                    <label for="razaEspecie"><?= especie ?></label>
                    <select class="form-control" id="razaEspecie" name="razaEspecie" required>
                      <option value="Nada"><?= selecciona ?></option>
                      <?php foreach ($listaEspecies as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>" <?= $sl = $raza['raza_especie'] == $especie['especieID'] ? 'selected':''; ?> ><?= $especie['especieNombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  

                  <div class="form-group">
                    <label for="razaEstado"><?= estado ?></label>
                    <select class="form-control" id="razaEstado" name="razaEstado" required>
                      <?php if ($raza['raza_estado'] == 1) { ?>
                        <option value="1" selected><?= activo ?></option>
                        <option value="0"><?= inactivo ?></option>
                      <?php } elseif ($raza['raza_estado'] == 0) { ?>
                        <option value="0" selected><?= inactivo ?></option>
                        <option value="1"><?= activo ?></option>
                      <?php } ?>
                    </select>
                  </div>  


                  <input type="hidden" name="editar" id="editar" value="editar">
                  <input type="hidden" name="razaID" id="razaID" value="<?=$razaID ?>">
                  
                
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
