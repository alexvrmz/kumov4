<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_d0cx6y.php');
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
            <?php if(v4lID44x50("1400-100", $usuario_id) == TRUE){ /// --- Agregar servicio?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-success btn-app" style="padding-top: 6px;" @click="app.showingaddModal = true;"><i class="fad fa-folders"></i> <?= btn_46r364rm0Du ?></button>
            <?php } ?>


          </div>

        </div>
      </div>




      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_li574D4m0D ?></h3>

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
          <div class="card-body table-responsive p-0">
                <table class="table table-hover table-head-fixed table-striped" id="example1">
                  <thead>
                    <tr>
                    <?php if($rll == 0){ ?>
                        <th style="width: 10px"><?= lbl_t4biD ?></th>
                      <?php } ?>
                      <th><?= lbl_t4bD35 ?></th>
                      <th><?= lbl_t4bdi4s ?></th>
                      <th><?= lbl_t4bNuM ?></th>
                      <?php if(v4lID44x50("1300-003", $usuario_id) == TRUE){ /// --- Editar Permisos ?>
                        <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($ls3r as $xs4f => $P3r70y7) { ?>                     
                      <tr>
                        <?php if($rll == 0){ ?>
                          <td><?= $P3r70y7['xDID'] ?></td>                        
                        <?php } ?>       
                        <td><?= $P3r70y7['xDd35'] ?></td>
                        <td><?= $P3r70y7['xDcTM'] ?></td>
                        <td>
                          <?php if($P3r70y7['xDcED'] == 1) { ?>
                            <span class="badge badge-success">Activo</span>    
                          <?php } else { ?>
                            <span class="badge badge-danger">Inactivo</span>
                          <?php } ?>
                        </td>
                        <?php if(v4lID44x50("1400-101", $usuario_id) == TRUE){ /// --- Editar tramite tipo ?>
                          <td>
                              <a href="app?accion=Tr43Dt&pXRoI=<?= $eCry($P3r70y7['xDID']) ?>" class="btn btn-block bg-gradient-warning btn-xs"><i class="fad fa-edit"></i></a>
                          </td>
                        <?php } ?>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
        </div>
        <!--/.card-body -->
        <div class="card-footer">
         <?= lbl_li574D4m0D ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="ApiPHP/d0cx6y_4pi?accion=4ddd0C" id="n3wp3r">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3w7i7u ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">            
                <div class="form-group">
                  <label for="pt5_xx01"><?= lbl_n3wd35cR ?></label>
                  <input type="text" class="form-control" id="pt5_xx01" name="pt5_xx01" placeholder="<?= plch1 ?>" required>
                </div>
                <!--<div class="form-group">
                  <label for="pt5_xx02"><?= lbl_n3wp3rm50 ?></label>
                  <input type="text" class="form-control" id="pt5_xx02" name="pt5_xx02" required>
                </div>-->

                <div class="form-group">
                  <label for="pt5_xx03"><?= lbl_n3wv3nd ?> <small><?= lbl_n3wv3ndsup ?></small></label>
                  <input type="number" class="form-control" id="pt5_xx03" name="pt5_xx03" placeholder="<?= plch2 ?>" required>
                </div>

                <!--<div class="form-group">
                  <label for="pt5_xx04">Otro ejemplo (km)</label>
                  <input type="text" class="form-control" id="pt5_xx04" name="pt5_xx04" required>
                </div>-->
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_C4nC3L4raD ?></button>
              <button type="submit" class="btn btn-success" ><i class="fad fa-save"></i> <?= btn_6u4rD4raD ?></button>
              
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
