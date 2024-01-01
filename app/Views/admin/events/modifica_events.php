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
                  <h4>Modifica Events</h4>
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
                     'name' => 'form_events',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Events/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<!-- INIZIO clienti_id -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Clienti Id*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('clienti_id'))){
           $val=($record->clienti_id) ;
         }else{
           $val=set_value('clienti_id') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_clienti_id'   name='clienti_id' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE clienti_id -->


<!-- INIZIO title -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Title*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('title'))){
           $val=($record->title) ;
         }else{
           $val=set_value('title') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_title'   name='title' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE title -->


<!-- INIZIO start -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Start*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('start'))){
           $val=($record->start) ;
         }else{
           $val=set_value('start') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_start'   name='start' maxlength='19'  >
   </div>
</div>
</div>


<!-- FINE start -->


<!-- INIZIO end -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>End*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('end'))){
           $val=($record->end) ;
         }else{
           $val=set_value('end') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_end'   name='end' maxlength='19'  >
   </div>
</div>
</div>


<!-- FINE end -->


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
    var id= form_events.id.value;
    var clienti_id= form_events.clienti_id.value;
    var title= form_events.title.value;
    var start= form_events.start.value;
    var end= form_events.end.value;
    var created_at= form_events.created_at.value;
    var updated_at= form_events.updated_at.value;
    var deleted_at= form_events.deleted_at.value;
    var id= form_events.id.value;
    var clienti_id= form_events.clienti_id.value;
    var title= form_events.title.value;
    var start= form_events.start.value;
    var end= form_events.end.value;
    var created_at= form_events.created_at.value;
    var updated_at= form_events.updated_at.value;
    var deleted_at= form_events.deleted_at.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(clienti_id==''){
          var message = '<?=lang('clienti_id_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(title==''){
          var message = '<?=lang('title_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(start==''){
          var message = '<?=lang('start_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(end==''){
          var message = '<?=lang('end_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at=='regola_da_scrivere'){
          var message = 'Il campo created_at regola_da_scivere';
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


  	  