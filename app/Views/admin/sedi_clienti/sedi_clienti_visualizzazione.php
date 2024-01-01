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
            <h4>Crea sedi_clienti</h4>
        </div>
        <div class='card-body'>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id :<?= ($record->id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id_clienti :<?= ($record->id_clienti) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>referente :<?= ($record->referente) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>email :<?= ($record->email) ?></h2>
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


