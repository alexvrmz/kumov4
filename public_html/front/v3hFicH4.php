<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_v3hFicH4.php'); 
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

 
    <!-- Main content -->
    <section class="content">
      

      <div class="container-fluid">

        <!-- acciones -->
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_acx0 ?></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse" >
                <i class="fa-duotone fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
           
                <a href="app?accion=v3hiXs" class="btn btn-app bg-success" style="padding-top: 6px;">
                  <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
                </a> 
                     
          </div>
        </div>
        <!-- acciones -->
        
        <div class="row">
          <div class="col-md-3">
            <div class="card <?= $brr4 ?> card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?= $u5hy68['M4rc4Xu7l0s'] ?>
                </div>
                <h3 class="profile-username text-center"><?= $u5hy68[0]['5uBm4rc4Xu7l0s'] ?>
                  <?= $u5hy68[0]['M4rc4Xu7l0s'] ?><br>
                  <?= $u5hy68[0]['3C0Xu7l0s'] ?><br>
                  <?= $u5hy68[0]['Pl4c45Xu7l0s'] ?>
                </h3>                
                <?php if($u5hy68[0]['esD0'] == 1){ 
                      $ed = 'success'; 
                      $txt = 'Este Automovil esta disponible para Asignar.';
                      $tt = 'Disponible';
                      $ico = 'fa-key';
                    }
                    elseif($u5hy68[0]['esD0'] == 2){ 
                      $ed = 'warning';
                      $txt = 'Este Automovil se encuentra en Taller.';
                      $tt = 'En Taller';
                      $ico = 'fa-garage-open';
                    }
                    elseif($u5hy68[0]['esD0'] == 3){
                      $ed = 'danger';
                      $txt = 'Este Automovil esta Fuera de Servicio.';
                      $tt = 'Fuera de Servicio';
                      $ico = 'fa-ban';
                    }
              ?>
              <?php if($u5hy68[0]['esD0'] != 4){ ?>
                <span class="badge badge-<?= $ed ?>" style="margin-top: 10px;margin-left: 50px;margin-bottom: 5px;margin-right: 50px;padding-top: 3px;padding-bottom: 3px;text-align: center;">              
                  <i class="icon fa-duotone <?= $ico ?>"></i> <?= $tt ?>
                  <!--<?= $txt ?>-->
              </span>
              <?php } ?>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item" style="border-color: red;border-left-width: 1px;border-left-style: solid;border-right-width: 1px;border-right-style: solid;margin-right: 10px;margin-left: 10px;padding-left: 5px;padding-right: 5px;">
                    <b>Flota</b> <a class="float-right"><?= $u5hy68[0]['fl0t4'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Marca</b> <a class="float-right"><?= $u5hy68[0]['M4rk'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Modelo</b> <a class="float-right"><?= $u5hy68[0]['m0D3'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tipo</b> <a class="float-right"><?= $u5hy68[0]['su8Mo'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Año</b> <a class="float-right"><?= $u5hy68[0]['anN0'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Color</b> <a class="float-right"><?= $c0loR3s[$u5hy68[0]['c0l0rXu']] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Transmisón</b> <a class="float-right"><?= $tR4nsMixs[$u5hy68[0]['i7r4N5X']] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tipo Motor</b> <a class="float-right"><?= $m070r3s[$u5hy68[0]['Mot0rs']] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Puertas </b> <a class="float-right"><?= $u5hy68[0]['Pu3rt4s'] ?></a>
                  </li> 
                  <li class="list-group-item">
                    <b>Cilindros</b> <a class="float-right"><?= $u5hy68[0]['cIlInDross'] ?></a>
                  </li> 
                  <li class="list-group-item">
                    <b>Litros</b> <a class="float-right"><?= $u5hy68[0]['lI7r00s'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>VIN</b> <a class="float-right"><?= $u5hy68[0]['xsViNsx'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Motor</b> <a class="float-right"><?= $u5hy68[0]['m070rS3r'] ?></a>
                  </li> 
                  <li class="list-group-item">
                    <b>Fecha Regístro</b> <a class="float-right"><?= $u5hy68[0]['FRGs'] ?></a>
                  </li>                   
                </ul>
                           

                <?php if(v4lID44x50("700-003", $usuario_id) == TRUE){ ?>
                  <a href="app?accion=v3hFh4_sd04&gju8UUy=<?= $eCry($u5hy68[0]['IDXu7l0s']) ?>" class="btn btn-warning btn-block"><i class="fa-duotone fa-file-edit"></i> Editar</a>
                <?php } ?>
              </div>
       
            </div>


            
            
          </div>
    
          <div class="col-md-9">
          <?php if($ER != 0){ ?>
            <div class="card <?= $brr4 ?> card-outline">
              <div class="card-header">
                <h3 class="card-title"><i class="fa-duotone fa-user-hard-hat"></i> <?= lbl_opas ?></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fa-duotone fa-minus"></i>
                  </button>
                </div>
              </div>
            
              <div class="card-body">
                <div class="card-body table-responsive p-0">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <?php if($usuario_id == 1){ ?>
                          <th style="width: 10px"><?= lbl_t4biD ?></th>
                        <?php } ?>
                        <th><?= lbl_t4bnom ?></th>
                        <th><?= lbl_t4usu ?></th>               
                        <?php if(v4lID44x50("300-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                          <th style="width: 10px"><?= lbl_edi ?></th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php if($usuario_id == 1){ ?>
                          <td><?= $DU['usuarioID'] ?></td>
                        <?php } ?>
                        <td class="corta-texto"><?= $DU['u5h8ir5_nombre'] ?></td>
                        <td class="corta-texto"><?= $DU['u5hUS8ir5'] ?></td>
                        <?php if(v4lID44x50("300-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                          <td>
                
                            <div class="btn-group">
                              <a href="app?accion=5u540l_02&u5u4oxX=<?= $eCry($DU['usuarioID']) ?>" type="button" class="btn btn-warning btn-flat btn-xs" title="Editar"><i class="fa-duotone fa-edit"></i></a>
                              <a href="ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx=<?= $eCry($u5hy68[0]['IDXu7l0s']) ?>&uxu=<?= $eCry($DU['usuarioID']) ?>&r3l=<?= $eCry($ddrid) ?>" type="button" class="btn btn-danger btn-flat btn-xs"><i class="fa-duotone fa-unlink" title="Desasignar"></i></a>
                            </div>

                          </td>
                        <?php } ?>
                      </tr>
                    
                    </tbody>
                  </table>
                    
                </div>            
              </div>
              
            </div>
          <?php }

              //if(empty($ER)){ ?>
            
          <?php //} ?>
                
              <?php if(!empty($_SESSION['FRM_hY778']) ){ ?>
                <div class="col-12">
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa-duotone fa-traffic-cone"></i> Formularios Pendientes: </h5>
                    <ul>
                      <?php if(!empty($_SESSION['FRM_hY778']) ){ ?>
                        <li>
                          Recarga de Combustible 
                          <button class="btn btn-xs btn-success btn-flat" data-toggle="modal" data-target="#modal-cmb"><i class="fad fa-eye"></i></button> 
                          <button class="btn btn-xs btn-danger btn-flat"><i class="fad fa-times"></i></button></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              <?php } ?>



            <div class="card <?= $brr4 ?> card-outline card-tabs">
              <div class="card-header">
                <h3 class="card-title"><i class="fa-duotone fa-car"></i> Ficha Automovil</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fa-duotone fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                <div class="row">

                      <?php /// --- KM ?>
                        <?php if($t4rgt7[0] != ''){ ?>
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box bg-light">
                              <span class="info-box-icon bg-info" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);background-color: #3f7df4 !important;">
                                <i class="fa-duotone fa-tachometer-alt-slow"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text">Kilometraje</span>
                                <a class="info-box-number"><?= number_format($t4rgt7[0]['xkkm7rGms'], 0, '', ',') ?></a>
                                <div class="row">
                                  <?php if(v4lID44x50("700-008", $usuario_id) == TRUE){ ?>                      
                                  <a href="app?accion=xkmtr4G&vh3UjI6Did=<?= $eCry($u5hy68[0]['IDXu7l0s']) ?>" class="btn btn-info btn-xs col-6"><i class="fa-duotone fa-info"></i></a>
                                  <?php } ?>
                                  <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
                                    <a class="btn btn-success btn-xs col-6" data-toggle="modal" data-target="#modal-km"><i class="fa-duotone fa-redo"></i></a>
                                  <?php } ?>
                              
                                </div>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                        <?php }
                              else { ?>
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box bg-warning">
                              <span class="info-box-icon bg-info" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);background-color: #3f7df4 !important;">
                                <i class="fa-duotone fa-tachometer-alt-slow"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text">Kilometraje</span>
                                <a class="info-box-number" style="color: red;">Pendiente</a>                                
                                  <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
                                    <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-km"><i class="fa-duotone fa-redo"></i></a>
                                  <?php } ?>                    
                              
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>                      
                        <?php } ?>
                      <?php /// --- FN KM ?>  

                      <?php /// --- COMBUSTIBLE ?>
                        <?php if($xCRN != ''){ ?>
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box bg-light">
                              <span class="info-box-icon bg-info" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);background-color: #3f7df4 !important;">
                                <i class="fa-duotone fa-gas-pump"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text">Rendimiento</span>
                                <a class="info-box-number"><?php if($xCRN == 0){ ?>N/D<?php }else{ ?><?= number_format($xCRN, 2, '.', ',') ?> Km/Lt <?php } ?></a>
                                <div class="row">
                                  <?php if(v4lID44x50("700-008", $usuario_id) == TRUE){ ?>                      
                                  <a href="app?accion=xkmtr4G&vh3UjI6Did=<?= $eCry($u5hy68[0]['IDXu7l0s']) ?>" class="btn btn-info btn-xs col-12"><i class="fa-duotone fa-info"></i></a>
                                  <?php } ?>
                                  <?php /*if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
                                    <a class="btn btn-success btn-xs col-6" data-toggle="modal" data-target="#modal-cmb"><i class="fa-duotone fa-redo"></i></a>
                                  <?php } */?>
                              
                                </div>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                        <?php }
                              else { ?>
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box bg-warning">
                              <span class="info-box-icon bg-info" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);background-color: #3f7df4 !important;">
                                <i class="fa-duotone fa-gas-pump"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text">Combustible</span>
                                <a class="info-box-number" style="color: red;">Pendiente</a>                                
                                  <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
                                    <a class="btn btn-danger btn-xs" href="app?accion=xkmtr4G&vh3UjI6Did=<?= $eCry($u5hy68[0]['IDXu7l0s']) ?>" <?php /*data-toggle="modal" data-target="#modal-cmb"*/ ?> ><i class="fa-duotone fa-redo"></i></a>
                                  <?php } ?>                    
                              
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>                      
                        <?php } ?>
                      <?php /// --- FN COMBUSTIBLE ?>  
                </div>
 
         

                <div class="card-header p-0 pt-1 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-three-home-tab2" data-toggle="pill" href="#custom-tabs-three-home2" role="tab" aria-controls="custom-tabs-three-home2" aria-selected="true">Trámites <?php if($NDF != 0){ ?><span class="badge badge-danger"><?= $NDF ?></span><?php } ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Servicios <?php if($NSF != 0){ ?><span class="badge badge-danger"><?= $NSF ?><?php } ?></span></a>
                    </li>
                    <!--<li class="nav-item">
                      <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Trámites</a>
                    </li>-->
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-three-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-three-home2" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab2">
                      <div class="row">
                        <?php /// --- Tramites nuevo ?>
                          <?php foreach ($ldd as $key => $value) { 
                            if($value['pd'] == true && $value['vnc'] == FALSE){
                              $bg = 'bg-danger';
                              $cf = 'color: white;';
                              $tx7 = $value['xD3S'].'<br>Pendiente';
                              if(v4lID44x50("1400-002", $usuario_id) == TRUE){
                                $btn = '<a class="btn btn-success btn-xs" href="app?accion=N3wTr4&xDI4Rt='.$eCry($value['xdDc4t']).'&xcIDV3Hs='.$eCry($u5hy68[0]['IDXu7l0s']).'"><i class="fa-duotone fa-upload"></i></a>';
                              }else{ $btn = '';}
                            }
                            elseif($value['pd'] == true && $value['vnc'] == TRUE){
                              $bg = 'bg-purple';
                              $cf = 'color: white;';
                              if($value['xdDcVED'] > 0){
                                $texv = '<i class="fad fa-alarm-exclamation"></i>'; 
                             }elseif($value['xdDcVED'] < 0){
                                $texv = 'Hace: ';
                              }
                              $tx7 = $value['xD3S'].'<br>'.$value['xTrNSs'].' <span class="badge badge-danger">'.$texv.' '.str_replace("+", "", $value['xdDcVED']).' dia(s)</span>';
                              $btn = '<div class="row">';
                              $btn .= '<div class="col-6"><a class="info-box-number" style="margin-top: -5px;">'.$value['xTrFFs'].'</a></div>';
                              if(v4lID44x50("1400-004", $usuario_id) == TRUE){
                                $btn .= '<a class="btn btn-info btn-xs col-6" href="app?accion=Tr4V&xIDS='.$eCry($value['xIDS']).'&xDI4Rt='.$eCry($value['xdDc4t']).'&xcIDV3Hs='.$eCry($u5hy68[0]['IDXu7l0s']).'"><i class="fa-duotone fa-info"></i></a>';
                             }
                              $btn .= '</div>';
                            } 
                            elseif($value['xdDcVTA'] <= 0 && $value['pd'] == false && $value['vnc'] == false){
                              $bg = 'bg-warning';
                              $cf = 'color: white;';
                              if($value['xdDcVED'] > 0){
                                $texv = '<i class="fad fa-alarm-exclamation"></i>';
                              }elseif($value['xdDcVED'] < 0){
                                $texv = 'Hace: ';
                              }
                              $tx7 = $value['xD3S']. '<br>'.$value['xTrNSs'].' <span class="badge badge-danger">'.$texv.' '.str_replace("+", "", $value['xdDcVED']).' dia(s)</span>';
                              $btn = '<div class="row">';
                              $btn .= '<div class="col-6"><a class="info-box-number" style="'.$cf.' margin-top: -5px;">'.$value['xTrFFs'].'</a></div>';
                              if(v4lID44x50("1400-004", $usuario_id) == TRUE){
                                  $btn .= '<a class="btn btn-info btn-xs col-6" href="app?accion=Tr4V&xDI4Rt='.$eCry($value['xdDc4t']).'&xIDS='.$eCry($value['xIDS']).'&xcIDV3Hs='.$eCry($u5hy68[0]['IDXu7l0s']).'"><i class="fa-duotone fa-info"></i></a>';
                              }
                              $btn .= '</div>';
                            }
                           else{
                              $bg = 'bg-light';
                              $tx7 = $value['xD3S'].'<br>'.$value['xTrNSs'];
                              $btn = '<div class="row">';
                              $btn .= '<div class="col-6"><a class="info-box-number" style="margin-top: -5px;">'.$value['xTrFFs'].'</a></div>';
                              if(v4lID44x50("1400-004", $usuario_id) == TRUE){
                                $btn .= '<a class="btn btn-info btn-xs col-6" href="app?accion=Tr4V&xDI4Rt='.$eCry($value['xdDc4t']).'&xIDS='.$eCry($value['xIDS']).'&xcIDV3Hs='.$eCry($u5hy68[0]['IDXu7l0s']).'"><i class="fa-duotone fa-info"></i></a>';
                              }
                              $btn .= '</div>';
                              $cf = '';
                            }
                          ?>
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box <?= $bg ?>">
                              <span class="info-box-icon bg-<?= $value['cs'] ?>" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);">
                                <i class="fa-duotone fa-<?= $value['xdDico'] ?>"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text"><?= $value['xdDd35'] ?></span>
                                <a class="info-box-number" style="<?= $cf ?>"><?= $tx7 ?></a>
                                <?= $btn ?>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                        <?php } ?>
                      <?php /// --- FN documentos ?>  
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    <div class="row">
                      <?php /// --- servicios ?> 
                        <?php foreach ($lds as $key => $value) { 
                          if($value['pd'] == true && $value['vnc'] == FALSE){
                            $bg = 'bg-warning';
                            $cf = 'color: red;';
                            $tx7 = 'Pendiente';
                            if(v4lID44x50("1300-100", $usuario_id) == TRUE){
                              $btn = '<a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-'.$value['xDID'].'"><i class="fa-duotone fa-upload"></i></a>';
                            }else{ $btn = '';}
                          }
                          elseif($value['pd'] == true && $value['vnc'] == TRUE){
                            $bg = 'bg-purple';
                            $cf = 'color: white;';
                            if($value['xDcVED'] > 0){
                              $texv = '<i class="fad fa-alarm-exclamation"></i>'; 
                            }elseif($value['xDcVED'] < 0){
                              $texv = 'Hace: ';
                            }
                            $tx7 = $value['xDcfv'].' <span class="badge badge-danger">'.$texv.' '.str_replace("+", "", $value['xDcVED']).' dia(s)</span>';
                            $btn = '<div class="row">';
                            if(v4lID44x50("1300-100", $usuario_id) == TRUE){
                              $btn .= '<a class="btn btn-warning btn-xs col-6" data-toggle="modal" data-target="#modal-'.$value['xDID'].'"><i class="fa-duotone fa-sync"></i></a>';
                            }
                            if(v4lID44x50("1300-102", $usuario_id) == TRUE){
                              $btn .= '<a class="btn btn-info btn-xs col-6" data-toggle="modal" data-target="#modal-view-'.$value['xDID'].'"><i class="fa-duotone fa-info"></i></a>';
                            }
                            $btn .= '</div>';

                          }
                          elseif($value['xDcVTA'] <= 0 && $value['pd'] == false && $value['vnc'] == false){
                            $bg = 'bg-cyan';
                            $cf = 'color: white;';
                            if($value['xDcVED'] > 0){
                              $texv = 'Vence en:';
                            }elseif($value['xDcVED'] < 0){
                              $texv = 'Hace: ';
                            }
                            $tx7 = $value['xDcfv'].' <span class="badge badge-danger">'.$texv.' '.str_replace("+", "", $value['xDcVED']).' dia(s)</span>'.$value['vnc'];
                            $btn = '<div class="row">';
                            if(v4lID44x50("1300-100", $usuario_id) == TRUE){
                              $btn .= '<a class="btn btn-success btn-xs col-6" data-toggle="modal" data-target="#modal-'.$value['xDID'].'"><i class="fa-duotone fa-sync"></i></a>';
                            }
                            if(v4lID44x50("1300-102", $usuario_id) == TRUE){
                              $btn .= '<a class="btn bg-primary btn-xs col-6" data-toggle="modal" data-target="#modal-view-'.$value['xDID'].'"><i class="fa-duotone fa-info"></i></a>';
                            }
                            $btn .= '</div>';
                          }
                          else{
                            $bg = 'bg-light';
                            $tx7 = $value['xDcfv'].' '.$value['pd'];
                            $btn = '<div class="row">';
                            if(v4lID44x50("1300-100", $usuario_id) == TRUE){
                              $btn .= '<a class="btn btn-warning btn-xs col-6" data-toggle="modal" data-target="#modal-'.$value['xDID'].'"><i class="fa-duotone fa-sync"></i></a>';
                            }

                            if(v4lID44x50("1300-102", $usuario_id) == TRUE){
                              $btn .= '<a class="btn btn-info btn-xs col-6" data-toggle="modal" data-target="#modal-view-'.$value['xDID'].'"><i class="fa-duotone fa-info"></i></a>';
                            }
                            $btn .= '</div>';
                            $cf = '';

                          }
                          ?>
                          
                          <div class="col-md-6 col-sm-12" style="text-align: center;">
                            <div class="info-box <?= $bg ?>">
                              <span class="info-box-icon bg-<?= $value['cs'] ?>" style="box-shadow: 0 0 0px rgba(0,0,0,.0),0 0px 0px rgba(0,0,0,.0);">
                                <i class="fa-duotone fa-<?= $value['xDico'] ?>"></i>
                              </span>
                              <div class="info-box-content">                      
                                <span class="info-box-text"><?= $value['xDd35'] ?></span>
                                <a class="info-box-number" style="<?= $cf ?>"><?= $tx7 ?></a>
                                <?= $btn ?>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                        <?php } ?>
                      <?php /// --- FN servicios ?>  
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
          </div>


            <div class="card <?= $brr4 ?> card-outline">
              <div class="card-body">
                <div class="card-body p-0">
                  <h3 class="profile-username text-center">
                    Archivo
                  </h3>
                      <table class="table table-hover table-head-fixed table-striped table-responsive" id="example1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Trámite</th>
                            <th>Número/Folio</th>
                            <th>Fecha Emisión</th>
                            <th>Fecha Vencimiento</th>
                            <th>Estado</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($doxc as $xs4f => $P3r70y7) { 
                            /*if($P3r70y7['c7ip0xS'] === '1'){ $cslo = lbl_p08k; $ic0No = 'fa-credit-card-front'; $d0cM = 'data-toggle="modal" data-target="#modal-tc"'; } 
                            elseif($P3r70y7['c7ip0xS'] === '2'){ $cslo = lbl_p09k; $ic0No = 'fa-file-invoice'; $d0cM = 'data-toggle="modal" data-target="#modal-pol"'; }
                            elseif($P3r70y7['c7ip0xS'] === '10'){ $cslo = $P3r70y7['cD3SxS']; $ic0No = 'fa-file-pdf'; $d0cM = 'data-toggle="modal" data-target="#modal-xxxx"'; }
                            elseif($P3r70y7['c7ip0xS'] === '11'){ $cslo = $P3r70y7['cD3SxS']; $ic0No = 'fa-file-word'; $d0cM = 'data-toggle="modal" data-target="#modal-xxxx"'; }
                            elseif($P3r70y7['c7ip0xS'] === '12'){ $cslo = $P3r70y7['cD3SxS']; $ic0No = 'fa-file-image'; $d0cM = 'data-toggle="modal" data-target="#modal-xxxx"'; }
                            elseif(!array_key_exists($P3r70y7['c7ip0xS'], $D0c7ip0s)){ 
                              $frfr = $P3r70y7['c7ip0xS'];
                              $C005 = "SELECT s3R_xDd35, s3R_xDc4t FROM c4TS3rxxV WHERE s3R_xDc4t = $frfr";
                              $S005 = $conexion->query($C005) or die ("Fallo al seleccionar categorias: ".$C005);
                              $ldss = [];
                              while($DdC41 = $S005->fetch_array()){
                                $ldss1 = $DdC41['s3R_xDd35'];
                              }

                              $cslo = $ldss1; $ic0No = 'fa-tools'; $d0cM = 'data-toggle="modal" data-target="#modal-xxxx"';}
                            else{ $cslo = $P3r70y7['cD3SxS']; $ic0No = 'fa-file'; $d0cM = 'data-toggle="modal" data-target="#modal-xxxx"'; }*/
                            
                            ?>                     
                            <tr>
                              <td><?= $P3r70y7['xIoTrIDx'] ?></td>
                              <td class="corta-texto"><?= $P3r70y7['xIoTrIDC4Tx'] ?></td>
                              <td class="corta-texto"><?= $P3r70y7['xIoTrNSx'] ?></td>
                              <td><?= $P3r70y7['xIoTrFIx'] ?></td>
                              <td><?= $P3r70y7['xIoTrFFx'] ?></td>
                              <td>
                                <?php if($P3r70y7['xIoTrEDOx'] == 1){ ?>
                                  <span class="badge badge-success">Activo</span>
                                <?php }
                                      else{ ?>
                                  <span class="badge badge-danger">Inactivo</span>
                                <?php } ?>
                              </td>
                              <td class="corta-texto">
                                <div class="row">
                                  <div class="col-6">
                                    <a href="#" class="btn btn-info btn-xs"><i class="fad fa-eye"></i> Ver</a>
                                  </div>
                                  <div class="col-6">
                                    <a href="#" class="btn btn-warning btn-xs"><i class="fad fa-edit"></i> Editar</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                      <?php /*if(v4lID44x50("700-013", $usuario_id) == TRUE){ /// --- AGREGAR docs ?>
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-d0c5"><i class="fa-duotone fa-plus"></i> <b>Agregar</b></button>
                      <?php } */?>
              </div>
            </div>


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      <?php /*if(v4lID44x50("700-013", $usuario_id) == TRUE){ /// --- AGREGAR docs ?>
        <!-- /.card -->
        <div class="modal fade" id="modal-d0c5">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="nuevo" method="post" action="ApiPHP/v3hiCs_4pi.php?accion=jHyytR3" enctype="multipart/form-data">
                <div class="modal-header">
                  <h4 class="modal-title"><?= lbl_d0k5 ?></h4>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!--<img v-if="eurl" :src="eurl" width="200px"><br> -->
                  <!--<input class="form-control" type="file" name="u5h8ir5_foto_add" ref="u5h8ir5_foto_add" id="u5h8ir5_foto_add" v-on:change="everImagen();">-->

                    <div class="form-group">
                      <label for="pp_xx003_add"><?= lbl_dD3s ?>*</label>
                      <input type="text" class="form-control" id="pp_xx003_add" name="pp_xx003_add" required>
                    </div>

                    <div class="form-group">
                      <label for="pp_xx001_add"><?= lbl_doct ?>*</label>
                      <input type="file" class="form-control" id="pp_xx001_add" name="pp_xx001_add" required>
                    </div>

                    <div class="form-group">
                      <label for="pp_xx005_add"><?= lbl_7ip0 ?>*</label>
                      <select class="form-control" id="pp_xx005_add" name="pp_xx005_add" required>
                        <option><?= lbl_53lL3xi0N4aD ?></option>
                        <?php foreach ($D0c7ip0s as $key => $value) { ?>
                          <?php if($key === 1) { } elseif($key === 2){ }else{?> 
                            <option value="<?= $key ?>"><?= $value ?></option>    
                          <?php } ?> 
                        <?php } ?>                     
                      </select>
                    </div> 

                    <div class="form-group">
                      <label><?= lbl_fech4V ?></label>
                        <div class="input-group date" id="pp_xx004_add_03"  data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#pp_xx004_add_03" name="pp_xx004_add"/>
                            <div class="input-group-append" data-target="#pp_xx004_add_03" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="pp_xx006_add">Importe</label>
                      <input type="text" class="form-control" id="pp_xx006_add" name="pp_xx006_add">
                    </div>

                    <div class="form-group">
                      <label for="pp_xx008_add">Notificar Alerta en Días</label>
                      <input type="text" class="form-control" id="pp_xx008_add" name="pp_xx008_add">
                    </div>

                    <input type="hidden" name="pp_xx002_add" value="<?= $u5hy68[0]['IDXu7l0s'] ?>">                    
                    <input type="hidden" name="pp_xx007_add" value="<?= $usuario_id ?>">                    

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                <button type="submit" class="btn btn-success"><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
                
                </div>
            </form> 
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->



        </div>
      <?php } */?>



      <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
       <!-- /.card -->
        <div class="modal fade" id="modal-km">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="km" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=hY776">
                <div class="modal-header">
                  <h4 class="modal-title"><?= lbl_ttarkm ?></h4>                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <h4 class="modal-title">Odómetro Actual: <br>
                  <?= $t4rgt7[0]['xkkm7rGms'] ?></h4>       
                  <div class="form-group">
                    <label for="pp_xx0100"><?= lbl_nwKym ?>*</label>
                    <input type="number" class="form-control" id="pp_xx0100" name="pp_xx0100" value="<?= $t4rgt7[0]['xkkm7rGms'] ?>" required>
                    <input type="hidden" name="pp_xx0101" value="<?= $u5hy68[0]['IDXu7l0s'] ?>">
                    <input type="hidden" name="pp_xx0102" value="<?= $usuario_id ?>">
                  </div>


                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> <?= btn_crrTc ?></button>    
                  <button type="submit" class="btn btn-success" ><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>                  
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->



        </div>

        <?php /*<div class="modal fade" id="modal-cmb">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="cmb" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=hY778" enctype="multipart/form-data">
                <div class="modal-header">
                  <h4 class="modal-title">Recarga de Combustible</h4>                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <h4 class="modal-title">Odómetro Actual: <br>
                  <?= $t4rgt7[0]['xkkm7rGms'] ?></h4>       
                </div>
                <div class="modal-body">
                  <?php if($_SESSION['NERR_hY778'] != 0){ ?>
                    <div class="row">
                      <div class="col-12">
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fa-duotone fa-traffic-cone"></i>Por favor verifica <?= $_SESSION['NERR_hY778'] ?> Errore(s) </h5>
                          <ul>
                            <?php foreach ($_SESSION['MSGF_hY778'] as $key => $value) { ?>
                              <li><?= $value ?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="frm_rgcmb001"><?= lbl_nwKym ?>*</label>
                    <input  
                      type="number" 
                      class="form-control" 
                      id="frm_rgcmb001" 
                      name="frm_rgcmb001" 
                      value="<?php if(empty($_SESSION['FRM_hY778']['frm_rgcmb001'])){ echo $t4rgt7[0]['xkkm7rGms']; } else { echo $_SESSION['FRM_hY778']['frm_rgcmb001']; } ?>" 
                      required
                    />
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb002">Litros*</label>
                    <input type="number" step="0.01" class="form-control" id="frm_rgcmb002" name="frm_rgcmb002" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb002'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb002']; } ?>" 
                    />
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb009">Tanque Lleno?*</label>
                    <select class="form-control" id="frm_rgcmb009" name="frm_rgcmb009" requiered>
                      <option value="nada">Selecciona...</option>
                      <option value="1" <?php if($_SESSION['FRM_hY778']['frm_rgcmb009'] == 1){ echo 'selected'; } ?>>Si</option>
                      <option value="2" <?php if($_SESSION['FRM_hY778']['frm_rgcmb009'] == 2){ echo 'selected'; } ?>>No</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb003">Importe*</label>
                    <input type="number" step="0.01" class="form-control" id="frm_rgcmb003" name="frm_rgcmb003" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb003'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb003']; } ?>" required>
                  </div>

                  <div class="form-group">
                      <label>Fecha Ticket*</label>
                      <div class="input-group date" id="frm_rgcmb010" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#frm_rgcmb010" name="frm_rgcmb010" id="frm_rgcmb010" required/>
                        <div class="input-group-append" data-target="#frm_rgcmb010" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                  <div class="form-group">
                    <label for="frm_rgcmb004"># Ticket*</label>
                    <input type="text" class="form-control" id="frm_rgcmb004" name="frm_rgcmb004" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb004'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb004']; } ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb005">Ticket*</label>
                    <input type="file" class="form-control" id="frm_rgcmb005" name="frm_rgcmb005" required>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb006">Proveedor*</label>
                    <select class="form-control" id="frm_rgcmb006" name="frm_rgcmb006" requiered>
                      <option value="nada">Selecciona...</option>
                      <?php foreach ($LDPC as $key => $value) { ?>
                        <option value="<?= $value['xIDP'] ?>" <?php if($_SESSION['FRM_hY778']['frm_rgcmb006'] == $value['xIDP']){ echo 'selected'; } ?> ><?= $value['xPDE'] ?> | <?= $value['xPRF'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <input type="hidden" name="frm_rgcmb007" id="frm_rgcmb007" value="<?= $u5hy68[0]['IDXu7l0s'] ?>">
                  <input type="hidden" name="frm_rgcmb008" id="frm_rgcmb008" value="<?= $usuario_id ?>">

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> <?= btn_crrTc ?></button>    
                  <button type="submit" class="btn btn-success" ><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>                  
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->



        </div>*/ ?>
      <?php } ?>


      <?php //foreach ($ldd as $key => $value) {  /// --- DOCUMENTOS        ?>
        <?php /*if(v4lID44x50("1400-002", $usuario_id) == TRUE){ ?>
          <!-- /.card -->
          <div class="modal fade" id="modal-U<?= $value['xdDc4t'] ?>">
            <div class="modal-dialog">
              <div class="modal-content"> 
                <form name="nuevo" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=d0CvAdd" enctype="multipart/form-data">
                  <div class="modal-header">
                    <h4 class="modal-title"><?= $value['xdDd35'] ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="agd_x001">Número de Trámite*</label>
                      <input type="text" class="form-control" id="agd_x001" name="agd_x001" required>
                    </div>

                    <div class="form-group">
                      <label for="agd_x003"><?= lbl_doct ?></label>
                      <input type="file" class="form-control" id="agd_x003" name="agd_x003">
                    </div>

                    <div class="form-group">
                      <label>Fecha Emisión*</label>
                      <div class="input-group date" id="agd_x004_<?= $value['xdDc4t'] ?>" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#agd_x004_<?= $value['xdDc4t'] ?>" name="agd_x004" id="agd_x004" required/>
                        <div class="input-group-append" data-target="#agd_x004_<?= $value['xdDc4t'] ?>" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Fecha Vencimiento*</label>
                      <div class="input-group date" id="agd_x010_<?= $value['xdDc4t'] ?>" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#agd_x010_<?= $value['xdDc4t'] ?>" name="agd_x010" id="agd_x010" required/>
                        <div class="input-group-append" data-target="#agd_x010_<?= $value['xdDc4t'] ?>" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa-duotone fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                    <!--div class="form-group">
                      <label for="ags_x005">Importe</label>
                      <input type="text" class="form-control" id="ags_x005" name="ags_x005">
                    </div>-->

                    <div class="form-group">
                      <label for="agd_x009">Alerta Personalizada (Días)</label>
                      <input type="text" class="form-control" name="agd_x009" id="agd_x009">
                    </div>

                    <input type="hidden" name="agd_x007" id="agd_x007" value="<?= $value['xdDc4t'] ?>" required>
                    <input type="hidden" name="agd_x006" id="agd_x006" value="<?= $u5hy68[0]['IDXu7l0s'] ?>" required>
                    <input type="hidden" name="agd_x008" id="agd_x008" value="<?= $usuario_id ?>" required>

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                      <button type="submit" class="btn btn-success"><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
                    </div>
                  </div>
                </form> 
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->

          </div>
        <?php }*/ ?>
        <?php /*if(v4lID44x50("1400-004", $usuario_id) == TRUE){ ?>
          <div class="modal fade" id="modal-view-U<?= $value['xdDc4t'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content"> 
                      <form name="nuevo" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=d0CvAdd" enctype="multipart/form-data">
                        <div class="modal-header">
                          <h4 class="modal-title"><?= $value['xdDd35'] ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php if($value['xdDcFil'] != 'error2'){ ?>
                            <div style="text-align: center;">
                              <i class="fa-duotone fa-file-invoice" style="color: #00bc8c; font-size: 5rem;"></i><br><br>
                              <a href="tmp/<?= $usuario_id ?>/<?= $value['xdDcFil'] ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa-duotone fa-download"></i> Descargar</a>
                            </div>
                          <?php } ?>
                          <br>
                            <table class="table table-hover table-head-fixed table-striped" id="example3">
                              <tbody>
                                <tr>
                                  <th>Archivo</th>
                                  <td>
                                    <?php if($value['xdDcFil'] == 'error2'){ ?>
                                      <input type="text" class="form-control" value="No se agrego" id="pxd_dur01" name="pxd_dur01" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= $value['xdDcFil'] ?>" id="pxd_dur01" name="pxd_dur01" disabled>
                                    <?php } ?>
                                  </td>
                                </tr>
                                <tr>


                                

                                  <!--<th>Importe</th>
                                  <td>
                                    <?php if($value['xdDcImx'] == ''){ ?>
                                      <input type="text" class="form-control" value="<?= money_format('%(#10n', '0')  ?>" id="pxd_dur02" name="pxd_dur02" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= money_format('%(#10n', $value['xdDcImx'])  ?>" id="pxd_dur02" name="pxd_dur02" disabled>
                                    <?php } ?>
                                  </td>-->
                                </tr>
                                <tr>  
                                  <th>Fecha Subida</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xdDcfs'] ?>" id="pxd_dur03" name="pxd_dur03" disabled></td>
                                <tr>
                                  <th>Fecha Emisión</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xdDcfe'] ?>" id="pxd_dur07" name="pxd_dur07" disabled></td>
                                </tr>
                                <tr>
                                  <th>Fecha Vencimiento</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xD3S'] ?>" id="pxd_dur04" name="pxd_dur04" disabled></td>
                                </tr>
                                <tr>
                                  <th>Alerta Personalizado (Dias)</th>
                                  <td>
                                    <?php if($value['xdDcALT'] == ''){ ?>
                                      <input type="text" class="form-control" value="No se Definio" id="pxd_dur05" name="pxd_dur05" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= $value['xdDcALT'] ?>" id="pxd_dur05" name="pxd_dur05" disabled>
                                    <?php } ?>
                                  </td>
                                </tr>
                                <tr>
                                  <th colspan="2" style="text-align: center;">Número de Trámite</th>
                                </tr>
                                <tr>
                                  <td colspan="2"><input type="text" class="form-control" id="pxd_dur06" name="pxd_dur06" value="<?= $value['xdDcD3s'] ?>" disabled></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> Cerrar</button>
                          <?php if(v4lID44x50("1400-003", $usuario_id) == TRUE){ ?>
                            <a href="app?accion=eDtD&DidxD=<?= $eCry($value['xdDcID']) ?>&vh3iP=<?= $eCry($vh3iP) ?>" class="btn btn-warning" id="editar" name="editar"><i class="fa-duotone fa-edit"></i> Editar</a>
                          <?php } ?>
                        </div>
                    </form> 
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->



                </div>
              <?php } ?>
      <?php   //}
            }*/ ?>



      <?php foreach ($lds as $key => $value) { 
             // if($value['pd'] == true){
        ?>
              <?php if(v4lID44x50("1300-100", $usuario_id) == TRUE){ ?>
                <!-- /.card -->
                <div class="modal fade" id="modal-<?= $value['xDID'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content"> 
                      <form name="nuevo" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=s3RvAdd" enctype="multipart/form-data"> 
                        <div class="modal-header">
                          <h4 class="modal-title"><?= $value['xDd35'] ?></h4>
                          
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!--<img v-if="eurl" :src="eurl" width="200px"><br> -->
                          <!--<input class="form-control" type="file" name="u5h8ir5_foto_add" ref="u5h8ir5_foto_add" id="u5h8ir5_foto_add" v-on:change="everImagen();">-->
                            <div class="form-group">
                              <label for="ags_x001">Folio*</label>
                              <input type="text" class="form-control" id="ags_x001" name="ags_x001" required>
                            </div>

                            <div class="form-group">
                              <label for="ags_x002">Descripción</label>
                              <textarea class="form-control" rows="15" placeholder="Agrega Descripcion ..." name="ags_x002" id="ags_x002"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="ags_x003"><?= lbl_doct ?></label>
                              <input type="file" class="form-control" id="ags_x003" name="ags_x003">
                            </div>


                            

                            <div class="form-group">
                              <label>Fecha Emisión*</label>
                                <div class="input-group date" id="ags_x004_<?= $value['xDID'] ?>" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#ags_x004_<?= $value['xDID'] ?>" name="ags_x004" id="ags_x004" required/>
                                    <div class="input-group-append" data-target="#ags_x004_<?= $value['xDID'] ?>" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa-duotone fa-calendar"></i> <?= $value['xDTMP'] ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="ags_x005">Importe</label>
                              <input type="text" class="form-control" id="ags_x005" name="ags_x005">
                            </div>

                            <div class="form-group">
                              <label for="ags_x009">Alerta Personalizada (Días)</label>
                              <input type="text" class="form-control" name="ags_x009" id="ags_x009">
                            </div>


                            <input type="hidden" name="ags_x007" id="ags_x007" value="<?= $value['xDID'] ?>" required>
                            <input type="hidden" name="ags_x006" id="ags_x006" value="<?= $u5hy68[0]['IDXu7l0s'] ?>" required>
                            <input type="hidden" name="ags_x008" id="ags_x008" value="<?= $usuario_id ?>" required>

                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                        <button type="submit" class="btn btn-success"><i class="fa-duotone fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
                        
                        </div>
                    </form> 
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->



                </div>
              <?php } ?>
              <?php if(v4lID44x50("1300-102", $usuario_id) == TRUE){ ?>
                <div class="modal fade" id="modal-view-<?= $value['xDID'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content"> 
                      <form name="nuevo" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=s3RvAdd" enctype="multipart/form-data">
                        <div class="modal-header">
                          <h4 class="modal-title"><?= $value['xDd35'] ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php if($value['xDcFil'] != 'error2'){ ?>
                            <div style="text-align: center;">
                              <i class="fa-duotone fa-file-invoice" style="color: #00bc8c; font-size: 5rem;"></i><br><br>
                              <a href="tmp/<?= $usuario_id ?>/<?= $value['xDcFil'] ?>" class="btn btn-info btn-sm" target="_blank"><i class="fa-duotone fa-download"></i> Descargar</a>
                            </div>
                          <?php } ?>
                          <br>
                            <table class="table table-hover table-head-fixed table-striped" id="example3">
                              <tbody>
                                <tr>
                                  <th>Archivo</th>
                                  <td>
                                    <?php if($value['xDcFil'] == 'error2'){ ?>
                                      <input type="text" class="form-control" value="No se agrego" id="px_dur01" name="px_dur01" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= $value['xDcFil'] ?>" id="px_dur01" name="px_dur01" disabled>
                                    <?php } ?>
                                  </td>
                                </tr>
                                <tr>


                                

                                  <th>Importe</th>
                                  <td>
                                    <?php if($value['xDcImx'] == ''){ ?>
                                      <input type="text" class="form-control" value="<?= money_format('%(#10n', '0')  ?>" id="px_dur02" name="px_dur02" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= money_format('%(#10n', $value['xDcImx'])  ?>" id="px_dur02" name="px_dur02" disabled>
                                    <?php } ?>
                                  </td>
                                </tr>
                                <tr>  
                                  <th>Fecha Subida</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xDcfs'] ?>" id="px_dur03" name="px_dur03" disabled></td>
                                <tr>
                                  <th>Fecha Emisión</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xDcfe'] ?>" id="px_dur07" name="px_dur07" disabled></td>
                                </tr>
                                <tr>
                                  <th>Fecha Vencimiento</th>
                                  <td><input type="text" class="form-control" value="<?= $value['xDcfv'] ?>" id="px_dur04" name="px_dur04" disabled></td>
                                </tr>
                                <tr>
                                  <th>Alerta Personalizado (Dias)</th>
                                  <td>
                                    <?php if($value['xDcALT'] == ''){ ?>
                                      <input type="text" class="form-control" value="No se Definio" id="px_dur05" name="px_dur05" disabled>
                                    <?php }
                                          else { ?>
                                      <input type="text" class="form-control" value="<?= $value['xDcALT'] ?>" id="px_dur05" name="px_dur05" disabled>
                                    <?php } ?>
                                  </td>
                                </tr>
                                <tr>
                                  <th colspan="2" style="text-align: center;">Descripción</th>
                                </tr>
                                <tr>
                                  <td colspan="2"><textarea class="form-control" id="px_dur06" name="px_dur06" disabled><?= $value['xDcD3s'] ?></textarea></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-duotone fa-times"></i> Cerrar</button>
                          <?php if(v4lID44x50("1300-101", $usuario_id) == TRUE){ ?>
                            <a href="app?accion=eDtSrv&SidxD=<?= $eCry($value['xDcID']) ?>&vh3iP=<?= $eCry($vh3iP) ?>" class="btn btn-warning" id="editar" name="editar"><i class="fa-duotone fa-edit"></i> Editar</a>
                          <?php } ?>
                        </div>
                    </form> 
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->



                </div>
              <?php } ?>
      <?php   //}
            } ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include('parciales/3p1416e.php');
?>
    <script>
    $(function () {
     $('#pp_xx004_add_01').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#pp_xx004_add_02').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#pp_xx004_add_03').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
      $('#pp_xx009_add').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
      $('#pp_xx009_add2').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
      
      <?php foreach ($lds as $key => $value) { ?>

        $('#ags_x004_<?= $value['xDID'] ?>').datetimepicker({
          format: 'YYYY-MM-DD',
          icons: {
            time: 'fa-duotone fa-clock-o',
            date: 'fa-duotone fa-calendar',
            up: 'fa-duotone fa-arrow-up',
            down: 'fa-duotone fa-arrow-down',
            previous: 'fa-duotone fa-chevron-left',
            next: 'fa-duotone fa-chevron-right',
            today: 'fa-duotone fa-calendar-day',
            clear: 'fa-duotone fa-trash',
            close: 'fa-duotone fa-times'
          },
          calendarWeeks: true,
          locale: 'es',
          toolbarplacement: 'bottom',
          buttons:  {
              showToday: true,
              showClear: true,
              showClose: true
          }
        });
      <?php } ?>
      <?php foreach ($ldd as $key => $value) { ?>

        $('#agd_x004_<?= $value['xDID'] ?>').datetimepicker({
          format: 'YYYY-MM-DD',
          icons: {
            time: 'fa-duotone fa-clock-o',
            date: 'fa-duotone fa-calendar',
            up: 'fa-duotone fa-arrow-up',
            down: 'fa-duotone fa-arrow-down',
            previous: 'fa-duotone fa-chevron-left',
            next: 'fa-duotone fa-chevron-right',
            today: 'fa-duotone fa-calendar-day',
            clear: 'fa-duotone fa-trash',
            close: 'fa-duotone fa-times'
          },
          calendarWeeks: true,
          locale: 'es',
          toolbarplacement: 'bottom',
          buttons:  {
              showToday: true,
              showClear: true,
              showClose: true
          }
        });
        $('#agd_x010_<?= $value['xDID'] ?>').datetimepicker({
          format: 'YYYY-MM-DD',
          icons: {
            time: 'fa-duotone fa-clock-o',
            date: 'fa-duotone fa-calendar',
            up: 'fa-duotone fa-arrow-up',
            down: 'fa-duotone fa-arrow-down',
            previous: 'fa-duotone fa-chevron-left',
            next: 'fa-duotone fa-chevron-right',
            today: 'fa-duotone fa-calendar-day',
            clear: 'fa-duotone fa-trash',
            close: 'fa-duotone fa-times'
          },
          calendarWeeks: true,
          locale: 'es',
          toolbarplacement: 'bottom',
          buttons:  {
              showToday: true,
              showClear: true,
              showClose: true
          }
        });
      <?php } ?>

    });

  </script>
   <script>
    $(function () {
      $('#frm_rgcmb010').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        icons: {
          time: 'fa-duotone fa-clock-o',
          date: 'fa-duotone fa-calendar',
          up: 'fa-duotone fa-arrow-up',
          down: 'fa-duotone fa-arrow-down',
          previous: 'fa-duotone fa-chevron-left',
          next: 'fa-duotone fa-chevron-right',
          today: 'fa-duotone fa-calendar-day',
          clear: 'fa-duotone fa-trash',
          close: 'fa-duotone fa-times'
        },
        calendarWeeks: true,
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