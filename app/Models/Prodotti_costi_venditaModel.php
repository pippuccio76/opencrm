<?php

  namespace App\Models;

  use CodeIgniter\Model;


  class Prodotti_costi_venditaModel extends Model {

    protected $table = 'prodotti_costi_vendita';
    protected $primaryKey = 'id';

    protected $returnType = 'App\Models\Entities\Prodotti_costi_vendita_Entity';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id','id_prodotti','costo_unitario_netto','costo_unitario_lordo','created_at','updated_at','deleted_at'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    function oggetto_di_user($admin_id,$id)
    {
      $this->where('admin_id',$admin_id);
      $this->where('id ',$id);


                if($this->countAllResults()==1){
      return TRUE;
      }else{
      return FALSE;
    }
    }



  public function value_unique_on_update($id,$value){

    $this->where('value',$value);
    $this->where('id !=',$id);

    $res=$this->findAll();

    if($res->countAllResults()==0){
      return TRUE;
    }else{
      return FALSE;
    }

  }


  }