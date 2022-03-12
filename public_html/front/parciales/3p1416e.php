<script type="text/javascript">
	function e(q) {
    document.body.appendChild( document.createTextNode(q) );
    document.body.appendChild( document.createElement("BR") );
  }
  function inactividad() {
      window.location.href = "app?accion=l00k5cR3n";
  }
  var t=null;
  function contadorInactividad() {
  var tt = (60000*<?= $iDi['config_7im3Bl0'] ?>);//60,000 == 1 Minuto
      t=setTimeout("inactividad()",tt);
  }
  window.onblur=window.onmousemove=function() {
      if(t) clearTimeout(t);
      contadorInactividad();
      
  }
</script>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> <a href="app?accion=v3r">2021.08.28</a>
    </div>
    <strong>Copyright &copy; <?php date('Y'); ?> <a href="http://kumo.click" target="_blank">kumo.click</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<?php include('front/parciales/c0nf.php'); ?>
<!-- Selector de etiquetas -->
<?php if($accion == 'pR0VxD'){ ?>
  <script src="plugins/select2/js/select2.js"></script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-multiple1').select2();
      $('.js-example-basic-multiple2').select2();
      $('.js-example-basic-multiple3').select2();
      $('.js-example-basic-multiple4').select2();
    });
  </script>
<?php } ?>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<?php if($accion == 'mascotas' || $accion == 'clientes' || $accion == 'v3hFh4' || $accion == 'eDtSrv' || $accion == 'eDtD' || $accion == 'N3wTr4' || $accion == 'Tr4V' || $accion == 'mascotasHuerfanas'){ ?>
  <!-- Tempusdominus Bootstrap 4 -->

  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="plugins/moment/locale/es.js"></script>
<?php } ?>

<?php if($accion === '5u540l'){ ?>
  <script>
    $(document).ready(function() {
    $("#cxxt453_add a").on('click', function(event) {
      event.preventDefault();
      if($('#cxxt453_add input').attr("type") == "text"){
        $('#cxxt453_add input').attr('type', 'password');
        $('#cxxt453_add i').addClass( "fa-eye-slash" );
        $('#cxxt453_add i').removeClass( "fa-eye" );
      }else if($('#cxxt453_add input').attr("type") == "password"){
        $('#cxxt453_add input').attr('type', 'text');
        $('#cxxt453_add i').removeClass( "fa-eye-slash" );
        $('#cxxt453_add i').addClass( "fa-eye" );
      }
      });
    });
  </script>
<?php } ?>

<?php if($accion === 'pR0VxD'){
        if($px002 != ''){ ?>
          <script type="text/javascript">
            $(window).on('load', function() {
              $('#modal-nuevo').modal('show');
            });
          </script> 
  <?php } 
      } ?>
<script>
  $(function() {
    
    <?php if($_SESSION['m3ns4J3'] != '' && $_SESSION['m3n3Rr0R']=== 'si'){ ?>
      $('.toastrDefaultSuccess').ready(function() {
        
        /*toastr['error']('<?php /*echo "<ul>";
                              foreach($_SESSION["m3ns4J3"] as $key => $value){ 
                                echo "<li>".$value."</li>"; 
                              } 
                              echo "</ul>"; 
                         */?>','<?php // lbl_3rR0r ?>',{*/
        toastr['error']('<?= $_SESSION["m3ns4J3"]?>','<?= lbl_3rR0r ?>',{                 
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 5000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });
    <?php }elseif($_SESSION['m3ns4J3'] != '' && $_SESSION['m3n3Rr0R']!= 'si'){ ?>
      $('.toastrDefaultSuccess').ready(function() {
        
        toastr['success']('<?= $_SESSION['m3ns4J3'] ?>','<?= lbl_3xi70 ?>',{
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 1000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });
    <?php } ?>

    $('.toastrTheme').click(function() {
        
        toastr['success']('s','<?= lbl_3xi70 ?>',{
          closeButton: true, 
          progressBar: true,
          newestOnTop: true,
          showDuration: 1000,
          hideDuration: 1000,
          timeOut: 5000,
          extendedTimeOut: 5000,
          positionClass: 'toast-top-center'
        })
        
      });


    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    
  });
</script>

<?php if($accion == 'mascotas' || $accion == 'clientes' || $accion == 'escritorio' || $accion == '5u550l' || $accion == 'bin4kuru' || $accion == 'm0d78Os' || $accion == 'pR0VxD' || $accion == 'mascotasHuerfanas'){ ?>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!--<script src="plugins/jszip/jszip.min.js"></script>-->
  <!--<script src="plugins/pdfmake/pdfmake.min.js"></script>-->
  <!--<script src="plugins/pdfmake/vfs_fonts.js"></script>-->
  <?php include('plugins/datatables-buttons/js/buttons.html5_veh1.min.php'); ?>
  <?php include('plugins/datatables-buttons/js/buttons.print_veh1.min.php'); ?>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<?php } ?>

<?php if($accion == 'escritorio' || $accion == '5u550l' || $accion == 'bin4kuru' || $accion == 'm0d78Os'
      || $accion == 'pR0VxD'){ ?>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": true, "autoWidth": false,
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
<?php } ?>
  
<?php if($accion == '5u540l'){ ?>
  <?php if($pp_xx007_add != ''){ ?>
    <script type="text/javascript">
      $(window).on('load', function() {
        $('#modal-nuevo').modal('show');
      });
    </script>
  <?php } ?> 
<?php }?>

</body>
</html>
<?php

unset($_SESSION['m3ns4J3']);
unset($_SESSION['m3n3Rr0R']);
?>