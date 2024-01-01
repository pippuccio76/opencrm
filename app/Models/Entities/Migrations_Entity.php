<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\MigrationsModel;

class Migrations_Entity extends Entity
{

    function attivo()
    {
      $migrations_model= new MigrationsModel();

      $record = $migrations_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
