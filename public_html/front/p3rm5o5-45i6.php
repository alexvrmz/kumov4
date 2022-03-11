<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_p3rm5o5-45i6.php');
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
            <?php if(v4lID44x50("300-002", $usuario_id) == TRUE){ /// --- Agregar PErmisos?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"@click="app.showingaddModal = true;"><i class="fad fa-key"></i> <?= btn_46r364rm0Du ?></button>
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
          <div class="card-body p-0">
              <table class="table table-bordered table-hover col-md-8" id="example2">
                  <thead>
                    <tr>
                      <th style="width: 10px"><?= lbl_t4biD ?></th>
                      <th><?= lbl_t4bD35 ?></th>
                      <th><?= lbl_t4bm0D ?></th>
                      <th><?= lbl_t4bNuM ?></th>
                      <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                    </tr> 
                  </thead> 
                  <tbody>
                    <?php
                    foreach ($d4705_u5u as $xs4f => $P3r70y7) { ?>                     
                      <tr>
                        <td><?= $P3r70y7['p3gThiDRs'] ?></td>                        
                        <td><?= $P3r70y7['p3d3scr'] ?></td>
                        <td>
                          <?php if($P3r70y7['p3gTh3PRs'] == 1){ ?>
                            <span class="float-left badge bg-success"><?= lbl_f4ghGf ?></span>
                          <?php } else { ?>
                            <span class="float-left badge bg-danger"><?= lbl_f4FFhGf ?></span>
                          <?php } ?>
                        </td>
                        <td><?= $P3r70y7['p3gThFPRs'] ?></td>
                        <td>
                          <?php if($P3r70y7['p3gTh3PRs'] == 1){ ?>
                            <?php if(v4lID44x50("300-003", $usuario_id) == TRUE){ /// --- Editar Permisos ?>
                              <a href="ApiPHP/p3rm5o5_4pi.php?accion=psDef4Gg&h7gr=<?= $eCry($P3r70y7['p3gThiDRs']) ?>&u5u4oxX=<?= $eCry($u5u4oxX) ?>&txgt5=<?= $eCry('d3547iV') ?>&f4G55t7=<?= $eCry($P3r70y7['p3gThNmRs']) ?>" class="btn bg-danger btn-xs">
                                <i class="fad fa-toggle-off"></i>
                              </a>
                            <?php } ?>
                          <?php } elseif($P3r70y7['p3gTh3PRs'] == 0) { ?>
                            <?php if(v4lID44x50("300-003", $usuario_id) == TRUE){ /// --- Editar Permisos ?>
                              <a href="ApiPHP/p3rm5o5_4pi.php?accion=psDef4Gg&h7gr=<?= $eCry($P3r70y7['p3gThiDRs']) ?>&u5u4oxX=<?= $eCry($u5u4oxX) ?>&txgt5=<?= $eCry('47iV') ?>&f4G55t7=<?= $eCry($P3r70y7['p3gThNmRs']) ?>" class="bt bg-success btn-xs">
                                <i class="fad fa-toggle-on"></i>
                              </a>
                            <?php } ?>
                          <?php } ?>
                        </td>
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
      <?php if($_SESSION['pt5_xx05'] != ''){ ?>
        <script type="text/javascript">
          $(window).on('load', function() {
              $('#modal-nuevo').modal('show');
          });
        </script>
      <?php } ?>


      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="ApiPHP/p3rm5o5_4pi.php?accion=sD4xG5d5" id="n3whp3r">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3w7i7u ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                          
                
                  <div class="form-group">
                    <label for="pt5_xx02"><?= lbl_n3wp3rm50 ?></label>
                    <select class="form-control" id="pt5_xx02" name="pt5_xx02" required onchange="this.form.submit()">
                      <option value="0"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach ($L74m0d78Os as $f454 => $m0d77j) { ?>
                        <option value="<?= $m0d77j['m0ds6L0nM'] ?>" 
                          <?php if($_SESSION['pt5_xx02'] == $m0d77j['m0ds6L0nM']) { echo 'selected'; } ?> > 
                            <?= $m0d77j['m0ds6L0d3s5cRp'] ?> - <?= $m0d77j['m0ds6L0nM'] ?></option>
                          <?php } ?>
                    
                    </select>
                  </div>
                 
                  <div class="form-group">
                    <label for="pt5_xx05"><?= lbl_n3wp3rdm50 ?></label>
                    <select class="form-control" id="pt5_xx05" name="pt5_xx05" required>
                      <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach ($_SESSION['pt5_xx05'] as $f454 => $m0d77j) { ?>                      
                        <option value="<?= $m0d77j['p3gThiDRs'] ?>"> 
                          <?= $m0d77j['p3gThNmRs'] ?> 
                        </option>
                      <?php } ?>
                    
                    </select>
                  </div>

                  <input type="hidden" name="pt5_xx04" value="<?= $u5u4oxX ?>">
  
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
unset($_SESSION['pt5_xx05']);
include('parciales/3p1416e.php');
 ?>
