<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\TypeModel;
use App\Models\IdentifierModel;
use App\Models\Auth_token_loginsModel;

class Auth_token_logins_Entity extends Entity
{
    function type()
    {
      $type_model= new TypeModel();
      return $type_model->find($this->id_type);
    
    }
    function identifier()
    {
      $identifier_model= new IdentifierModel();
      return $identifier_model->find($this->identifier);
    
    }

    function attivo()
    {
      $auth_token_logins_model= new Auth_token_loginsModel();

      $record = $auth_token_logins_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
