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
                    <h4>Crea events</h4>
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
                     'name' => 'form_events',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('events/inserisciRecord',$attributes);

             ?> <br>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Clienti Id')*</label>
<?php
        if (!empty(set_value('clienti_id')) AND set_value('clienti_id') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('clienti_id')) AND $record->clienti_id == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('clienti_id')) AND set_value('clienti_id') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('clienti_id')) AND $record->clienti_id == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='clienti_id' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='clienti_id' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Title')*</label>
<?php
        if (!empty(set_value('title')) AND set_value('title') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('title')) AND $record->title == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('title')) AND set_value('title') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('title')) AND $record->title == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='title' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='title' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Start')*</label>
<?php
        if (!empty(set_value('start')) AND set_value('start') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('start')) AND $record->start == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('start')) AND set_value('start') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('start')) AND $record->start == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='start' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='start' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('End')*</label>
<?php
        if (!empty(set_value('end')) AND set_value('end') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('end')) AND $record->end == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('end')) AND set_value('end') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('end')) AND $record->end == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='end' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='end' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Created At')</label>
<?php
        if (!empty(set_value('created_at')) AND set_value('created_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('created_at')) AND $record->created_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('created_at')) AND set_value('created_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('created_at')) AND $record->created_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='created_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='created_at' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Updated At')</label>
<?php
        if (!empty(set_value('updated_at')) AND set_value('updated_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('updated_at')) AND $record->updated_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('updated_at')) AND set_value('updated_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('updated_at')) AND $record->updated_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='updated_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='updated_at' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Deleted At')</label>
<?php
        if (!empty(set_value('deleted_at')) AND set_value('deleted_at') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('deleted_at')) AND $record->deleted_at == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('deleted_at')) AND set_value('deleted_at') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('deleted_at')) AND $record->deleted_at == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='deleted_at' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='deleted_at' value='0'  <?=$not_value?> >

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
    var id= form_events.id.value;
    var clienti_id= form_events.clienti_id.value;
    var title= form_events.title.value;
    var start= form_events.start.value;
    var end= form_events.end.value;
    var created_at= form_events.created_at.value;
    var updated_at= form_events.updated_at.value;
    var deleted_at= form_events.deleted_at.value;
    if(id==''){
          var message = 'Il campo id non può essere vuoto';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(clienti_id==''){
          var message = 'Il campo clienti_id non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(title==''){
          var message = 'Il campo title non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(start==''){
          var message = 'Il campo start non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(end==''){
          var message = 'Il campo end non può essere vuoto' ;
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



      