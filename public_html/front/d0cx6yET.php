<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_d0cx6yET.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
    <div class="card <?= $brr4 ?> card-outline col-md-9">
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
          <a type="button" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" href="app?accion=d0cx6y"><i class="fad fa-arrow-left"></i> <br><?= btn_46r364rU5u4ri0 ?></a>
        </div>
      </div>
    </div>
      <div class="card <?= $brr4 ?> card-outline col-md-9">
        <div class="card-header">
          <h3 class="profile-username text-center">Editando Trámite | <?= $xSrD3sp0 ?></h3>  
        </div>
        <?php if($_SESSION['m3n3Rr0R_num'] != 0){ ?>
          <div class="row">
            <div class="col-12">
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fad fa-traffic-cone"></i>Por favor verifica <?= $_SESSION['m3n3Rr0R_num'] ?> Errore(s) </h5>
                <ul>
                  <?php foreach ($_SESSION['tXFrm'] as $key => $value) { ?>
                    <li><?= $value ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
        
        <!-- /.card-header -->
        <form method="POST" action="ApiPHP/d0cx6y_4pi?accion=sV3Tr4">
          <div class="card-body">

            <div class="form-group">
              <label for="frm_001">Descripción *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_001'])){ $vrffrm_001 = 'is-invalid'; } else { $vrffrm_001 = 'is-valid'; } ?>
              <?php if($frm_001 != ''){ $vt_frm_001 = $dCry($frm_001); } else { $vt_frm_001 = $xSrD3sp0; } ?>
              <input type="text" class="form-control <?= $vrffrm_001 ?>" id="frm_001" name="frm_001" value="<?= $vt_frm_001 ?>" <?php if($xSrInip0 == 1){ echo 'disabled';} ?> required>
            </div>

            <div class="form-group">
              <label for="frm_002">Alerta en dias *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_002'])){ $vrffrm_002 = 'is-invalid'; } else { $vrffrm_002 = 'is-valid'; } ?>
              <?php if($frm_002 != ''){ $vt_frm_002 = $dCry($frm_002); } else { $vt_frm_002 = $xSrTMp0; } ?>
              <input type="text" class="form-control <?= $vrffrm_002 ?>" id="frm_002" name="frm_002" value="<?= $vt_frm_002 ?>" required>
            </div>

            <div class="form-group">
              <label for="frm_006">Estado</label>
              <select id="frm_006" name="frm_006" class="form-control">
                <option value="nada">Selecciona...</option>
                <option value="1" <?php if($xSrEd0p0 == 1){ echo 'selected'; } ?> >Activo</option>
                <option value="0" <?php if($xSrEd0p0 == 0){ echo 'selected'; } ?> >Inactivo</option>
              </select>
            </div>

            <?php /* <div class="form-group">
              <label for="frm_004">Tipo de Vehiculo *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_004'])){ $vrffrm_004 = 'is-invalid'; } else { $vrffrm_004 = 'is-valid'; } ?>
              <select class="form-control <?= $vrffrm_004 ?>" id="frm_004" name="frm_004" required>
                <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <?php foreach ($tPV as $key => $value) {  ?>
                    <option value="<?= $key ?>"<?php if ($key == $xSrTVp0){ echo ' selected'; } ?> <?php if($key == 3 || $key == 4){ echo 'disabled'; } ?> ><?= $tPV[$key] ?></option>    
                  <?php } ?>
              </select>
            </div> 

            <div class="form-group">
              <label for="frm_005">Icono* <a href="https://fontawesome.com/v5.15/icons?d=listing&p=3" target="_blanck"><span class="badge badge-info">Ver Iconos</span></a></label>
              <?php if(!empty($_SESSION['tXFrm']['frm_005'])){ $vrffrm_005 = 'is-invalid'; } else { $vrffrm_005 = 'is-valid'; }?>
              <?php if($frm_005 != ''){ $vt_frm_005 = $frm_005; } else { $vt_frm_005 = $xSrICp0; } ?>
              <input type="text" class="form-control <?= $vrffrm_005 ?>" id="frm_005" name="frm_005" value="<?= $vt_frm_005 ?>" required>
            </div>*/ ?>

            <input type="hidden" class="form-control" id="pXRoI" name="pXRoI" value="<?= $pXRoI ?>" required>
            <input type="hidden" class="form-control" id="xSrInip0" name="xSrInip0" value="<?= $xSrInip0 ?>" required>

            <button type="submit" class="btn btn-success btn-sm"><i class="fad fa-save"></i> <b>Guardar</b></button>
          </form>
          
        </div>
        <!-- /.card-body -->
      </div>
      
  </section>
</div>
<?php include('parciales/3p1416e.php'); 
unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
