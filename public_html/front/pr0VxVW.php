<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_pr0VxVW.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
    <div class="card <?= $brr4 ?> card-outline">
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
          <a type="button" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"href="app?accion=pR0VxD"><i class="fad fa-arrow-left"></i> <br><?= btn_46r364rU5u4ri0 ?></a>
        </div>
      </div> 
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="profile-username text-center">Datos</h3>  
            <?php if($xPxACTH == 1){ ?>
              <p class="text-center"><span class="badge badge-success">Activo</span></p>
            <?php } else { ?>
              <p class="text-center"><span class="badge badge-danger">Inactivo</span></p>
            <?php } ?>
            <p class="text-muted text-center"><?= $xPxRZH ?></p>        
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>ID</b> <a class="float-right"><?= $xPxIDH ?></a>
              </li>
                <li class="list-group-item">
                <b>RFC</b> <a class="float-right"><?= $xPxRFCH ?></a>
              </li>
                <li class="list-group-item">
                <b>Calle</b> <a class="float-right"><?= $xPxCLLH ?></a>
              </li>
                <li class="list-group-item">
                <b># Exterior</b> <a class="float-right"><?= $xPxNeH ?></a>
              </li>
                <li class="list-group-item">
                <b># Interior</b> <a class="float-right"><?= $xPxNiH ?></a>
              </li>
                <li class="list-group-item">
                <b>Colonia</b> <a class="float-right"><?= $xPxC0lH ?></a>
              </li>
                <li class="list-group-item">
                <b>Código Postal</b> <a class="float-right"><?= $xPxcPH ?></a>
              </li>
                <li class="list-group-item">
                <b>Municipio/Alcaldia </b> <a class="float-right"><?= $xPxMAlH ?></a>
              </li> 
                <li class="list-group-item">
                <b>Estado</b> <a class="float-right"><?= $xPxEd0H ?></a>
              </li> 
                <li class="list-group-item">
                <b>País</b> <a class="float-right"><?= $xPxPisH ?></a>
              </li>
                <li class="list-group-item">
                <b>Reprensentante</b> <a class="float-right"><?= $xPxR3pH ?></a>
              </li>
                <li class="list-group-item">
                <b>Télefono</b> <a class="float-right"><?= $xPxTl1H ?></a>
              </li> 
                <li class="list-group-item">
                <b>Email</b> <a class="float-right"><?= $xPxeMlH ?></a>
              </li>       
              </li> 
                <li class="list-group-item">
                <b>Fecha Registro</b> <a class="float-right"><?= $xPxFRH ?></a>
              </li>               
            </ul>

          </div>
          <div class="card-body box-profile">
            <?php if(v4lID44x50("1600-002", $usuario_id) == TRUE){ ?>
              <a href="app?accion=pr0VxDT&pXRoI=<?= $eCry($xPxIDH) ?>" class="btn btn-warning btn-block"><i class="fad fa-file-edit"></i> Editar</a>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="card <?= $brr4 ?> card-outline ">
          <div class="card-header">
            <h3 class="profile-username"><?= $xPxNICH ?></h3>  
            <p class="text-muted" style="margin-bottom: 0px;">Datalles de Proveedor</p> 
            <div class="card-tools">
              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-rels">
                <i class="fad fa-edit"></i> Editar
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>             
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <?php if($xPxTVH == 2 || $xPxTVH == 3){ ?>
                <div class="callout" style="border-left-color: red; width: 100%">
                  <h5>Vehiculos</h5>
                  <?php foreach ($LDTP as $key => $value) { ?>
                    <?php if($value['xTVtv'] == 1){ $c = 'bg-blue'; }
                          elseif($value['xTVtv'] == 2){ $c = 'bg-indigo'; } ?>
                    <span class="badge <?= $c ?>"><?= $tPV[$value['xTVtv']] ?></span>
                  
                  <?php unset($c); }?>
                  <?php if($xPxTVH == 2) {?>
                    <span class="badge bg-success">Todos</span>
                  <?php } ?>
                </div>
              <?php } ?>
              <?php if($xPxTSH == 2 || $xPxTSH == 3){ ?>
                <div class="callout" style="border-left-color: #fd7e14; width: 100%">
                  <h5>Servicios</h5>
                  <?php foreach ($LDTS as $key => $value) { ?>
                    <?php if($value['tP67'] == 1){ $d = 'bg-blue'; }
                          elseif($value['tP67'] == 2){ $d = 'bg-indigo'; } ?>
                    <span class="badge <?= $d ?>"><?= $value['Sdes'] ?></span>
                  <?php unset($d); } ?>
                  <?php if($xPxTSH == 2) {?>
                    <span class="badge bg-success">Todos</span>
                  <?php } ?>
                </div>
              <?php } ?>

              <?php if($xPxTTH == 2 || $xPxTTH == 3){ ?>
                <div class="callout" style="border-left-color: #ffc107; width: 100%">
                  <h5>Trámites</h5>
                  <?php foreach ($LDTT as $key => $value) { ?>
                    <?php if($value['tP67t'] == 1){ $d = 'bg-blue'; }
                          elseif($value['tP67t'] == 2){ $d = 'bg-indigo'; } ?>
                    <span class="badge <?= $d ?>"><?= $value['Sdest'] ?></span>
                  <?php unset($d); } ?>
                  <?php if($xPxTTH == 2) {?>
                    <span class="badge bg-success">Todos</span>
                  <?php } ?>
                </div>
              <?php } ?>

              <?php if($xPxTMH == 2 || $xPxTMH == 3){ ?>
                <div class="callout" style="border-left-color: #28a745; width: 100%">
                  <h5>Marcas</h5>
                  <?php foreach ($LDMk as $key => $value) { ?>
                    <?php if($value['mD3t6PV'] == 1){ $e = 'bg-blue'; }
                          elseif($value['mD3t6PV'] == 2){ $e = 'bg-indigo'; } ?>
                    <span class="badge <?= $e ?>"><?= $value['mD3s'] ?></span>
                  <?php unset($e); } ?>
                  <?php if($xPxTMH == 2) {?>
                    <span class="badge bg-success">Todas</span>
                  <?php } ?>
                </div>
              <?php } ?>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>

      <div class="modal fade" id="modal-rels">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ApiPHP/pR0VxD_4pi?accion=Ac7r3L" id="nuevo1">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3w001 ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <div style="margin-bottom: 16px;">
                  <label for="pp_xx019">Tipo de Vehiculos*</label><br>
                  <select class="js-example-basic-multiple3" name="pp_xx019[]" multiple="multiple" required>
                    <option value="1" <?php echo 'selected'; ?>>Automoviles</option>    
                    <!--<option value="2" <?php if(!empty($px019) && array_keys($px019, 2)){ echo 'selected'; } ?>>Motocicletas</option>    
                    <option value="3" <?php if(!empty($px019) && array_keys($px019, 3)){ echo 'selected'; } ?> disabled>Camiones</option>    
                    <option value="4" <?php if(!empty($px019) && array_keys($px019, 4)){ echo 'selected'; } ?> disabled>Remolques</option>  -->  
                  </select>
                </div>

                <div style="margin-bottom: 16px;">
                  <label for="pp_xx017">Servicios*</label><br>
                  <select class="js-example-basic-multiple1" name="pp_xx017[]" multiple="multiple" required>
                    <?php //if(!empty($px019)){ ?>
                      <option value="todos" <?php if(!empty($px017) && array_keys($px017, 'todos')){ echo 'selected'; } ?>>Todos</option>    
                      <option value="ninguno" <?php if(!empty($px017) && array_keys($px017, 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                      <?php foreach ($ALDS as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px017, $value['sxDID'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['sxDID'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['sxDd35'] ?> | <?= $tPV[$value['sxDtv']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php //} ?>
                  </select>
                </div>

                <div style="margin-bottom: 16px;">
                  <label for="pp_xx020">Trámites*</label><br>
                  <select class="js-example-basic-multiple4" name="pp_xx020[]" multiple="multiple" required>
                    <?php //if(!empty($px019)){ ?>
                      <option value="todos" <?php if(!empty($px020) && array_keys($px020, 'todos')){ echo 'selected'; } ?>>Todos</option>    
                      <option value="ninguno" <?php if(!empty($px020) && array_keys($px020, 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                      <?php foreach ($ALDT as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px020, $value['xDID'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['xDID'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['xDd35'] ?> | <?= $tPV[$value['xDtv']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php //} ?>
                  </select>
                </div>

                <div style="margin-bottom: 16px;">
                  <label for="pp_xx018">Marcas*</label><br>
                  <select class="js-example-basic-multiple2" name="pp_xx018[]" multiple="multiple" required>
                    <?php //if(!empty($px019)){ ?>
                      <option value="todos" <?php if(!empty($px018) && array_keys($px018, 'todos')){ echo 'selected'; } ?>>Todas</option>    
                      <option value="ninguna" <?php if(!empty($px018) && array_keys($px018, 'ninguna')){ echo 'selected'; } ?>>Ninguna</option>    
                      <?php foreach ($ALDM as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px018, $value['MDID'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['MDID'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['MDd35'] ?> | <?= $tPV[$value['MDtv']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php //} ?>
                  </select>
                </div>
                <input type="hidden" class="form-control" id="pp_xx016" name="pp_xx016" value="<?= $usuario_id ?>">
                <input type="hidden" class="form-control" id="pp_xx015" name="pp_xx015" value="<?= $xPxIDH ?>">
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                
                <button type="submit" class="btn btn-success"> 
                  <?php if(!empty($px019)){ ?>
                    <i class="fad fa-save"></i> <?= btn_n3w6u4rD4r ?>
                  <?php } else { ?>
                    <i class="fad fa-arrow-right"></i> Continuar
                  <?php } ?>
                </button>
              </div>
            </form> 
          </div>
        </div>
      </div>

     
  </section>
</div>
<?php include('parciales/3p1416e.php'); ?>
<?php if($pp_xx019 != ''){ ?>
        <script type="text/javascript">
          $(window).on('load', function() {
            $('#modal-rels').modal('show');
          });
        </script>
<?php } ?>
<script src="plugins/select2/js/select2.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple1').select2();
      $('.js-example-basic-multiple2').select2();
      $('.js-example-basic-multiple3').select2();
      $('.js-example-basic-multiple4').select2();
    });
  </script>