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
                  <h4>Modifica Settings</h4>
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
                     'name' => 'form_settings',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Settings/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<!-- INIZIO class -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Class*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('class'))){
           $val=($record->class) ;
         }else{
           $val=set_value('class') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_class'   name='class' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE class -->


<!-- INIZIO key -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Key*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('key'))){
           $val=($record->key) ;
         }else{
           $val=set_value('key') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_key'   name='key' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE key -->


<!-- INIZIO value -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Value</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('value'))){
           $val=($record->value) ;
         }else{
           $val=set_value('value') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_value'   name='value' maxlength='262140'  >
   </div>
</div>
</div>


<!-- FINE value -->


<!-- INIZIO type -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Type*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('type'))){
           $val=($record->type) ;
         }else{
           $val=set_value('type') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_type'   name='type' maxlength='124'  >
   </div>
</div>
</div>


<!-- FINE type -->


<!-- INIZIO context -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Context</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('context'))){
           $val=($record->context) ;
         }else{
           $val=set_value('context') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_context'   name='context' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE context -->


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
    var id= form_settings.id.value;
    var class= form_settings.class.value;
    var key= form_settings.key.value;
    var value= form_settings.value.value;
    var type= form_settings.type.value;
    var context= form_settings.context.value;
    var created_at= form_settings.created_at.value;
    var updated_at= form_settings.updated_at.value;
    var id= form_settings.id.value;
    var class= form_settings.class.value;
    var key= form_settings.key.value;
    var value= form_settings.value.value;
    var type= form_settings.type.value;
    var context= form_settings.context.value;
    var created_at= form_settings.created_at.value;
    var updated_at= form_settings.updated_at.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = '<?=lang('class_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(key==''){
          var message = '<?=lang('key_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(value=='regola_da_scrivere'){
          var message = 'Il campo value regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(type==''){
          var message = '<?=lang('type_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(context=='regola_da_scrivere'){
          var message = 'Il campo context regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = '<?=lang('created_at_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(updated_at==''){
          var message = '<?=lang('updated_at_not_empty')?>' ;
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


  	  