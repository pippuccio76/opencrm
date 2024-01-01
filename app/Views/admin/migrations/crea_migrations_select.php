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
                    <h4>Crea migrations</h4>
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
                   'name' => 'form_migrations',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('migrations/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Version*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_version'  class='form-control' name='version'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_version as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('version')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==version) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Class*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_class'  class='form-control' name='class'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_class as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('class')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==class) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Group*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_group'  class='form-control' name='group'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_group as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('group')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==group) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Namespace*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_namespace'  class='form-control' name='namespace'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_namespace as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('namespace')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==namespace) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Time*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_time'  class='form-control' name='time'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_time as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('time')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==time) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Batch*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_batch'  class='form-control' name='batch'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_batch as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('batch')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==batch) : ?>


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
    var id= form_migrations.id.value;
    var version= form_migrations.version.value;
    var class= form_migrations.class.value;
    var group= form_migrations.group.value;
    var namespace= form_migrations.namespace.value;
    var time= form_migrations.time.value;
    var batch= form_migrations.batch.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(version==''){
        var message = 'Il campo version non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(class==''){
        var message = 'Il campo class non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(group==''){
        var message = 'Il campo group non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(namespace==''){
        var message = 'Il campo namespace non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(time==''){
        var message = 'Il campo time non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(batch==''){
        var message = 'Il campo batch non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }
     else{
        return true;
     }
}



</script>



    