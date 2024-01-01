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
                  <h4>Modifica Migrations</h4>
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
                     'name' => 'form_migrations',
                     'method' => 'POST',
		               'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('admin_Migrations/modificaRecord/'.$record->id,$attributes);

						 ?>	<br>
			<?=form_hidden('id',  $record->id)?>



<!-- INIZIO version -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Version*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('version'))){
           $val=($record->version) ;
         }else{
           $val=set_value('version') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_version'   name='version' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE version -->


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


<!-- INIZIO group -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Group*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('group'))){
           $val=($record->group) ;
         }else{
           $val=set_value('group') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_group'   name='group' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE group -->


<!-- INIZIO namespace -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Namespace*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('namespace'))){
           $val=($record->namespace) ;
         }else{
           $val=set_value('namespace') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_namespace'   name='namespace' maxlength='1020'  >
   </div>
</div>
</div>


<!-- FINE namespace -->


<!-- INIZIO time -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Time*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('time'))){
           $val=($record->time) ;
         }else{
           $val=set_value('time') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_time'   name='time' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE time -->


<!-- INIZIO batch -->

<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12  control-label'>Batch*</label>
   <div class='col-md-12 col-xs-12'>
   <?php

         if(empty(set_value('batch'))){
           $val=($record->batch) ;
         }else{
           $val=set_value('batch') ;
         }

    ?>
 <input class='form-control' type='text' value='<?=$val?>'   id='id_class_batch'   name='batch' maxlength='11'  >
   </div>
</div>
</div>


<!-- FINE batch -->


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
    var id= form_migrations.id.value;
    var version= form_migrations.version.value;
    var class= form_migrations.class.value;
    var group= form_migrations.group.value;
    var namespace= form_migrations.namespace.value;
    var time= form_migrations.time.value;
    var batch= form_migrations.batch.value;
    var id= form_migrations.id.value;
    var version= form_migrations.version.value;
    var class= form_migrations.class.value;
    var group= form_migrations.group.value;
    var namespace= form_migrations.namespace.value;
    var time= form_migrations.time.value;
    var batch= form_migrations.batch.value;
    if(id==''){
          var message = '<?=lang('id_not_empty')?>';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(version==''){
          var message = '<?=lang('version_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = '<?=lang('class_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(group==''){
          var message = '<?=lang('group_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(namespace==''){
          var message = '<?=lang('namespace_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(time==''){
          var message = '<?=lang('time_not_empty')?>' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(batch==''){
          var message = '<?=lang('batch_not_empty')?>' ;
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


  	  