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
                  <h4>Modifica Vendite</h4>
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
                     'name' => 'form_vendite',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Vendite/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<div class='row'>

                  <div class='col-md-12'>
                      <label class='col-md-12 col-xs-12 control-label'>Id Clienti*</label>
                      <div class='col-md-12 col-xs-12'>
                      <select id='id_id_clienti'  class='form-control' name='id_clienti'>
                          <option value=''>Seleziona un valore...</option>
                          <?php foreach ($tutti_id_clienti as $v) :?>
                              <option value='<?=$v->id ?>'

                              <?php if($v->id==set_value('id_clienti') OR $v->id==id_clienti ): ?>
              
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
              

<div class='row'>

                  <div class='col-md-12'>
                      <label class='col-md-12 col-xs-12 control-label'>Id Prodotti*</label>
                      <div class='col-md-12 col-xs-12'>
                      <select id='id_id_prodotti'  class='form-control' name='id_prodotti'>
                          <option value=''>Seleziona un valore...</option>
                          <?php foreach ($tutti_id_prodotti as $v) :?>
                              <option value='<?=$v->id ?>'

                              <?php if($v->id==set_value('id_prodotti') OR $v->id==id_prodotti ): ?>
              
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
              

<!-- INIZIO quantita -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Quantita*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('quantita'))){
           $val=($record->quantita) ;
         }else{
           $val=set_value('quantita') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_quantita'   name='quantita' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE quantita -->


<!-- INIZIO costo_totale_netto -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Costo Totale Netto*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('costo_totale_netto'))){
           $val=($record->costo_totale_netto) ;
         }else{
           $val=set_value('costo_totale_netto') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_costo_totale_netto'   name='costo_totale_netto' maxlength='12'  >
   </div>
</div>
</div>


<!-- FINE costo_totale_netto -->


<!-- INIZIO costo_totale_lordo -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Costo Totale Lordo*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('costo_totale_lordo'))){
           $val=($record->costo_totale_lordo) ;
         }else{
           $val=set_value('costo_totale_lordo') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_costo_totale_lordo'   name='costo_totale_lordo' maxlength='12'  >
   </div>
</div>
</div>


<!-- FINE costo_totale_lordo -->


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
    var id= form_vendite.id.value;
    var id_clienti= form_vendite.id_clienti.value;
    var id_prodotti= form_vendite.id_prodotti.value;
    var quantita= form_vendite.quantita.value;
    var costo_totale_netto= form_vendite.costo_totale_netto.value;
    var costo_totale_lordo= form_vendite.costo_totale_lordo.value;
    var created_at= form_vendite.created_at.value;
    var updated_at= form_vendite.updated_at.value;
    var deleted_at= form_vendite.deleted_at.value;
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


  	  