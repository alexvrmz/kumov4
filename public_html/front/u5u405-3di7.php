<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_u5u405-3di7.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

<?php
  foreach ($datosUsuario as $key => $usuario) { ?>      
    <!-- Main content -->
    <div class="row">
      <?php if($usuario['u5hOn44P8ir5'] == 1){ ?>
        <div class="col-md-6">
      <?php } else { ?>
        <div class="col-12">
      <?php } ?>
          <!-- acciones -->
          <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
            <div class="card-header">
                <h3 class="card-title"><?= lbl_acx0 ?></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fad fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                        
                    <a href="app?accion=5u540l" class="btn btn-app bg-success">
                      <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
                    </a>   
                  <?php if(v4lID44x50("500-004", $usuario_id) == TRUE): /// --- permiso suspender usuario ?>
                    <?php if($usuario['u5hOn8ir5'] == '1'){ ?>
                      <a href="ApiPHP/u5u405_4pi.php?accion=10300&u5h8ir5nm=<?= $eCry($usuario['usuarioID']) ?>" class="btn btn-app bg-danger">
                        <i class="fad fa-user-slash"></i> <?= btn_5u5p3Nd3R ?>
                      </a>
                    <?php } elseif($usuario['u5hOn8ir5'] == '0') { ?>
                      <a href="ApiPHP/u5u405_4pi.php?accion=10400&u5h8ir5nm=<?= $eCry($usuario['usuarioID']) ?>" class="btn btn-app bg-success">
                        <i class="fad fa-user"></i> <?= btn_d355u5p3Nd3R ?>
                      </a>
                    <?php } ?>
                  <?php endif; ?>

                  <?php /*if(v4lID44x50("500-006", $usuario_id) == TRUE && $usuario['u5hOn44P8ir5'] == 0): /// --- generar Token ?>
                          <a href="ApiPHP/g3nt0k3n_4pi.php?accion=50210&u5h8ir5nm=<?= $eCry($usuario['usuarioID']) ?>" class="btn btn-app bg-purple"><i class="fad fa-sync-alt"></i> <?= btn_07r0Di5p02 ?></a>
                  <?php endif; */?>

                  <?php if(v4lID44x50("300-003", $usuario_id) == TRUE): /// --- editar permisos ?>
                      <a href="app?accion=permisosAsignados&u5u4oxX=<?= $eCry($usuario['usuarioID']) ?>" class="btn btn-app bg-warning"><i class="fad fa-key"></i> <?= btn_p3rm505 ?></a>
                  <?php endif; ?> 
            </div>
          </div>
          <!-- acciones -->
        </div>
      <?php if($usuario['u5hOn44P8ir5'] == 1){ ?>
        <div class="col-md-6">
          <!-- acciones -->
          <?php if($usuario['u5hOn44P8ir5'] == 1){ ?>
            <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
              <div class="card-header">
                <h3 class="card-title"><?= lbl_dpsitvncul2 ?></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fad fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2" style="text-align: center;">
                    <i class="fad fa-mobile bg-accent" style="font-size: 60px;"></i>
                  </div>
                  <div class="col-md-10">
                    <b>Nombre Dispositivo:</b> <a><?= $usuario['sjh77'] ?></a><br>
                    <b>ID Dispositivo:</b> <a><?= $usuario['dis66'] ?></a><br>
                    <a href="#" class="btn bg-blue btn-flat btn-xs disabled" title="Proximamente..."><i class="fad fa-history"></i> Ver Historial</a>
                    <?php if(v4lID44x50("500-006", $usuario_id) == TRUE): /// --- generar Token ?>
                      <a href="ApiPHP/g3nt0k3n_4pi.php?accion=50210&u5h8ir5nm=<?= $eCry($usuario['usuarioID']) ?>" class="btn btn-flat btn-xs bg-purple"><i class="fad fa-sync-alt"></i> <?= btn_07r0Di5p0 ?></a>
                    <?php endif; ?>
                  </div>
                </div>               
              </div>
            </div>
          <?php } ?>
          <!-- acciones -->
        </div>
      <?php } ?>

    <?php if($_SESSION['cxxt453_add'] != '' && $_SESSION['pp_xx005_add'] != ''){ ?>
        <div class="col-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fad fa-shield-check"></i> Info</h5>
            La clave del usuario: <span class="badge bg-warning" title="Usuario"><?= $_SESSION['pp_xx005_add'] ?></span> es: <span class="badge bg-warning" title="Contraseña"><?= $_SESSION['cxxt453_add'] ?></span> <br>
            Guardala en un lugar seguro, despues de cerrar este recuadro o actualizar la pagina, ya no se mostrara.
          </div>
        </div>
      <?php } 
        unset($_SESSION['cxxt453_add']);
        unset($_SESSION['pp_xx005_add']);
      ?>

      <!-- Default box -->
      <?php if($ea === true){ ?>
        <div class="card <?= $brr4 ?> card-outline col-md-12 col-sm-12">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_assia ?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
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
                    <th><?= lbl_t4beco ?></th>
                    <th><?= lbl_t4bpl4 ?></th>
                    <th><?= lbl_t4bmk ?></th>
                    <th><?= lbl_m0d ?></th>                    
                    <th><?= lbl_ft ?></th>
                    <?php if(v4lID44x50("700-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                      <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php if($usuario_id == 1){ ?>
                      <td><?= $vXIDxv ?></td>
                    <?php } ?>
                    <td class="corta-texto"><?= $vXECxv ?></td>
                    <td class="corta-texto"><?= $vXPLxv ?></td>
                    <td class="corta-texto"><?= $vXMKxv ?></td>
                    <td class="corta-texto"><?= $xVMDxv ?> <?= $xVTPxv ?> <?= $xVANxV ?></td>
                    <td><span style="margin: 0;width: 80px;"><?= $xVFTxv ?></span></td>
                    <?php if(v4lID44x50("700-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                      <td>
            
                        <div class="btn-group"> 
                          <a href="app?accion=v3hFh4_sd04&gju8UUy=<?= $eCry($vXIDxv) ?>" type="button" class="btn btn-warning btn-flat btn-xs" title="Editar"><i class="fad fa-edit"></i></a>
                          <a href="ApiPHP/v3hiCs_4pi.php?accion=d3svA&aIDdx=<?= $eCry($vXIDxv) ?>&uxu=<?= $eCry($usuario['usuarioID']) ?>&r3l=<?= $eCry($xDridn) ?>" type="button" class="btn btn-danger btn-flat btn-xs"><i class="fad fa-unlink" title="Desasignar"></i></a>
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
            elseif($ea === false){ ?>

      <?php } ?>

        <div class="col-md-9">
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_1er7i7u ?><?php if($usuario['u5hOn8ir5'] == '0'){ ?> <small><?= lbl_ud53r3r5w; }?></small></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="card-body p-0">
                <?php if(!empty($_SESSION['m3ns4j3Frm'])){ ?>
                  Por favor verifica <?= $_SESSION['err'] ?> pendiete(s):
                  <ul>
                    <?php foreach ($_SESSION['m3ns4j3Frm'] as $key => $value) { ?>
                      <li><?= $value ?></li>
                    <?php } ?>
                  </ul>
                <?php } ?>

              <form name="edit_user" method="post" action="ApiPHP/u5u405_4pi.php?accion=5u540l_03">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx001"><?= lbl_n3w1erN0m8r3 ?>*</label>
                      <?php if($pp_xx001 != ''){ $px001 = $dCry($pp_xx001); } else { $px001 = $usuario['usuarioN1']; } ?>
                      <input type="text" class="form-control" name="pp_xx001" id="pp_xx001" placeholder="Primer Nombre" value="<?= $px001 ?>" <?php //required ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx002"><?= lbl_n3w2dON0m8r3 ?></label>
                      <input type="text" class="form-control" name="pp_xx002" id="pp_xx002" placeholder="Segundo Nombre" value="<?= $usuario['usuarioN2'] ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx003"><?= lbl_n3w4PP ?>*</label>
                      <input type="text" class="form-control" name="pp_xx003" id="pp_xx003" placeholder="Apellido Paterno" value="<?= $usuario['usuarioA1'] ?>" <?php //required ?>>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="pp_xx004"><?= lbl_n3w4PM ?></label>
                      <input type="text" class="form-control" name="pp_xx004" id="pp_xx004" placeholder="Apellido Materno" value="<?= $usuario['usuarioA2'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="pp_xx005"><?= lbl_n3w3M4il ?>*</label>
                      <input type="email" class="form-control" name="pp_xx005" id="pp_xx005" placeholder="<?= lbl_n3w3M4il ?>" value="<?= $usuario['u5hUS8ir5'] ?>" <?php //required ?>>
                    </div>
                  </div>
  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="cxxt453"><?= lbl_n3wP455w ?></label>
                      <input type="password" class="form-control" name="cxxt453" id="cxxt453" >
                    </div>
                  </div>

                  <!--div class="col-sm-12">
                    <div class="form-group">
                      <label for="pp_xx007"><?= lbl_n3wd8ir ?></label>
                      <input type="text" class="form-control" name="pp_xx007" id="pp_xx007" disabled value="<?= $usuario['u5hUS8ir5'] ?>">
                    </div>
                  </div>--->
                  <?php //if(v4lID44x50("500-005", $usuario_id) == TRUE){ /// --- Permiso ver llaves y token ?>

                    <!--<button type="button" data-toggle="modal" data-target="#modal_llvs" class="btn bg-gradient-warning btn-app">
                      <i class="fad fa-eye"></i> <?= lbl_asdE30 ?>
                    </button>

                                  

                    <div class="col-sm-12">&nbsp;
                    </div>-->

                  <?php //} ?>

                  <div class="col-sm-12">
                    <input type="hidden" name="u5h8ir5nm" id="u5h8ir5nm" value="<?= $usuario['usuarioID'] ?>">
                    <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
                  </div>
                </div>  

            
              </form>

            </div>
          </div>
          <!--/.card-body -->
        </div>
                  </div>


        <div class="col-md-3">
          <script type="text/javascript">
            atOptions = {
              'key' : 'abd0f6a20a26d349d295f4d6dd323474',
              'format' : 'iframe',
              'height' : 250,
              'width' : 300,
              'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://writtenanonymousgum.com/abd0f6a20a26d349d295f4d6dd323474/invoke.js"></scr' + 'ipt>');
          </script>
        </div>
      </div>

      <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>

      <!--
      <div class="modal fade" id="modal_llvs">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ApiPHP/u5u405_4pi.php?accion=5u540l_04">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3wu5u4ri0 ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                
                <?php //if(v4lID44x50("500-005", $usuario_id) == TRUE){ /// --- Permiso ver llaves y token ?>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="ll_privada"><?= lbl_lL4v3Pv ?></label>
                      <textarea class="form-control" rows="3"><?= $usuario['u5h8ir5_llave_privada'] ?></textarea>     
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="ll_publica"><?= lbl_lL4v3Pu ?></label>
                      <textarea class="form-control" rows="3"><?= $usuario['u5h8ir5_llave_publica'] ?></textarea>            
                    </div>
                    
                  </div> 

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="u5htK8ir5"><?= lbl_70k3n ?></label>
                      <input type="text" class="form-control" name="u5htK8ir5" id="u5htK8ir5" value="<?= $usuario['u5htK8ir5'] ?>">
                    </div>
                  </div>                  

                  <div class="col-sm-12">&nbsp;
                  </div>

                <?php //} ?>

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
              
              
              </div>
           </form> 
          </div>
         
        </div>
        



      </div>-->

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  <?php } ?>
<?php
include('parciales/3p1416e.php');
 ?>
