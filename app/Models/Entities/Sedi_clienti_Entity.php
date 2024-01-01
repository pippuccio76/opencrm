<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ClientiModel;
use App\Models\Sedi_clientiModel;

class Sedi_clienti_Entity extends Entity
{
    function clienti()
    {
      $clienti_model= new ClientiModel();
      return $clienti_model->find($this->id_clienti);
    
    }

    function attivo()
    {
      $sedi_clienti_model= new Sedi_clientiModel();

      $record = $sedi_clienti_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
