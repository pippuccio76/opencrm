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
          <h4> Crea Settings</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_settings',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Settings/inserisciRecord',$attributes);

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


<!-- INIZIO class -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Class*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('class')?>'  required='required' id='id_class_class'  class='form-control' name='class' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE class -->


<!-- INIZIO key -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Key*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('key')?>'  required='required' id='id_class_key'  class='form-control' name='key' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE key -->


<!-- INIZIO value -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Value</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('value')?>'  id='id_class_value'  class='form-control' name='value' maxlength='(262140)/4'  >
   </div>
</div>
</div>


<!-- FINE value -->


<!-- INIZIO type -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Type*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('type')?>'  required='required' id='id_class_type'  class='form-control' name='type' maxlength='(124)/4'  >
   </div>
</div>
</div>


<!-- FINE type -->


<!-- INIZIO context -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Context</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('context')?>'  id='id_class_context'  class='form-control' name='context' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE context -->


<!-- INIZIO created_at -->

<!-- FINE created_at -->


<!-- INIZIO updated_at -->

<!-- FINE updated_at -->

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
    var id= form_settings.id.value;
    var class= form_settings.class.value;
    var key= form_settings.key.value;
    var value= form_settings.value.value;
    var type= form_settings.type.value;
    var context= form_settings.context.value;
    var created_at= form_settings.created_at.value;
    var updated_at= form_settings.updated_at.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = '<?=lang('class_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(key==''){
          var message = '<?=lang('key_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(value=='regola_da_scrivere'){
          var message = 'Il campo value regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(type==''){
          var message = '<?=lang('type_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(context=='regola_da_scrivere'){
          var message = 'Il campo context regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = '<?=lang('created_at_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(updated_at==''){
          var message = '<?=lang('updated_at_not_empty')?>' ;
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

      