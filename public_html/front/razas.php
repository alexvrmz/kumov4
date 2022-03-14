<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_razas.php');
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
            <?php if(isset($_SESSION['formRaza']) == true){ ?>
              <a data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-feather"></i> <?= continuarFormulario ?></a>
              <a href="ApiPHP/razas_api?accion=borrarFormulario" class="btn bg-gradient-danger btn-app" style="padding-top: 6px;" ><i class="fad fa-trash"></i> <?= eliminarFormulario ?></a>
            <?php }elseif(isset($_SESSION['formRaza']) == false && v4lID44x50("1800-002", $usuario_id) == TRUE ){ ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-feather"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

      <div class="card <?= $brr4 ?> card-outline col-md-12">
        <div class="card-header">
          <h3 class="profile-username text-center"><?= listadoRazas ?></h3>  
        </div>
        <div class="card-body">
          <?php if($numRazas == 0){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h3><i class="icon fad fa-cat-space fa-2x"></i> Upsss!</h3>
              <h4><?= no_encontre ?></h4>
            </div>
          <?php }else { ?>
            <table class="table table-bordered table-hover table-responsive" id="example1" style="border: 0px;">
              <thead>
                <tr>
                  <th class="corta-texto"><?= acciones ?></th>
                  <th class="corta-texto"><?= id ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= nombre ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= especie ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= estado ?> <i class="fad fa-sort-alt"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($LdRazas as $key => $raza) { ?>
                  <tr>
                    <td style="text-align: center;">
                      <div class="btn-group" role="group">
                        <?php if(v4lID44x50("1800-003", $usuario_id) == TRUE && $raza['razaInicial'] == 0){ /// --- Editar Modulo ?>
                          <a href="app?accion=editarRaza&razaID=<?= $eCry($raza['razaID']) ?>" class="btn bg-gradient-warning btn-sm"><i class="fad fa-edit"></i></a>
                        <?php } ?>
                      </div>
                    </td>
                    <td><?= $raza['razaID'] ?></td>
                    <td><?= $raza['razaNombre'] ?></td>
                    <td><?= $raza['razaEspecie'] ?></td>
                    <td class="corta-texto"><?= $razaEstado = $raza['razaEstado'] == 1 ? '<span class="float-left badge bg-success">'.activo:'<span class="float-left badge bg-danger">'.inactivo; ?></span></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          <?php } ?>
        </div>

        
        <!-- /.card-body -->
      </div>


    <?php if(v4lID44x50("1800-002", $usuario_id) == TRUE ){ ?>
      <div class="modal fade " id="modal-nuevo">
        <div class="modal-dialog ">
          <div class="modal-content <?= $brr4 ?> card-outline">
            <form method="POST" action="ApiPHP/razas_api?accion=procesaRaza" name="nuevaRaza" enctype="multipart/form-data">  
            
              <div class="modal-header">
                <h4 class="modal-title"><i class="fad fa-feather"></i> <?= nuevaRaza ?></h4>
                
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
                    <label for="razaNombre"><?= nombre ?>*</label>
                    <input type="text" class="form-control" id="razaNombre" name="razaNombre" value="<?= $_SESSION['formRaza']['razaNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="razaEspecie"><?= especie ?></label>
                    <select class="form-control" id="razaEspecie" name="razaEspecie" required>
                      <option value="Nada"><?= selecciona ?></option>
                      <?php foreach ($listaEspecies as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>"><?= $especie['especieNombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  


              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= cerrar ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
              
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>

  </section>
</div>
<?php include('parciales/3p1416e.php'); 
unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
<?php if(isset($_SESSION['formRaza']) == true){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-nuevo').modal('show');
    });
  </script>
<?php } ?>
