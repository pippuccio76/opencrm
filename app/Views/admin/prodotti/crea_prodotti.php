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

<?= $this->section('custom_css') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>




      <div class="card">
      <div class="card-header">
          <h4> Crea Prodotti</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_prodotti',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Prodotti/inserisciRecord',$attributes);

             ?>
         <?php if(!empty($validation) ) :?>


          <div class="alert alert-danger border-0 bg-danger  fade show py-2">
            <div class="d-flex align-items-center">
              <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
              </div>
              <div class="ms-3">
                <div class="text-white"> <?= $validation->listErrors(); ?></div>
              </div>
            </div>
          </div>


          <?php endif; ?>

<!-- INIZIO id -->

<!-- FINE id -->


<!-- INIZIO nome -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Nome*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('nome')?>'  required='required' id='id_class_nome'  class='form-control' name='nome' maxlength='100'  >
   </div>
</div>
</div>


<!-- FINE nome -->


<!-- INIZIO codice -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Codice*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('codice')?>'  required='required' id='id_class_codice'  class='form-control' name='codice' maxlength='50'  >
   </div>
</div>
</div>


<!-- FINE codice -->


<!-- INIZIO descrizione -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Descrizione*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('descrizione')?>'  required='required' id='id_class_descrizione'  class='form-control' name='descrizione' maxlength='255'  >
   </div>
</div>
</div>


<!-- FINE descrizione -->


<!-- INIZIO unita_misura -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Unita Misura*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('unita_misura')?>'  required='required' id='id_class_unita_misura'  class='form-control' name='unita_misura' maxlength='10'  >
   </div>
</div>
</div>


<!-- FINE unita_misura -->


<!-- INIZIO scorta_minima -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Scorta Minima*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('scorta_minima')?>'  required='required' id='id_class_scorta_minima'  class='form-control' name='scorta_minima' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE scorta_minima -->


<!-- INIZIO scorta_minima -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Iva*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('iva')?>'  required='required' id='id_class_iva'  class='form-control' name='iva' maxlength='3'  >
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
 <input  type='text'  value='<?=set_value('costo_unitario_netto_acquisto')?>'  required='required' id='id_class_costo_unitario_netto_acquisto' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())" class='form-control' name='costo_unitario_netto_acquisto'   >
   </div>
</div>
</div>


<!-- FINE costo_unitario_netto -->


<!-- INIZIO costo_unitario_lordo -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Lordo Acquisto*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('costo_unitario_lordo_acquisto')?>'  required='required' id='id_class_costo_unitario_lordo_acquisto'  class='form-control' name='costo_unitario_lordo_acquisto' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
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
 <input  type='text'  value='<?=set_value('costo_unitario_netto_vendita')?>'  required='required' id='id_class_costo_unitario_netto_vendita'  class='form-control' name='costo_unitario_netto_vendita' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
   </div>
</div>
</div>


<!-- FINE costo_unitario_netto -->


<!-- INIZIO costo_unitario_lordo -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Unitario Lordo Vendita*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('costo_unitario_lordo_vendita')?>'  required='required' id='id_class_costo_unitario_lordo_vendita'  class='form-control' name='costo_unitario_lordo_vendita' onkeyup="cambia_virgola_con_punto($(this).attr('id'),$(this).val())"  >
   </div>
</div>
</div>


<!-- FINE costo_unitario_lordo -->






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
          </div>
          </div>
        
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
						

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>

//######## Gestione Submit singolo ###########

$( document ).ready(function() {

  //nascondo lo spinner all'avvio
  $('.indicator-progress').hide();

})

$('#myform').on('submit', function(){
  $('.submit-btn').attr('disabled', true);
  $('.indicator-label').hide();
  $('.indicator-progress').show();
});


//######## END Gestione Submit singolo ###########



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


function cambia_virgola_con_punto(id,value){

    //recupero il valore passato nell'input
    var number=value;

    //cambio il punto con la virgola
    number=number.replace(",", ".");

    //assegno all'input il valore modificato
    $('#'+id).val(number);


}
</script>

<?= $this->endSection() ?>

      