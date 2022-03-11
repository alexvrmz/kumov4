<?php
/// --- Todos los textos en variables 2021/05/21
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_pR0VxD.php');
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
          <?php if(v4lID44x50("1600-001", $usuario_id) == TRUE){ /// --- AGREGAR Proveedores ?>
            <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;"><i class="fad fa-truck-loading"></i> <br><?= btn_46r364rU5u4ri0 ?></button>
          <?php } ?>
        </div>
      </div> 
    </div>

    <?php if($nP == '' || $nP == null || $nP == 0){ ?>
      <div class="row">
        <div class="col-12">
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fad fa-traffic-cone"></i><?= lbl_3mp1 ?></h5>
            <?= lbl_3mp2 ?> 
          </div>
        </div>
      </div>
    <?php }
          else {
            ?>
           
 
              <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><?= lbl_tab001 ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table id="example1" class="table table-hover table-head-fixed table-striped">
                            <thead>
                              <tr>
                                <?php if($usuario_id == 1){ ?>
                                  <th><?= lbl_tab002 ?></th>
                                <?php } ?>
                                <th><?= lbl_tab003 ?></th>
                                <th><?= lbl_tab004  ?></th>
                                <th><?= lbl_tab005 ?></th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($LDP as $key => $u5h34r5) { ?>
                                <tr>
                                  <?php if($usuario_id == 1){ ?>
                                    <td><?= $u5h34r5['xPrIDx'] ?></td>
                                  <?php } ?>
                                  <td><p style="margin: 0;" class="corta-texto"><?= $u5h34r5['xPrNICx'] ?></p></td>
                                  <td><p style="margin: 0;" class="corta-texto"><?= $u5h34r5['xPrRZx'] ?></p></td>
                                  <td><p style="margin: 0;" class="corta-texto"><?= $u5h34r5['xPrRFCx'] ?></p></td>
                                  <td><p style="margin: 0;" class="corta-texto">
                                    <?php if($u5h34r5['xPrACTx'] == 1){ ?>
                                      <span class="badge badge-success"><?= lbl_tab006 ?></span></p>
                                    <?php } else { ?>
                                      <span class="badge badge-danger"><?= lbl_tab007 ?></span></p>
                                    <?php } ?>
                                  </td>
                                  <td>
                                    <div class="row">
                                        <?php if(v4lID44x50("1600-002", $usuario_id) == TRUE){ ?>
                                          <a href="app?accion=pr0VxDT&pXRoI=<?= $eCry($u5h34r5['xPrIDx']) ?>" type="button" class="col-6 btn btn-warning btn-flat btn-xs corta-texto"><i class="fad fa-edit"></i> <?= lbl_2mp4 ?></a>
                                        <?php } ?>
                                        <?php if(v4lID44x50("1600-003", $usuario_id) == TRUE){ ?>
                                          <a href="app?accion=pr0VxVW&pXRoI=<?= $eCry($u5h34r5['xPrIDx']) ?>" type="button" class="col-6 btn btn-info btn-flat btn-xs corta-texto"><i class="fad fa-view"></i> <?= lbl_2mp3 ?></a>
                                        <?php } ?>
                                    </div>
                                  </td>
                                </tr>
                              <?php } ?>
                            </tbody>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
     
    <?php } ?>


    <?php if(v4lID44x50("1600-001", $usuario_id) == TRUE){ /// --- AGREGAR Proveedor ?>
      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ApiPHP/pR0VxD_4pi?accion=aDdPr0" id="nuevo1">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3w001 ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <?php if(!empty($_SESSION['m3ns4j3Frm'])){ ?>
                    Por favor verifica <?= $_SESSION['err'] ?> pendiete(s):
                    <ul>
                      <?php foreach ($_SESSION['m3ns4j3Frm'] as $key => $value) { ?>
                        <li><?= $value ?></li>
                      <?php } ?>
                    </ul>
                  <?php } ?>

                <div class="form-group">
                  <label for="pp_xx002"><?= lbl_n3w002 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx002" name="pp_xx002" value="<?= $px002 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx003"><?= lbl_n3w003 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx003" name="pp_xx003" value="<?= $px003 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx012"><?= lbl_n3w012 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx012" name="pp_xx012" value="<?= $px012 ?>" maxlength="13">
                </div>   

                <div class="form-group">
                  <label for="pp_xx004"><?= lbl_n3w004 ?></label>
                  <input type="text" class="form-control" id="pp_xx004" name="pp_xx004" value="<?= $px004 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx005"><?= lbl_n3w005 ?></label>
                  <input type="text" class="form-control" id="pp_xx005" name="pp_xx005" value="<?= $px005 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx006"><?= lbl_n3w006 ?></label>
                    <input type="text" class="form-control" id="pp_xx006" name="pp_xx006" value="<?= $px006 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx008"><?= lbl_n3w008 ?></label>
                  <input type="number" class="form-control" id="pp_xx008" name="pp_xx008" value="<?= $px008 ?>" maxlength="5">
                </div>

                <div class="form-group">
                  <label for="pp_xx009"><?= lbl_n3w009 ?></label>
                  <input type="text" class="form-control" id="pp_xx009" name="pp_xx009" value="México" disabled>
                </div>   
                      
                <div class="form-group">
                  <label for="pp_xx010"><?= lbl_n3w010 ?>*</label>
                  <select class="form-control" id="pp_xx010" name="pp_xx010" onchange="this.form.submit()" >
                    <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach (consulta_estados() as $key => $tR4ns) {  ?>
                        <option value="<?= $tR4ns['Ed0iD'] ?>"<?php if ($px010 == $tR4ns['Ed0iD']){ echo ' selected'; } ?> ><?= $tR4ns['Ed0N0m'] ?></option>    
                      <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pp_xx011"><?= lbl_n3w011 ?>*</label>
                  <select class="form-control" id="pp_xx011" name="pp_xx011" >
                    <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach (C0nMun($px010) as $key => $tR4ns) {  ?>
                        <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($px011 == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                      <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="pp_xx007"><?= lbl_n3w007 ?></label>
                  <input type="text" class="form-control" id="pp_xx007" name="pp_xx007" value="<?= $px007 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx013"><?= lbl_n3w013 ?></label>
                  <input type="text" class="form-control" id="pp_xx013" name="pp_xx013" value="<?= $px013 ?>" maxlength="256">
                </div>

                <div class="form-group">
                  <label for="pp_xx014"><?= lbl_n3w014 ?></label>
                    <input type="text" class="form-control" id="pp_xx014" name="pp_xx014" value="<?= $px014 ?>" maxlength="20">
                </div>

                <div class="form-group">
                  <label for="pp_xx015"><?= lbl_n3w015 ?></label>
                  <input type="text" class="form-control" id="pp_xx015" name="pp_xx015" value="<?= $px015 ?>" maxlength="256">
                </div>

                <div class="form-group">                    
                  <input type="hidden" class="form-control" id="pp_xx016" name="pp_xx016" value="<?= $u5h34r5 ?>">
                </div>

                
                <div style="margin-bottom: 16px;">
                  <label for="pp_xx019">Tipo de Vehiculos*</label><br>
                  <select class="js-example-basic-multiple3" name="pp_xx019[]" multiple="multiple">
                    <option value="todos" <?php if(!empty($px019) && array_keys($px019, 'todos')){ echo 'selected'; } ?>>Todos</option>    
                    <option value="ninguno" <?php if(!empty($px019) && array_keys($px019, 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                    <option value="1" <?php if(!empty($px019) && array_keys($px019, 1)){ echo 'selected'; } ?>>Automoviles</option>    
                    <!--<option value="2" <?php if(!empty($px019) && array_keys($px019, 2)){ echo 'selected'; } ?>>Motocicletas</option>    
                    <option value="3" <?php if(!empty($px019) && array_keys($px019, 3)){ echo 'selected'; } ?> disabled>Camiones</option>    
                    <option value="4" <?php if(!empty($px019) && array_keys($px019, 4)){ echo 'selected'; } ?> disabled>Remolques</option>  -->  
                  </select>
                </div>

                <?php if(!empty($px019)){ ?>
               
 
                <div style="margin-bottom: 16px;">
                  <label for="pp_xx017">Servicios*</label><br>
                  <select class="js-example-basic-multiple1" name="pp_xx017[]" multiple="multiple">
                    <?php if(!empty($px019)){ ?>
                      <option value="todos" <?php if(!empty($px017) && array_keys($px017, 'todos')){ echo 'selected'; } ?>>Todos</option>    
                      <option value="ninguno" <?php if(!empty($px017) && array_keys($px017, 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                      <?php foreach ($LDS as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px017, $value['xCIDx'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['xCIDx'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['xCdeSx'] ?> | <?= $tPV[$value['xCtPvx']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php } ?>
                  </select>
                </div>

                <div style="margin-bottom: 16px;">
                  <label for="pp_xx020">Trámites*</label><br>
                  <select class="js-example-basic-multiple4" name="pp_xx020[]" multiple="multiple">
                    <?php if(!empty($px019)){ ?> 
                      <option value="todos" <?php if(!empty($px020) && array_keys($px020, 'todos')){ echo 'selected'; } ?>>Todos</option>    
                      <option value="ninguno" <?php if(!empty($px020) && array_keys($px020, 'ninguno')){ echo 'selected'; } ?>>Ninguno</option>    
                      <?php foreach ($LDT as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px020, $value['xCIDxt'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['xCIDxt'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['xCdeSxt'] ?> | <?= $tPV[$value['xCtPvxt']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php } ?>
                  </select>
                </div>

                <div style="margin-bottom: 16px;">
                  <label for="pp_xx018">Marcas*</label><br>
                  <select class="js-example-basic-multiple2" name="pp_xx018[]" multiple="multiple">
                    <?php if(!empty($px019)){ ?>
                      <option value="todos" <?php if(!empty($px018) && array_keys($px018, 'todos')){ echo 'selected'; } ?>>Todas</option>    
                      <option value="ninguna" <?php if(!empty($px018) && array_keys($px018, 'ninguna')){ echo 'selected'; } ?>>Ninguna</option>    
                      <?php foreach ($LDM as $key => $value) { $ca = array_rand($cls, 1);?>
                        <?php if(array_keys($px018, $value['xMIDx'])) { $sLt = 'selected'; } ?>
                        <option value="<?= $value['xMIDx'] ?>" class="<?= $cls[$ca] ?>" <?= $sLt ?>><?= $value['xMdeSx'] ?> | <?= $tPV[$value['xMTPx']] ?></option>
                      <?php unset($sLt); }  ?>
                    <?php } ?>
                  </select>
                </div>
                <?php } ?>

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
    <?php } ?> 

  </section>
</div>
<?php include('parciales/3p1416e.php'); ?> 
