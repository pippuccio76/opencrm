<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\Stato_clientiModel;

class Stato_clienti_Entity extends Entity
{

    function attivo()
    {
      $stato_clienti_model= new Stato_clientiModel();

      $record = $stato_clienti_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
