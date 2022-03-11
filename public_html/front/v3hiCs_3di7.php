<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_v3hiCs-3di7.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>

<?php
  foreach ($d4705_u5u as $key => $u5h34r5) { ?>      
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
        <a href="app?accion=v3hFh4&vh3iP=<?= $eCry($u5h34r5['v3hiIDXu']) ?>" class="btn btn-app bg-success">
          <i class="fad fa-arrow-left"></i><br> <?= btn_r36r354r ?>
        </a>   
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
          <form name="edit_user" method="post" action="ApiPHP/v3hiCs_4pi.php?accion=ghYtD85">         
            <div class="row">
              <?php if(!empty($_SESSION['m3ns4j3Frm'])){ ?>
                Por favor verifica <?= $_SESSION['err'] ?> pendiete(s):<p>
                <ul>
                  <?php foreach ($_SESSION['m3ns4j3Frm'] as $key => $value) { ?>
                    <li><?= $value ?></li>
                  <?php } ?>
                </ul>
              <?php } ?>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx001']) && !empty($px01) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx001'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="pp_xx001"><?= lbl_3c0 ?>*</label>
                  <?php if($px01 == ''){ $oce01 = $u5h34r5['v3hi3C0Xu']; }else{ $oce01 = $px01; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx001" id="pp_xx001" value="<?= $oce01 ?>">
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx002']) && !empty($px02) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx002'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pp_xx002"><?= lbl_m47 ?>*</label>
                  <?php if($px02 == ''){ $oce02 = $u5h34r5['Pl4c45X']; }else{ $oce02 = $px02; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx002" id="pp_xx002" value="<?= $oce02 ?>"  >
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx003']) && !empty($px03) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx003'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pp_xx003"><?= lbl_vinN ?></label>
                  <?php if($px03 == ''){ $oce03 = $u5h34r5['vINX']; }else{ $oce03 = $px03; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx003" id="pp_xx003" value="<?= $oce03 ?>">
                </div>
              </div>
             
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx004']) && !empty($px04) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx004'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx004"><?= lbl_mrk ?>*</label>
                  <select class="form-control <?= $v ?>" id="pp_xx004" name="pp_xx004" required onchange="this.form.submit()" >
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                    <?php 
                      if ($px04 == '' || $px04 == null) { $mkr = $u5h34r5['M4rc4s'];  } else { $mkr = $px04;}
                      foreach (c0nM4rk() as $key => $m4m4rKrK) { ?>
                        <option value="<?= $m4m4rKrK['m4xID5s'] ?>"
                          <?php if(/*$m4m4rKrK['m4xID5s'] == $u5h34r5['M4rc4s'] || */$m4m4rKrK['m4xID5s'] == $mkr){ echo ' selected';} ?> ><?= $m4m4rKrK['m4xD35c5s'] ?></option>
                      <?php } ?>      
                  </select>
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx005']) && !empty($px05) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx005'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx005"><?= lbl_8mrk ?>*</label>
                  <select class="form-control <?= $v ?>" id="pp_xx005" name="pp_xx005" <?php //onchange="this.form.submit()" ?> >
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php 
                      //if(!empty($_SESSION['suBmk'])){ $suBmk = $_SESSION['suBmk']; }           
                      foreach ($suBmk as $key => $suBrKrK) { ?>
                        <option value="<?= $suBrKrK['BxIDx'] ?>"
                          <?php if($suBrKrK['BxIDx'] == $u5h34r5['SuBm4rc4']){ echo ' selected';} ?> ><?= $suBrKrK['BxD35x'] ?></option>
                      <?php } ?> 
                    
                  </select>
                </div>
              </div>

              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx006']) && !empty($px06) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx006'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx006"><?= lbl_7ip0 ?>*</label>
                  <?php if(empty($px06)){ $oce06 = $u5h34r5['Su87ip0Xu']; }else{ $oce06 = $px06; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx006" id="pp_xx006" value="<?= $oce06 ?>" >
                </div>
              </div>

              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx007']) && !empty($px07) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx007'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx007"><?= lbl_4nho ?>*</label>
                  <?php if(empty($px07)){ $oce07 = $u5h34r5['4nh0s']; }else{ $oce07 = $px07; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx007" id="pp_xx007" value="<?= $oce07 ?>">
                </div>
              </div>

              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx008']) && !empty($px08) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx008'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx008"><?= lbl_v3c0l0r ?>*</label>
                  <select class="form-control <?= $v ?>" id="pp_xx008" name="pp_xx008">
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach ($c0loR3s as $key => $c0loR) { ?>
                        <?php if(empty($px08)){ $oce08 = $u5h34r5['c0l0rs']; }else{ $oce08 = $px08; } ?>
                        <option value="<?= $key ?>"<?php if ($oce08 == $key){ echo ' selected'; } ?> ><?= $c0loR ?></option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx009']) && !empty($px09) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx009'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="pp_xx009"><?= lbl_pu37a ?></label>
                  <?php if(empty($px09)){ $oce09 = $u5h34r5['Pu3rt45']; }else{ $oce09 = $px09; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx009" id="pp_xx009" value="<?= $oce09 ?>">
                </div>
              </div>              
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx011']) && !empty($px11) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx011'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pp_xx011"><?= lbl_v37Ip0M07oR ?>*</label>
                  <select class="form-control <?= $v ?>" id="pp_xx011" name="pp_xx011">
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach ($m070r3s as $key => $m070r) { ?>
                        <?php if(empty($px11)){ $oce11 = $u5h34r5['Mot0r7p']; }else{ $oce11 = $px11; } ?>
                        <option value="<?= $key ?>"<?php if ($oce11 == $key){ echo ' selected'; } ?> ><?= $m070r ?></option>                       
                      <?php } ?>
                  </select>
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx010']) && !empty($px10) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx010'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pp_xx010"><?= lbl_nSm070r ?></label>
                  <?php if(empty($px10)){ $oce10 = $u5h34r5['m070rs']; }else{ $oce10 = $px10; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx010" id="pp_xx010" value="<?= $oce10 ?>">
                </div>
              </div>  
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx012']) && !empty($px12) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx012'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="pp_xx012"><?= lbl_cIlIn ?></label>
                  <?php if(empty($px12)){ $oce12 = $u5h34r5['cIlInDross']; }else{ $oce12 = $px12; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx012" id="pp_xx012" value="<?= $oce12 ?>">
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx013']) && !empty($px13) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx013'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="pp_xx013"><?= lbl_lItr05 ?></label>
                  <?php if(empty($px13)){ $oce13 = $u5h34r5['lI7r05s']; }else{ $oce13 = $px13; } ?>
                  <input type="text" class="form-control <?= $v ?>" name="pp_xx013" id="pp_xx013" value="<?= $oce13 ?>">
                </div>
              </div>
              
              <?php if(empty($_SESSION['m3ns4j3Frm']['pp_xx014']) && !empty($px14) ) { $v = 'is-valid'; } 
                        elseif($_SESSION['m3ns4j3Frm']['pp_xx014'] != ''){ $v = 'is-invalid'; } else { $v = ''; }
                  ?> 
              <div class="col-sm-4">            
                <div class="form-group">
                  <label for="pp_xx014"><?= lbl_v37r4N5m ?></label>
                  <select class="form-control <?= $v ?>" id="pp_xx014" name="pp_xx014">
                    <option value="nada"><?= lbl_n3w53lL3xi0N4aD ?></option>
                      <?php foreach ($tR4nsMixs as $key => $tR4ns) { ?>
                        <?php if(empty($px14)){ $oce14 = $u5h34r5['7r4N5']; }else{ $oce14 = $px14; } ?>
                        <option value="<?= $key ?>"<?php if ($oce14 == $key){ echo ' selected'; } ?> ><?= $tR4ns ?></option>    
                      <?php } ?>
                  </select>
                </div>
              </div>
 
              <div class="col-sm-12">
                <input type="hidden" name="gju8UUy" id="gju8UUy" value="<?= $u5h34r5['v3hiIDXu'] ?>">
                <button type="submit" class="btn btn-success"><i class="fad fa-save" id="sb" name="sb" value="ok"></i> <?= btn_6u4rD4r ?></button>
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
unset($_SESSION['m3ns4j3Frm']);
unset($_SESSION['err']);
 ?>
