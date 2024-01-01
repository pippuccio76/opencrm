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
                    <h4>Crea vendite</h4>
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
                   'name' => 'form_vendite',
                   'method' => 'POST',
       'onSubmit' => 'return controlla_e_invia();'

                  );
echo form_open ('vendite/inserisciRecord',$attributes);

           ?> <br>


<div class='row'>

            <div class='col-md-12'>
                <label class='col-md-12 col-xs-12 control-label'>Id Clienti*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_id_clienti'  class='form-control' name='id_clienti'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_id_clienti as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('id_clienti')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==id_clienti) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Id Prodotti*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_id_prodotti'  class='form-control' name='id_prodotti'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_id_prodotti as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('id_prodotti')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==id_prodotti) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Quantita*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_quantita'  class='form-control' name='quantita'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_quantita as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('quantita')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==quantita) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Costo Totale Netto*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_costo_totale_netto'  class='form-control' name='costo_totale_netto'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_costo_totale_netto as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('costo_totale_netto')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==costo_totale_netto) : ?>


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
                <label class='col-md-12 col-xs-12 control-label'>Costo Totale Lordo*</label>
                <div class='col-md-12 col-xs-12'>
                 <select id='id_costo_totale_lordo'  class='form-control' name='costo_totale_lordo'>
                     <option value=''>Seleziona un valore...</option>
                     <?php foreach ($tutti_costo_totale_lordo as $v) :?>
                         <option value='<?=$v->id ?>'

                                 <?php if($v->id==set_value('costo_totale_lordo')): ?>

                                     selected='selected'
                                 <?php // elseif ($v->id==costo_totale_lordo) : ?>


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
    var id= form_vendite.id.value;
    var id_clienti= form_vendite.id_clienti.value;
    var id_prodotti= form_vendite.id_prodotti.value;
    var quantita= form_vendite.quantita.value;
    var costo_totale_netto= form_vendite.costo_totale_netto.value;
    var costo_totale_lordo= form_vendite.costo_totale_lordo.value;
    var created_at= form_vendite.created_at.value;
    var updated_at= form_vendite.updated_at.value;
    var deleted_at= form_vendite.deleted_at.value;
    if(id==''){
        var message = 'Il campo id non può essere vuoto';
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(id_clienti==''){
        var message = 'Il campo id_clienti non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(id_prodotti==''){
        var message = 'Il campo id_prodotti non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(quantita==''){
        var message = 'Il campo quantita non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(costo_totale_netto==''){
        var message = 'Il campo costo_totale_netto non può essere vuoto' ;
        $('#alertModal').find('.modal-body p').text(message);
        $('#alertModal').modal('show');
        return false;

       }else if(costo_totale_lordo==''){
        var message = 'Il campo costo_totale_lordo non può essere vuoto' ;
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



    