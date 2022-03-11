<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_pr0VxDT.php');
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
          <a type="button" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"href="app?accion=pR0VxD"><i class="fad fa-arrow-left"></i> <br><?= btn_46r364rU5u4ri0 ?></a>
        </div>
      </div>
    </div>
      <div class="card <?= $brr4 ?> card-outline col-md-9">
        <div class="card-header">
          <h3 class="profile-username text-center">Editando Proveedor | <?= $xPxNICH ?></h3>  
          <p class="text-muted text-center"><?= $xPxRZH ?> / <?= $xPxRFCH  ?></p>             
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
        <form method="POST" action="ApiPHP/pR0VxD_4pi?accion=sV3DT">
          <div class="card-body">
            <div class="form-group">
              <label for="frm_001">NIC *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_001'])){ $vrffrm_001 = 'is-invalid'; } else { $vrffrm_001 = 'is-valid'; } ?>
              <?php if($frm_001 != ''){ $vt_frm_001 = $frm_001; } else { $vt_frm_001 = $xPxNICH; } ?>
              <input type="text" class="form-control <?= $vrffrm_001 ?>" id="frm_001" name="frm_001" value="<?= $vt_frm_001 ?>" required>
            </div>

            <div class="form-group">
              <label for="frm_002">Razón Social *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_002'])){ $vrffrm_002 = 'is-invalid'; } else { $vrffrm_002 = 'is-valid'; } ?>
              <?php if($frm_002 != ''){ $vt_frm_002 = $frm_002; } else { $vt_frm_002 = $xPxRZH; } ?>
              <input type="text" class="form-control <?= $vrffrm_002 ?>" id="frm_002" name="frm_002" value="<?= $vt_frm_002 ?>" required>
            </div>

            <div class="form-group">
              <label for="frm_003">RFC *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_003'])){ $vrffrm_003 = 'is-invalid'; } else { $vrffrm_003 = 'is-valid'; }?>
              <?php if($frm_003 != ''){ $vt_frm_003 = $frm_003; } else { $vt_frm_003 = $xPxRFCH; } ?>
              <input type="text" class="form-control <?= $vrffrm_003 ?>" id="frm_003" name="frm_003" value="<?= $vt_frm_003 ?>" required>
            </div>

            <div class="form-group">
              <label for="frm_004">Calle</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_004'])){ $vrffrm_004 = 'is-invalid'; } else { $vrffrm_004 = 'is-valid'; } ?>
              <?php if($frm_004 != ''){ $vt_frm_004 = $frm_004; } else { $vt_frm_004 = $xPxCLLH; } ?>
              <input type="text" class="form-control <?= $vrffrm_004 ?>" id="frm_004" name="frm_004" value="<?= $vt_frm_004 ?>">
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="frm_005"># Exterior</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_005'])){ $vrffrm_005 = 'is-invalid'; } else { $vrffrm_005 = 'is-valid'; } ?>
              <?php if($frm_005 != ''){ $vt_frm_005 = $frm_005; } else { $vt_frm_005 = $xPxNeH; } ?>
                  <input type="text" class="form-control <?= $vrffrm_005 ?>" id="frm_005" name="frm_005" value="<?= $vt_frm_005 ?>">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="frm_006"># Interior</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_006'])){ $vrffrm_006 = 'is-invalid'; } else { $vrffrm_006 = 'is-valid'; } ?>
              <?php if($frm_006 != ''){ $vt_frm_006 = $frm_006; } else { $vt_frm_006 = $xPxNiH; } ?>
                  <input type="text" class="form-control <?= $vrffrm_006 ?>" id="frm_006" name="frm_006" value="<?= $vt_frm_006 ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="frm_007">Colonia</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_007'])){ $vrffrm_007 = 'is-invalid'; } else { $vrffrm_007 = 'is-valid'; } ?>
              <?php if($frm_007 != ''){ $vt_frm_007 = $frm_007; } else { $vt_frm_007 = $xPxC0lH; } ?>
                  <input type="text" class="form-control <?= $vrffrm_007 ?>" id="frm_007" name="frm_007" value="<?= $vt_frm_007 ?>">
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="frm_008">Código Postal</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_008'])){ $vrffrm_008 = 'is-invalid'; } else { $vrffrm_008 = 'is-valid'; } ?>
              <?php if($frm_008 != ''){ $vt_frm_008 = $frm_008; } else { $vt_frm_008 = $xPxcPH; } ?>
                  <input type="number" class="form-control <?= $vrffrm_008 ?>" id="frm_008" name="frm_008" value="<?= $vt_frm_008 ?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="frm_009">País</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_009'])){ $vrffrm_009 = 'is-invalid'; } else { $vrffrm_009 = 'is-valid'; } ?>
              <?php if($frm_009 != ''){ $vt_frm_009 = $frm_009; } else { $vt_frm_009 = $xPxPisH; } ?>
              <input type="text" class="form-control <?= $vrffrm_009 ?>" id="frm_009" name="frm_009" value="<?= $vt_frm_009 ?>" disabled>
            </div>

            <div class="form-group">
              <label for="frm_010">Estado</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_010'])){ $vrffrm_010 = 'is-invalid'; } else { $vrffrm_010 = 'is-valid'; } ?>
              <select class="form-control <?= $vrffrm_010 ?>" id="frm_010" name="frm_010" onchange="this.form.submit()" >
                <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <?php foreach (consulta_estados() as $key => $tR4ns) {  ?>
                    <option value="<?= $tR4ns['Ed0iD'] ?>"<?php if ($xPxEd0Hid == $tR4ns['Ed0iD']){ echo ' selected'; } ?> ><?= $tR4ns['Ed0N0m'] ?></option>    
                  <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="frm_011">Alcaldia/Municipio</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_011'])){ $vrffrm_011 = 'is-invalid'; } else { $vrffrm_011 = 'is-valid'; } ?>
              <select class="form-control <?= $vrffrm_011 ?>" id="frm_011" name="frm_011" >
                <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <?php foreach (C0nMun($xPxEd0Hid) as $key => $tR4ns) {  ?>
                    <option value="<?= $tR4ns['MuNID09o'] ?>"<?php if ($xPxMAlHid == $tR4ns['MuNID09o']){ echo ' selected'; } ?> ><?= $tR4ns['MuNNM09o'] ?></option>    
                  <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="frm_012">Representante</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_012'])){ $vrffrm_012 = 'is-invalid'; } else { $vrffrm_012 = 'is-valid'; } ?>
              <?php if($frm_012 != ''){ $vt_frm_012 = $frm_012; } else { $vt_frm_012 = $xPxR3pH; } ?>
              <input type="text" class="form-control <?= $vrffrm_012 ?>" id="frm_012" name="frm_012" value="<?= $vt_frm_012 ?>">
            </div>

            <div class="form-group">
              <label for="frm_013">Télefono</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_013'])){ $vrffrm_013 = 'is-invalid'; } else { $vrffrm_013 = 'is-valid'; } ?>
              <?php if($frm_013 != ''){ $vt_frm_013 = $frm_013; } else { $vt_frm_013 = $xPxTl1H; } ?>
              <input type="text" class="form-control <?= $vrffrm_013 ?>" id="frm_013" name="frm_013" value="<?= $vt_frm_013 ?>">
            </div>
            
            <div class="form-group">
              <label for="frm_014">Email</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_014'])){ $vrffrm_014 = 'is-invalid'; } else { $vrffrm_014 = 'is-valid'; } ?>
              <?php if($frm_014 != ''){ $vt_frm_014 = $frm_014; } else { $vt_frm_014 = $xPxeMlH; } ?>
              <input type="email" class="form-control <?= $vrffrm_014 ?>" id="frm_014" name="frm_014" value="<?= $vt_frm_014 ?>">
            </div>
            
            <div class="form-group">
              <label for="frm_015">Activo? *</label>
              <?php if(!empty($_SESSION['tXFrm']['frm_015'])){ $vrffrm_015 = 'is-invalid'; } else { $vrffrm_015 = 'is-valid'; } ?>
              <select class="form-control <?= $vrffrm_015 ?>" id="frm_015" name="frm_015" required>
                <?php if($xPxACTH == 1){ ?>
                  <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <option value="0">No</option>
                  <option value="1" selected>Si</option>
                <?php } elseif($xPxACTH == 0){ ?>
                  <option value="nada" ><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <option value="0" selected>No</option>
                  <option value="1" >Si</option>
                <?php } else { ?>
                  <option value="nada" selected><?= lbl_n3w53lL3xi0N4aD ?></option>
                  <option value="0">No</option>
                  <option value="1">Si</option>
                <?php } ?>
              </select>
            </div>

            <input type="hidden" class="form-control" id="pXRoI" name="pXRoI" value="<?= $pXRoI ?>" required>

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
