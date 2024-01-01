<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\UsersModel;

class Users_Entity extends Entity
{

    function attivo()
    {
      $users_model= new UsersModel();

      $record = $users_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
