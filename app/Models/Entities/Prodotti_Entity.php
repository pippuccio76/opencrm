<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ProdottiModel;

class Prodotti_Entity extends Entity
{

    function attivo()
    {
      $prodotti_model= new ProdottiModel();

      $record = $prodotti_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
