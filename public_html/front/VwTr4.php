<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_VwTr4.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
    <div class="card <?= $brr4 ?> card-outline col-md-12">
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
          <a type="button" class="btn bg-gradient-success btn-app" style="padding-top: 6px;"href="app?accion=v3hFh4&vh3iP=<?= $eCry($xcIDV3Hs) ?>"><i class="fad fa-arrow-left"></i> <br><?= btn_46r364rU5u4ri0 ?></a>
        </div>
      </div>
    </div>


    <div class="card <?= $brr4 ?> card-outline col-md-12">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                <div class="card-header">
                <h4>
                    <i class="fad fa-<?= $xFICOn ?>"></i> Trámite | <?= $xFDECOn ?>
                    <small class="float-right">
                              
                      <?php if($xdDcVED < $dRV){ ?>
                        <span class="badge badge-danger">
                          <?php if($xdDcVED > 0){ ?>
                            <i class="fad fa-alarm-exclamation"></i>
                          <?php } elseif($xdDcVED < 0){ ?>
                            Hece: 
                          <?php } ?>
                          <?= str_replace("+", "", $xdDcVED) ?> dia(s)</span>
                        <?php } ?>

                      <?php if($xFEDOn == 1){ ?>
                        <span class="badge badge-success">Activo</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Inactivo</span>
                      <?php } ?>
                    </small>
                  </h4>
                </div>
                  
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Proveedor
                  <address>
                    <strong><?= $xFDesPROn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Usuario
                  <address>
                    <strong><?= $xFNaMUOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Fecha Emisión
                  <address>
                    <strong><?= $xFFIOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Trámite
                  <address>
                    <strong><?= $xFNSOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Vehiculo
                  <address>
                    <strong><?= $xFECOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Vencimiento
                  <address>
                    <strong><?= $xFFFOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Importe
                  <address>
                    <strong><?= $xFIMOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Notificación (dias)
                  <address>
                    <strong><?= $xFTAOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Fecha Subida
                  <address>
                    <strong><?= $xFFSOn ?></strong><br>
                  </address>
                </div>
                <!-- /.col -->
                
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12">
                  <?php if(v4lID44x50("1400-006", $usuario_id) == TRUE){ ?>
                    <button type="button" class="btn btn-success float-left btn-sm" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;margin-bottom: 20px;">
                     <i class="fad fa-upload"></i> Subir Documento
                    </button>
                  <?php } ?>
                  <?php if(v4lID44x50("1400-003", $usuario_id) == TRUE){ ?>
                    <button type="button" class="btn btn-warning float-right btn-sm" data-toggle="modal" data-target="#modal-edit" style="margin-right: 5px;margin-bottom: 20px;">
                      <i class="fad fa-save"></i> Editar
                    </button>
                  <?php } ?>

                  <?php if(v4lID44x50("1400-002", $usuario_id) == TRUE){ ?>
                    <a href="app?accion=N3wTr4&rr=<?= $eCry($xIDS) ?>&xDI4Rt=<?= $eCry($xDI4Rt) ?>&xcIDV3Hs=<?= $eCry($xcIDV3Hs) ?>" class="btn btn-success float-right btn-sm" style="margin-right: 5px;margin-bottom: 20px;">
                      <i class="fad fa-redo"></i> Reemplazar
                    </a>
                  <?php } ?>

                </div>
                <?php if(v4lID44x50("1400-007", $usuario_id) == TRUE){ ?>
                  <div class="col-12 table-responsive">
                    <table class="table table-striped" id="example1">
                      <thead>
                      <tr>
                        <?php if($rll == 0){ ?>
                          <th>ID</th>
                        <?php } ?>
                        <th>Descripción</th>
                        <th>Archivo</th>
                        <th>Importe</th>
                        <th>Emisión</th>
                        <th>Vencimiento</th>
                        <th>Estado</th>
                        <?php if(v4lID44x50("1400-003", $usuario_id) == TRUE){ ?>
                          <th></th>
                        <?php } ?>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($LDDT as $key => $value) { ?>
                          <tr>
                            <?php if($rll == 0){ ?>
                              <td><?= $value['xFgDIDjk'] ?></td>
                            <?php } ?>
                            <td><?= $value['xFgDDesjk'] ?></td>
                            <td><a href="<?= $value['xFgDFiljk'] ?>" target="_blanc"><i class="fad fa-<?= $value['ifcICOc'] ?>"></i></a> </td>
                            <td><?= $iMup = $value['xFgDIMjk'] != '' ? '$ '.number_format($value['xFgDIMjk'], 2, '.', ',') : '$ 0.00'; ?></td>
                            <td><?= $value['xFgDFEjk'] ?></td>
                            <td><?= $value['xFgDFVjk'] ?></td>
                            <td>
                              <?php if($value['xFgDED0jk'] == 1){ ?>
                                <span class="badge badge-success">Activo</span>
                              <?php }else { ?>
                                <span class="badge badge-danger">Inactivo</span>
                              <?php } ?>
                            </td>
                            <?php /*if(v4lID44x50("1400-003", $usuario_id) == TRUE){ ?>
                              <td><button class="btn btn-warning btn-xs"><i class="fad fa-edit"></i> Editar</button></td>
                            <?php } */?>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                <?php } ?>
                <!-- /.col -->
              </div>
              <!-- /.row -->

          

              <!-- this row will not appear when printing -->
                
            </div>
            <?php if(v4lID44x50("1400-006", $usuario_id) == TRUE){ ?>
              <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Subir Documento</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="ApiPHP/N3wTr4_4pi?accion=ad4DcTr4" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fmrd_001">Nombre*</label>
                            <input type="text" class="form-control" id="fmrd_001" name="fmrd_001" required>
                        </div>

                        <div class="form-group">
                            <label for="fmrd_002">Número / Folio </label>
                            <input type="text" class="form-control" id="fmrd_002" name="fmrd_002">
                        </div>

                        <div class="form-group">
                          <label>Feche Emisión</label>
                            <div class="input-group date" id="fmrd_003"  data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#fmrd_003" name="fmrd_003"/>
                                <div class="input-group-append" data-target="#fmrd_003" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Fecha Vigencia</label>
                            <div class="input-group date" id="fmrd_004"  data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#fmrd_004" name="fmrd_004"/>
                                <div class="input-group-append" data-target="#fmrd_004" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fmrd_005">Importe</label>
                            <input type="text" class="form-control" id="fmrd_005" name="fmrd_005">
                        </div>

                        <div class="form-group">
                            <label for="fmrd_007">Notificación (dias)</label>
                            <input type="text" class="form-control" id="fmrd_007" name="fmrd_007">
                        </div>

                        <div class="form-group">
                            <label for="fmrd_008">Archivo*</label>
                            <input type="file" class="form-control" id="fmrd_008" name="fmrd_008" required>
                        </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> Cerrar</button>
                        <button type="submit" class="btn btn-success"><i class="fad fa-upload"></i> Subir</button>
                      </div>

                      <input type="hidden" id="fmrd_009" name="fmrd_009" value="<?= $xDI4Rt ?>">
                      <input type="hidden" id="fmrd_010" name="fmrd_010" value="<?= $xFveOn ?>">
                      <input type="hidden" id="fmrd_011" name="fmrd_011" value="<?= $xFidOn ?>">
                        
                      </form>
                    </div>
                    
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
            <?php } ?>

            <?php if(v4lID44x50("1400-003", $usuario_id) == TRUE){ ?>
              

              <div class="modal fade" id="modal-edit" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Editar Trámite</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
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

                      <form method="POST" action="ApiPHP/N3wTr4_4pi?accion=edTDcTr4" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="fmrd_002">Número / Folio</label>
                            <input type="text" class="form-control" id="fmrd_002" name="fmrd_002" value="<?= $xFNSOn ?>">
                        </div>

                        <div class="form-group">
                          <label>Feche Emisión</label>
                            <div class="input-group date" id="fmrd_003_e"  data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#fmrd_003_e" name="fmrd_003_e" value="<?= $xFFIOn ?>"/>
                                <div class="input-group-append" data-target="#fmrd_003_e" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label>Fecha Vigencia</label>
                            <div class="input-group date" id="fmrd_004_e"  data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#fmrd_004_e" name="fmrd_004_e" value="<?= $xFFFOn ?>"/>
                                <div class="input-group-append" data-target="#fmrd_004_e" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="fmrd_005">Importe</label>
                            <input type="text" class="form-control" id="fmrd_005" name="fmrd_005" value="<?= $xFIMOn ?>">
                        </div>

                        <div class="form-group">
                            <label for="fmrd_007">Notificación (dias)</label>
                            <input type="text" class="form-control" id="fmrd_007" name="fmrd_007" value="<?= $xFTAOn ?>">
                        </div>
                        
                        <?php if(empty($LDPS)){ ?>
                          <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fad fa-traffic-cone"></i> Alerta!</h5>
                            Aún no has registrado ningun proveedor, <a href="app?accion=pR0VxD" target="_blank">Agrega uno!</a>, 
                            regresa y <a href="#">Actualiza la página</a>
                          </div>
                        <?php } else { ?>
                          <div class="form-group">
                            <label for="fmrd_012">Proveedor</label>
                            <select class="form-control" id="fmrd_012" name="fmrd_012">
                              <option value="nada">Selecciona..</option>
                              <?php foreach ($LDPS as $key => $value) { ?>
                                <option value="<?= $value['xidPf'] ?>" <?php if($value['xidPf'] == $xFPrOn){ echo 'selected'; } ?>><?= $value['idpDFes'] ?></option>
                              <?php } ?>
                            </select> 
                          </div>
                        <?php } ?>

                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> Cerrar</button>
                          <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> Guardar</button>
                        </div>

                        <input type="hidden" id="fmrd_009" name="fmrd_009" value="<?= $xDI4Rt ?>">
                        <input type="hidden" id="fmrd_010" name="fmrd_010" value="<?= $xFveOn ?>">
                        <input type="hidden" id="fmrd_011" name="fmrd_011" value="<?= $xFidOn ?>">
                        
                      </form>
                    </div>
                    
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

             
            <?php } ?>



      <!--<div class="card <?= $brr4 ?> card-outline col-md-9">
        <div class="card-header">
          <h3 class="profile-username text-center">Trámite | <i class="fad fa-<?= $xFICOn ?>"></i> <?= $xFDECOn ?></h3>  
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
        
        <form name="nuevo" method="post" action="ApiPHP/N3wTr4_4pi?accion=tR4Add" enctype="multipart/form-data">
          <div class="form-group">
            <label for="frm_x001">Número de Trámite*</label>
            <input type="text" class="form-control" id="frm_x001" name="frm_x001" required disabled value="<?= $xFNSOn ?>">
          </div>

          <div class="form-group">
            <label>Fecha Inicio*</label>
            <div class="input-group date" id="frm_x002" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#frm_x002" name="frm_x002" id="frm_x002" required disabled value="<?= $xFFIOn ?>"/>
              <div class="input-group-append" data-target="#frm_x002" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fad fa-calendar"></i></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Fecha Vencimiento*</label>
            <div class="input-group date" id="frm_x003" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#frm_x003" name="frm_x003" id="frm_x003" required disabled value="<?= $xFFFOn ?>"/>
              <div class="input-group-append" data-target="#frm_x003" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fad fa-calendar"></i></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Fecha Ingreso Sistema</label>
              <input type="text" class="form-control" disabled value="<?= $xFFSOn ?>"/>
          </div>

          <div class="form-group">
            <label for="frm_x009">Proveedor*</label>
            <select class="form-control" name="frm_x009" id="frm_x009" disabled>
              <option value="">Selecciona...</option>
              <?php foreach ($LDP as $key => $value) { ?>
                <option value="<?= $value['xPIDx'] ?>" <?php if($value['xPIDx'] == $xFPrOn){ echo 'selected'; } ?>><?= $value['xpN'] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label for="frm_x004">Importe</label>
            <input type="text" class="form-control" name="frm_x004" id="frm_x004" disabled value="<?= $xFIMOn ?>">
          </div>

          <div class="form-group">
            <label for="frm_x005">Alerta Personalizada (Días)</label>
            <input type="text" class="form-control" name="frm_x005" id="frm_x005" disabled value="<?= $xFTAOn ?>">
          </div>

          <input type="text" name="frm_x006" id="frm_x006" value="<?= $xcIDV3Hs ?>" required>
          <input type="text" name="frm_x007" id="frm_x007" value="<?= $xDI4Rt ?>" required>
          <input type="text" name="frm_x008" id="frm_x008" value="<?= $usuario_id ?>" required>

          <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= btn_n3w6u4rD4r ?></button>
          </div>
        </form> 
      </div>-->
      
  </section>
</div>
<?php include('parciales/3p1416e.php'); ?>
  <?php if($_SESSION['tXFrm'] != ''){ ?>
    <script type="text/javascript">
      $(window).on('load', function() {
        $('#modal-edit').modal('show');
      });
    </script>
   <?php } ?>

<?php

unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
    <script>
      $('#fmrd_003').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fad fa-clock-o',
          date: 'fad fa-calendar',
          up: 'fad fa-arrow-up',
          down: 'fad fa-arrow-down',
          previous: 'fad fa-chevron-left',
          next: 'fad fa-chevron-right',
          today: 'fad fa-calendar-day',
          clear: 'fad fa-trash',
          close: 'fad fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#fmrd_004').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fad fa-clock-o',
          date: 'fad fa-calendar',
          up: 'fad fa-arrow-up',
          down: 'fad fa-arrow-down',
          previous: 'fad fa-chevron-left',
          next: 'fad fa-chevron-right',
          today: 'fad fa-calendar-day',
          clear: 'fad fa-trash',
          close: 'fad fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
      $('#fmrd_003_e').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fad fa-clock-o',
          date: 'fad fa-calendar',
          up: 'fad fa-arrow-up',
          down: 'fad fa-arrow-down',
          previous: 'fad fa-chevron-left',
          next: 'fad fa-chevron-right',
          today: 'fad fa-calendar-day',
          clear: 'fad fa-trash',
          close: 'fad fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });

      $('#fmrd_004_e').datetimepicker({
        format: 'YYYY-MM-DD',
        icons: {
          time: 'fad fa-clock-o',
          date: 'fad fa-calendar',
          up: 'fad fa-arrow-up',
          down: 'fad fa-arrow-down',
          previous: 'fad fa-chevron-left',
          next: 'fad fa-chevron-right',
          today: 'fad fa-calendar-day',
          clear: 'fad fa-trash',
          close: 'fad fa-times'
        },
        calendarWeeks: true,
        locale: 'es',
        toolbarplacement: 'bottom',
        buttons:  {
            showToday: true,
            showClear: true,
            showClose: true
        }
      });
    </script>
