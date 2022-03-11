  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= lbl_7i7uL0 ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php"><?= lbl_h0m3 ?></a></li>
              <li class="breadcrumb-item active"><?= lbl_7i7uL0 ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php /*<section class="content">
      <div class="alert alert-info">
        
        <h5><?= $saludo ?></h5>
        <big><center><?= $hora_actual ?></center></big>
      </div>
    </section>*/ ?>
    <section class="content">
    <?php $url = url_completa();
          $_SESSION['url_previa'] = $url;
          //echo htmlspecialchars($url); ?>