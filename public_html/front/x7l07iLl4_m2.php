<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_x7l07iLl4.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>


    <!-- Main content -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
              <h3 class="card-title">
                <?= lbl_1er7i7u ?>
              </h3>             
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body p-0">    
            <a href="app?accion=eMpr35As" class="btn bg-success btn-app"><i class="fad fa-arrow-left"></i> <?= btn_r3g ?></a>            
            <?php if(v4lID44x50("1200-002", $usuario_id) == TRUE){ /// --- Agregar flota?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;"><i class="fad fa-folder-plus"></i> <?= btn_46r364rm0Du ?></button>
            <?php } ?>
            <?php if($vst == 1){ ?>
            <a class="btn btn-app bg-primary" href="ApiPHP/c0Nfi6_4pi.php?accion=Ac7Vs7&kjhu=<?= $eCry(2) ?>&huy=<?= $eCry($usuario_id) ?>">
              <i class="fad fa-list-alt"></i> Ver Lista
            </a> 
          <?php }
                else { ?>
            <a class="btn btn-app bg-primary" href="ApiPHP/c0Nfi6_4pi.php?accion=Ac7Vs7&kjhu=<?= $eCry(1) ?>&huy=<?= $eCry($usuario_id) ?>">
              <i class="fad fa-file-invoice"></i> Ver Cartas
            </a> 
          <?php } ?>


          </div>

        </div>
      </div>



          <?php if($eMpr3 != ''){ ?>
            <div class="row">
              <div class="col-lg-3">
                <div class="card <?= $brr4 ?> card-outline ">
                  <div class="card-header">
                  <h3 class="profile-username text-center"><?= $EPAN ?></h3>  
                  <p class="text-muted text-center"><?= $EPAR ?></p>             
                  </div>
                  <div class="card-body">
                    <div class="card-body p-0">    
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>RFC</b> <a class="float-right"><?= $EPARF ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Calle</b> <a class="float-right"><?= $EPAC ?></a>
                        </li>
                        <li class="list-group-item">
                          <b># Exterior</b> <a class="float-right"><?= $EPANE ?></a>
                        </li>
                        <li class="list-group-item">
                          <b># Interior</b> <a class="float-right"><?= $EPANI ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Colonia</b> <a class="float-right"><?= $EPACO ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Código Postal</b> <a class="float-right"><?= $EPACP ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Alcadia/Mun.</b> <a class="float-right"><?= $EPAMN ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Estado</b> <a class="float-right"><?= $EPAES ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>País</b> <a class="float-right"><?= $EPAPS ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Contacto</b> <a class="float-right"><?= $EPARP ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Teléfono</b> <a class="float-right"><?= $EPATL ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>E-mail</b> <a class="float-right"><?= $EPAEM ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Fecha Registro</b> <a class="float-right"><?= $EPAFS ?></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="col-lg-9">
          <?php } ?>
                <?php if($nu7l0 == '0'){ ?>
                  <div class="row">
                  
                    <div class="col-12">
                      <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fad fa-traffic-cone"></i> Alerta!</h5>
                        No tienes ninguna Flota registrada <?php if($eMpr3 != ''){ echo 'en esta empresa'; } ?>, por favor agrega una.
                      </div>
                    </div>
                    
                  </div>
                <?php }
                      else{ ?>
                        <?php if($vst == 1){ ?>
                          <div class="row">
                            <?php foreach ($Li57m0d78Os as $key => $u5h34r5) { ?>
                              <?php if($eMpr3 != ''){ $md = 6; }else { $md = 4;} ?>
                              <div class="col-md-<?= $md ?>">
                              <!-- Widget: user widget style 1 -->
                              <div class="card card-widget widget-user shadow">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <?php if($u5h34r5['ne3m'] > 1){ $colso = 'pink'; }else { $colso = 'indigo'; } ?>
                                <div class="widget-user-header bg-<?= $colso ?>" style="height: 90px;">
                                  <h3 class="widget-user-desc"><?= $u5h34r5['zN4m37'] ?> </h3>
                                  

                                
                                </div>
                                <div class="btn-group">
                                  <?php if(v4lID44x50("1200-004", $usuario_id) == TRUE){ ?>
                                    <a href="app?accion=eMpr35As&flo0=<?= $eCry($u5h34r5['zID7']) ?>" type="button" class="btn btn-info btn-flat" style="width: 100%;"><i class="fad fa-eye"></i> Ver</a>
                                  <?php } ?>
                                  <?php if(v4lID44x50("1200-003", $usuario_id) == TRUE){ ?>
                                    <a href="app?accion=edi74flo0&flo0=<?= $eCry($u5h34r5['zID7']) ?>" type="button" class="btn btn-warning btn-flat" style="width: 100%;"><i class="fad fa-edit"></i> Editar</a>
                                  <?php } ?>
                                </div> 
                                  
                                <div class="card-footer" style="padding-top: 5px;">
                                  <div class="row">
                                    <div class="col-sm-12">


                                    <div class="row" style="background-color: #40454a;">
                                    <?php $i = 0;
                                          foreach ($u5h34r5['3mP'] as $key => $value) { ?>
                                      <?php if($i <= 2){ ?>    
                                        <?php $col = $u5h34r5['ne3m']; if($col == 1){ $col = 12; }elseif($col == 2){ $col = 6; }else{ $col = 4; } ?>
                                          <div class="col-sm-<?= $col ?> <?php if(($u5h34r5['ne3m'] == 3 && $i < 2) ||  ($u5h34r5['ne3m'] == 2 && $i < 1)) { echo 'border-right" style="border-right: 1px solid #2f343a !important;"'; } $i++; ?>" >
                                            <div class="description-block">
                                              <h5 class="widget-user-desc corta-texto"><?= $value['nm'] ?> </h5>                                
                                            </div>
                                          </div>
                                      <?php  } ?>

                                    <?php } $i =0;?>
                                  </div>


                                    <div class="row">
                                      <div class="col-6 border-right">
                                        <div class="description-block">
                                          <h5 class="description-header"><?= $u5h34r5['ne3m'] ?></h5>
                                          <span class="description-text">Empresas</span>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="description-block">
                                          <h5 class="description-header"><?= $u5h34r5['nuvh3'] ?></h5>
                                          <span class="description-text">Autos</span>
                                        </div>
                                      </div>
                                    </div>
                                      <!-- /.description-block -->
                                    </div>
                                  
                                  </div>
                                  <!-- /.row -->
                                </div>
                              </div>
                              <!-- /.widget-user -->
                            </div>
                        <?php } ?>
                <?php }
                      else {?>
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
                                  <th><?= lbl_tab004 ?></th>
                                  <th><?= lbl_tab005 ?></th>
                                  <th><?= lbl_tab006 ?></th>
                                  <th><?= lbl_tab007 ?></th>
                                </tr> 
                              </thead>
                              <tbody>
                                <?php foreach ($Li57m0d78Os as $key => $u5h34r5) { ?>
                                  <tr>
                                    <?php if($usuario_id == 1){ ?>
                                      <td><?= $u5h34r5['zID7'] ?></td>
                                    <?php } ?>
                                    <td><p style="margin: 0;" class="corta-texto"><?= $u5h34r5['zN4m37'] ?></p></td>
                                    <td>
                                      <p style="margin: 0;" class="corta-texto">
                                        <?= c0nNuEmP($u5h34r5['zID7'], $mdr) ?>
                                        <?php $i = 0; 
                                              foreach ($u5h34r5['3mP'] as $key => $value) { ?>
                                          <?php if($i <= 2){ ?>    
                                            <a href="app?accion=v3hiXs&eMpr3=<?= $eCry($value['nn']) ?>"><span class="right badge badge-info"><?= $value['nm'] ?></span></a>
                                          <?php $i++;
                                                  } ?>
                                        <?php } $i =0;?>
                                      </p>
                                    </td>
                                    <td><?= c0nNumAu(0, $u5h34r5['zID7']) ?></td>
                                    <td><?= c0nNumUs($u5h34r5['zID7'], 0) ?></td>
                                    <td>
                                      <div class="col">
                                        
                                  
                                          <?php if(v4lID44x50("1200-004", $usuario_id) == TRUE){ ?>
                                            <a href="app?accion=eMpr35As&flo0=<?= $eCry($u5h34r5['zID7']) ?>" type="button" class="btn btn-info btn-flat btn-xs" ><i class="fad fa-eye"></i> Ver</a>
                                          <?php } ?>
                                        
                                        
                                          <?php if(v4lID44x50("1200-003", $usuario_id) == TRUE){ ?>
                                            <a href="app?accion=edi74flo0&flo0=<?= $eCry($u5h34r5['zID7']) ?>" type="button" class="btn btn-warning btn-flat btn-xs"><i class="fad fa-edit"></i> Editar</a>
                                          <?php } ?>
                                      
                                      </div>
                                        
                                    
                                    </td>
                                  
                                    
                                  </tr>
                                  <?php unset($hfr1); unset($hfr2); unset($hfr3); unset($tt); unset($ax1); unset($ax2); unset($ax3); unset($btn); unset($bg1);  unset($bg2);  unset($bg3); ?>
                                <?php } ?>
                              </tbody>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>

                <?php } ?>
                            
                          
                  <?php } ?>
                    <?php if($eMpr3 != ''){ ?>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><?= lbl_tab001_2 ?></h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                          <table id="example1" class="table table-hover table-head-fixed table-striped">
                            <thead>
                              <tr>
                                <?php if($usuario_id == 1){ ?>
                                  <th style="width: 10px"><?= lbl_t4biD ?></th>
                                <?php } ?>
                                <th style="width: 20px;"><?= lbl_t4bf070 ?></th>
                                <th><?= lbl_t4bN0m8r3 ?></th>
                                <th><?= lbl_t4bu5u4ri0 ?></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody> 
                              <?php $i = 0; 
                                    foreach ($u5hy68 as $key => $u5h34r5) { ?>
                                      <?php if($u5h34r5['u5hOn8ir5'] == 0){ ?>
                                        <tr style="background-color: #f9caca;color: black;">
                                      <?php } else { ?>
                                        <tr>
                                      <?php } ?>
                                      <td><?=$u5h34r5['usuarioID'] ?></td>
                                      <td><img class="direct-chat-img" style="width: 32px; height:auto;" src="<?= $u5h34r5['u5hFt8ir5'] ?>"></td>
                                      <td><?= $u5h34r5['u5h8ir5_nombre'] ?></td>
                                      <td><?= $u5h34r5['u5hUS8ir5'] ?></td>
                                      <td>
                                        <?php if(v4lID44x50("500-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                                          <a href="app?accion=5u540l_02&u5u4oxX=<?= $eCry($u5h34r5['usuarioID']) ?>" type="button" class="btn btn-block bg-gradient-warning btn-xs"><i class="fad fa-edit"></i></a>
                                        <?php } ?>
                                      </tr>
                              <?php } ?>    
                            </tbody>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    <?php } ?>
          <?php if($eMpr3 != ''){ ?>
              </div>
            </div>
          <?php } ?>
              

    <?php if(v4lID44x50("1200-002", $usuario_id) == TRUE){ ?>
      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" action="ApiPHP/x7l07iLl4_4pi.php?accion=fLo7025" name="nu3v07lo">  
            
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_7i7uaD ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                 
                  <?php if($nu3mp == '0'){ ?>
                    <div class="row">
              
                      <div class="col-12">
                        <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fad fa-traffic-cone"></i> Alerta!</h5>
                          No tienes ninguna Empresa registrada, por favor agrega una.
                        </div>
                      </div>
                      
                    </div>
                  <?php }
                        else{ ?>

                    <div class="form-group">
                      <label for="Fl0_x001"><?= lbl_d35dipOnaD ?></label>
                      <input type="text" class="form-control" id="Fl0_x001" name="Fl0_x001" required>
                    </div>

                    <div class="form-group">
                      <label for="Fl0_x002"><?= lbl_NmjM0dloaD ?></label>
                      <select class="form-control" id="Fl0_x002" name="Fl0_x002" required>
                        <option value="0"><?= lbl_53lL3xi0N4aD ?></option>
                        <?php foreach ($Lfl0 as $key => $value) { ?>
                          
                          <option value="<?= $value['xIDEx'] ?>" <?php if($eMpr3 == $value['xIDEx']){ echo 'selected'; } ?>><?= $value['xNICEx'] ?></option>    
                        <?php } ?>                     
                      </select>
                    </div>               
                  <?php } ?>

                  <input type="hidden" class="form-control" id="Fl0_x003" name="Fl0_x003" value="<?= $usuario_id ?>" required>

                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_C4nC3L4raD ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4raD ?></button>
              
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->



      </div>
    <?php } ?>

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
