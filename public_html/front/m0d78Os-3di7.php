<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_m0d78Os-3di7.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>


    <!-- Main content -->
      <!-- acciones -->
      <div class="card <?= $brr4 ?> card-outline col-lg-8">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_acx0 ?></h3>

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
            <a href="app?accion=m0d78Os" class="btn btn-app bg-success" href="#">
              <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
            </a>   
  
          </div>

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
          <form name="editm0dl" method="post" action="ApiPHP/m0d78Os_4pi.php?accion=m0d7ff5Gg">
            <?php
            foreach ($d4705m0D as $key => $u5h34r5) { ?>            
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pp_xx001"><?= lbl_n3wd35cR ?></label>
                    <input type="text" class="form-control" name="pp_xx001" id="pp_xx001" placeholder="<?= lbl_n3wd35cR ?>" value="<?= $u5h34r5['m0ds6L0d3s5cRp'] ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="pp_xx002"><?= lbl_n3wnuMd ?></label>
                    <input type="text" class="form-control" name="pp_xx002" id="pp_xx002" placeholder="<?= lbl_n3wnuMd ?>" value="<?= $u5h34r5['m0ds6L0nM'] ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                
                <div class="col-sm-12">
                    <label for="pp_xx003"><?= lbl_n3w3574d ?></label>
                    <select class="form-control" id="pp_xx003" name="pp_xx003" required>
                      <?php if ($u5h34r5['m0ds6L03574d0'] == 1) { ?>
                        <option value="1" selected><?= lbl_4ct7v0aD ?></option>
                        <option value="0"><?= lbl_iN4c7iv0aD ?></option>
                      <?php } elseif ($u5h34r5['m0ds6L03574d0'] == 0) { ?>
                        <option value="0" selected><?= lbl_iN4c7iv0aD ?></option>
                        <option value="1"><?= lbl_4ct7v0aD ?></option>
                      <?php } ?>
                    </select>
                </div>  
              </div>

              <div class="row" style="margin-top: 20px;">  
              </div>
              <div class="row">  


                <div class="col-sm-12">
                  <input type="hidden" name="pp_xx004" id="pp_xx004" value="<?= $u5h34r5['m0ds6L0iD'] ?>">
                  <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
                </div>
              </div>  

            <?php } ?>
            </form>

          </div>
        </div>
        <!--/.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
