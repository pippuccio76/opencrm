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
$attributes = array('class' => 'form-horizontal',
                   'id' => 'myform',
                   'name' => 'form_users',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('users/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Username</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_username'  class='form-control' name='username'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_username as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('username')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==username) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Status</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_status'  class='form-control' name='status'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_status as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('status')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==status) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Status Message</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_status_message'  class='form-control' name='status_message'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_status_message as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('status_message')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==status_message) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Active*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_active'  class='form-control' name='active'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_active as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('active')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==active) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Last Active</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_last_active'  class='form-control' name='last_active'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_last_active as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('last_active')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==last_active) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Created At</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_created_at'  class='form-control' name='created_at'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_created_at as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('created_at')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==created_at) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Updated At</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_updated_at'  class='form-control' name='updated_at'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_updated_at as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('updated_at')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==updated_at) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Deleted At</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_deleted_at'  class='form-control' name='deleted_at'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_deleted_at as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('deleted_at')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==deleted_at) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Firstname*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_firstname'  class='form-control' name='firstname'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_firstname as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('firstname')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==firstname) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        

<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Lastname*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_lastname'  class='form-control' name='lastname'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_lastname as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('lastname')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==lastname) : ?>


                                    <!--selected='selected'-->

                                 <?php endif ?>
                         >

                             <?=$v->nome ?>

                         </option>

                     <?php endforeach ?>
                 </select>
                </div>
             </div>
    </div>
        
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



    