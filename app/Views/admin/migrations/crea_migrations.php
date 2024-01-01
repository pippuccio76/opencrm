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
          <h4> Crea Migrations</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_migrations',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Migrations/inserisciRecord',$attributes);

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


<!-- INIZIO version -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Version*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('version')?>'  required='required' id='id_class_version'  class='form-control' name='version' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE version -->


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


<!-- INIZIO group -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Group*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('group')?>'  required='required' id='id_class_group'  class='form-control' name='group' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE group -->


<!-- INIZIO namespace -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Namespace*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('namespace')?>'  required='required' id='id_class_namespace'  class='form-control' name='namespace' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE namespace -->


<!-- INIZIO time -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Time*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('time')?>'  required='required' id='id_class_time'  class='form-control' name='time' maxlength='(11)/4'  >
   </div>
</div>
</div>


<!-- FINE time -->


<!-- INIZIO batch -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Batch*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('batch')?>'  required='required' id='id_class_batch'  class='form-control' name='batch' maxlength='(11)/4'  >
   </div>
</div>
</div>


<!-- FINE batch -->

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
    var id= form_migrations.id.value;
    var version= form_migrations.version.value;
    var class= form_migrations.class.value;
    var group= form_migrations.group.value;
    var namespace= form_migrations.namespace.value;
    var time= form_migrations.time.value;
    var batch= form_migrations.batch.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(version==''){
          var message = '<?=lang('version_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = '<?=lang('class_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(group==''){
          var message = '<?=lang('group_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(namespace==''){
          var message = '<?=lang('namespace_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(time==''){
          var message = '<?=lang('time_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(batch==''){
          var message = '<?=lang('batch_not_empty')?>' ;
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

      