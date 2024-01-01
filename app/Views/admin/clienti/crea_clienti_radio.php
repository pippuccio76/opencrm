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
                    <h4>Crea clienti</h4>
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
                     'name' => 'form_clienti',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('clienti/inserisciRecord',$attributes);

             ?> <br>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Ragione Sociale')*</label>
<?php
        if (!empty(set_value('ragione_sociale')) AND set_value('ragione_sociale') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('ragione_sociale')) AND $record->ragione_sociale == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('ragione_sociale')) AND set_value('ragione_sociale') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('ragione_sociale')) AND $record->ragione_sociale == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='ragione_sociale' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='ragione_sociale' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('P Iva')*</label>
<?php
        if (!empty(set_value('p_iva')) AND set_value('p_iva') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('p_iva')) AND $record->p_iva == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('p_iva')) AND set_value('p_iva') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('p_iva')) AND $record->p_iva == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='p_iva' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='p_iva' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('C F')*</label>
<?php
        if (!empty(set_value('c_f')) AND set_value('c_f') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('c_f')) AND $record->c_f == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('c_f')) AND set_value('c_f') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('c_f')) AND $record->c_f == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='c_f' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='c_f' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Telefono')*</label>
<?php
        if (!empty(set_value('telefono')) AND set_value('telefono') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('telefono')) AND $record->telefono == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('telefono')) AND set_value('telefono') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('telefono')) AND $record->telefono == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='telefono' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='telefono' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Note')*</label>
<?php
        if (!empty(set_value('note')) AND set_value('note') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('note')) AND $record->note == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('note')) AND set_value('note') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('note')) AND $record->note == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='note' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='note' value='0'  <?=$not_value?> >

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
          var message = 'Il campo id non può essere vuoto';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(ragione_sociale==''){
          var message = 'Il campo ragione_sociale non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(p_iva==''){
          var message = 'Il campo p_iva non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(c_f==''){
          var message = 'Il campo c_f non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(telefono==''){
          var message = 'Il campo telefono non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(note==''){
          var message = 'Il campo note non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(created_at==''){
          var message = 'Il campo created_at non può essere vuoto' ;
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



      