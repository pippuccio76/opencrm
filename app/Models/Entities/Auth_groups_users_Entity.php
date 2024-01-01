<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\Auth_groups_usersModel;

class Auth_groups_users_Entity extends Entity
{

    function attivo()
    {
      $auth_groups_users_model= new Auth_groups_usersModel();

      $record = $auth_groups_users_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
