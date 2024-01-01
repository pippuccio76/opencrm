<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\Auth_identitiesModel;

class Auth_identities_Entity extends Entity
{

    function attivo()
    {
      $auth_identities_model= new Auth_identitiesModel();

      $record = $auth_identities_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
