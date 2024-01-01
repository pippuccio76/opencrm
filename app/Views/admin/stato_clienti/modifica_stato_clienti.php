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
                  <h4>Modifica Stato Clienti</h4>
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
                     'name' => 'form_stato_clienti',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Stato_clienti/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



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
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_nome'   name='nome' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE nome -->


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
    var id= form_stato_clienti.id.value;
    var nome= form_stato_clienti.nome.value;
    var created_at= form_stato_clienti.created_at.value;
    var updated_at= form_stato_clienti.updated_at.value;
    var deleted_at= form_stato_clienti.deleted_at.value;
    var id= form_stato_clienti.id.value;
    var nome= form_stato_clienti.nome.value;
    var created_at= form_stato_clienti.created_at.value;
    var updated_at= form_stato_clienti.updated_at.value;
    var deleted_at= form_stato_clienti.deleted_at.value;
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


  	  