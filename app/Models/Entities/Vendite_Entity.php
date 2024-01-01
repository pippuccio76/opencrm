<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ClientiModel;
use App\Models\ProdottiModel;
use App\Models\VenditeModel;

class Vendite_Entity extends Entity
{
    function clienti()
    {
      $clienti_model= new ClientiModel();
      return $clienti_model->find($this->id_clienti);
    
    }
    function prodotti()
    {
      $prodotti_model= new ProdottiModel();
      return $prodotti_model->find($this->id_prodotti);
    
    }

    function attivo()
    {
      $vendite_model= new VenditeModel();

      $record = $vendite_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
