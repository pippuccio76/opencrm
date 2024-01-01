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
                  <h4>Modifica Sedi Clienti</h4>
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
                     'name' => 'form_sedi_clienti',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Sedi_clienti/modificaRecord/'.$record->id,$attributes);

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
              

<!-- INIZIO referente -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Referente*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('referente'))){
           $val=($record->referente) ;
         }else{
           $val=set_value('referente') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_referente'   name='referente' maxlength='400'  >
   </div>
</div>
</div>


<!-- FINE referente -->


<!-- INIZIO email -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Email*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('email'))){
           $val=($record->email) ;
         }else{
           $val=set_value('email') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_email'   name='email' maxlength='400'  >
   </div>
</div>
</div>


<!-- FINE email -->


<!-- INIZIO telefono -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Telefono*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('telefono'))){
           $val=($record->telefono) ;
         }else{
           $val=set_value('telefono') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_telefono'   name='telefono' maxlength='80'  >
   </div>
</div>
</div>


<!-- FINE telefono -->


<!-- INIZIO note -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Note*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('note'))){
           $val=($record->note) ;
         }else{
           $val=set_value('note') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_note'   name='note' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE note -->


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
    var id= form_sedi_clienti.id.value;
    var id_clienti= form_sedi_clienti.id_clienti.value;
    var referente= form_sedi_clienti.referente.value;
    var email= form_sedi_clienti.email.value;
    var telefono= form_sedi_clienti.telefono.value;
    var note= form_sedi_clienti.note.value;
    var created_at= form_sedi_clienti.created_at.value;
    var updated_at= form_sedi_clienti.updated_at.value;
    var deleted_at= form_sedi_clienti.deleted_at.value;
    var id= form_sedi_clienti.id.value;
    var id_clienti= form_sedi_clienti.id_clienti.value;
    var referente= form_sedi_clienti.referente.value;
    var email= form_sedi_clienti.email.value;
    var telefono= form_sedi_clienti.telefono.value;
    var note= form_sedi_clienti.note.value;
    var created_at= form_sedi_clienti.created_at.value;
    var updated_at= form_sedi_clienti.updated_at.value;
    var deleted_at= form_sedi_clienti.deleted_at.value;
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

         }else if(referente==''){
          var message = '<?=lang('referente_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(email==''){
          var message = '<?=lang('email_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(telefono==''){
          var message = '<?=lang('telefono_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(note==''){
          var message = '<?=lang('note_not_empty')?>' ;
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


  	  