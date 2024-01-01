<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\MigrationsModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Migrations extends BaseController {

	private $data_title = ' Gestione '. ucfirst(migrations).';'

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('migrations/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $migrations_model = new MigrationsModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'version'=>[
                                                 'label'=>'Version',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Version 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Version 1020 caratteri',
                                                            'required'=>'Version obbligatorio'
                                                           ]
                                                ],
                                    'class'=>[
                                                 'label'=>'Class',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Class 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Class 1020 caratteri',
                                                            'required'=>'Class obbligatorio'
                                                           ]
                                                ],
                                    'group'=>[
                                                 'label'=>'Group',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Group 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Group 1020 caratteri',
                                                            'required'=>'Group obbligatorio'
                                                           ]
                                                ],
                                    'namespace'=>[
                                                 'label'=>'Namespace',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Namespace 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Namespace 1020 caratteri',
                                                            'required'=>'Namespace obbligatorio'
                                                           ]
                                                ],
                                    'time'=>[
                                                 'label'=>'Time',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Time 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Time 11 caratteri',
                                                            'required'=>'Time obbligatorio'
                                                           ]
                                                ],
                                    'batch'=>[
                                                 'label'=>'Batch',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Batch 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Batch 11 caratteri',
                                                            'required'=>'Batch obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$migrations_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Migrations/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Migrations/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/migrations/crea_migrations');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$migrations_model = new MigrationsModel();






        $record=$migrations_model->find($id) ;


        $data['record']=$record;

        $validation =  \Config\Services::validation();

        if($this->request->getMethod() === 'post')
        {

            $rules=
                    [
            
                                    'id'=>[
                                                 'label'=>'Id',
                                                 'rules'=>'required|min_length[0]|max_length[20]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Id 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Id 20 caratteri',
                                                            'required'=>'Id obbligatorio'
                                                           ]
                                                ],
                                    'version'=>[
                                                 'label'=>'Version',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Version 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Version 1020 caratteri',
                                                            'required'=>'Version obbligatorio'
                                                           ]
                                                ],
                                    'class'=>[
                                                 'label'=>'Class',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Class 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Class 1020 caratteri',
                                                            'required'=>'Class obbligatorio'
                                                           ]
                                                ],
                                    'group'=>[
                                                 'label'=>'Group',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Group 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Group 1020 caratteri',
                                                            'required'=>'Group obbligatorio'
                                                           ]
                                                ],
                                    'namespace'=>[
                                                 'label'=>'Namespace',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Namespace 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Namespace 1020 caratteri',
                                                            'required'=>'Namespace obbligatorio'
                                                           ]
                                                ],
                                    'time'=>[
                                                 'label'=>'Time',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Time 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Time 11 caratteri',
                                                            'required'=>'Time obbligatorio'
                                                           ]
                                                ],
                                    'batch'=>[
                                                 'label'=>'Batch',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Batch 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Batch 11 caratteri',
                                                            'required'=>'Batch obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$migrations_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Migrations/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Migrations/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/migrations/modifica_migrations');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $migrations_model = new MigrationsModel();




        $record=$migrations_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/migrations/visualizza_migrations',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $migrations_model = new MigrationsModel();



        $res=$migrations_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Migrations/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Migrations/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $migrations_model = new MigrationsModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$migrations_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Migrations/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Migrations/lista_completa/');

            }

    }

	public function lista_completa(){

        $migrations_model = new MigrationsModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$migrations_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/migrations/lista_migrationsajax');

	}//finer lista completa




	public function lista_attivi(){

        $migrations_model = new MigrationsModel();

        $data['title'] = $this->data_title;

        $data['lista']=$migrations_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/migrations/lista_migrations',$data);

	 }//fine lista attivi








       

	public function get_data_from_ajax(){
	
		$request = service('request');
        $postData = $request->getPost();
        $dtpostData = $postData['data'];
        $response = array();

        ## Read value
        $draw = $dtpostData['draw'];
        $start = $dtpostData['start'];
        $rowperpage = $dtpostData['length']; // Rows display per page

        $sorting = '';
        foreach($dtpostData['order'] as $index=>$v){
     
            //log_message('error', print_r($v));
     
            $sorting .= $dtpostData['columns'][$v['column']]['data'].' '.$v['dir'].' ';
     
            if ($index !== array_key_last($dtpostData['order'] )){
     
                $sorting .=',';
     
            }
        }
     
        

        $searchValue = $dtpostData['search']['value']; // Search value
        $where='';
	

        $migrations_model = new MigrationsModel();


        $totalRecords   = $migrations_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $migrations_model->select('
					migrations.id,
					migrations.version,
					migrations.class,
					migrations.group,
					migrations.namespace,
					migrations.time,
					migrations.batch
			')
			->groupStart() // apro una parentesi 
					->orLike('migrations.id',$searchValue)
					->orLike('migrations.version',$searchValue)
					->orLike('migrations.class',$searchValue)
					->orLike('migrations.group',$searchValue)
					->orLike('migrations.namespace',$searchValue)
					->orLike('migrations.time',$searchValue)
					->orLike('migrations.batch',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $migrations_model->select('
					migrations.id,
					migrations.version,
					migrations.class,
					migrations.group,
					migrations.namespace,
					migrations.time,
					migrations.batch,
			')
			->groupStart() // apro una parentesi 
					->orLike('migrations.id',$searchValue)
					->orLike('migrations.version',$searchValue)
					->orLike('migrations.class',$searchValue)
					->orLike('migrations.group',$searchValue)
					->orLike('migrations.namespace',$searchValue)
					->orLike('migrations.time',$searchValue)
					->orLike('migrations.batch',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Migrations/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Migrations/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"version"=>$record->version,
				"class"=>$record->class,
				"group"=>$record->group,
				"namespace"=>$record->namespace,
				"time"=>$record->time,
				"batch"=>$record->batch,
				); 
        }

        ## Response

        
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
            "token" => csrf_hash() // New token hash
        );
    

        //echo   $macchina_model->getLastQuery();
        //die();
        
        return $this->response->setJSON($response);

	}//finer lista AJAX


}
