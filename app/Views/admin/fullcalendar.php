<?= $this->extend('templates/layout_admin') ?>

<?= $this->section('custom_css') ?>


    <!--fullcalendar plugin files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    
    <!-- for plugin notification -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<?= $this->endSection() ?>


<?= $this->section('content') ?>

	    <div id="calendar"></div>



    <!-- MODAL -->


    <div class="modal" tabindex="-1" id="modale_evento">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Inserisci Appuntamento</h5>
            <button type="button" class="btn-close btn_chiudi" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

                <input type="hidden" id="modal_id" >

                <div class="row mb-2">
                       <div class="col-md-12">

                            <label>Cliente</label>
                            <select  class="form-select" id="modal_clienti_id">

                                <?php foreach($tutti_id_clienti as $v):?>

                                    <option value="<?=$v->id  ?>"><?=$v->ragione_sociale?></option>

                                <?php endforeach; ?>

                                

                            </select>

                       </div>
                      
                </div>

                <div class="row">
                       
                    <div class="col-md-12">

                        <label>Titolo</label>
                        
                        <input type="" class="form-control" id="modal_title">    
                    </div>
                      
                </div>

                <div class="row">
                       
                        <div class="col-md-6">
                            <label>Inizio </label>
                            <input type="text" class="form-control"   id="modal_start"> <br>

                        </div>

                        <div class="col-md-6">
                            <label>Fine</label>
                            <input type="text" class="form-control"   id="modal_end">  

                       </div>
                      
                </div>
                    
                    
                    
                


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn_chiudi" data-bs-dismiss="modal">Chiudi</button>
            <button type="button" id="delete_event" class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
            <button type="button" id="insert_event" class="btn btn-primary">Inserisci evento</button>
            <button type="button" id="modify_event" class="btn btn-primary">Modifica evento</button>
          </div>
        </div>
      </div>
    </div>








<?= $this->endSection() ?>



<?= $this->section('script') ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    //svuoto i campi
    $('#modal_title').val(''); 
    $('#modal_start').val(''); 
    $('#modal_end').val(''); 

    var monthNames = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
    var monthNamesShort = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];
    var dayNames = ['Domenica', 'Lunedi', 'Martedi', 'Mercoledi', 'Giovedi', 'Venerdi', 'Sabato'];
    var dayNamesShort = ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'];

    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events:  "<?=base_url('admin/event') ?>",
        displayEventTime: true,
        //defaultView:'timeGridWeek',
        header: {
            left: 'month,agendaWeek,agendaDay',
            center: 'title',
            right: 'today prev,next'
        },
        buttonText: {

            today: 'oggi',
            month: 'mese',
            week: 'settimana',
            day: 'giorno'
        },
        editable: true,
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {

            //setto l'ora di inizio 
            var ora_inizio = $('#modal_start').val(moment(start).format('DD-MM-YYYY HH:mm')); 

            //aggiungo un ora alla fine
            var ora_fine = moment(start).add(60, 'minutes');
            
            //console.log('ora_inizio_selezionata:' + ora_inizio)
            //console.log('ora_fine_selezionata:' + end)

            //setto l'ora finale
            $('#modal_end').val(moment(ora_fine).format('DD-MM-YYYY HH:mm')); 
            $('#modify_event').hide();
            $('#delete_event').hide();
            $('#insert_event').show();

            //apro il modale 
            $('#modale_evento').modal('show');
        },

        eventDrop: function(event, delta) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD  HH:mm");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD  HH:mm");

            $.ajax({
                url: "<?=base_url('admin/eventAjax') ?>",
                data: {
                    title: event.title,
                    start: start,
                    end: end,
                    id: event.id,
                    type: 'update'
                },
                type: "POST",
                success: function(response) {

                    displayMessage("Event Updated Successfully");
                }
            });
        },
        eventClick: function(event) {

            //imposto i campi del modale
            $('#modal_id').val(event.id); 
            $('#modal_clienti_id').val(event.clienti_id); 
            $('#modal_title').val(event.title); 
            $('#modal_start').val(moment(event.start,"YYYY-MM-DD HH:mm").format('DD-MM-YYYY HH:mm')); 
            $('#modal_end').val(moment(event.end,"YYYY-MM-DD HH:mm").format('DD-MM-YYYY HH:mm')); 

            $('#insert_event').hide();
            $('#modify_event').show();
            $('#delete_event').show();

            $('#modale_evento').modal('show');


        },
        //traduzione
        monthNames: monthNames,
        monthNamesShort: monthNamesShort,
        dayNames: dayNames,
        dayNamesShort: dayNamesShort,

    });



    $( "#modify_event" ).click(function() {
            
        var clienti_id = $('#modal_clienti_id').val(); 
        var title = $('#modal_title').val(); 
        var data_inizio=$('#modal_start').val(); 
        var data_fine=$('#modal_end').val(); 
        var id=$('#modal_id').val(); 

        if (title) {


            //data_inizio = new Date(data_inizio);
            //data_fine = new Date(data_fine);

            var start = moment(data_inizio, 'DD-MM-YYYY HH:mm').format("YYYY-MM-DD HH:mm");
            var end = moment(data_fine, 'DD-MM-YYYY HH:mm').format("YYYY-MM-DD HH:mm");

            console.log('id:'+event.id);
            

            $.ajax({
                url: "<?=base_url('admin/eventAjax') ?>",
                data: {
                    id: id,
                    clienti_id: clienti_id,
                    title: title,
                    start: start,
                    end: end,
                    type: 'update'
                },
                type: "POST",
                success: function(data) {
                    displayMessage("Evento modificato  correttamente");

                    /*
                    calendar.fullCalendar('renderEvent', {
                        id: data.id,
                        title: title,
                        start: start,
                        end: end,
                    }, true);
                    */
                    calendar.fullCalendar('refetchEvents');
                    
                    //chiudo il modale
                    $("#modale_evento").modal('hide');

                }
            });
        }

    });



    $( "#insert_event" ).click(function() {

        var clienti_id = $('#modal_clienti_id').val();       
        var title = $('#modal_title').val(); 
        var data_inizio=$('#modal_start').val(); 
        var data_fine=$('#modal_end').val(); 

        if (title) {


            //data_inizio = new Date(data_inizio);
            //data_fine = new Date(data_fine);

            var start = moment(data_inizio, 'DD-MM-YYYY HH:mm').format("YYYY-MM-DD HH:mm");
            var end = moment(data_fine, 'DD-MM-YYYY HH:mm').format("YYYY-MM-DD HH:mm");

            //console.log('start:'+start);
            //console.log('end:'+end);

            $.ajax({
                url: "<?=base_url('admin/eventAjax') ?>",
                data: {

                    clienti_id: clienti_id,
                    title: title,
                    start: start,
                    end: end,
                    type: 'add'
                },
                type: "POST",
                success: function(data) {
                    displayMessage("Evento  inserito  correttamente");

                    calendar.fullCalendar('renderEvent', {
                        id: data.id,
                        clienti_id: clienti_id,
                        title: title,
                        start: start,
                        end: end,
                    }, true);

                    //chiudo il modale
                    $("#modale_evento").modal('hide');


                }
            });
        }

    });



    $( "#delete_event" ).click(function() {
            
 
        var id=$('#modal_id').val(); 

        if (id) {


            //data_inizio = new Date(data_inizio);
            //data_fine = new Date(data_fine);

            

            $.ajax({
                url: "<?=base_url('admin/eventAjax') ?>",
                data: {
                    id: id,

                    type: 'delete'
                },
                type: "POST",
                success: function(data) {
                    displayMessage("Evento eliminato  correttamente");

                    /*
                    calendar.fullCalendar('renderEvent', {
                        id: data.id,
                        title: title,
                        start: start,
                        end: end,
                    }, true);
                    */
                    calendar.fullCalendar('refetchEvents');
                    
                    //chiudo il modale
                    $("#modale_evento").modal('hide');

                }
            });
        }

    });


    $( ".btn_chiudi" ).click(function() {

        //svuoto i campi
        $('#modal_title').val(''); 
        $('#modal_start').val(''); 
        $('#modal_end').val(''); 
    });

    /*

                //var deleteMsg = confirm("Do you really want to delete "+event.id+' ?');
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "<?=base_url('admin/eventAjax') ?>",
                    data: {
                        id: event.id,
                        type: 'delete'
                    },
                    success: function(response) {

                        calendar.fullCalendar('removeEvents', event.id);
                        displayMessage("Event Deleted Successfully");
                    }
                });
            }


    */

});

function displayMessage(message) {
    toastr.success(message, 'Event');
}




</script>

<?= $this->endSection() ?>




