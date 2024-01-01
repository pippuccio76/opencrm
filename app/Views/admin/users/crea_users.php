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
          <h4> Crea Users</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_users',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Users/inserisciRecord',$attributes);

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


<!-- INIZIO username -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Username</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('username')?>'  id='id_class_username'  class='form-control' name='username' maxlength='(120)/4'  >
   </div>
</div>
</div>


<!-- FINE username -->


<!-- INIZIO status -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Status</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('status')?>'  id='id_class_status'  class='form-control' name='status' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE status -->


<!-- INIZIO status_message -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Status Message</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('status_message')?>'  id='id_class_status_message'  class='form-control' name='status_message' maxlength='(1020)/4'  >
   </div>
</div>
</div>


<!-- FINE status_message -->


<!-- INIZIO active -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Active*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('active')?>'  required='required' id='id_class_active'  class='form-control' name='active' maxlength='(1)/4'  >
   </div>
</div>
</div>


<!-- FINE active -->


<!-- INIZIO last_active -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Last Active</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('last_active')?>'  id='id_class_last_active'  class='form-control' name='last_active' maxlength='(19)/4'  >
   </div>
</div>
</div>


<!-- FINE last_active -->


<!-- INIZIO created_at -->

<!-- FINE created_at -->


<!-- INIZIO updated_at -->

<!-- FINE updated_at -->


<!-- INIZIO deleted_at -->

<!-- FINE deleted_at -->


<!-- INIZIO firstname -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Firstname*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('firstname')?>'  required='required' id='id_class_firstname'  class='form-control' name='firstname' maxlength='(200)/4'  >
   </div>
</div>
</div>


<!-- FINE firstname -->


<!-- INIZIO lastname -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Lastname*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('lastname')?>'  required='required' id='id_class_lastname'  class='form-control' name='lastname' maxlength='(200)/4'  >
   </div>
</div>
</div>


<!-- FINE lastname -->

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
    var id= form_users.id.value;
    var username= form_users.username.value;
    var status= form_users.status.value;
    var status_message= form_users.status_message.value;
    var active= form_users.active.value;
    var last_active= form_users.last_active.value;
    var created_at= form_users.created_at.value;
    var updated_at= form_users.updated_at.value;
    var deleted_at= form_users.deleted_at.value;
    var firstname= form_users.firstname.value;
    var lastname= form_users.lastname.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(username=='regola_da_scrivere'){
          var message = 'Il campo username regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(status=='regola_da_scrivere'){
          var message = 'Il campo status regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(status_message=='regola_da_scrivere'){
          var message = 'Il campo status_message regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(active==''){
          var message = '<?=lang('active_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(last_active=='regola_da_scrivere'){
          var message = 'Il campo last_active regola_da_scivere';
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

         }else if(firstname==''){
          var message = '<?=lang('firstname_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(lastname==''){
          var message = '<?=lang('lastname_not_empty')?>' ;
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

      