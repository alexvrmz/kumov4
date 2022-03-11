<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_v3hiCs.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
 

    <!-- Main content -->
     
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

              <a class="btn btn-app bg-success" href="#" style="padding-top: 7px;">
                <span class="badge bg-danger"><?= $num_v3h ?></span>
                <i class="fad fa-cars"></i> <?= lbl_7074l ?>
              </a>             
            
            <?php if(v4lID44x50("700-002", $usuario_id) == TRUE){ /// --- AGREGAR Autos ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;" style="padding-top: 7px;"><i class="fad fa-car "></i> <?= btn_46r364rVh3 ?></button>
            <?php } ?>
            <?php if($vst == 1){ ?>
              <a class="btn btn-app bg-primary" href="ApiPHP/c0Nfi6_4pi.php?accion=Ac7Vs7&kjhu=<?= $eCry(2) ?>&huy=<?= $eCry($usuario_id) ?>" style="padding-top: 7px;">
                <i class="fad fa-list-alt"></i> Ver Lista
              </a> 
            <?php }
                  else { ?>
              <a class="btn btn-app bg-primary" href="ApiPHP/c0Nfi6_4pi.php?accion=Ac7Vs7&kjhu=<?= $eCry(1) ?>&huy=<?= $eCry($usuario_id) ?>" style="padding-top: 7px;">
                <i class="fad fa-file-invoice"></i> Ver Cartas
              </a> 
            <?php } ?>


          </div>

        </div>
      </div> 

      <?php if($flo0 != '' && $mdr == 1){ ?>
            

              <div class="row">
              <div class="col-lg-12">
                <div class="card <?= $brr4 ?> card-outline ">
                  <div class="card-header">
                    <h3 class="profile-username text-center"><?= lbl_100.$EPAN ?></h3>  
                  </div>
                </div>
             
              </div>
              <div class="col-lg-12">
          <?php } ?>

          <?php if($eMpr3 != '' && $mdr == 2){ ?>
            <div class="row">
              <div class="col-lg-3">
                <div class="card <?= $brr4 ?> card-outline ">
                  <div class="card-header">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fad fa-minus"></i>
                      </button>
                    </div>
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


      <?php if($vst == 1){ ?>
        <div class="row">
        
          <?php if($num_v3h == 0){ ?>
                <div class="col-12">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fad fa-traffic-cone"></i> <?= lbl_001 ?></h5>
                    <?= lbl_002 ?> <?php if($flo0 != ''){ echo lbl_003; } ?>, <?= lbl_004 ?>
                  </div>
                </div>
          <?php } 
                else { ?>
                  <?php foreach ($u5hy68 as $key => $u5h34r5) { ?>
                  <?php if($eMpr3 != '' && $mdr == 2){ $nj = 6; } else{ $nj = 4; } ?>
                  <div class="col-md-<?= $nj ?>">
                    <div class="card" style="text-align: center; align-items: center;">
                      <div class="row">
                        <div class="col-lg-12" style="margin-top: 5px;">
                          <?= $u5h34r5['M4rc4Xu7l0s'] ?>
                        </div>
                        <div class="col-lg-12" style="margin-bottom: 10px;">
                          <?= $u5h34r5['5uBm4rc4Xu7l0s'] ?>
                        </div>
                        <div class="col-lg-1"></div>
                      
                        <div class="col-lg-10 callout callout-info" >
                          <?php if($u5h34r5['NDos'] >= 0 && $u5h34r5['NDos'] != 2){ if($u5h34r5['NDos'] == 0){ $u5h34r5['NDos'] = 2; }?>
                            <span class="right badge badge-warning"><?= $u5h34r5['NDos'] ?>|<?= lbl_1 ?></span>
                          <?php } ?>
                          <span class="right badge badge-info"><?= lbl_2 ?></span>
                          <h1 class="card-text" style="font-weight: bold;font-size: 1.6rem;"><?= $u5h34r5['3C0Xu7l0s'] ?></h1> 
                          <div style="font-weight:bold"><?= $u5h34r5['M4rk'] ?> <?= $u5h34r5['m0D3'] ?> <br><?= $u5h34r5['su8Mo'] ?></div> 
                          <i class="fad fa-calendar-star" style="color: red;"></i> <?= $u5h34r5['anN0'] ?> | <i class="fad fa-brush" style="color: #26afbd;"></i> <?= $c0loR3s[$u5h34r5['c0l0rXu']] ?> <br>
                          <i class="fad fa-cogs" style="color: #d27a1c;"></i> <?= $tR4nsMixs[$u5h34r5['i7r4N5X']] ?> | <i class="fad fa-gas-pump" style="color: green;"></i> <?= $m070r3s[$u5h34r5['Mot0rs']] ?><br>
                          <?= lbl_3Mp ?>: <?= $u5h34r5['eMp3'] ?> | <?= lbl_Fl074 ?>: <?= $u5h34r5['fl0t4'] ?>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-12" style="display: block ruby;">
                          <div class="callout callout-danger" style="margin-bottom: 0px;padding-bottom: 0px;padding-top: 0px;height: 50px;">
                            <div style="width: 17px;height: 5px;border-radius: 40px;background: #3c3c3c;position: relative;top: 2px;left: 3px;bottom: -2px;padding-bottom: 0px;"></div>
                            <div style="width: 17px;height: 5px;border-radius: 40px;background: #3c3c3c;position: relative;top: -3px;left: 54px;bottom: -2px;padding-bottom: 0px;right: 8px;"></div>
                            
                            <p style="position: relative;top: 0px;margin-bottom: 0px;bottom: 0px;font-weight: bold;font-size: 20px;"><?= $u5h34r5['Pl4c45Xu7l0s'] ?></p>
                            
                            <sub style="position: relative;top: -14px;font-size: 12px;color: red;bottom: 0px;margin-right: 0px;margin-left: 0px;left: 0px;right: 0px;">
                              <?= lbl_v3pl4c45 ?>
                            </sub>
                          </div>
                        </div>
                        <?php if(v4lID44x50("700-004", $usuario_id) == TRUE){ ?> 
                          <div class="card-body">
                            <a href="app?accion=v3hFh4&vh3iP=<?= $eCry($u5h34r5['IDXu7l0s']) ?>" class="btn btn-success btn-xs"><i class="fad fa-garage-open"></i> <?= btn_3dt ?></a>
                          </div>
                        <?php } ?>
                          
                      </div>                  
                    
                      
                    </div>
                  </div>
                  <?php } ?>
                <?php } ?>
          
        </div>
      <?php }
            else {?>

              <?php if($num_v3h == 0){ ?>
                <div class="col-12">
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fad fa-traffic-cone"></i> <?= lbl_001 ?></h5>
                    <?= lbl_002 ?> <?php if($flo0 != ''){ echo lbl_003; } ?>, <?= lbl_004 ?>
                  </div>
                </div>
              <?php }
                    else { ?>
                      
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
                                <th><?= lbl_tab013 ?></th>
                                <th><?= lbl_tab004 ?></th>
                                <th><?= lbl_tab006 ?></th>
                                <th><?= lbl_tab010 ?></th>
                                <th><?= lbl_tab011 ?></th>
                                <th><?= lbl_tab014 ?></th>
                                <th><span style="text-align: center;"><?= lbl_tab005 ?></span></th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($u5hy68 as $key => $u5h34r5) { ?>
                                <tr>
                                  <?php if($usuario_id == 1){ ?>
                                    <td><?= $u5h34r5['IDXu7l0s'] ?></td>
                                  <?php } ?>
                                  <td><p style="margin: 0;width: 80px;" class="corta-texto"><a href="app?accion=v3hFh4&vh3iP=<?= $eCry($u5h34r5['IDXu7l0s']) ?>" target="_blank"><?= $u5h34r5['3C0Xu7l0s'] ?></a></p></td>
                                  <td><p style="margin: 0;width: 90px;" class="corta-texto"><?= $u5h34r5['Pl4c45Xu7l0s'] ?></p></td>
                                  <td><p style="margin: 0;width: 120px;" class="corta-texto"><?= $u5h34r5['M4rc4Xu7l0s'] ?></p></td>
                                  <td><p style="margin: 0;width: 120px;" class="corta-texto"><?= $u5h34r5['m0D3'] ?> <?= $u5h34r5['su8Mo'] ?></p></td>
                                  <td><?= $u5h34r5['eMp3'] ?></td>
                                  <td><p style="width: 80px; margin:0px" class="corta-texto"><?= $u5h34r5['fl0t4'] ?></p></td>
                                  <td>
                                    <?php $href = 'ApiPHP/v3hiCs_4pi.php?accion=Eda70&Ah76G='.$eCry($u5h34r5['IDXu7l0s']).'&lIi='.$eCry($u5h34r5['3C0Xu7l0s']).'&sdFR=';
                                          if($u5h34r5['eD0'] == 1){
                                            $tt = '<i class="fad fa-key"></i> '.lbl_tab015;             $btn = 'success';
                                            $ax1 = '<i class="fad fa-garage-open"></i> '.lbl_tab016;    $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(2); $bg1 = 'bg-warning';
                                            $ax2 = '<i class="fad fa-ban"></i> '.lbl_tab017;            $hfr2 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(3); $bg2 = 'bg-danger';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_tab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }  
                                          elseif($u5h34r5['eD0'] == 2){  
                                            $tt = '<i class="fad fa-garage-open"></i> '.lbl_tab016;     $btn = 'warning';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_tab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-ban"></i> '.lbl_tab017;            $hfr2 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(3); $bg2 = 'bg-danger';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_tab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }
                                          elseif($u5h34r5['eD0'] == 3){
                                            $tt = '<i class="fad fa-ban"></i> '.lbl_tab017;             $btn = 'danger';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_tab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-garage-open"></i> '.lbl_tab016;    $hfr2 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(2); $bg2 = 'bg-warning';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_tab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }
                                          elseif($u5h34r5['eD0'] == 4){
                                            $tt = '<i class="fad fa-user-hard-hat"></i> '.lbl_tab018;   $btn = 'info';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_tab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-garage-open"></i> '.lbl_tab016;    $hfr2 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(2); $bg2 = 'bg-warning';
                                            $ax3 = '<i class="fad fa-ban"></i> '.lbl_tab017;            $hfr3 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(3); $bg3 = 'bg-danger';
                                          }
                                    ?>
                                    <div class="btn-group" style="width: 85%;">
                                      <button type="button" class="btn btn-<?= $btn ?> btn-flat btn-xs corta-texto"><?= $tt ?></button>
                                      <?php if(v4lID44x50("700-014", $usuario_id) == TRUE){ ?>
                                        <button type="button" class="btn btn-<?= $btn ?> btn-flat btn-xs dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                          <span class="sr-only"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">                                     
                                          <a class="dropdown-item <?= $bg1 ?>" href="<?= $hfr1 ?>"><?= $ax1 ?></a>
                                          <a class="dropdown-item <?= $bg2 ?>" href="<?= $hfr2 ?>"><?= $ax2 ?></a>
                                          <a class="dropdown-item <?= $bg3 ?>" href="<?= $hfr3 ?>"><?= $ax3 ?></a>                                          
                                        </div>
                                      <?php } ?>
                                    </div>
                                      
                                  
                                  </td>
                                  <td>
                                    <div class="row">
                                        <div class="col-6">
                                          <span style="margin: 0;width: 80px;"><?= $u5h34r5['5uBm4rc4Xu7l0s'] ?></span>
                                        </div>
                                        <div class="col-6">
                                          <?php if($u5h34r5['NDos'] >= 0 && $u5h34r5['NDos'] != 2){ if($u5h34r5['NDos'] == 0){ $u5h34r5['NDos'] = 2; }?>
                                            <span class="badge bg-warning" title="<?= lbl_1 ?>"><?= $u5h34r5['NDos'] ?></span>
                                          <?php } ?>
                                        </div>
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

          <?php if($flo0 != ''){ ?>
            <?php if(c0nNumUs($flo0, 0) == 0){ ?>
              <div class="col-12">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fad fa-traffic-cone"></i> <?= lbl_001 ?></h5>
                      No hay Operadores asignados a esta Flota.
                  </div>
                </div>
            <?php }
                  else { ?>
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
                                    foreach (c0nUs($flo0, 0) as $key => $u5h34r5) { ?> 
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
              </div>
            </div>
          <?php } ?>
      
      <?php if(v4lID44x50("700-002", $usuario_id) == TRUE){ ?>
        <!-- /.card -->
         

        <div class="modal fade" id="modal-nuevo">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="nuevo" method="post" action="ApiPHP/v3hiCs_4pi.php?accion=sDrft5" id="nuevo1">
                <div class="modal-header">
                  <h4 class="modal-title"><?= lbl_n3wv3h ?></h4>
                  
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
                      <label for="v3_c001"><?= lbl_v33c0 ?>*</label>
                      <input type="text" class="form-control" id="v3_c001" name="v3_c001" value="<?= $_SESSION['v3_c001'] ?>"  <?php //required ?>>
                    </div>

                    <div class="form-group">
                      <label for="v3_c002"><?= lbl_v3pl4c45 ?>*</label>
                      <input type="text" class="form-control" id="v3_c002" name="v3_c002" value="<?= $_SESSION['v3_c002'] ?>" <?php //required ?>>
                    </div>

                    <div class="form-group">
                      <label for="v3_c003"><?= lbl_v3ViN ?>*</label>
                      <input type="text" class="form-control" id="v3_c003" name="v3_c003" value="<?= $_SESSION['v3_c003'] ?>"  <?php //required ?>>
                    </div>

                    <?php if($num3m == 0){ ?>
                      <div class="col-12">
                        <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fad fa-traffic-cone"></i> <?= lbl_001 ?></h5>
                          <?= lbl_005 ?>
                        </div>
                      </div>
                    <?php }
                          else { ?>
                      <div class="form-group"> 
                        <label for="v3_c016"><?= lbl_3Mp ?>*</label>
                        <select class="form-control" id="v3_c016" name="v3_c016" onchange="this.form.submit()" <?php //required ?>>
                          <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                          <?php $i=0;
                                foreach ($eMpT6 as $key => $tR4ns) { 
                                  foreach ($tR4ns as $key2 => $value2) ?>
                            <option value="<?= $tR4ns['A001'] ?>" <?php if($_SESSION['v3_c016'] == $tR4ns['A001'] || $eMpr3 == $tR4ns['A001']){ echo 'selected'; } ?> ><?= $tR4ns['A003'] ?> - <?= $tR4ns['A002'] ?> (<?= $tR4ns['A004'] ?>)</option>    
                          <?php $i++;
                                } ?>
                        
                        </select>
                      </div>
                    <?php } ?>

                    <?php /*if($numfl0 == 0){ 
                      <div class="col-12">
                        <div class="alert alert-info alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fad fa-info"></i> Alerta!</h5>
                          No tienes flotas registradas, podras relacionarlos despues.
                        </div>
                      </div> 
                     /*}
                          else { */?>
                      <div class="form-group">
                        <label for="v3_c015"><?= lbl_Fl074 ?>*</label>
                        <select class="form-control" id="v3_c015" name="v3_c015" <?php //required ?>>
                          <?php if($numfl0 == 0){ ?>
                            <option value="nada"><?= lbl_006 ?></option>
                          <?php }
                                else { ?>
                            <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                            <?php $i=0;
                                  foreach ($fl0 as $key => $tR4ns) { 
                                    foreach ($tR4ns as $key2 => $value2) ?>
                              <option value="<?= $tR4ns['xID7'] ?>" <?php if($_SESSION['v3_c015'] == $tR4ns['xID7']) { echo 'selected';} ?> ><?= $tR4ns['xN4m37'] ?></option>    
                            <?php $i++;
                                  } ?>
                          <?php } ?>
                          
                        
                        </select>
                      </div>
                    <?php //} ?>

                    <div class="form-group">
                      <label for="v3_c004"><?= lbl_v3m4rc4 ?>*</label>
                      <select class="form-control" id="v3_c004" name="v3_c004" onchange="this.form.submit()" <?php //required ?>>
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach (c0nM4rk() as $key => $m4m4rKrK) { ?>
                          <option value="<?= $m4m4rKrK['m4xID5s'] ?>" 
                            <?php if($m4m4rKrK['m4xID5s'] == $_SESSION['v3_c004']){ echo ' selected';} ?> ><?= $m4m4rKrK['m4xD35c5s'] ?></option>
                          
                                  
                        <?php } ?>         
                      
                      </select>
                    </div> 
                    
                    <div class="form-group">
                      <label for="v3_c005"><?= lbl_v35u8m4rc4 ?>*</label>
                      <select class="form-control" id="v3_c005" name="v3_c005" <?php //onchange="this.form.submit()" ?> <?php //required ?>>
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach (c0n5ub($_SESSION['v3_c004']) as $key => $suBrKrK) { //foreach ($_SESSION['su8M'] as $key => $suBrKrK) { ?>
                          <option value="<?= $suBrKrK['BxIDx'] ?>"
                            <?php if($suBrKrK['BxIDx'] == $_SESSION['v3_c005']){ echo ' selected';} ?> ><?= $suBrKrK['BxD35x'] ?></option>
                                  
                        <?php } ?> 
                      
                      </select>
                    </div>

                    <?php /*
                    /// --- Se desarrollara lista aprovable con datos que ingresen los usuarios 
                    <div class="form-group">
                      <label for="v3_c006"><?= lbl_v37ip0 ?>*</label>
                      <select class="form-control" id="v3_c006" name="v3_c006" <?php //required ?> >
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($_SESSION['x7ip0'] as $key => $sux7ip0K) { ?>
                          <option value="<?= $sux7ip0K['X7iIDY0'] ?>"
                            <?php if($sux7ip0K['X7iIDY0'] == $_SESSION['v3_c006']){ echo ' selected';} ?> ><?= $sux7ip0K['X7id35cRY0'] ?></option>
                                  
                        <?php } ?> 
                      
                      </select>
                    </div> */
                    ?>
                    <div class="form-group">
                      <label for="v3_c006"><?= lbl_v37ip0 ?></label>
                      <input type="text" class="form-control" id="v3_c006" name="v3_c006" value="<?= $_SESSION['v3_c006'] ?>" >
                    </div>

                    <div class="form-group">
                      <label for="v3_c007"><?= lbl_v34n0 ?>*</label>
                      <input type="text" class="form-control" id="v3_c007" name="v3_c007" value="<?= $_SESSION['v3_c007'] ?>" <?php //required ?>>
                    </div>

                    <div class="form-group">
                      <label for="v3_c008"><?= lbl_v3c0l0r ?>*</label>
                      <select class="form-control" id="v3_c008" name="v3_c008" <?php //required ?>>
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($c0loR3s as $key => $c0loR) { ?>
                          <option value="<?= $key ?>"<?php if ($_SESSION['v3_c008'] == $key){ echo ' selected'; } ?> ><?= $c0loR ?></option>
                        <?php } ?>
                        
                      
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="v3_c009"><?= lbl_v3pu3r745 ?></label>
                      <input type="text" class="form-control" id="v3_c009" name="v3_c009" value="<?= $_SESSION['v3_c009'] ?>" >
                    </div>
                    

                    <div class="form-group">
                      <label for="v3_c010"><?= lbl_v3mo7or ?></label>
                      <input type="text" class="form-control" id="v3_c010" name="v3_c010" value="<?= $_SESSION['v3_c010'] ?>" >
                    </div>

                    <div class="form-group">
                      <label for="v3_c011"><?= lbl_v37Ip0M07oR ?>*</label>
                      <select class="form-control" id="v3_c011" name="v3_c011" <?php //required ?>>
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($m070r3s as $key => $m070r) { ?>
                          <option value="<?= $key ?>"<?php if ($_SESSION['v3_c011'] == $key){ echo ' selected'; } ?> ><?= $m070r ?></option>                       
                        <?php } ?>
                      
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="v3_c012"><?= lbl_v3cilInDr0s ?></label>
                      <input type="text" class="form-control" id="v3_c012" name="v3_c012" value="<?= $_SESSION['v3_c012'] ?>" >
                    </div>
                    
                    <div class="form-group">
                      <label for="v3_c013"><?= lbl_v3li7r05 ?></label>
                      <input type="text" class="form-control" id="v3_c013" name="v3_c013" value="<?= $_SESSION['v3_c013'] ?>" >
                    </div>

                    <div class="form-group">
                      <label for="v3_c013">Kilometraje *</label>
                      <input type="number" class="form-control" id="v3_c017" name="v3_c017" value="<?= $_SESSION['v3_c017'] ?>" >
                    </div>
                    

                    <div class="form-group">
                      <label for="v3_c014"><?= lbl_v37r4N5m ?>*</label>
                      <select class="form-control" id="v3_c014" name="v3_c014">
                        <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($tR4nsMixs as $key => $tR4ns) { ?>
                          <option value="<?= $key ?>"<?php if ($_SESSION['v3_c014'] == $key){ echo ' selected'; } ?> ><?= $tR4ns ?></option>    
                        <?php } ?>
                      
                      </select>
                    </div>
                    
                    

                    <input type="hidden" name="usuario_id" id="usuario_id" value="<?= $usuario_id ?>">


                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
                
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
unset($_SESSION['m3ns4j3Frm']);
 ?>
