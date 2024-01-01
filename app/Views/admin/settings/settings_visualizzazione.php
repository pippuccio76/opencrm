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
            <h4>Crea settings</h4>
        </div>
        <div class='card-body'>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>id :<?= ($record->id) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>class :<?= ($record->class) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>key :<?= ($record->key) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>value :<?= ($record->value) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>type :<?= ($record->type) ?></h2>
</div>
</div>


<div class='row'>
   <div class='col-md-12 text-center'>
       <h2>context :<?= ($record->context) ?></h2>
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
</div>



<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->endSection() ?>


