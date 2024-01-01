<?php
 /**
* @Creatoil: 30/12/2023
* @autore  : Stefano
* @file    :
* @modif.  : 30/12/2023
* @motivo  : creazione file
*/




?>

    <!-- Page Header-->
        <div class='card'>
                <div class='card-header'>
                    <h4>Crea users</h4>
                </div>
                <div class='card-body'>

    <br>

              <?php if(!empty(validation_errors())) :?>
               <div class='col-md-12 text-center'>

                <div class='alert alert-block alert-danger fade in'>
                  <span class='login_error'><?= validation_errors(); ?></span>
                </div>


            </div>



        <?php endif; ?>



      </div><?php
$attributes = array('class' => 'col-md-8 offset-md-2',
                     'id' => 'myform',
                     'name' => 'form_users',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('users/inserisciRecord',$attributes);

             ?> <br>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Username')</label>
<?php
        if (!empty(set_value('username')) AND set_value('username') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('username')) AND $record->username == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('username')) AND set_value('username') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('username')) AND $record->username == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='username' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='username' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Status')</label>
<?php
        if (!empty(set_value('status')) AND set_value('status') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('status')) AND $record->status == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('status')) AND set_value('status') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('status')) AND $record->status == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='status' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='status' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Status Message')</label>
<?php
        if (!empty(set_value('status_message')) AND set_value('status_message') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('status_message')) AND $record->status_message == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('status_message')) AND set_value('status_message') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('status_message')) AND $record->status_message == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='status_message' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='status_message' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Active')*</label>
<?php
        if (!empty(set_value('active')) AND set_value('active') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('active')) AND $record->active == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('active')) AND set_value('active') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('active')) AND $record->active == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='active' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='active' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Last Active')</label>
<?php
        if (!empty(set_value('last_active')) AND set_value('last_active') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('last_active')) AND $record->last_active == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('last_active')) AND set_value('last_active') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('last_active')) AND $record->last_active == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='last_active' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='last_active' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Created At')</label>
<?php
        if (!empty(set_value('created_at')) AND set_value('created_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('created_at')) AND $record->created_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('created_at')) AND set_value('created_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('created_at')) AND $record->created_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='created_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='created_at' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Updated At')</label>
<?php
        if (!empty(set_value('updated_at')) AND set_value('updated_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('updated_at')) AND $record->updated_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('updated_at')) AND set_value('updated_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('updated_at')) AND $record->updated_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='updated_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='updated_at' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Deleted At')</label>
<?php
        if (!empty(set_value('deleted_at')) AND set_value('deleted_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('deleted_at')) AND $record->deleted_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('deleted_at')) AND set_value('deleted_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('deleted_at')) AND $record->deleted_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='deleted_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='deleted_at' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Firstname')*</label>
<?php
        if (!empty(set_value('firstname')) AND set_value('firstname') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('firstname')) AND $record->firstname == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('firstname')) AND set_value('firstname') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('firstname')) AND $record->firstname == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='firstname' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='firstname' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Lastname')*</label>
<?php
        if (!empty(set_value('lastname')) AND set_value('lastname') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('lastname')) AND $record->lastname == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('lastname')) AND set_value('lastname') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('lastname')) AND $record->lastname == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='lastname' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='lastname' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>

          <span>note: * campi obbligatori</span>
         <div class='text-right'>
         <a href='<?= base_url() ?>' class='btn btn-danger'>Annulla</a>
         <button class='btn btn-info' type='submit' onclick=''>INSERISCI</button>
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
    if(id==''){
          var message = 'Il campo id non può essere vuoto';
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
          var message = 'Il campo active non può essere vuoto' ;
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
          var message = 'Il campo firstname non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(lastname==''){
          var message = 'Il campo lastname non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }
       else{
          return true;
       }
}
</script>



      