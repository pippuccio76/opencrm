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
                  <h4>Modifica Clienti</h4>
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
                     'name' => 'form_clienti',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Clienti/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<!-- INIZIO ragione_sociale -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Ragione Sociale*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('ragione_sociale'))){
           $val=($record->ragione_sociale) ;
         }else{
           $val=set_value('ragione_sociale') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_ragione_sociale'   name='ragione_sociale' maxlength='400'  >
   </div>
</div>
</div>


<!-- FINE ragione_sociale -->


<!-- INIZIO p_iva -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>P Iva*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('p_iva'))){
           $val=($record->p_iva) ;
         }else{
           $val=set_value('p_iva') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_p_iva'   name='p_iva' maxlength='44'  >
   </div>
</div>
</div>


<!-- FINE p_iva -->


<!-- INIZIO c_f -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>C F*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('c_f'))){
           $val=($record->c_f) ;
         }else{
           $val=set_value('c_f') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_c_f'   name='c_f' maxlength='64'  >
   </div>
</div>
</div>


<!-- FINE c_f -->


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
    var id= form_clienti.id.value;
    var ragione_sociale= form_clienti.ragione_sociale.value;
    var p_iva= form_clienti.p_iva.value;
    var c_f= form_clienti.c_f.value;
    var telefono= form_clienti.telefono.value;
    var note= form_clienti.note.value;
    var created_at= form_clienti.created_at.value;
    var updated_at= form_clienti.updated_at.value;
    var deleted_at= form_clienti.deleted_at.value;
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
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(ragione_sociale==''){
          var message = '<?=lang('ragione_sociale_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(p_iva==''){
          var message = '<?=lang('p_iva_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(c_f==''){
          var message = '<?=lang('c_f_not_empty')?>' ;
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


  	  