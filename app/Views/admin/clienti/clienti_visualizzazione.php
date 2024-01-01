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
            <h4>Crea clienti</h4>
        </div>
        <div class='card-body'>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id :<?= ($record->id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>ragione_sociale :<?= ($record->ragione_sociale) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>p_iva :<?= ($record->p_iva) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>c_f :<?= ($record->c_f) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>telefono :<?= ($record->telefono) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>note :<?= ($record->note) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>created_at :<?= ($record->created_at) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>updated_at :<?= ($record->updated_at) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>deleted_at :<?= ($record->deleted_at) ?></h2>
</div>
</div>
</div>



<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>


