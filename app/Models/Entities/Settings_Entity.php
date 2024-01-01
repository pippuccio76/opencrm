<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\SettingsModel;

class Settings_Entity extends Entity
{

    function attivo()
    {
      $settings_model= new SettingsModel();

      $record = $settings_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
