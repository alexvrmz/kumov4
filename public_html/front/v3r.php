<?php
/// --- Todos los textos en variables 2021/05/21
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_v3r.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php');
include('parciales/7i7ul0.php');
?>
    <!-- Main content -->
       

      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline col-lg-12">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_1er7i7u ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fad fa-minus"></i>
            </button>       
          </div>
        </div>
          <div class="card-body">
            <div class="col-md-12">
              <?php /*<pre><?php print_r($LDC); ?></pre>*/ ?>
              <!-- The time line -->
              <div class="timeline">
                <?php foreach ($LDC as $key => $value) { ?>
                  <div class="time-label">
                    <?php if($cbv != $value['xFxE']){ ?>
                      <!-- timeline time label -->
                      <span class="bg-red"><?= substr($value['xFxE'], 0, -9);  ?></span>
                      <!-- /.timeline-label -->
                    <?php } 
                          $cbv = $value['xFxE'];  ?>
                  </div>
                  <!-- timeline item -->
                  <div>
                    <i class="fad fa-<?= $value[$value['xVxR']]['xIxC'] ?> bg-<?= $value[$value['xVxR']]['xCxL']  ?>"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fad fa-clock"></i> <?= $value[$value['xVxR']]['xTxM']  ?></span>
                      <h3 class="timeline-header"><a href="#"><?= $value[$value['xVxR']]['xTxT'] ?></a></h3>

                      <div class="timeline-body">
                        <?= $value[$value['xVxR']]['xDxE'] ?>
                      </div>
                      <div class="timeline-footer">
                        <?php if($value[$value['xVxR']]['xLxN'] != ''){ ?>
                          <a href="<?= $value[$value['xVxR']]['xLxN'] ?>" class="btn btn-info btn-sm"><i class="fad fa-eye"></i> Ver más..</a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                <?php } ?>
                
                <!-- timeline item 
                <div>
                  <i class="fas fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                    <div class="timeline-body">
                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                      quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-sm">Read more</a>
                      <a class="btn btn-danger btn-sm">Delete</a>
                    </div>
                  </div>
                </div>
                -- END timeline item -->

               
                <div>
                  <i class="fas fa-clock bg-gray"></i>
                </div>
              </div>
            </div>
          </div>
        <!--/.card-body -->
        <div class="card-footer">
        <?= lbl_1er7i7u ?>
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