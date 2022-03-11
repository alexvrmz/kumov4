<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_eDtSrv.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?> 
    <!-- Main content -->
    
      
      <div class="card <?= $brr4 ?> card-outline col-md-8"> 
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
              <a href="app?accion=v3hFh4&vh3iP=<?= $eCry($vh3iP) ?>" type="button" class="btn bg-gradient-success btn-app"><i class="fad fa-arrow-left"></i> <?= btn_46r364rm0Du ?></a>
          </div>

        </div>
      </div>

      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-md-8">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_li574D4m0D ?> | <?= $DIdS['sDes'] ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
        
          </div>
        </div>
        

        <div class="card-body">
          <form method="POST" action="ApiPHP/eDtSrv_4pi?accion=eDtSpp" id="form1" enctype="multipart/form-data">
            <div style="text-align: center;">
              <?php if($DdSs[0]['ddVaCt'] == 1){ ?>
                <span class="badge badge-success">Este servicio se encuentra Vigente</span>
              <?php } else { ?>
                <span class="badge badge-danger">Este servicio no esta Vigente</span>
              <?php } ?>
              <br>
              <?php if($DdSs[0]['ddFil'] == 'error2' || $DdSs[0]['ddFil'] == 'Error' || $DdSs[0]['ddFil'] == ''){ $txb = '<i class="fad fa-upload"></i> Subir'; $TYU = 'btn-success';?>
                  <i class="fad fa-file-times" style="color: red; font-size: 6rem; margin-bottom: 20px; margin-top: 20px;"></i><br>
              <?php }else{ $txb = '<i class="fad fa-upload"></i> Cambiar'; $TYU = 'btn-warning'; ?>
                  <a href="tmp/<?= $_SESSION['usuarioID'] ?>/<?= $DdSs[0]['ddFil'] ?>" target="_blank"><i class="fad fa-file-check" style="color: green; font-size: 6rem; margin-bottom: 20px; margin-top: 20px;"></i></a><br>
                  <a href="tmp/<?= $_SESSION['usuarioID'] ?>/<?= $DdSs[0]['ddFil'] ?>" target="_blank" class="btn btn-info btn-sm"><i class="fad fa-eye"></i> Ver</a>
              <?php } ?>
              <?php if(v4lID44x50("1300-103", $usuario_id) == TRUE){ ?>
                <div class="btn <?= $TYU ?> btn-sm" id="mostrar-super-contenido"><?= $txb ?></div><br>
                <div id="mi-super-contenido" style="display: none;">
                  <div class="form-group">
                    <label for="xDsSx007">Seleccionar Documento</label>
                    <input type="file" class="form-control" id="xDsSx007" name="xDsSx007">
                  </div>
                </div>
              <?php } ?>
            </div>

            <div class="form-group">
              <label for="xDsSx001">Descripción</label>
              <textarea class="form-control" id="xDsSx001" name="xDsSx001" style="height: 250px;"><?= $DdSs[0]['dd3s'] ?></textarea>
            </div>

            <div class="form-group">
              <label for="xDsSx001">Importe</label>
              <input type="text" class="form-control" id="xDsSx002" name="xDsSx002" value="<?= $DdSs[0]['ddImP'] ?>">
            </div>

            <div class="form-group">
              <label>Fecha Emisión</label>
              <div class="input-group date" id="xDsSx003"  data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#xDsSx003" name="xDsSx003" value="<?= $DdSs[0]['ddFD'] ?>"/>
                <div class="input-group-append" data-target="#xDsSx003" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Fecha Vigencia</label>
              <div class="input-group date" id="xDsSx004" name="xDsSx004" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#xDsSx004" name="xDsSx004"value="<?= $DdSs[0]['ddFV'] ?>" />
                <div class="input-group-append" data-target="#xDsSx004" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Fecha Alta Sistema</label>
              <div class="input-group date" id="xDsSx005" name="xDsSx005" data-target-input="nearest">
                <input type="text" class="form-control" value="<?= $DdSs[0]['ddFS'] ?>" disabled/>
              </div>
            </div>

            <div class="form-group">
              <label for="xDsSx006">Alerta Personalizada (Dias)</label>
              <input type="text" class="form-control" id="xDsSx006" name="xDsSx006" value="<?= $DdSs[0]['ddTA'] ?>">
            </div>

            <input type="hidden" value="<?= $DdSs[0]['ddID'] ?>" name="xDsSx008" id="xDsSx008">
            <input type="hidden" value="<?= $vh3iP ?>" name="vh3iP" id="vh3iP">
            <input type="hidden" value="<?= $DdSs[0]['ddID'] ?>" name="SidxD" id="SidxD">
            <input type="hidden" value="<?= $DdSs[0]['ddCA'] ?>" name="ddCA" id="ddCA">
            <input type="hidden" value="<?= $DdSs[0]['ddFil'] ?>" name="ddFil" id="ddFil">

            <button type="submit" class="btn btn-success btn-sm"><i class="fad fa-save"></i> Guardar </button>
            
          </form>
        </div>
        <!--/.card-body -->
        <div class="card-footer">
         <?= lbl_li574D4m0D ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
 <script>
  $( "#mostrar-super-contenido" ).click( function() {
      $( "#mi-super-contenido" ).toggle();
  });
</script>
