<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_edi74flo0.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

<?php
  foreach ($d4705m0D as $key => $u5h34r5) { ?>      
    <!-- Main content -->  

    <!-- acciones -->
    <div class="card <?= $brr4 ?> card-outline">
      <div class="card-header">
        <h3 class="card-title"><?= lbl_acx0 ?></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fad fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <button class="btn btn-app bg-success" onclick="window.history.go(-1); return false;">
          <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
        </button>   
      </div>
    </div>
    <!-- acciones -->
    <!-- Default box -->
    <div class="card <?= $brr4 ?> card-outline col-lg-8">
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
          <form name="edit_user" method="post" action="ApiPHP/x7l07iLl4_4pi.php?accion=eDi7flo0">         
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="pp_xx001"><?= lbl_001 ?>*</label>
                  <?php if($px01 == ''){ $oce01 = $u5h34r5['_xNMyvU']; }else{ $oce01 = $px01; } ?>
                  <input type="text" class="form-control" name="pp_xx001" id="pp_xx001" placeholder="<?= lbl_3c0 ?>" value="<?= $oce01 ?>" required>
                </div>
              </div>
             
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx004"><?= lbl_002 ?>*</label>
                  <select class="form-control" id="pp_xx004" name="pp_xx004" required>
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php 
                      if ($px04 == '' || $px04 == null) { $mkr = $u5h34r5['_x3IDyvU'];  } else { $mkr = $px04;}
                      foreach ($_L3MP as $key => $m4m4rKrK) { ?>
                        <option value="<?= $m4m4rKrK['eMPID'] ?>"
                          <?php  if(/*$m4m4rKrK['m4xID5s'] == $u5h34r5['M4rc4s'] || */$m4m4rKrK['eMPID'] == $mkr){ echo ' selected';} ?> ><?= $m4m4rKrK['eMPNIC'] ?> - <?= $m4m4rKrK['eMPRZ'] ?></option>
                      <?php  } ?>      
                  </select>
                </div>
              </div>

              <div class="col-12">
                <label ><?= lbl_003 ?></label><br>
                <?php foreach ($_LFLo0 as $key => $value) { ?>
                  <?php if($u5h34r5['_x3IDyvU'] == $value['_FLO3ID']){ 
                          $iuh = ''; $csc = 'btn-warning'; $uish = ''; $href = '';
                        }
                        else{ 
                          $iuh = 'indigo'; $csc = ''; $uish = '<i class="fad fa-trash"></i>';
                          $href = 'href="ApiPHP/x7l07iLl4_4pi.php?accion=d3lr3l&r3l4='.$eCry($value['_FLORID']).'&flo0='.$eCry($flo0).'&eMp4='.$eCry($value['_FLO3ID']).'"';
                        } ?>
                  <a <?= $href ?> type="button" class="btn btn-xs <?= $csc ?>" style="background-color: <?= $iuh ?>; color: white;"><?= $value['_FLONME'] ?> <?= $uish ?></a>
                <?php } ?>
                <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-empresa"><?= btn_agEm ?><i class="fad fa-plus"></i> </button>
                  
          
              </div><p>&nbsp;</p>

              
                            
              <div class="col-sm-12">
                <input type="hidden" name="gju8UUy" id="gju8UUy" value="<?= $u5h34r5['_xIDyvU'] ?>">
                <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
              </div>
            </div>             
          
          </form>

        </div>
      </div>
        <!--/.card-body -->
    </div>
      <!-- /.card -->

    <?php if(v4lID44x50("1200-003", $usuario_id) == TRUE){ /// --- AGREGAR EMPRESA ?>
      <!-- /.card -->
      <div class="modal fade" id="modal-empresa">
        <div class="modal-dialog">
          <div class="modal-content"> 
            <form name="nuevo" method="post" action="ApiPHP/x7l07iLl4_4pi.php?accion=aGr3mP">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_004 ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--<img v-if="eurl" :src="eurl" width="200px"><br> -->
                <!--<input class="form-control" type="file" name="u5h8ir5_foto_add" ref="u5h8ir5_foto_add" id="u5h8ir5_foto_add" v-on:change="everImagen();">-->
              
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="pp_xx005"><?= lbl_002 ?>*</label>
                    <select class="form-control" id="pp_xx005" name="pp_xx005" required>
                      <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                        <?php foreach ($_L3MP as $key => $m4m4rKrK) { ?>
                          <?php if($m4m4rKrK['eMPID'] != $u5h34r5['_x3IDyvU']){ ?>
                            <option value="<?= $m4m4rKrK['eMPID'] ?>"><?= $m4m4rKrK['eMPNIC'] ?> - <?= $m4m4rKrK['eMPRZ'] ?></option>
                          <?php } ?>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                  
              </div>
              <input type="hidden" name="gju8UUy" id="gju8UUy" value="<?= $u5h34r5['_xIDyvU'] ?>">
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_n3wC4nC3L4r ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-link"></i> <?= btn_n3w6u4rD4r ?></button>
              
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
  <?php } ?>
<?php
include('parciales/3p1416e.php');
 ?>
