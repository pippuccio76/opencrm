<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ClientiModel;

class Clienti_Entity extends Entity
{

    function attivo()
    {
      $clienti_model= new ClientiModel();

      $record = $clienti_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
