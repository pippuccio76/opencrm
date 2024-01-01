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
                    <h4>Crea prodotti</h4>
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
                   'name' => 'form_prodotti',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('prodotti/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Nome*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_nome'  class='form-control' name='nome'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_nome as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('nome')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==nome) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Codice*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_codice'  class='form-control' name='codice'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_codice as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('codice')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==codice) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Descrizione*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_descrizione'  class='form-control' name='descrizione'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_descrizione as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('descrizione')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==descrizione) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Unita Misura*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_unita_misura'  class='form-control' name='unita_misura'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_unita_misura as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('unita_misura')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==unita_misura) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Scorta Minima*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_scorta_minima'  class='form-control' name='scorta_minima'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_scorta_minima as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('scorta_minima')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==scorta_minima) : ?>


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
    var id= form_prodotti.id.value;
    var nome= form_prodotti.nome.value;
    var codice= form_prodotti.codice.value;
    var descrizione= form_prodotti.descrizione.value;
    var unita_misura= form_prodotti.unita_misura.value;
    var scorta_minima= form_prodotti.scorta_minima.value;
    var created_at= form_prodotti.created_at.value;
    var updated_at= form_prodotti.updated_at.value;
    var deleted_at= form_prodotti.deleted_at.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(nome==''){
        var message = 'Il campo nome non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(codice==''){
        var message = 'Il campo codice non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(descrizione==''){
        var message = 'Il campo descrizione non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(unita_misura==''){
        var message = 'Il campo unita_misura non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(scorta_minima==''){
        var message = 'Il campo scorta_minima non può essere vuoto' ;
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



    