<?php

  namespace App\Models;

  use CodeIgniter\Model;


  class Sedi_clientiModel extends Model {

    protected $table = 'sedi_clienti';
    protected $primaryKey = 'id';

    protected $returnType = 'App\Models\Entities\Sedi_clienti_Entity';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id','id_clienti','referente','email','telefono','note','created_at','updated_at','deleted_at'];
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