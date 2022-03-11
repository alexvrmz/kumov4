<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_xkmtr4G.php');
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
          </div>
        </div>
        <div class="card-body">
          <a href="app?accion=v3hFh4&vh3iP=<?= $eCry($vh3UjI6Did) ?>" class="btn btn-app bg-success" style="padding-top: 5px;">
            <i class="fad fa-arrow-left"></i> <?= btn_r36r354r ?>
          </a>  
          <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ /// --- Agregar PErmisos?>
          <button class="btn btn-info btn-app" data-toggle="modal" data-target="#modal-cmb" style="padding-top: 5px;"><i class="fad fa-gas-pump"></i> Recarga</button> 
          <?php } ?>
        </div>
      </div>

      <div class="card <?= $brr4 ?> card-outline"> 
        <div class="card-header">
          <h3 class="card-title">
            Mostrando<?php if(!empty($_SESSION['fil_FHI'])) { ?> Rango de Fechas Seleccionado (<?= $NM ?> Movimientos) <?php } else { ?> Recientes (<?= $NM ?> Movimientos) <?php } ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="app?accion=xkmtr4G&vh3UjI6Did=<?= $eCry($vh3UjI6Did) ?>">
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label>Fecha Inicial*</label>
                  <div class="input-group date" id="fil_FHI" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#fil_FHI" name="fil_FHI" id="fil_FHI" value="<?php if(!empty($_SESSION['fil_FHI'])){ echo $_SESSION['fil_FHI']; } ?>" required/>
                    <div class="input-group-append" data-target="#fil_FHI" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label>Fecha Final*</label>
                  <div class="input-group date" id="fil_FHF" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#fil_FHF" name="fil_FHF" id="fil_FHF" value="<?php if(!empty($_SESSION['fil_FHF'])){ echo $_SESSION['fil_FHF']; } ?>" required/>
                    <div class="input-group-append" data-target="#fil_FHF" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label>Buscar</label><br>
                  <button class="btn btn-success btn-sm" type="submit" id="search" name="search"><i class="fad fa-search"></i></button>
                </div>
              </div>
              <div class="col-2">
                <div class="form-group">
                  <label>Borrar</label><br>
                  <a href="app?accion=xkmtr4G&vh3UjI6Did=<?= $eCry($vh3UjI6Did) ?>&trash=<?= $eCry(1) ?>" class="btn btn-danger btn-sm"><i class="fad fa-trash"></i></a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card bg-gradient-light">
              <div class="card-header border-0 ui-sortable-handle">

                <h3 class="card-title">
                  <i class="far fa-chart-line"></i>
                  Gráfica de Rendimiento
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <canvas id="chart-01" style="background-color:rgba(255,255,255,0.00);min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
              <!-- /.card-body -->
            </div>



         


        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fad fa-tachometer-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-center">Odómetro Actual</span>
                  <span class="info-box-number text-center"><?php if($ulKM == 0){ ?>N/D<?php }else{ ?><?= number_format($ulKM, 2, '.', ',') ?> Km <?php } ?> </span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="info-box bg-indigo">
                <span class="info-box-icon"><i class="fad fa-chart-area"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-center">Rendimiento Promedio</span>
                  <span class="info-box-number text-center"><?php if($xCRN == 0){ ?>N/D<?php }else{ ?><?= number_format($xCRN, 2, '.', ',') ?> Km/Lt<?php } ?></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fad fa-money-bill-wave"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-center">Km Promedio</span>
                  <span class="info-box-number text-center"><?php if($xCK == 0){ ?>N/D<?php }else{ ?>$ <?= number_format($xCK, 2, '.', ',') ?><?php } ?></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="info-box bg-teal">
                <span class="info-box-icon"><i class="fad fa-flask"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-center">Lt Promedio</span>
                  <span class="info-box-number text-center"><?php if($xCLTP == 0){ ?>N/D<?php }else{ ?>$ <?= number_format($xCLTP, 2, '.', ',') ?><?php } ?></span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="info-box bg-pink">
                <span class="info-box-icon"><i class="fad fa-cash-register"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-center">Total Combustible</span>
                  <span class="info-box-number text-center"><?php if($xCCTC == 0){ ?>N/D<?php }else{ ?>$ <?= number_format($xCCTC, 2, '.', ',') ?><?php } ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card <?= $brr4 ?> card-outline col-lg-12">
        <div class="card-body">
          <table class="table table-bordered table-hover table-responsive" id="example1">
            <thead>
              <tr>
                <th><?= lbl_kmy ?></th>
                <th>Litros</th>
                <th>Carga</th>
                <th>Precio Litro</th>
                <th>Costo Total</th>
                <th>Distancia Recorrida</th>
                <th>Costo KM</th>
                <th>Rendimiento</th>
                <th>Ticket</th>
                <th>Odómetro</th>
                <th>Fecha Ticket</th>
                <th>Fecha Sistema</th>
                <?php if(v4lID44x50("700-009", $usuario_id) == TRUE){ /// --- agreg km ?>
                  <th></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php
                $i2 = 0;
                foreach ($kil0ms as $xs4f => $P3r70y7) { 
                  $i2++; ?>                     
                  <tr>
                    <td class="corta-texto text-right" style="background-color: black;color: #1cf01c;font-weight: bold; text-align: center;"><?= number_format($P3r70y7['vkmdO'], 2, '.', ',') ?></td>                        
                    <td class="corta-texto text-right"><?= $lts = $P3r70y7['vLTSdO'] != '' ? number_format($P3r70y7['vLTSdO'], 2, '.', ',') : ''; ?></td>
                    <td class="corta-texto text-center"><i class="<?php if($P3r70y7['vTLLdO'] == 1){ echo 'fa fa-star" title="Carga Completa" alt="Carga Completa" style="color: gold;'; } elseif($P3r70y7['vTLLdO'] == 2) { echo 'fad fa-star-half-alt" title="Carga Parcial" alt="Carga Parcial" style="color: gold;'; } elseif($P3r70y7['vTLLdO'] == 3){ echo 'fad fa-gas-pump-slash" title="Sin Carga" alt="Sin Carga" style="color: red'; }?>"  ></i> 
                      <span style="display: none;"><?php if($P3r70y7['vTLLdO'] == 1){ echo 'Carga Completa'; } elseif($P3r70y7['vTLLdO'] == 2) { echo 'Carga Parcial'; } elseif($P3r70y7['vTLLdO'] == 3){ echo 'Sin Carga'; }?></span></td>
                    <td class="corta-texto text-right">$ <?= number_format($P3r70y7['xkPLms'], 2, '.', ',') ?></td>
                    <td class="corta-texto text-right">$ <?= number_format($P3r70y7['vIMPdO'], 2, '.', ',') ?></td>
                    <td class="corta-texto text-right"><?= number_format($P3r70y7['xkDRCms'], 2, '.', ',') ?> Km</td>
                    <td class="corta-texto text-right">$ <?php if($P3r70y7['xkCKms'] != ''){ echo number_format($P3r70y7['xkCKms'], 2, '.', ','); }else{ echo '0.00'; } ?> x Km</td>
                    <td class="corta-texto text-right"><?php if($P3r70y7['xkRNDms'] != ''){ echo number_format($P3r70y7['xkRNDms'], 2, '.', ','); }else{ echo '0.00'; } ?> Km/Lt</td>
                    <td class="corta-texto text-center"><?php if($P3r70y7['xkFTKms'] != ''){ ?><a href="R2D2/<?= $P3r70y7['xkFTKms'] ?>" target="_blank"><i class="fad fa-file"></i> </a><?php } ?></td>
                    <td class="corta-texto text-center"><?php if($P3r70y7['xkFTOms'] != ''){ ?><a href="R2D2/<?= $P3r70y7['xkFTOms'] ?>" target="_blank"><i class="fad fa-file"></i> </a><?php } ?></td>
                    <td class="corta-texto text-center"><?= $P3r70y7['vFRdO'] ?></td>
                    <td class="corta-texto text-center"><?= $P3r70y7['vFKdO'] ?></td>
                      <?php if(v4lID44x50("700-009", $usuario_id) == TRUE){ /// --- agreg km ?>
                        <td class="corta-texto text-center">
                          <?php if(v4lID44x50("700-009", $usuario_id) == TRUE){ /// --- agreg km ?>
                            <?php /*<a href="ApiPHP/v3hiCs_4pi.php?accion=EdI7kM&vh3id=<?= $eCry($vh3UjI6Did) ?>&p3ry6I=<?= $eCry($P3r70y7['vIDdO']) ?>" class="btn bg-gradient-warning btn-xs" data-toggle="modal" data-target="#modal-km"><i class="fad fa-edit"></i></a> */?>
                            <button class="btn bg-gradient-warning btn-xs" data-toggle="modal" data-target="#modal-<?= $i2 ?>"><i class="fad fa-edit"></i></button>
                          <?php } ?>
                          <?php if(v4lID44x50("700-010", $usuario_id) == TRUE){ /// --- eliminar km ?>
                            <a href="ApiPHP/v3hiCs_4pi.php?accion=d3letkm&vh3id=<?= $eCry($vh3UjI6Did) ?>&p3ry6I=<?= $eCry($P3r70y7['vIDdO']) ?>" class="btn bg-gradient-danger btn-xs"><i class="fad fa-trash"></i></a>
                          <?php } ?>
                        </td>
                      <?php } ?>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ ?>
        <div class="modal fade" id="modal-km">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="km" method="post" action="ApiPHP/v3hiCs_4pi.php?accion=hY776">
                <div class="modal-header">
                  <h4 class="modal-title"><?= lbl_ttarkm ?></h4>                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <h4 class="modal-title">Odómetro Actual: <br>
                  <?= $ulKM ?></h4>       
                  <div class="form-group">
                    <label for="pp_xx0100"><?= lbl_nwKym ?>*</label>
                    <input type="number" class="form-control" id="pp_xx0100" name="pp_xx0100" value="<?= $ulKM ?>" required>
                    <input type="hidden" name="pp_xx0101" value="<?= $vh3UjI6Did ?>">
                    <input type="hidden" name="pp_xx0102" value="<?= $usuario_id ?>">
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= btn_C4nC3L4raD ?></button>    
                  <button type="submit" class="btn btn-success" ><i class="fad fa-save"></i> <?= btn_6u4rD4raD ?></button>                  
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="modal fade" id="modal-cmb">
          <div class="modal-dialog">
            <div class="modal-content"> 
              <form name="cmb" method="post" action="ApiPHP/v3hFicH4_4pi.php?accion=hY778" enctype="multipart/form-data">
                <div class="modal-header">
                  <h4 class="modal-title">Recarga de Combustible</h4>                   
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <h4 class="modal-title">Odómetro Actual: <br>
                  <?= number_format($ulKM, 0, '.', ',') ?></h4>       
                </div>
                <div class="modal-body">
                  <?php if($_SESSION['NERR_hY778'] != 0){ ?>
                    <div class="row">
                      <div class="col-12">
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h5><i class="icon fad fa-traffic-cone"></i>Por favor verifica <?= $_SESSION['NERR_hY778'] ?> Errore(s) </h5>
                          <ul>
                            <?php foreach ($_SESSION['MSGF_hY778'] as $key => $value) { ?>
                              <li><?= $value ?></li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="frm_rgcmb001"><?= lbl_nwKym ?>*</label>
                    <input  
                      type="number" 
                      class="form-control" 
                      id="frm_rgcmb001" 
                      name="frm_rgcmb001" 
                      value="<?php if(empty($_SESSION['FRM_hY778']['frm_rgcmb001'])){ echo $ulKM; } else { echo $_SESSION['FRM_hY778']['frm_rgcmb001']; } ?>" 
                      required
                    />
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb002">Litros*</label>
                    <input type="number" step="0.01" class="form-control" id="frm_rgcmb002" name="frm_rgcmb002" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb002'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb002']; } ?>" 
                    />
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb009">Tanque Lleno?*</label>
                    <select class="form-control" id="frm_rgcmb009" name="frm_rgcmb009" requiered>
                      <option value="1" selected>Si</option>
                      <option value="2" >No</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb003">Importe*</label>
                    <input type="number" step="0.01" class="form-control" id="frm_rgcmb003" name="frm_rgcmb003" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb003'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb003']; } ?>" required>
                  </div>

                  <div class="form-group">
                      <label>Fecha Ticket*</label>
                      <div class="input-group date" id="frm_rgcmb010" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#frm_rgcmb010" name="frm_rgcmb010" id="frm_rgcmb010" value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb010'])) { echo $_SESSION['FRM_hY778']['frm_rgcmb010']; } ?>" required/>
                        <div class="input-group-append" data-target="#frm_rgcmb010" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fad fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>

                  <div class="form-group">
                    <label for="frm_rgcmb004"># Ticket*</label>
                    <input type="text" class="form-control" id="frm_rgcmb004" name="frm_rgcmb004" 
                      value="<?php if(!empty($_SESSION['FRM_hY778']['frm_rgcmb004'])){ echo $_SESSION['FRM_hY778']['frm_rgcmb004']; } ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb005">Ticket*</label>
                    <input type="file" class="form-control" id="frm_rgcmb005" name="frm_rgcmb005" required>
                  </div>

                  <div class="form-group">
                    <label for="frm_rgcmb006">Proveedor*</label>
                    <select class="form-control" id="frm_rgcmb006" name="frm_rgcmb006" requiered>
                      <option value="nada">Selecciona...</option>
                      <?php foreach ($LDPC as $key => $value) { ?>
                        <option value="<?= $value['xIDP'] ?>" <?php if($_SESSION['FRM_hY778']['frm_rgcmb006'] == $value['xIDP']){ echo 'selected'; } ?> ><?= $value['xPDE'] ?> | <?= $value['xPRF'] ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <input type="hidden" name="pp_xx0101" value="<?= $vh3UjI6Did ?>">
                  <input type="hidden" name="frm_rgcmb007" id="frm_rgcmb007" value="<?= $vh3UjI6Did ?>">
                  <input type="hidden" name="frm_rgcmb008" id="frm_rgcmb008" value="<?= $usuario_id ?>">

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> Cerrar</button>    
                  <button type="submit" class="btn btn-success" ><i class="fad fa-save"></i> Guardar</button>                  
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->


        </div>


      <?php 
      $i = 0;
      foreach ($kil0ms as $xs4f => $P3r70y7) { ?> 
        <?php if(v4lID44x50("700-007", $usuario_id) == TRUE){ 
              $i++; ?>
        <!-- /.card -->
          <div class="modal fade" id="modal-<?= $i ?>">
            <div class="modal-dialog">
              <div class="modal-content"> 
                <form name="km" method="post" action="ApiPHP/v3hiCs_4pi.php?accion=EdI7kM">
                  <div class="modal-header">
                    <h4 class="modal-title"><?= lbl_ttarkm ?></h4>                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <h4 class="modal-title">Odómetro Actual: <br>
                    <?= $P3r70y7['vkmdO'] ?></h4>       
                    <div class="form-group">
                      <label for="pp_xx0100"><?= lbl_nwKym ?>*</label>
                      <input type="number" class="form-control" id="pp_xx0100" name="pp_xx0100" value="<?= $P3r70y7['vkmdO'] ?>" required>
                      <input type="hidden" name="pp_xx0101" value="<?= $P3r70y7['vIDdO'] ?>">
                      <input type="hidden" name="pp_xx0102" value="<?= $vh3UjI6Did ?>">
                      <input type="hidden" name="pp_xx0103" value="<?= $usuario_id ?>">
                    </div>

 
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> Cancelar</button>    
                    <button type="submit" class="btn btn-success" ><i class="fad fa-save"></i> Guardar</button>                  
                  </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->



          </div>
        <?php } ?>
      <?php } ?>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include('parciales/3p1416e.php');
 ?>
<?php if($_SESSION['FRM_hY778'] != ''){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-cmb').modal('show');
    });

    
  </script>
<?php } ?>

   <!-- Chart.Js -->
<script src="plugins/chart.js/chart.js"></script>
<script>
  $(function () {


    function DrawTheChart(ChartData,ChartOptions,ChartId,ChartType){
    eval('var myLine = new Chart(document.getElementById(ChartId).getContext("2d"),{type:"'+ChartType+'",data:ChartData,options:ChartOptions});document.getElementById(ChartId).getContext("2d").stroke();')
    }
     function MoreChartOptions(){} 
          var ChartData = {
            labels : [<?php foreach ($kil0ms as $xs4f => $P3r70y7) { if($P3r70y7['vTLLdO'] != 3 && $P3r70y7['xkCKms'] != ''){ echo "'".$P3r70y7['vFRdO']."',";} } ?>],
            datasets : [
              {
              data : [<?php foreach ($kil0ms as $xs4f => $P3r70y7) { if($P3r70y7['vTLLdO'] != 3 && $P3r70y7['xkCKms'] != ''){ echo "'".number_format($P3r70y7['xkCKms'], 2, '.', ',')."',";} } ?>],
              backgroundColor :'rgba(0,191,255,0.49)',
              borderColor : '#00bfff',
              pointBackgroundColor:'#3498db',
              fill: true,
              pointBorderColor : '#00bfff',
              label:"Costo x Km"},

              {
              data : [<?php foreach ($kil0ms as $xs4f => $P3r70y7) { if($P3r70y7['vTLLdO'] != 3 && $P3r70y7['xkCKms'] != ''){ echo "'".number_format($P3r70y7['xkRNDms'], 2, '.', ',')."',"; } } ?>],
              backgroundColor :'rgba(30,255,0,0.45)',
              borderColor : '#1eff00',
              pointBackgroundColor:'#2ecc71',
              pointBorderColor : '#1eff00',
              fill: true,
              label:"KM/L"},

          ]
            };
          ChartOptions= {
            responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false,
            layout:{padding:{top:12,left:12,bottom:12,},},
            scales: {
            xAxes:[{
              stacked: true,gridLines:{borderDash:[],},
          }],

            yAxes:[{
              stacked: true,gridLines:{borderDash:[],},
          }],
          },plugins:{
          datalabels:{display:true,
            font:{
              size:14,
              style:' bold',},},
          },
          legend:{
            labels:{
              fontSize:20,
              generateLabels: function(chart){
                return  chart.data.datasets.map( function( dataset, i ){
                  return{
                    text:dataset.label,
                    lineCap:dataset.borderCapStyle,
                    lineDash:[],
                    lineDashOffset: 0,
                    lineJoin:dataset.borderJoinStyle,
                    fillStyle:dataset.backgroundColor,
                    strokeStyle:dataset.borderColor,
                    lineWidth:dataset.pointBorderWidth,
                    lineDash:dataset.borderDash,
                  }
                })
              },

            },
          },
          elements: {
            arc: {
          },
            point: {radius:10,borderWidth:2,},
            line: {tension:0.4,borderWidth:6,
          },
            rectangle: {
          },
          },
          tooltips:{
            mode:'index',
            intersect:false,
          },
          interaction: {
        intersect: false,
      },
          hover:{
            mode:'nearest', 
            animationDuration:400,
          },
          };
          DrawTheChart(ChartData,ChartOptions,"chart-01","line");


          

    
  })
</script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
        "ordening": true,
        "order": [[ 0, "desc" ]],
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
   <script>
    $(function () {
      $('#frm_rgcmb010').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
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

      $('#fil_FHF').datetimepicker({
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

      $('#fil_FHI').datetimepicker({
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
    });
  </script>