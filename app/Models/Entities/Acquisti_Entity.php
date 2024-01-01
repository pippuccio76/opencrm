<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ProdottiModel;
use App\Models\AcquistiModel;

class Acquisti_Entity extends Entity
{
    function prodotti()
    {
      $prodotti_model= new ProdottiModel();
      return $prodotti_model->find($this->id_prodotti);
    
    }

    function attivo()
    {
      $acquisti_model= new AcquistiModel();

      $record = $acquisti_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
