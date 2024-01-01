<?php
 /**
* @Creatoil: 30/12/2023
* @autore  : Stefano
* @file    :
* @modif.  : 30/12/2023
* @motivo  : creazione file
*/




?>

    <!-- Page Header-->
        <div class='card'>
                <div class='card-header'>
                    <h4>Crea migrations</h4>
                </div>
                <div class='card-body'>

    <br>

              <?php if(!empty(validation_errors())) :?>
               <div class='col-md-12 text-center'>

                <div class='alert alert-block alert-danger fade in'>
                  <span class='login_error'><?= validation_errors(); ?></span>
                </div>


            </div>



        <?php endif; ?>



      </div><?php
$attributes = array('class' => 'col-md-8 offset-md-2',
                     'id' => 'myform',
                     'name' => 'form_migrations',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('migrations/inserisciRecord',$attributes);

             ?> <br>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Version')*</label>
<?php
        if (!empty(set_value('version')) AND set_value('version') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('version')) AND $record->version == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('version')) AND set_value('version') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('version')) AND $record->version == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='version' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='version' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Class')*</label>
<?php
        if (!empty(set_value('class')) AND set_value('class') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('class')) AND $record->class == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('class')) AND set_value('class') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('class')) AND $record->class == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='class' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='class' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Group')*</label>
<?php
        if (!empty(set_value('group')) AND set_value('group') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('group')) AND $record->group == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('group')) AND set_value('group') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('group')) AND $record->group == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='group' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='group' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Namespace')*</label>
<?php
        if (!empty(set_value('namespace')) AND set_value('namespace') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('namespace')) AND $record->namespace == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('namespace')) AND set_value('namespace') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('namespace')) AND $record->namespace == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='namespace' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='namespace' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Time')*</label>
<?php
        if (!empty(set_value('time')) AND set_value('time') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('time')) AND $record->time == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('time')) AND set_value('time') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('time')) AND $record->time == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='time' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='time' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Batch')*</label>
<?php
        if (!empty(set_value('batch')) AND set_value('batch') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('batch')) AND $record->batch == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('batch')) AND set_value('batch') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('batch')) AND $record->batch == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='batch' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='batch' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>

          <span>note: * campi obbligatori</span>
         <div class='text-right'>
         <a href='<?= base_url() ?>' class='btn btn-danger'>Annulla</a>
         <button class='btn btn-info' type='submit' onclick=''>INSERISCI</button>
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
    if(id==''){
          var message = 'Il campo id non può essere vuoto';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(version==''){
          var message = 'Il campo version non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = 'Il campo class non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(group==''){
          var message = 'Il campo group non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(namespace==''){
          var message = 'Il campo namespace non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(time==''){
          var message = 'Il campo time non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(batch==''){
          var message = 'Il campo batch non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }
       else{
          return true;
       }
}
</script>



      