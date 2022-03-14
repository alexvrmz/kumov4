<?php
include('idiomas/'.$iDi['u5h8ir5_iDi'].'/i_consultas.php');
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
          <div class="btn-group" role="group">
            <?php if(isset($_SESSION['formConsulta']) == true){ ?>
              <a data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-calendar-check"></i> <?= continuarFormulario ?></a>
              <a href="ApiPHP/consultas_api?accion=borrarFormulario" class="btn bg-gradient-danger btn-app" style="padding-top: 6px;" ><i class="fad fa-trash"></i> <?= eliminarFormulario ?></a>
            <?php }elseif(isset($_SESSION['formConsulta']) == false && v4lID44x50("700-002", $usuario_id) == TRUE ){ ?>
              <button type="button" data-toggle="modal" data-target="#modal-nuevo" class="btn bg-gradient-success btn-app" style="padding-top: 6px;" ><i class="fad fa-calendar-check"></i> <?= btn_46r364rU5u4ri0 ?></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
      <div class="card <?= $brr4 ?> card-outline col-md-12">
        <div class="card-header">
          <h3 class="profile-username text-center"><?= listadoConsultas ?></h3>  
        </div>




        <div class="card-body">
        <div id="calendar"></div>

          <?php /*if($numConsultas == 0){ ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h3><i class="icon fad fa-cat-space fa-2x"></i> Upsss!</h3>
              <h4><?= no_encontre ?></h4>
            </div>
          <?php }else { ?>
            <table class="table table-bordered table-hover table-responsive" id="example1" style="border: 0px;">
              <thead>
                <tr>
                  <th class="corta-texto"><?= acciones ?></th>
                  <th class="corta-texto"><?= id ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= nombre ?> <i class="fad fa-sort-alt"></i></th>
                  <th  class="corta-texto"><?= especie ?> <i class="fad fa-sort-alt"></i></th>
                  <th class="corta-texto"><?= estado ?> <i class="fad fa-sort-alt"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($LdConsultas as $key => $consultas) { ?>
                  <tr>
                    <td style="text-align: center;">
                      <div class="btn-group" role="group">
                        <?php if(v4lID44x50("700-003", $usuario_id) == TRUE && $consultas['consultasInicial'] == 0){ /// --- Editar Modulo ?>
                          <a href="app?accion=editarConsulta&consultasID=<?= $eCry($consultas['consultasID']) ?>" class="btn bg-gradient-warning btn-sm"><i class="fad fa-edit"></i></a>
                        <?php } ?>
                      </div>
                    </td>
                    <td><?= $consultas['consultasID'] ?></td>
                    <td><?= $consultas['consultasNombre'] ?></td>
                    <td><?= $consultas['consultasEspecie'] ?></td>
                    <td class="corta-texto"><?= $consultasEstado = $consultas['consultasEstado'] == 1 ? '<span class="float-left badge bg-success">'.activo:'<span class="float-left badge bg-danger">'.inactivo; ?></span></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          <?php } */?>
        </div>

        
        <!-- /.card-body -->
      </div>


    <?php if(v4lID44x50("700-002", $usuario_id) == TRUE ){ ?>
      <div class="modal fade " id="modal-nuevo">
        <div class="modal-dialog ">
          <div class="modal-content <?= $brr4 ?> card-outline">
            <form method="POST" action="ApiPHP/consultas_api?accion=procesaConsulta" name="nuevaConsulta" enctype="multipart/form-data">  
            
              <div class="modal-header">
                <h4 class="modal-title"><i class="fad fa-feather"></i> <?= nuevaConsulta ?></h4>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                  <?php if(!empty($_SESSION['mensajeForm'])){ ?>
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h5><i class="fad fa-cat-space fa-2x" style="--fa-secondary-opacity: 1.0; --fa-primary-color:black ; --fa-secondary-color: #0080ff91; --fa-flash-opacity: 0.67; --fa-flash-scale: 1.075;"></i> Por favor verifica <?= $_SESSION['formError'] ?> pendiete(s):</h5>
                      <ul>
                        <?php foreach ($_SESSION['mensajeForm'] as $key => $value) { ?>
                          <li><?= $value ?></li>
                        <?php } ?>
                      </ul> 
                    </div>
                  <?php } ?>

                  <div class="form-group">
                    <label for="consultasNombre"><?= nombre ?>*</label>
                    <input type="text" class="form-control" id="consultasNombre" name="consultasNombre" value="<?= $_SESSION['formConsulta']['consultasNombre'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="consultasEspecie"><?= especie ?></label>
                    <select class="form-control" id="consultasEspecie" name="consultasEspecie" required>
                      <option value="Nada"><?= selecciona ?></option>
                      <?php foreach ($listaEspecies as $key => $especie) { ?>
                        <option value="<?= $especie['especieID'] ?>"><?= $especie['especieNombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>  


              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fad fa-times"></i> <?= cerrar ?></button>
              <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> <?= guardar ?></button>
              
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php } ?>

  </section>
</div>

<?php include('parciales/3p1416e.php'); 


unset($_SESSION['tXFrm']);
unset($_SESSION['m3n3Rr0R_num']);
?>
  <script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    /*function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }*/

    //ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear(),
        h    = date.getHours()

    var Calendar = FullCalendar.Calendar;
    //var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    /*new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });*/

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [ 
        <?php foreach ($LdConsultas as $key => $consulta) { 
          $fecha = explode('-', $consulta['consultaFecha']);
          $fechaH = explode(':', $consulta['consultaFecha']);
          $dia = $fecha[2];
          $hora = $fechaH[0];
          $hora = substr($hora, 11, 3);
          $dia = substr($dia, 0, -9);
          $mes = $fecha[1];
          $anho = $fecha[0];

          $estado = $consulta['consultaEstado'];
          if($estado == 1){
            $estado = 'green';
          }
          elseif($estado == 2){
            $estado = 'red';
          }

        ?>
          {
            title          : '<?= $consulta['consultaMascota'] ?>',
            start          : new Date(<?= $anho ?>, <?= $mes ?>-1, <?= $dia ?>, <?= $hora ?>),
            backgroundColor: '<?= $estado ?>', //red
            borderColor    : '<?= $estado ?>', //red
            allDay         : false
          },
        <?php } ?>
      ],
      editable  : false,
      droppable : false, // this allows things to be dropped onto the calendar !!!
      /*drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }*/
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    /*$('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })*/
    /*$('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      //ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })*/
  })
</script>
<?php if(isset($_SESSION['formConsulta']) == true){ ?>
  <script type="text/javascript">
    $(window).on('load', function() {
      $('#modal-nuevo').modal('show');
    });
  </script>
<?php } ?>

<!-- Page specific script -->

