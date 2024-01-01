<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\Auth_permissions_usersModel;

class Auth_permissions_users_Entity extends Entity
{

    function attivo()
    {
      $auth_permissions_users_model= new Auth_permissions_usersModel();

      $record = $auth_permissions_users_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
