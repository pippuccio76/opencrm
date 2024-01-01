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
            <h4>Crea events</h4>
        </div>
        <div class='card-body'>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id :<?= ($record->id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>clienti_id :<?= ($record->clienti_id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>title :<?= ($record->title) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>start :<?= ($record->start) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>end :<?= ($record->end) ?></h2>
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


