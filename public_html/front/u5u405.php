<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_u5u405.php');
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
            <!--  
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fad fa-times"></i>
            </button>--> 
          </div>
        </div>
        <div class="card-body">
          
          <div class="card-body p-0">        
            <!--
            <a class="btn btn-app bg-success" href="#">
              <span class="badge bg-danger"><?= $num_usr ?></span>
              <i class="fad fa-users"></i> <?= lbl_7074l ?>
            </a>   
          
            <a class="btn btn-app bg-success" href="#">
              <span class="badge bg-danger"><?= $num_usr_on ?></span>
              <i class="fad fa-users"></i> <?= lbl_4c7iv05 ?>
            </a>

            <a class="btn btn-app bg-danger" href="#">
              <span class="badge bg-warning"><?= $num_usr_off ?></span>
              <i class="fad fa-users-slash"></i> <?= lbl_iN4c7iv05 ?>
            </a>-->
            <?php if(v4lID44x50("500-002", $usuario_id) == TRUE){ /// --- AGREGAR USUARIOS ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;"><i class="fad fa-user-plus"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>


          </div>

        </div>
      </div>

      <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>
      

      <?php if($nu == 0){ ?>
        <div class="col-12">
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fad fa-traffic-cone"></i> Info</h5>
            No existen usuarios registrados
          </div>
        </div>
      <?php } 
            else { ?>
        <div class="card <?= $brr4 ?> card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= lbl_li574D4u5u4ri0 ?></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fad fa-minus"></i>
              </button>
            </div>
          </div>
        
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <?php if($usuario_id == 1){ ?>
                    <th style="width: 10px"><?= lbl_t4biD ?></th>
                  <?php } ?>
                  <th style="width: 20px;"><?= lbl_t4bf070 ?></th>
                  <th><?= lbl_t4bN0m8r3 ?></th>
                  <th><?= lbl_t4bu5u4ri0 ?></th>
                  <?php if(v4lID44x50("500-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                    <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 0; 
                  foreach ($LU as $key => $u5h34r5) { ?>
                      <tr>
                        <?php if($usuario_id == 1){ ?>
                          <td><?= $u5h34r5['xuid'] ?></td>
                        <?php } ?>
                        <td><img class="direct-chat-img" style="width: 32px; height:auto;" src="<?= $u5h34r5['xuft'] ?>"></td>
                        <td><?= $u5h34r5['xunc'] ?></td>
                        <td><?= $u5h34r5['xuus'] ?></td>
                        <?php if(v4lID44x50("500-003", $usuario_id) == TRUE){ /// --- EDITAR USUARIOS ?>
                          <td>
                            <a href="app?accion=5u540l_02&u5u4oxX=<?= $eCry($u5h34r5['xuid']) ?>" type="button" class="btn btn-block bg-gradient-warning btn-xs"><i class="fad fa-edit"></i></a>
                          </td>
                        <?php } ?>
                      </tr>
                <?php } ?>
              </tbody>
            </table>
              
          </div>
      
       
        <!--/.card-body -->
        <div class="card-footer">
        <?= lbl_li574D4u5u4ri0 ?>
        </div>
        <!-- /.card-footer-->
      </div>
    <?php } ?>

    <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>

        
      <!-- /.card -->
    <?php if(v4lID44x50("500-002", $usuario_id) == TRUE){ /// --- AGREGAR USUARIOS ?>
      <div class="modal fade" id="modal-nuevo">
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
                <?php if(!empty($_SESSION['m3ns4j3Frm'])){ ?>
                  Por favor verifica <?= $_SESSION['err'] ?> pendiete(s):
                  <ul>
                    <?php foreach ($_SESSION['m3ns4j3Frm'] as $key => $value) { ?>
                      <li><?= $value ?></li>
                    <?php } ?>
                  </ul>
                <?php } ?>
                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx001_add']) && $pp_xx001_add != '') { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx001_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx001_add"><?= lbl_n3w1erN0m8r3 ?>*</label>
                    <input type="text" class="form-control <?= $v ?>" id="pp_xx001_add" name="pp_xx001_add" value="<?= $pp_xx001_add ?>" maxlength="30">
                  </div>
                  
                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx002_add']) && !empty($pp_xx002_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx002_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
                  <div class="form-group">
                    <label for="pp_xx002_add"><?= lbl_n3w2dON0m8r3 ?></label>
                    <input type="text" class="form-control <?= $v ?>" id="pp_xx002_add" name="pp_xx002_add" value="<?= $pp_xx002_add ?>" maxlength="30">
                  </div>
                  
                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx003_add']) && !empty($pp_xx003_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx003_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx003_add"><?= lbl_n3w4PP ?>*</label>
                    <input type="text" class="form-control <?= $v ?>" id="pp_xx003_add" name="pp_xx003_add" value="<?= $pp_xx003_add ?>" maxlength="30">
                  </div>

                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx004_add']) && !empty($pp_xx004_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx004_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx004_add"><?= lbl_n3w4PM ?></label>
                    <input type="text" class="form-control <?= $v ?>" id="pp_xx004_add" name="pp_xx004_add" value="<?= $pp_xx004_add ?>" maxlength="30">
                  </div>

                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx005_add']) && !empty($pp_xx005_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx005_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx005_add"><?= lbl_n3w3M4il ?>*</label>
                    <input type="text" class="form-control <?= $v ?>" id="pp_xx005_add" name="pp_xx005_add" value="<?= $pp_xx005_add ?>" maxlength="254">
                  </div>

                  
                  <?php if(empty($_SESSION['m3ns4j3Frm']['cxxt453_add']) && !empty($cxxt453_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['cxxt453_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="cxxt453_add"><?= lbl_n3wP455w ?></label>
                    <div class="input-group mb-3" id="cxxt453_add">
                      <input class="form-control <?= $v ?>" type="password" id="cxxt453_add" name="cxxt453_add" value="<?php if($cxxt453_add == ''){ echo g3n_ps(); }else{ echo $cxxt453_add; } ?>">
                      <div class="input-group-append">
                        <a href="" class="input-group-text"><i class="fad fa-eye-slash" aria-hidden="true"></i></a>
                      </div>
                    </div>
                  </div>
                  
                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx006_add']) && !empty($pp_xx006_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx006_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx006_add">Puesto*</label>
                    <select class="form-control <?= $v ?>" name="pp_xx006_add" id="pp_xx006_add">
                      <option value="nada">Selecciona...</option>
                      <?php foreach ($Rles as $key => $value) {?>
                        <?php if($key == 0 || $key == 1){ }else{?>
                          <option value="<?= $key ?>" <?php if($pp_xx006_add == $key){ echo 'selected'; } ?>><?= $value ?></option>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx007_add']) && !empty($pp_xx007_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx007_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx007_add">Empresa*</label>
                    <select class="form-control <?= $v ?>" name="pp_xx007_add" id="pp_xx007_add" onchange="this.form.submit()">
                      <option value="nada">Selecciona...</option>
                      <?php foreach (c0nEmP(0,0) as $key => $value) {?>
                        <option value="<?= $value['XrIDEx'] ?>" <?php if($value['XrIDEx'] === $pp_xx007_add) { echo 'selected'; } ?>><?= dCry2($value['XrNICEx']) ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx008_add']) && !empty($pp_xx008_add) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx008_add'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
                  <div class="form-group">
                    <label for="pp_xx008_add">Flota*</label>
                    <select class="form-control <?= $v ?>" name="pp_xx008_add" id="pp_xx008_add">
                      <option value="nada">Selecciona...</option>
                      <?php foreach (C0nFl0(0, $pp_xx007_add) as $key => $value) {?>
                        <option value="<?= $value['xfdifx'] ?>" <?php if($value['xfdifx'] === $pp_xx008_add) { echo 'selected'; } ?>><?= $value['xfmnfx'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

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
 ?>
