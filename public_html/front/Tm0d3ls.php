<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_Tm0d3ls.php');
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
            
            <?php if(v4lID44x50("1000-002", $usuario_id) == TRUE){ /// --- AGREGAR MODELO ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-info btn-app" @click="app.showingaddModal = true;"><i class="fad fa-car-building"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>


          </div>

        </div>
      </div>

      <div class="row">
        <?php foreach ($u5hy68 as $key => $u5h34r5) { ?>
        <div class="col-md-4">
          <div class="card" style="text-align: center; align-items: center;">
            <div class="row">
              <div class="col-lg-12">
                <?php if(empty($u5h34r5['KuBMKImgx'])){
                        echo ''.$u5h34r5['KuBMKDsx'].'';
                      }
                      else{
                        echo '<img src="dist/img/m4rc45/'.$u5h34r5['KuBMKImgx'].'" style="height: 50px;margin-top: 5px;">';
                      }
                      
                      if(empty($u5h34r5['KuBMIMgx'])){
                        echo '<img src="dist/img/m0d3l0s/0.png" style="height: 96px;">';
                      }
                      else{
                        echo '<img src="dist/img/m0d3l0s/'.$u5h34r5['KuBMIMgx'].'" style="height: 96px;">';
                      }
                  ?>
              </div>
              <div class="col-lg-12">
                <?= $u5h34r5['5uBm4rc4Xu7l0s'] ?>
              </div>
              <div class="col-lg-12">
              <h1 class="card-text" style="font-weight: bold;font-size: 1.6rem;"><?= $u5h34r5['3C0Xu7l0s'] ?></h1>   
              </div>
              
            </div>
            
            <div class="card-body" style="ali">
              
                 
              <p class="card-text" style="font-weight: bold;font-size: 18px;"><?= $u5h34r5['KuBD35x'] ?></p>
              
            </div>
            
            <div class="card-body">
              <?php if(v4lID44x50("1000-003", $usuario_id) == TRUE){ /// --- AGREGAR MODELO ?>
                <a href="app?accion=Tm0d3ls_9i88&cfr99=<?= $eCry($u5h34r5['KuBIDx']) ?>" class="btn btn-warning btn-xs" ><i class="fad fa-edit"></i>Editar</a>
              <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
        
      </div>




    <?php if(v4lID44x50("1000-002", $usuario_id) == TRUE){ /// --- AGREGAR MODELO ?>
      <!-- /.card -->
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
                <!--<img v-if="eurl" :src="eurl" width="200px"><br> -->
                <!--<input class="form-control" type="file" name="u5h8ir5_foto_add" ref="u5h8ir5_foto_add" id="u5h8ir5_foto_add" v-on:change="everImagen();">-->
                
                  <div class="form-group">
                    <label for="pp_xx001_add"><?= lbl_n3w1erN0m8r3 ?>*</label>
                    <input type="text" class="form-control" id="pp_xx001_add" name="pp_xx001_add" required>
                  </div>

                  <div class="form-group">
                    <label for="pp_xx002_add"><?= lbl_n3w2dON0m8r3 ?></label>
                    <input type="text" class="form-control" id="pp_xx002_add" name="pp_xx002_add">
                  </div>

                  <div class="form-group">
                    <label for="pp_xx003_add"><?= lbl_n3w4PP ?></label>
                    <input type="text" class="form-control" id="pp_xx003_add" name="pp_xx003_add" required>
                  </div>

                  <div class="form-group">
                    <label for="pp_xx004_add"><?= lbl_n3w4PM ?></label>
                    <input type="text" class="form-control" id="pp_xx004_add" name="pp_xx004_add">
                  </div>

                  <div class="form-group">
                    <label for="pp_xx005_add"><?= lbl_n3w3M4il ?>*</label>
                    <input type="email" class="form-control" id="pp_xx005_add" name="pp_xx005_add" required>
                  </div>

                  <div class="form-group">
                    <label for="cxxt453_add"><?= lbl_n3wP455w ?></label>
                    <input type="password" class="form-control" id="cxxt453_add" name="cxxt453_add" required>
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
