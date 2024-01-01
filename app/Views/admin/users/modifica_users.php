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
<?= $this->section('content') ?>
    <!-- Page Header-->
      <div class='card'>
              <div class='card-header'>
                  <h4>Modifica Users</h4>
              </div>
              <div class='card-body'>
                                    <?php if(!empty($validation)) :?>

                        <div class='col-md-12 text-center'>

                          <div class='alert alert-danger'>
                            <span class='login_error'><?= $validation->listErrors(); ?></span>
                          </div>


                        </div>

                      <?php endif; ?>




<?php
$attributes = array('class' => 'form-horizontal',
                     'id' => 'myform',
                     'name' => 'form_users',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Users/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<!-- INIZIO username -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Username</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('username'))){
           $val=($record->username) ;
         }else{
           $val=set_value('username') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_username'   name='username' maxlength='120'  >
   </div>
</div>
</div>


<!-- FINE username -->


<!-- INIZIO status -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Status</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('status'))){
           $val=($record->status) ;
         }else{
           $val=set_value('status') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_status'   name='status' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE status -->


<!-- INIZIO status_message -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Status Message</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('status_message'))){
           $val=($record->status_message) ;
         }else{
           $val=set_value('status_message') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_status_message'   name='status_message' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE status_message -->


<!-- INIZIO active -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Active*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('active'))){
           $val=($record->active) ;
         }else{
           $val=set_value('active') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_active'   name='active' maxlength='1'  >
   </div>
</div>
</div>


<!-- FINE active -->


<!-- INIZIO last_active -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Last Active</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('last_active'))){
           $val=($record->last_active) ;
         }else{
           $val=set_value('last_active') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_last_active'   name='last_active' maxlength='19'  >
   </div>
</div>
</div>


<!-- FINE last_active -->


<!-- INIZIO firstname -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Firstname*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('firstname'))){
           $val=($record->firstname) ;
         }else{
           $val=set_value('firstname') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_firstname'   name='firstname' maxlength='200'  >
   </div>
</div>
</div>


<!-- FINE firstname -->


<!-- INIZIO lastname -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Lastname*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('lastname'))){
           $val=($record->lastname) ;
         }else{
           $val=set_value('lastname') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_lastname'   name='lastname' maxlength='200'  >
   </div>
</div>
</div>


<!-- FINE lastname -->


         <div class='text-right'>
		 <span>note: * campi obbligatori</span><br>
         <a href='<?= base_url() ?>/admin/index' class='btn btn-danger'>Annulla</a>
         <button class='btn btn-info' type='submit' onclick=''>MODIFICA</button>
         </div>
         <br>
</form>
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
						

        </div>
        </div>

        <?= $this->endSection() ?>

        <?= $this->section('script') ?>

<script>
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


  	  