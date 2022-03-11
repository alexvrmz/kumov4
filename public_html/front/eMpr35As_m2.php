<?php
/// --- Todos los textos en variables 2021/05/21
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_eMpr35As.php');
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
          <?php if(v4lID44x50("1100-002", $usuario_id) == TRUE){ /// --- AGREGAR Empresas ?>
            <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;"><i class="fad fa-building"></i> <?= btn_46r364rU5u4ri0 ?></button>
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
    <?php if($flo0 !=''){ ?>
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_empm2_01 ?> <b><?= $NF ?></b></h3>
        </div>
      </div>
    <?php } ?>
            
    <?php if($n_e == '' || $n_e == null || $n_e == 0){ ?>
      <div class="row">
        <div class="col-12">
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fad fa-info"></i><?= lbl_3mp1 ?></h5>
            <?= lbl_3mp2 ?> 
          </div>
        </div>
      </div>
    <?php }
          else { ?>
            <?php if($vst == 1){ ?>
                <div class="row">
                  <?php foreach ($d3m as $key => $u5h34r5) { ?>
                    <div class="col-md-4">
                      <div class="card card-widget widget-user shadow">
                        <div class="widget-user-header bg-orange" style="height: 90px;">
                          <h3 class="widget-user-username"><?= dCry2($u5h34r5['XrNICEx']) ?></h3>                
                          <h6 class="widget-user-desc"><?= dCry2($u5h34r5['XrRZEx']) ?></h6>
                        </div>                          
                        <div class="btn-group">
                          <?php if(v4lID44x50("1100-004", $usuario_id) == TRUE){ ?>
                            <a href="app?accion=v3hiXs&eMpr3=<?= $eCry($u5h34r5['XrIDEx']) ?>" type="button" class="btn btn-info btn-flat" style="width: 100%;"><i class="fad fa-eye"></i><?= lbl_2mp3 ?></a>
                          <?php } ?>
                          <?php if(v4lID44x50("1100-003", $usuario_id) == TRUE){ ?>
                            <a href="app?accion=emPr3Edi7&eMpr3=<?= $eCry($u5h34r5['XrIDEx']) ?>" type="button" class="btn btn-warning btn-flat" style="width: 100%;"><i class="fad fa-edit"></i><?= lbl_2mp4 ?></a>
                          <?php } ?>
                        </div>       
                        <div class="card-footer" style="padding-top: 5px;">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="description-block">
                                <h5 class="description-header"><?= $u5h34r5['nf'] ?></h5>
                                <span class="description-text"><?= lbl_empm2_02 ?></span>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
            <?php }
                  else{ ?>
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><?= lbl_tab001 ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover table-head-fixed table-striped">
                            <thead>
                              <tr>
                                <?php if($usuario_id == 1){ ?>
                                  <th><?= lbl_tab002 ?></th>
                                <?php } ?>
                                <th><?= lbl_tab003 ?></th>
                                <th><?= lbl_tab004  ?></th>
                                <th><?= lbl_tab005 ?></th>
                                <th><?= lbl_tab006 ?></th>
                                <th><?= lbl_tab009 ?></th>
                                <th><?= lbl_tab008 ?></th>
                                <th><?= lbl_tab007 ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($d3m as $key => $u5h34r5) { ?>
                                <tr>
                                  <?php if($usuario_id == 1){ ?>
                                    <td><?= $u5h34r5['XrIDEx'] ?></td>
                                  <?php } ?>
                                  <td><p style="margin: 0;" class="corta-texto"><?= dCry2($u5h34r5['XrNICEx']) ?></p></td>
                                  <td><p style="margin: 0;" class="corta-texto"><?= dCry2($u5h34r5['XrRZEx']) ?></p></td>
                                  <td><p style="margin: 0;" class="corta-texto"><?= $u5h34r5['XrRFCEx'] ?></p></td>
                                  <td><?= c0nNumFl($u5h34r5['XrIDEx'], 0) ?></td>
                                  <td><?= c0nNumUs(0, $u5h34r5['XrIDEx']) ?></td>
                                  <td><?= c0nNumAu(0, $u5h34r5['XrIDEx']) ?></td>
                                  <td>
                                    <div class="row">
                                      <div class="col-6">
                                 
                                        <?php if(v4lID44x50("1100-004", $usuario_id) == TRUE){ ?>
                                          <a href="app?accion=v3hiXs&eMpr3=<?= $eCry($u5h34r5['XrIDEx']) ?>" type="button" class="btn btn-info btn-flat btn-xs corta-texto" style="width: 100%;"><i class="fad fa-eye"></i> <?= lbl_2mp3 ?></a>
                                        <?php } ?>
                                      </div>
                                      <div class="col-6">
                                        <?php if(v4lID44x50("1100-003", $usuario_id) == TRUE){ ?>
                                          <a href="app?accion=emPr3Edi7&eMpr3=<?= $eCry($u5h34r5['XrIDEx']) ?>" type="button" class="btn btn-warning btn-flat btn-xs corta-texto" style="width: 100%;"><i class="fad fa-edit"></i> <?= lbl_2mp4 ?></a>
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


                    <?php if($flo0 != ''){ ?>
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><?= lbl_Atab001 ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table id="example1" class="table table-hover table-head-fixed table-striped">
                            <thead>
                              <tr>
                                <?php if($usuario_id == 1){ ?>
                                  <th><?= lbl_Atab002 ?></th>
                                <?php } ?>
                                <th><?= lbl_Atab003 ?></th>
                                <th><?= lbl_Atab013 ?></th>
                                <th><?= lbl_Atab004 ?></th>
                                <th><?= lbl_Atab006 ?></th>
                                <th><?= lbl_Atab010 ?></th>
                                <th><?= lbl_Atab011 ?></th>
                                <th><?= lbl_Atab014 ?></th>
                                <th><span style="text-align: center;"><?= lbl_Atab005 ?></span></th>

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
                                            $tt = '<i class="fad fa-key"></i> '.lbl_Atab015;             $btn = 'success';
                                            $ax1 = '<i class="fad fa-garage-open"></i> '.lbl_Atab016;    $hfr1 = $href.$eCry(2).'&e='.$eCry(lbl_Atab016); $bg1 = 'bg-warning';
                                            $ax2 = '<i class="fad fa-ban"></i> '.lbl_Atab017;            $hfr2 = $href.$eCry(3).'&e='.$eCry(lbl_Atab017); $bg2 = 'bg-danger';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_Atab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }
                                          elseif($u5h34r5['eD0'] == 2){  
                                            $tt = '<i class="fad fa-garage-open"></i> '.lbl_Atab016;     $btn = 'warning';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_Atab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-ban"></i> '.lbl_Atab017;            $hfr2 = $href.$eCry(3).'&e='.$eCry(lbl_Atab017); $bg2 = 'bg-danger';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_Atab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }
                                          elseif($u5h34r5['eD0'] == 3){
                                            $tt = '<i class="fad fa-ban"></i> '.lbl_Atab017;             $btn = 'danger';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_Atab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-garage-open"></i> '.lbl_Atab016;    $hfr2 = $href.$eCry(2).'&e='.$eCry(lbl_Atab016); $bg2 = 'bg-warning';
                                            $ax3 = '<i class="fad fa-user-hard-hat"></i> '.lbl_Atab018;  $hfr3 = 'app?accion=asNxV&v3h='.$eCry($u5h34r5['IDXu7l0s']); $bg3 = 'bg-info';
                                          }
                                          elseif($u5h34r5['eD0'] == 4){
                                            $tt = '<i class="fad fa-user-hard-hat"></i> '.lbl_Atab018;   $btn = 'info';
                                            $ax1 = '<i class="fad fa-key"></i>  '.lbl_Atab015;           $hfr1 = 'ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx='.$eCry($u5h34r5['IDXu7l0s']).'&eoi='.$eCry(1); $bg1 = 'bg-success';
                                            $ax2 = '<i class="fad fa-garage-open"></i> '.lbl_Atab016;    $hfr2 = $href.$eCry(2).'&e='.$eCry(lbl_Atab016); $bg2 = 'bg-warning';
                                            $ax3 = '<i class="fad fa-ban"></i> '.lbl_Atab017;            $hfr3 = $href.$eCry(3).'&e='.$eCry(lbl_Atab017); $bg3 = 'bg-danger';
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
    <?php } ?>

    <?php if($px001 != ''){ ?>
      <script type="text/javascript">
        $(window).on('load', function() {
          $('#modal-nuevo').modal('show');
        });
      </script>
    <?php } ?>

    <?php if(v4lID44x50("1100-002", $usuario_id) == TRUE){ /// --- AGREGAR Empresas ?>
      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ApiPHP/eMpr35As_4pi.php?accion=eMprxXx21" id="nuevo1">
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
                  <input type="text" class="form-control" id="pp_xx002" name="pp_xx002" value="<?= $px002 ?>"  maxlength="60">
                </div>

                <div class="form-group">
                  <label for="pp_xx003"><?= lbl_n3w003 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx003" name="pp_xx003" value="<?= $px003 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx012"><?= lbl_n3w012 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx012" name="pp_xx012" value="<?= $px012 ?>">
                </div>   

                <div class="form-group">
                  <label for="pp_xx004"><?= lbl_n3w004 ?></label>
                  <input type="text" class="form-control" id="pp_xx004" name="pp_xx004" value="<?= $px004 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx005"><?= lbl_n3w005 ?></label>
                  <input type="text" class="form-control" id="pp_xx005" name="pp_xx005" value="<?= $px005 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx006"><?= lbl_n3w006 ?></label>
                    <input type="text" class="form-control" id="pp_xx006" name="pp_xx006" value="<?= $px006 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx008"><?= lbl_n3w008 ?></label>
                  <input type="text" class="form-control" id="pp_xx008" name="pp_xx008" value="<?= $px008 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx009"><?= lbl_n3w009 ?>*</label>
                  <input type="text" class="form-control" id="pp_xx009" name="pp_xx009" value="México" disabled>
                </div>   
                      
                <div class="form-group">
                  <label for="pp_xx010"><?= lbl_n3w010 ?>*</label>
                  <select class="form-control" id="pp_xx010" name="pp_xx010" onchange="this.form.submit()">
                    <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach (consulta_estados() as $key => $tR4ns) {  ?>
                        <option value="<?= $tR4ns['Ed0iD'] ?>"<?php if ($px010 == $tR4ns['Ed0iD']){ echo ' selected'; } ?> ><?= $tR4ns['Ed0N0m'] ?></option>    
                      <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pp_xx011"><?= lbl_n3w011 ?>*</label>
                  <select class="form-control" id="pp_xx011" name="pp_xx011">
                    <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach (C0nMun($px010) as $key => $tR4ns) {  ?>
                        <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($px011 == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                      <?php } ?>
                  </select>
                </div>

                <?php /// --- Este select es para cuando en bd esten las colonias, debajo esta un input en su lugar
                  /*
                  <div class="form-group">
                    <label for="pp_xx007"><?= lbl_n3w007 ?>*</label>
                    <select class="form-control" id="pp_xx007" name="pp_xx007" required>
                      <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($kol0 as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['KID09o'] ?>"<?php if ($px007 == $tR4ns['KID09o']){ echo ' selected'; } ?> ><?= $tR4ns['kNoMbn'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>*/
                ?>

                <div class="form-group">
                  <label for="pp_xx007"><?= lbl_n3w007 ?></label>
                  <input type="text" class="form-control" id="pp_xx007" name="pp_xx007" value="<?= $px007 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx013"><?= lbl_n3w013 ?></label>
                  <input type="text" class="form-control" id="pp_xx013" name="pp_xx013" value="<?= $px013 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx014"><?= lbl_n3w014 ?></label>
                    <input type="text" class="form-control" id="pp_xx014" name="pp_xx014" value="<?= $px014 ?>">
                </div>

                <div class="form-group">
                  <label for="pp_xx015"><?= lbl_n3w015 ?></label>
                  <input type="email" class="form-control" id="pp_xx015" name="pp_xx015" value="<?= $px015 ?>">
                </div>
                
                <?php if($flo0 != ''){ ?>
                  <div class="form-group">
                    <label for="pp_xx017"><?= lbl_n3w016 ?>*</label>
                    <select class="form-control" id="pp_xx017" name="pp_xx017">
                      <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach (C0nFl0($usuario_id) as $key => $tR4ns) {  ?>
                          <option value="<?= $tR4ns['xfdifx'] ?>"<?php if ($px017 == $tR4ns['xfdifx'] || $flo0 == $tR4ns['xfdifx']){ echo ' selected'; } ?> ><?= $tR4ns['xfmnfx'] ?></option>    
                        <?php } ?>
                    </select>
                  </div>
                <?php } ?>

                <div class="form-group">                    
                  <input type="hidden" class="form-control" id="pp_xx016" name="pp_xx016" value="<?= $u5h34r5 ?>">
                </div>

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
                <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
              </div>
            </form> 
            <?php unset($_SESSION['m3ns4j3Frm']); ?>
          </div>
        </div>
      </div> 
    <?php } ?>

  </section>
</div>
<?php include('parciales/3p1416e.php'); ?>
