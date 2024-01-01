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
                    <h4>Crea events</h4>
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
                   'name' => 'form_events',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('events/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Clienti Id*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_clienti_id'  class='form-control' name='clienti_id'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_clienti_id as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('clienti_id')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==clienti_id) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Title*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_title'  class='form-control' name='title'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_title as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('title')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==title) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Start*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_start'  class='form-control' name='start'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_start as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('start')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==start) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>End*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_end'  class='form-control' name='end'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_end as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('end')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==end) : ?>


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
    var id= form_events.id.value;
    var clienti_id= form_events.clienti_id.value;
    var title= form_events.title.value;
    var start= form_events.start.value;
    var end= form_events.end.value;
    var created_at= form_events.created_at.value;
    var updated_at= form_events.updated_at.value;
    var deleted_at= form_events.deleted_at.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(clienti_id==''){
        var message = 'Il campo clienti_id non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(title==''){
        var message = 'Il campo title non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(start==''){
        var message = 'Il campo start non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(end==''){
        var message = 'Il campo end non può essere vuoto' ;
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



    