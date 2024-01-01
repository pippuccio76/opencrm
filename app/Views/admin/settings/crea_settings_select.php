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
                    <h4>Crea settings</h4>
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
                   'name' => 'form_settings',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('settings/inserisciRecord',$attributes);

           ?> <br>


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
                <label class='col-md-12 col-xs-12 control-label'>Key*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_key'  class='form-control' name='key'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_key as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('key')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==key) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Value</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_value'  class='form-control' name='value'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_value as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('value')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==value) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Type*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_type'  class='form-control' name='type'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_type as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('type')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==type) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Context</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_context'  class='form-control' name='context'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_context as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('context')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==context) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Created At*</label>
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
                <label class='col-md-12 col-xs-12 control-label'>Updated At*</label>
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
    var id= form_settings.id.value;
    var class= form_settings.class.value;
    var key= form_settings.key.value;
    var value= form_settings.value.value;
    var type= form_settings.type.value;
    var context= form_settings.context.value;
    var created_at= form_settings.created_at.value;
    var updated_at= form_settings.updated_at.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(class==''){
        var message = 'Il campo class non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(key==''){
        var message = 'Il campo key non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(value=='regola_da_scrivere'){
        var message = 'Il campo value regola_da_scivere';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(type==''){
        var message = 'Il campo type non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(context=='regola_da_scrivere'){
        var message = 'Il campo context regola_da_scivere';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(created_at==''){
        var message = 'Il campo created_at non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(updated_at==''){
        var message = 'Il campo updated_at non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }
     else{
        return true;
     }
}



</script>



    