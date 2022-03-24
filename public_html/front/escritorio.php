<?php
/// --- Todos los textos en variables 2021/05/21
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_escritorio.php');
include('parciales/c4bec3r4.php');
include('parciales/menu.php'); 
include('parciales/7i7ul0.php');
?>
  <!-- Main content -->
  <div class="callout callout-info col-12">
    <p><i class="fad fa-bullhorn"></i> <?= actualizacionesSistema ?> <a href="app?accion=v3r" class="btn btn-info btn-xs">Ver</a></p>
  </div>

  <?php if($rll == 0 || $rll == 2 || $rll == 3){ ?>
    <div class="row">
      
      <div class="col-lg-3 col-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?= $nC ?></h3>
            <?php if($nC == 1){ ?>
                <p><?= clienteRegistrado ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-book-user" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #d51b1b; --fa-secondary-color: #bbb;" ></i>
            </div>
              <a href="app?accion=clientes" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nC > 1) { ?>
                  <p><?= clientesRegistrados ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-book-user" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #d51b1b; --fa-secondary-color: #bbb;"></i>
            </div>
              <a href="app?accion=clientes" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nC == 0) {?>
                    <p><?= clientesRegistrados ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-book-user" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #d51b1b; --fa-secondary-color: #bbb;"></i>
          </div>
            <a href="app?accion=clientes" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>


      <div class="col-lg-3 col-6">
        <div class="small-box bg-cyan">
          <div class="inner">
            <h3><?= $nM ?></h3>
            <?php if($nM == 1){ ?>
                <p><?= mascotaRegistrada ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-rabbit" style="--fa-secondary-opacity: 1.0; --fa-primary-color: grey; --fa-secondary-color: white;"></i>
            </div>
              <a href="app?accion=mascotas" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nM > 1) { ?>
                  <p><?= mascotasRegistradas ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-rabbit" style="--fa-secondary-opacity: 1.0; --fa-primary-color: grey; --fa-secondary-color: white;"></i>
            </div>
              <a href="app?accion=mascotas" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nM == 0) {?>
                    <p><?= mascotasRegistradas ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-rabbit" style="--fa-secondary-opacity: 1.0; --fa-primary-color: grey; --fa-secondary-color: white;"></i>
          </div>
            <a href="app?accion=mascotas" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } /*?>
    
    
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $nP ?></h3>
            <?php if($nP == 1){ ?>
                <p><?= proveedorRegistrado ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-shipping-fast" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #2b6eaa; --fa-secondary-color: #605e5e;"></i>
            </div>
              <a href="app?accion=pR0VxD" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nP > 1) { ?>
                  <p><?= proveedoresRegistrados ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-shipping-fast" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #2b6eaa; --fa-secondary-color: #605e5e;"></i>
            </div>
              <a href="app?accion=pR0VxD" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nP == 0) {?>
                    <p><?= proveedoresRegistrados ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-shipping-fast" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #2b6eaa; --fa-secondary-color: #605e5e;"></i>
          </div>
            <a href="app?accion=pR0VxD" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } */?>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-purple">
          <div class="inner">
            <h3><?= $nU ?></h3>
            <?php if($nU == 1){ ?>
                <p><?= usuarioRegistrado ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-user-astronaut" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #c1c1c1; --fa-secondary-color: #08a2ff;"></i>
            </div>
              <a href="app?accion=5u540l" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nU > 1) { ?>
                  <p><?= usuariosRegistrados ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-user-astronaut" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #c1c1c1; --fa-secondary-color: #08a2ff;"></i>
            </div>
              <a href="app?accion=5u540l" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nU == 0) {?>
                    <p><?= usuariosRegistrados ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-user-astronaut" style="--fa-secondary-opacity: 1.0; --fa-primary-color: #c1c1c1; --fa-secondary-color: #08a2ff;"></i>
          </div>
            <a href="app?accion=5u540l" class="small-box-footer"><?= agrergarUno ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>


      <div class="col-lg-3 col-6">
        <div class="small-box bg-pink">
          <div class="inner">
            <h3><?= $nEs ?></h3>
            <?php if($nEs == 1){ ?>
                <p><?= especieRegistrada ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-crow" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black; --fa-secondary-color: yellow;"></i>
            </div>
              <a href="app?accion=especies" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nEs > 1) { ?>
                  <p><?= especiesRegistradas ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-crow" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black; --fa-secondary-color: yellow;"></i>
            </div>
              <a href="app?accion=especies" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nEs == 0) {?>
                    <p><?= especiesRegistradas ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-crow" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black; --fa-secondary-color: yellow;"></i>
          </div>
            <a href="app?accion=especies" class="small-box-footer"><?= agrergarUna ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>



      <div class="col-lg-3 col-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?= $nRa ?></h3>
            <?php if($nRa == 1){ ?>
                <p><?= razaRegistrada ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-feather" style="--fa-secondary-opacity: 1.0; --fa-primary-color:grey; --fa-secondary-color: white;"></i>
            </div>
              <a href="app?accion=razas" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <?php }
            elseif($nRa > 1) { ?>
                  <p><?= razasRegistradas ?></p>
            </div>
            <div class="icon">
              <i class="fad fa-feather" style="--fa-secondary-opacity: 1.0; --fa-primary-color:grey; --fa-secondary-color: white;"></i>
            </div>
              <a href="app?accion=razas" class="small-box-footer"><?= ver ?><i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php }
            elseif($nRa == 0) {?>
                    <p><?= razasRegistradas ?></p>
                    </div>
          <div class="icon">
            <i class="fad fa-feather" style="--fa-secondary-opacity: 1.0; --fa-primary-color:grey; --fa-secondary-color: white;"></i>
          </div>
            <a href="app?accion=razas" class="small-box-footer"><?= agrergarUna ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <?php } ?>


      


    </div>
  <?php } ?>

 <?php // <script>(function(d,z,s){s.src='//'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('rndhaunteran.com',4504857,document.createElement('script'))</script> ?>




<?php if($_SESSION['publicidad'] == 1){ echo add728x90(); ?> 
  <script type='text/javascript' src='//writtenanonymousgum.com/1d/07/e2/1d07e2804630f80d0665034474aa45ea.js'></script>
<?php } ?>


<!--<script type='text/javascript' src='//pl16580984.effectivecpmgate.com/1d/07/e2/1d07e2804630f80d0665034474aa45ea.js'></script>ADSSS-->


  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6960218161476043"
     crossorigin="anonymous"></script>
    <!-- largo-adaptable -->
    <ins class="adsbygoogle"
      style="display:block"
      data-ad-client="ca-pub-6960218161476043"
      data-ad-slot="1683107677"
      data-ad-format="auto"
      data-full-width-responsive="true"></ins>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

  </section>
</div>
  
<?php
include('parciales/3p1416e.php');
 ?>