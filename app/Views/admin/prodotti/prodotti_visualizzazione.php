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
            <h4>Crea prodotti</h4>
        </div>
        <div class='card-body'>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id :<?= ($record->id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>nome :<?= ($record->nome) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>codice :<?= ($record->codice) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>descrizione :<?= ($record->descrizione) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>unita_misura :<?= ($record->unita_misura) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>scorta_minima :<?= ($record->scorta_minima) ?></h2>
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


