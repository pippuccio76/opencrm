<?php
namespace App\Models\Entities;

use CodeIgniter\Entity;
use App\Models\ProdottiModel;
use App\Models\Prodotti_costi_venditaModel;

class Prodotti_costi_vendita_Entity extends Entity
{
    function prodotti()
    {
      $prodotti_model= new ProdottiModel();
      return $prodotti_model->find($this->id_prodotti);
    
    }

    function attivo()
    {
      $prodotti_costi_vendita_model= new Prodotti_costi_venditaModel();

      $record = $prodotti_costi_vendita_model->withDeleted()->find($this->id);

      if($record->deleted_at==NULL){

        return 'Attivo';

      }else{

        return 'Non Attivo';
      }

    }
    
}
