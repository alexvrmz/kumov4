<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_m0d78Os.php');
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
            <?php if(v4lID44x50("400-002", $usuario_id) == TRUE){ /// --- Agregar Modulo?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"@click="app.showingaddModal = true;"><i class="fad fa-puzzle-piece"></i> <?= btn_46r364rm0Du ?></button>
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
                <table class="table table-bordered table-hover" id="example1">
                  <thead>
                    <tr>
                      <th style="width: 10px"><?= lbl_t4biD ?></th>
                      <th><?= lbl_t4bD35 ?></th>
                      <th><?= lbl_t4bNuM ?></th>
                      <th><?= lbl_t4b3574d0 ?></th>
                      <th style="width: 10px"><?= lbl_t4b3Di74r ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($Li57m0d78Os as $df4 => $m0Dyg5) { ?>
                      <tr>
                        <td><?= $m0Dyg5['m0DxL0_id'] ?></td>
                        <td><?= $m0Dyg5['m0DxL0_descripcion'] ?></td>
                        <td><?= $m0Dyg5['m0DxL0_numero'] ?></td>
                        <td>
                          <?php if($m0Dyg5['m0DxL0_estado'] == 1){ ?>
                            <span class="float-left badge bg-success"><?= lbl_4ct7v0aD ?></span>
                          <?php } else { ?>
                            <span class="float-left badge bg-danger"><?= lbl_iN4c7iv0aD ?></span>
                          <?php } ?> 
                        </td>
                        <td>
                          <?php if(v4lID44x50("400-003", $usuario_id) == TRUE){ /// --- Editar Modulo ?>
                            <a href="app?accion=m0d7fdDs&m0ft6sV=<?= $eCry($m0Dyg5['m0DxL0_id']) ?>" class="btn btn-block bg-gradient-warning btn-xs"><i class="fad fa-edit"></i></a>
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


      <div class="modal fade" id="modal-nuevo">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" action="ApiPHP/m0d78Os_4pi.php?accion=m0d7545x" name="nu3v0M0dUl3">  
            
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_7i7uaD ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                    <label for="m0DxL0_descripcion_add"><?= lbl_d35dipOnaD ?></label>
                    <input type="text" class="form-control" id="m0DxL0_descripcion_add" name="m0DxL0_descripcion_add" required>
                  </div>

                  <div class="form-group">
                    <label for="m0DxL0_numero_add"><?= lbl_NmjM0dloaD ?></label>
                    <input type="text" class="form-control" id="m0DxL0_numero_add" name="m0DxL0_numero_add" required>
                  </div>

                  <div class="form-group">
                    <label for="m0DxL0_estado_add"><?= lbl_m0du4D0aD ?></label>
                    <select class="form-control" id="m0DxL0_estado_add" name="m0DxL0_estado_add" required>
                      <option><?= lbl_53lL3xi0N4aD ?></option>
                      <option value="1"><?= lbl_4ct7v0aD ?></option>
                      <option value="0"><?= lbl_iN4c7iv0aD ?></option>
                    </select>
                  </div>     

                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_C4nC3L4raD ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_6u4rD4raD ?></button>
              
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
