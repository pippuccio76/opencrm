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
                    <h4>Crea acquisti</h4>
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
                     'name' => 'form_acquisti',
                     'method' => 'POST',
         'onSubmit' => 'return controlla_e_invia();'

                    );
 echo form_open ('acquisti/inserisciRecord',$attributes);

             ?> <br>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Id Prodotti')*</label>
<?php
        if (!empty(set_value('id_prodotti')) AND set_value('id_prodotti') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('id_prodotti')) AND $record->id_prodotti == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('id_prodotti')) AND set_value('id_prodotti') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('id_prodotti')) AND $record->id_prodotti == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='id_prodotti' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='id_prodotti' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Fattura')*</label>
<?php
        if (!empty(set_value('fattura')) AND set_value('fattura') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('fattura')) AND $record->fattura == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('fattura')) AND set_value('fattura') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('fattura')) AND $record->fattura == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='fattura' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='fattura' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Quantita')*</label>
<?php
        if (!empty(set_value('quantita')) AND set_value('quantita') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('quantita')) AND $record->quantita == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('quantita')) AND set_value('quantita') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('quantita')) AND $record->quantita == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='quantita' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='quantita' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Costo Totale Netto')*</label>
<?php
        if (!empty(set_value('costo_totale_netto')) AND set_value('costo_totale_netto') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('costo_totale_netto')) AND $record->costo_totale_netto == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('costo_totale_netto')) AND set_value('costo_totale_netto') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('costo_totale_netto')) AND $record->costo_totale_netto == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='costo_totale_netto' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='costo_totale_netto' value='0'  <?=$not_value?> >

    </div>
   </div>
</div>


<div class='row'>
 <div class='col-md-12'>
   <label class='col-md-12 col-xs-12 control-label'><?=lang('Costo Totale Lordo')*</label>
<?php
        if (!empty(set_value('costo_totale_lordo')) AND set_value('costo_totale_lordo') == '1') {
            $value = 'checked="checked"';
        $not_value='';
      } elseif (empty(set_value('costo_totale_lordo')) AND $record->costo_totale_lordo == '1') {
            $value = 'checked="checked"';
            $not_value='';
        } elseif (!empty(set_value('costo_totale_lordo')) AND set_value('costo_totale_lordo') == '0'){

            $value = '';
            $not_value='checked="checked"';

        } elseif (empty(set_value('costo_totale_lordo')) AND $record->costo_totale_lordo == '0'){

            $value = '';
            $not_value='checked="checked"';
        } else {
            $value = '';
            $not_value='';
        }
       ?>
	 <br>
    <div class='col-md-12'>
    Attivo<input type='radio' style='margin-top: 10px;' name='costo_totale_lordo' value='1'  <?=$value ?> >

    Non Attivo<input type='radio' style='margin-top: 10px;' name='costo_totale_lordo' value='0'  <?=$not_value?> >

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
    var id= form_acquisti.id.value;
    var id_prodotti= form_acquisti.id_prodotti.value;
    var fattura= form_acquisti.fattura.value;
    var quantita= form_acquisti.quantita.value;
    var costo_totale_netto= form_acquisti.costo_totale_netto.value;
    var costo_totale_lordo= form_acquisti.costo_totale_lordo.value;
    var created_at= form_acquisti.created_at.value;
    var updated_at= form_acquisti.updated_at.value;
    var deleted_at= form_acquisti.deleted_at.value;
    if(id==''){
          var message = 'Il campo id non può essere vuoto';
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(id_prodotti==''){
          var message = 'Il campo id_prodotti non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(fattura==''){
          var message = 'Il campo fattura non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(quantita==''){
          var message = 'Il campo quantita non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(costo_totale_netto==''){
          var message = 'Il campo costo_totale_netto non può essere vuoto' ;
          $('#alertModal').find('.modal-body p').text(message);
          $('#alertModal').modal('show');
          return false;

         }else if(costo_totale_lordo==''){
          var message = 'Il campo costo_totale_lordo non può essere vuoto' ;
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



      