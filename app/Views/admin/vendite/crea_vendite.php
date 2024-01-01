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
          <h4> Crea Vendite</h4>
      </div>
      <div class="card-body">
            <hr>


<?php
$attributes = array('class' => 'col-md-12',
                     'id' => 'myform',
                     'name' => 'form_vendite',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open (base_url() .'/admin_Vendite/inserisciRecord',$attributes);

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


<!-- INIZIO id_clienti -->

<!-- INIZIO id_clienti -->

<div class='row'>

                          <div class='col-md-12'>
                              <label class='col-md-12 col-xs-12 control-label'>Clienti*</label>
                              <div class='col-md-12 col-xs-12'>
                              <select id='id_id_clienti'  class='form-control' name='id_clienti'>
                                  <option value=''>Seleziona un valore...</option>
                                  <?php foreach ($tutti_id_clienti as $v) :?>
                                      <option value='<?=$v->id ?>'
              
                                              <?php if($v->id==set_value('id_clienti') ): ?>
              
                                                  selected='selected'
                                            
              
                                              <?php endif ?>
                                      >
              
                                          <?=$v->nome ?>
              
                                      </option>
              
                                  <?php endforeach ?>
                              </select>
                              </div>
                          </div>
                      </div>
                      

<!-- FNE id_clienti -->

<!-- FINE id_clienti -->


<!-- INIZIO id_prodotti -->

<!-- INIZIO id_prodotti -->

<div class='row'>

                          <div class='col-md-12'>
                              <label class='col-md-12 col-xs-12 control-label'>Prodotti*</label>
                              <div class='col-md-12 col-xs-12'>
                              <select id='id_id_prodotti'  class='form-control' name='id_prodotti'>
                                  <option value=''>Seleziona un valore...</option>
                                  <?php foreach ($tutti_id_prodotti as $v) :?>
                                      <option value='<?=$v->id ?>'
              
                                              <?php if($v->id==set_value('id_prodotti') ): ?>
              
                                                  selected='selected'
                                            
              
                                              <?php endif ?>
                                      >
              
                                          <?=$v->nome ?>
              
                                      </option>
              
                                  <?php endforeach ?>
                              </select>
                              </div>
                          </div>
                      </div>
                      

<!-- FNE id_prodotti -->

<!-- FINE id_prodotti -->


<!-- INIZIO quantita -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Quantita*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('quantita')?>'  required='required' id='id_class_quantita'  class='form-control' name='quantita' maxlength='(11)/4'  >
   </div>
</div>
</div>


<!-- FINE quantita -->


<!-- INIZIO costo_totale_netto -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Totale Netto*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('costo_totale_netto')?>'  required='required' id='id_class_costo_totale_netto'  class='form-control' name='costo_totale_netto' maxlength='(12)/4'  >
   </div>
</div>
</div>


<!-- FINE costo_totale_netto -->


<!-- INIZIO costo_totale_lordo -->

<div class='row'>
<div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'>Costo Totale Lordo*</label>
   <div class='col-md-12 col-xs-12'>
 <input  type='text'  value='<?=set_value('costo_totale_lordo')?>'  required='required' id='id_class_costo_totale_lordo'  class='form-control' name='costo_totale_lordo' maxlength='(12)/4'  >
   </div>
</div>
</div>


<!-- FINE costo_totale_lordo -->


<!-- INIZIO created_at -->

<!-- FINE created_at -->


<!-- INIZIO updated_at -->

<!-- FINE updated_at -->


<!-- INIZIO deleted_at -->

<!-- FINE deleted_at -->

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
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(id_clienti==''){
          var message = '<?=lang('id_clienti_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(id_prodotti==''){
          var message = '<?=lang('id_prodotti_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(quantita==''){
          var message = '<?=lang('quantita_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(costo_totale_netto==''){
          var message = '<?=lang('costo_totale_netto_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(costo_totale_lordo==''){
          var message = '<?=lang('costo_totale_lordo_not_empty')?>' ;
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

      