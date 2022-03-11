<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_xmRc4s-3di7.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

<?php
            foreach ($d4705_u5u as $key => $u5h34r5) { ?>      
    <!-- Main content -->
    

      <!-- acciones -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_acx0 ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>           
          </div>
        </div>
        <div class="card-body">
          
              <a href="app?accion=xmRc4s" class="btn btn-app bg-success">
                <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
              </a>   
        </div>
      </div>
      <!-- acciones -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-6">
      

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
          <form name="edit_user" method="post" action="ApiPHP/xmRc4s_4pi.php?accion=xmRc4s_o985" enctype="multipart/form-data">
                 
              <div class="row">
                <div class="col-12"> 
                  <?php if($u5h34r5['m4rCxIm463N5s'] != ''){ ?>
                    <img src="dist/img/m4rc45/<?= $u5h34r5['m4rCxIm463N5s'] ?>" alt="Photo 1" class="img-fluid">
                  <?php }
                        else{ ?>
                    <img src="dist/img/m4rc45/0.png" alt="Sin Imagen" class="img-fluid">
                  <?php } ?>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <label for="pp_xx001"><?= lbl_001 ?></label>
                    <input type="text" class="form-control" name="pp_xx001" id="pp_xx001" placeholder="" value="<?= $u5h34r5['m4rCxD35c5s'] ?>">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="pp_xx002"><?= lbl_002 ?></label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="pp_xx002" name="pp_xx002">
                      <label class="custom-file-label" for="pp_xx002"><?= lbl_003 ?></label>
                       
                    </div>
                  </div>
                </div>

                
              </div>

              <div class="row">               

                <div class="col-sm-12">
                  <input type="hidden" name="mk76id" id="mk76id" value="<?= $u5h34r5['m4rCxID5s'] ?>">
                  <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4r ?></button>
                </div>
              </div>  

           
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
  <?php } ?>
<?php
include('parciales/3p1416e.php');
 ?>
