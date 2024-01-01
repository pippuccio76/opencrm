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
          <h4> Crea Sedi clienti</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_sedi_clienti',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Sedi_clienti/inserisciRecord',$attributes);

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


<!-- INIZIO id_clienti -->

<!-- INIZIO id_clienti -->

<div class='row'>

                          <div class='col-md-12'>
                              <label class='col-md-12 col-xs-12 control-label'>Clienti*</label>
                              <div class='col-md-12 col-xs-12'>
                              <select id='id_id_clienti'  class='form-control' name='id_clienti'>
                                  <option value=''>Seleziona un valore...</option>
                                  <?php foreach ($tutti_id_clienti as $v) :?>
                                      <option value='<?=$v->id ?>'
              
                                              <?php if($v->id==set_value('id_clienti') ): ?>
              
                                                  selected='selected'
                                            
              
                                              <?php endif ?>
                                      >
              
                                          <?=$v->nome ?>
              
                                      </option>
              
                                  <?php endforeach ?>
                              </select>
                              </div>
                          </div>
                      </div>
                      

<!-- FNE id_clienti -->

<!-- FINE id_clienti -->


<!-- INIZIO referente -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Referente*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('referente')?>'  required='required' id='id_class_referente'  class='form-control' name='referente' maxlength='(400)/4'  >
   </div>
</div>
</div>


<!-- FINE referente -->


<!-- INIZIO email -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Email*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('email')?>'  required='required' id='id_class_email'  class='form-control' name='email' maxlength='(400)/4'  >
   </div>
</div>
</div>


<!-- FINE email -->


<!-- INIZIO telefono -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Telefono*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('telefono')?>'  required='required' id='id_class_telefono'  class='form-control' name='telefono' maxlength='(80)/4'  >
   </div>
</div>
</div>


<!-- FINE telefono -->


<!-- INIZIO note -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Note*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('note')?>'  required='required' id='id_class_note'  class='form-control' name='note' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE note -->


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
    var id= form_sedi_clienti.id.value;
    var id_clienti= form_sedi_clienti.id_clienti.value;
    var referente= form_sedi_clienti.referente.value;
    var email= form_sedi_clienti.email.value;
    var telefono= form_sedi_clienti.telefono.value;
    var note= form_sedi_clienti.note.value;
    var created_at= form_sedi_clienti.created_at.value;
    var updated_at= form_sedi_clienti.updated_at.value;
    var deleted_at= form_sedi_clienti.deleted_at.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(id_clienti==''){
          var message = '<?=lang('id_clienti_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(referente==''){
          var message = '<?=lang('referente_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(email==''){
          var message = '<?=lang('email_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(telefono==''){
          var message = '<?=lang('telefono_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(note==''){
          var message = '<?=lang('note_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = '<?=lang('created_at_not_empty')?>' ;
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

      