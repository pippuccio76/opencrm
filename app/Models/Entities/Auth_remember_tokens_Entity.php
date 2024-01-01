<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\Auth_remember_tokensModel;

class Auth_remember_tokens_Entity extends Entity
{

    function attivo()
    {
      $auth_remember_tokens_model= new Auth_remember_tokensModel();

      $record = $auth_remember_tokens_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
