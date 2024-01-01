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
                    <h4>Crea settings</h4>
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
                     'name' => 'form_settings',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('settings/inserisciRecord',$attributes);

             ?> <br>


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
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Key')*</label>
<?php
        if (!empty(set_value('key')) AND set_value('key') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('key')) AND $record->key == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('key')) AND set_value('key') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('key')) AND $record->key == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='key' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='key' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Value')</label>
<?php
        if (!empty(set_value('value')) AND set_value('value') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('value')) AND $record->value == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('value')) AND set_value('value') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('value')) AND $record->value == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='value' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='value' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Type')*</label>
<?php
        if (!empty(set_value('type')) AND set_value('type') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('type')) AND $record->type == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('type')) AND set_value('type') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('type')) AND $record->type == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='type' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='type' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Context')</label>
<?php
        if (!empty(set_value('context')) AND set_value('context') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('context')) AND $record->context == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('context')) AND set_value('context') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('context')) AND $record->context == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='context' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='context' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Created At')*</label>
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
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Updated At')*</label>
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
    var id= form_settings.id.value;
    var class= form_settings.class.value;
    var key= form_settings.key.value;
    var value= form_settings.value.value;
    var type= form_settings.type.value;
    var context= form_settings.context.value;
    var created_at= form_settings.created_at.value;
    var updated_at= form_settings.updated_at.value;
    if(id==''){
          var message = 'Il campo id non può essere vuoto';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(class==''){
          var message = 'Il campo class non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(key==''){
          var message = 'Il campo key non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(value=='regola_da_scrivere'){
          var message = 'Il campo value regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(type==''){
          var message = 'Il campo type non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(context=='regola_da_scrivere'){
          var message = 'Il campo context regola_da_scivere';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = 'Il campo created_at non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(updated_at==''){
          var message = 'Il campo updated_at non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }
       else{
          return true;
       }
}
</script>



      