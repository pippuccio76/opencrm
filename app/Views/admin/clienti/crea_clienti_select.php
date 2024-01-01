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
                    <h4>Crea clienti</h4>
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
                   'name' => 'form_clienti',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('clienti/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Ragione Sociale*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_ragione_sociale'  class='form-control' name='ragione_sociale'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_ragione_sociale as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('ragione_sociale')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==ragione_sociale) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>P Iva*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_p_iva'  class='form-control' name='p_iva'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_p_iva as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('p_iva')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==p_iva) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>C F*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_c_f'  class='form-control' name='c_f'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_c_f as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('c_f')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==c_f) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Telefono*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_telefono'  class='form-control' name='telefono'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_telefono as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('telefono')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==telefono) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Note*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_note'  class='form-control' name='note'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_note as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('note')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==note) : ?>


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
    var id= form_clienti.id.value;
    var ragione_sociale= form_clienti.ragione_sociale.value;
    var p_iva= form_clienti.p_iva.value;
    var c_f= form_clienti.c_f.value;
    var telefono= form_clienti.telefono.value;
    var note= form_clienti.note.value;
    var created_at= form_clienti.created_at.value;
    var updated_at= form_clienti.updated_at.value;
    var deleted_at= form_clienti.deleted_at.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(ragione_sociale==''){
        var message = 'Il campo ragione_sociale non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(p_iva==''){
        var message = 'Il campo p_iva non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(c_f==''){
        var message = 'Il campo c_f non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(telefono==''){
        var message = 'Il campo telefono non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(note==''){
        var message = 'Il campo note non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(created_at==''){
        var message = 'Il campo created_at non può essere vuoto' ;
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



    