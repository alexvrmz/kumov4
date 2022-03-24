<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_Bin4kuru.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?> 
    <!-- Main content -->


      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_002 ?></h3>

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
            <!-- Timelime example  -->
            <div class="row">
              <div class="col-md-12">
                <!-- The time line -->
                <div class="timeline">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-green"><?= date('Y-m-d') ?></span>
                  </div>
                  <!--<pre>
                    <?php print_r($ldi) ?>
                  </pre>-->
                  
                  <!-- /.timeline-label -->
                  <?php foreach ($ldi as $key => $value) { ?>
                    <?php if($value['biAccion'] == 1){ 
                            $ttx = 'El '.$value['biTipoA'].': <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['afectadoID'].'</a> ';
                            $ttx .= $acciones[$value['biAccion']];
                            //$ttx .= $value['biCambios']; 
                            $ico = 'person-booth';
                            $bg = 'green';
                          } 
                          elseif($value['biAccion'] == 2) {
                            $ttx = 'El '.$value['biTipoA'].': <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['afectadoID'].'</a> ';
                            $ttx .= $acciones[$value['biAccion']];
                            $ico = 'door-open';
                            $bg = 'red';
                          }
                          /*elseif ($value['biAccion'] == 200 || $value['biAccion'] == 201 || $value['biAccion'] == 202 || $value['biAccion'] == 203) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['kuUUIDx']).'" target="_blanck">'.$value['Edu'].'</a>';
                            if($value['biAccion'] == 200){
                              $ico = 'user-plus';
                              $bg = 'blue';
                            }
                            elseif($value['biAccion'] == 201){
                              $ico = 'user-slash';
                              $bg = 'red';
                            }
                            elseif($value['biAccion'] == 202){
                              $ico = 'user';
                              $bg = 'green';
                            }
                            elseif($value['biAccion'] == 203){
                              $ico = 'edit';
                              $bg = 'warning';
                            }
                          }*/
                          elseif($value['biAccion'] == 3) {
                            $ttx = 'El '.$value['biTipoA'].': <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biUsuario'].'</a> '; 
                            $ttx .= $acciones[$value['biAccion']];
                            $ttx .= ' <a target="_blank" href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['afectadoID'].'</a>';
                            $ico = 'building';
                            $bg = 'indigo';
                          }
                          elseif($value['biAccion'] == 301) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=x7l07iLl4&eMpr3='.$eCry($value['kuEMDx']).'" target="_blanck">'.$value['EeU'].'</a> ';
                            $ico = 'edit';
                            $bg = 'gray';
                          }
                          elseif($value['biAccion'] == 400 || $value['biAccion'] == 401) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hiXs&flo0='.$eCry($value['kuFLIDx']).'" target="_blanck">'.$value['EfU'].'</a>';
                            if($value['biAccion'] == 400){
                              $ico = 'car-bus';
                              $bg = 'purple';
                            }
                            elseif($value['biAccion'] == 401){
                              $ico = 'pen-to-square';
                              $bg = 'pink';
                            }
                          }
                          elseif($value['biAccion'] == 402) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hiXs&flo0='.$eCry($value['kuFLIDx']).'" target="_blanck">'.$value['EfU'].'</a> ';
                            $ttx .= '<i class="fad fa-circle-arrow-right"></i> ';
                            $ttx .= '<a target="_blank" href="app?accion=x7l07iLl4&eMpr3='.$eCry($value['kuEMDx']).'" target="_blanck">'.$value['EeU'].'</a>';
                            $ico = 'link';
                            $bg = 'orange';
                          }
                          elseif($value['biAccion'] == 403) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hiXs&flo0='.$eCry($value['kuFLIDx']).'" target="_blanck">'.$value['EfU'].'</a> ';
                            $ttx .= '<i class="fad fa-circle-arrow-right"></i> ';
                            $ttx .= '<a target="_blank" href="app?accion=x7l07iLl4&eMpr3='.$eCry($value['kuEMDx']).'" target="_blanck">'.$value['EeU'].'</a>';
                            $ico = 'link-slash';
                            $bg = 'red';
                          }
                          elseif($value['biAccion'] == 500) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hFh4&vh3iP='.$eCry($value['kuVEIDx']).'" target="_blanck">'.$value['EdV'].'</a> ';
                            $ico = 'car';
                            $bg = 'teal';
                          }
                          elseif($value['biAccion'] == 501) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="" target="_blanck">'.$value['EdD'].'</a> ';
                            $ttx .= '<i class="fad fa-circle-arrow-right"></i> ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hFh4&vh3iP='.$eCry($value['kuVEIDx']).'" target="_blanck">'.$value['EdV'].'</a>';
                            $ico = 'input-numeric';
                            $bg = 'white';
                          }
                          elseif($value['biAccion'] == 502) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hFh4&vh3iP='.$eCry($value['kuVEIDx']).'" target="_blanck">'.$value['EdV'].'</a>';
                            $ico = 'edit';
                            $bg = 'warning';
                          }
                          elseif($value['biAccion'] == 503) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="" target="_blanck">'.$value['EdD'].'</a> ';
                            $ttx .= '<i class="fad fa-circle-arrow-right"></i> ';
                            $ttx .= '<a target="_blank" href="app?accion=v3hFh4&vh3iP='.$eCry($value['kuVEIDx']).'" target="_blanck">'.$value['EdV'].'</a>';
                            $ico = 'input-numeric';
                            $bg = 'danger';
                          }
                          elseif($value['biAccion'] == 600) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=xPr0xV='.$eCry($value['kuPIDx']).'" target="_blanck">'.$value['EdP'].'</a>';
                            $ico = 'truck-loading';
                            $bg = 'success';
                          }
                          elseif($value['biAccion'] == 602) {
                            $ttx = 'El usuario: <a href="app?accion=5u540l_02&u5u4oxX='.$eCry($value['biIDA']).'" target="_blanck">'.$value['biIDA'].'</a> '; 
                            $ttx .= $value['biCambios'].' ';
                            $ttx .= '<a target="_blank" href="app?accion=xPr0xV='.$eCry($value['kuPIDx']).'" target="_blanck">'.$value['EdP'].'</a> ';
                            $ico = 'edit';
                            $bg = 'gray';
                          } ?>
                    <!-- timeline item -->
                      <div>
                        <i class="fad fa-<?= $ico ?> bg-<?= $bg ?>"></i>
                        <div class="timeline-item">
                          <span class="time"><a href="#"></a></span>
                          <h3 class="timeline-header" style="color: orange;"><i class="fas fa-clock"></i> <?= date_create($value['biFecha'])->format('H:i:s') ?>  </h3>
                          <div class="timeline-body">
                            <?= $ttx ?>
                          </div>
                          <!--<div class="timeline-footer">
                            <a class="btn btn-primary btn-sm">Read more</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                          </div>-->
                        </div>  
                      </div>
                  <?php } ?>

                  <!-- END timeline item -->
                  <?php /*<!-- timeline item -->
                  <div>
                    <i class="fas fa-user bg-green"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-comments bg-yellow"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-sm">View comment</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->




                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-green">3 Jan. 2014</span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fa fa-camera bg-purple"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                      <div class="timeline-body">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-video bg-maroon"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                      <div class="timeline-body">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                        </div>
                      </div>
                      <div class="timeline-footer">
                        <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item --> */ ?>
                  <div>
                    <i class="fas fa-clock bg-gray"></i>
                  </div>
                </div>
              </div>
              <!-- /.col -->
            </div>
          <!-- /.timeline -->
        </div>
        <!--/.card-body -->
        <div class="card-footer">
         <?= lbl_002 ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>
      

      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title">Eventos</h3>

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
                      <th>Usuario</th>
                      <th></th>
                      <th>Accion</th>
                      <th>Afectado</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($ldi as $key => $value) { ?>                     
                      <tr>
                        <td><?= $value['biIDA'] ?></td>
                        <td></td>
                        <td><?= $value['biCambios'] ?></td>
                        <td><?= $value['Edu'] ?><?= $value['EeU'] ?><?= $value['EfU'] ?><?= $value['EdD'] ?><?= $value['EdV'] ?><?= $value['EdP'] ?></td>
                        <td><?= $value['biFecha'] ?></td>
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

      <?php if($_SESSION['publicidad'] == 1){ echo add728x90(); } ?>
      


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
