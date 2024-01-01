<?php
 /**
* @Creatoil: 30/12/2023
* @autore  : Stefano
* @file    :
* @modif.  : 30/12/2023
* @motivo  : creazione file
*/





?>

<?= $this->extend('templates/layout_admin') ?>

<?= $this->section('custom_css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>




      <div class="card">
      <div class="card-header">
          <h4> Crea Events</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_events',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Events/inserisciRecord',$attributes);

             ?>
         <?php if(!empty($validation) ) :?>


          <div class="alert alert-danger border-0 bg-danger  fade show py-2">
            <div class="d-flex align-items-center">
              <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
              </div>
              <div class="ms-3">
                <div class="text-white"> <?= $validation->listErrors(); ?></div>
              </div>
            </div>
          </div>


          <?php endif; ?>

<!-- INIZIO id -->

<!-- FINE id -->


<!-- INIZIO clienti_id -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Clienti Id*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('clienti_id')?>'  required='required' id='id_class_clienti_id'  class='form-control' name='clienti_id' maxlength='(11)/4'  >
   </div>
</div>
</div>


<!-- FINE clienti_id -->


<!-- INIZIO title -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Title*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('title')?>'  required='required' id='id_class_title'  class='form-control' name='title' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE title -->


<!-- INIZIO start -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Start*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('start')?>'  required='required' id='id_class_start'  class='form-control' name='start' maxlength='(19)/4'  >
   </div>
</div>
</div>


<!-- FINE start -->


<!-- INIZIO end -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>End*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('end')?>'  required='required' id='id_class_end'  class='form-control' name='end' maxlength='(19)/4'  >
   </div>
</div>
</div>


<!-- FINE end -->


<!-- INIZIO created_at -->

<!-- FINE created_at -->


<!-- INIZIO updated_at -->

<!-- FINE updated_at -->


<!-- INIZIO deleted_at -->

<!-- FINE deleted_at -->

        <span>note: * campi obbligatori</span>
       <div class='text-right'>
       <a href='<?= base_url() ?>' class='btn btn-danger'>Annulla</a>
       <button class='btn btn-info submit-btn' type='submit' onclick=''>
       <span class='indicator-label'>
            INSERISCI
        </span>
        <span class='indicator-progress'>
            Perfavore attendi... <span
                class='spinner-border spinner-border-sm align-middle ms-2'></span>
        </span>
       
       </button>       </div>
       <br>
</form>
          </div>
          </div>
        
     <!-- INIZIO Modal !-->
               <div id="alertModal" class="modal fade">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Sono presenti degli errori</h4>
                           </div>
                           <div class="modal-body">
                               <p></p>
                           </div>
                           <div class="modal-footer">
                               <button class="btn btn-default" data-dismiss="modal">
                                   Chiudi</button>
                           </div>
                       </div><!-- /.modal-content -->
                   </div><!-- /.modal-dialog -->
               </div><!-- /.modal -->
						

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>

//######## Gestione Submit singolo ###########

$( document ).ready(function() {

  //nascondo lo spinner all'avvio
  $('.indicator-progress').hide();

})

$('#myform').on('submit', function(){
  $('.submit-btn').attr('disabled', true);
  $('.indicator-label').hide();
  $('.indicator-progress').show();
});


//######## END Gestione Submit singolo ###########



function controlla_e_invia(){
    var id= form_events.id.value;
    var clienti_id= form_events.clienti_id.value;
    var title= form_events.title.value;
    var start= form_events.start.value;
    var end= form_events.end.value;
    var created_at= form_events.created_at.value;
    var updated_at= form_events.updated_at.value;
    var deleted_at= form_events.deleted_at.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(clienti_id==''){
          var message = '<?=lang('clienti_id_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(title==''){
          var message = '<?=lang('title_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(start==''){
          var message = '<?=lang('start_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(end==''){
          var message = '<?=lang('end_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at=='regola_da_scrivere'){
          var message = 'Il campo created_at regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(updated_at=='regola_da_scrivere'){
          var message = 'Il campo updated_at regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(deleted_at=='regola_da_scrivere'){
          var message = 'Il campo deleted_at regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }
       else{
          return true;
       }
}
</script>

<?= $this->endSection() ?>

      