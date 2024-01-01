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
                  <h4>Modifica Prodotti</h4>
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
                     'name' => 'form_prodotti',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Prodotti/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>


      <?=form_hidden('id',  $record->id)?>
			<?=form_hidden('_method', 'put')?>



<!-- INIZIO nome -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Nome*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('nome'))){
           $val=($record->nome) ;
         }else{
           $val=set_value('nome') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_nome'   name='nome' maxlength='400'  >
   </div>
</div>
</div>


<!-- FINE nome -->


<!-- INIZIO codice -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Codice*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('codice'))){
           $val=($record->codice) ;
         }else{
           $val=set_value('codice') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_codice'   name='codice' maxlength='200'  >
   </div>
</div>
</div>


<!-- FINE codice -->


<!-- INIZIO descrizione -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Descrizione*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('descrizione'))){
           $val=($record->descrizione) ;
         }else{
           $val=set_value('descrizione') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_descrizione'   name='descrizione' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE descrizione -->


<!-- INIZIO unita_misura -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Unita Misura*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('unita_misura'))){
           $val=($record->unita_misura) ;
         }else{
           $val=set_value('unita_misura') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_unita_misura'   name='unita_misura' maxlength='40'  >
   </div>
</div>
</div>


<!-- FINE unita_misura -->


<!-- INIZIO scorta_minima -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Scorta Minima*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('scorta_minima'))){
           $val=($record->scorta_minima) ;
         }else{
           $val=set_value('scorta_minima') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_scorta_minima'   name='scorta_minima' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE scorta_minima -->




<!-- INIZIO scorta_minima -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Iva*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('iva'))){
           $val=($record->iva) ;
         }else{
           $val=set_value('iva') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_iva'   name='iva' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE scorta_minima -->

<hr>
Acquisto


<!-- INIZIO costo_unitario_netto -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Netto Acquisto*</label>
   <div class='col-md-12 col-xs-12'>



    <?php

         if(empty(set_value('costo_unitario_acquisto_netto'))){
           $val=($record->costo_unitario_acquisto_netto) ;
         }else{
           $val=set_value('costo_unitario_netto_acquisto') ;
         }

    ?>


 <input  type='text'  value='<?=$val?>'  required='required' id='id_class_costo_unitario_netto_acquisto' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())" class='form-control' name='costo_unitario_netto_acquisto'   >
   </div>
</div>
</div>


<!-- FINE costo_unitario_netto -->


<!-- INIZIO costo_unitario_lordo -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Lordo Acquisto*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('costo_unitario_acquisto_lordo'))){
           $val=($record->costo_unitario_acquisto_lordo) ;
         }else{
           $val=set_value('costo_unitario_lordo_acquisto') ;
         }

    ?>

 <input  type='text'  value='<?=$val?>'  required='required' id='id_class_costo_unitario_lordo_acquisto'  class='form-control' name='costo_unitario_lordo_acquisto' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
   </div>
</div>
</div>


<!-- FINE costo_unitario_lordo -->
<hr>
Vendita
<!-- INIZIO costo_unitario_netto -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Netto Vendita*</label>
   <div class='col-md-12 col-xs-12'>

       <?php

         if(empty(set_value('costo_unitario_vendita_netto'))){
           $val=($record->costo_unitario_vendita_netto) ;
         }else{
           $val=set_value('costo_unitario_netto_vendita') ;
         }

    ?>
 <input  type='text'  value='<?=$val?>'  required='required' id='id_class_costo_unitario_netto_vendita'  class='form-control' name='costo_unitario_netto_vendita' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
   </div>
</div>
</div>


<!-- FINE costo_unitario_netto -->


<!-- INIZIO costo_unitario_lordo -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Lordo Vendita*</label>
   <div class='col-md-12 col-xs-12'>

       <?php

         if(empty(set_value('costo_unitario_vendita_lordo'))){
           $val=($record->costo_unitario_vendita_lordo) ;
         }else{
           $val=set_value('costo_unitario_lordo_vendita') ;
         }

    ?>

 <input  type='text'  value='<?= $val ?>'  required='required' id='id_class_costo_unitario_lordo_vendita'  class='form-control' name='costo_unitario_lordo_vendita' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
   </div>
</div>
</div>


<!-- FINE costo_unitario_lordo -->






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
    var id= form_prodotti.id.value;
    var nome= form_prodotti.nome.value;
    var codice= form_prodotti.codice.value;
    var descrizione= form_prodotti.descrizione.value;
    var unita_misura= form_prodotti.unita_misura.value;
    var scorta_minima= form_prodotti.scorta_minima.value;
    var created_at= form_prodotti.created_at.value;
    var updated_at= form_prodotti.updated_at.value;
    var deleted_at= form_prodotti.deleted_at.value;
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
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(nome==''){
          var message = '<?=lang('nome_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(codice==''){
          var message = '<?=lang('codice_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(descrizione==''){
          var message = '<?=lang('descrizione_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(unita_misura==''){
          var message = '<?=lang('unita_misura_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(scorta_minima==''){
          var message = '<?=lang('scorta_minima_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = '<?=lang('created_at_not_empty')?>' ;
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

<?= $this->endSection() ?>


  	  