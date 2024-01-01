<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\EventsModel;

class Events_Entity extends Entity
{

    function attivo()
    {
      $events_model= new EventsModel();

      $record = $events_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
