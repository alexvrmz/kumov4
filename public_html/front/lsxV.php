<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_lsxV.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?> 
    <!-- Main content -->
    
      <!-- 
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
            <?php //if(v4lID44x50("1300-002", $usuario_id) == TRUE){ /// --- Agregar servicio?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"@click="app.showingaddModal = true;"><i class="fad fa-toolbox"></i> <?= btn_46r364rm0Du ?></button>
            <?php //} ?>

 
          </div>

        </div>
      </div>
              -->



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
                      <th>Servicio</th>
                      <th>Vehiculo</th>
                      <th>Vencimiento</th>
                      <th>En</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($LDNS as $xs4f => $P3r70y7) { ?>                   
                      <tr>
                        <td><a href="app?accion=v3hFh4&vh3iP=<?= $eCry($P3r70y7['xmVhes']) ?>" target="_blank"><i class="fad fa-<?= $P3r70y7['dNIxCos'] ?>"></i> <?= $P3r70y7['xmD3ss'] ?></a></td>                        
                        <td><a href="app?accion=v3hFh4&vh3iP=<?= $eCry($P3r70y7['xmVhes']) ?>" target="_blank"><?= $P3r70y7['xmVhePs'] ?></a></td>
                        <td><?= $P3r70y7['xmFeFs'] ?></td>
                        <td><span class="badge badge-<?= $P3r70y7['classs'] ?>"><?= $P3r70y7['xTXVxs'] ?> <?php if($P3r70y7['xdDcVEDs'] != 0) { ?><?= $P3r70y7['xdDcVEDs'] ?> dia(s)<?php } ?></span></td>
                        <td>
                          <?php if(v4lID44x50("300-003", $usuario_id) == TRUE){ /// --- Editar Permisos ?>
                            <a href="app?accion=v3hFh4&vh3iP=<?= $eCry($P3r70y7['xmVhes']) ?>" class="btn btn-block bg-gradient-info btn-xs"><i class="fad fa-eye"></i></a>
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
            <form method="post" action="ApiPHP/s3rv_4pi?accion=4dds3r" id="n3wp3r">
              <div class="modal-header">
                <h4 class="modal-title"><?= lbl_n3w7i7u ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">            
                <div class="form-group">
                  <label for="pt5_xx01"><?= lbl_n3wd35cR ?></label>
                  <input type="text" class="form-control" id="pt5_xx01" name="pt5_xx01" required>
                </div>
                <div class="form-group">
                  <label for="pt5_xx02"><?= lbl_n3wp3rm50 ?></label>
                  <input type="text" class="form-control" id="pt5_xx02" name="pt5_xx02" required>
                </div>

                <div class="form-group">
                  <label for="pt5_xx03">Tiempo en días</label>
                  <input type="text" class="form-control" id="pt5_xx03" name="pt5_xx03" required>
                </div>

                <div class="form-group">
                  <label for="pt5_xx04">Otro ejemplo (km)</label>
                  <input type="text" class="form-control" id="pt5_xx04" name="pt5_xx04" required>
                </div>
                
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": false,
      "ordening": true,
      "order": [[ 2, "asc" ]],
      //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["copy", "csv", "excel", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>