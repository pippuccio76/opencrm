<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\Stato_clientiModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Stato_clienti extends BaseController {

	private $data_title = ' Gestione Stato_clienti';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('stato_clienti/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $stato_clienti_model = new Stato_clientiModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'nome'=>[
                                                 'label'=>'Nome',
                                                 'rules'=>'required|min_length[0]|max_length[2.75]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$stato_clienti_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Stato_clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Stato_clienti/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/stato_clienti/crea_stato_clienti');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$stato_clienti_model = new Stato_clientiModel();






        $record=$stato_clienti_model->find($id) ;


        $data['record']=$record;

        $validation =  \Config\Services::validation();

        if($this->request->getMethod() === 'post')
        {

            $rules=
                    [
            
                                    'id'=>[
                                                 'label'=>'Id',
                                                 'rules'=>'required|min_length[0]|max_length[(11/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'nome'=>[
                                                 'label'=>'Nome',
                                                 'rules'=>'required|min_length[0]|max_length[(11/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$stato_clienti_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Stato_clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Stato_clienti/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/stato_clienti/modifica_stato_clienti');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $stato_clienti_model = new Stato_clientiModel();




        $record=$stato_clienti_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/stato_clienti/visualizza_stato_clienti',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $stato_clienti_model = new Stato_clientiModel();



        $res=$stato_clienti_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Stato_clienti/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Stato_clienti/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $stato_clienti_model = new Stato_clientiModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$stato_clienti_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Stato_clienti/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Stato_clienti/lista_completa/');

            }

    }

	public function lista_completa(){

        $stato_clienti_model = new Stato_clientiModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$stato_clienti_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/stato_clienti/lista_stato_clientiajax');

	}//finer lista completa




	public function lista_attivi(){

        $stato_clienti_model = new Stato_clientiModel();

        $data['title'] = $this->data_title;

        $data['lista']=$stato_clienti_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/stato_clienti/lista_stato_clienti',$data);

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
	

        $stato_clienti_model = new Stato_clientiModel();


        $totalRecords   = $stato_clienti_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $stato_clienti_model->select('
					stato_clienti.id,
					stato_clienti.nome,
					stato_clienti.created_at,
					stato_clienti.updated_at,
					stato_clienti.deleted_at
			')
			->groupStart() // apro una parentesi 
					->orLike('stato_clienti.id',$searchValue)
					->orLike('stato_clienti.nome',$searchValue)
					->orLike('stato_clienti.created_at',$searchValue)
					->orLike('stato_clienti.updated_at',$searchValue)
					->orLike('stato_clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $stato_clienti_model->select('
					stato_clienti.id,
					stato_clienti.nome,
					stato_clienti.created_at,
					stato_clienti.updated_at,
					stato_clienti.deleted_at,
			')
			->groupStart() // apro una parentesi 
					->orLike('stato_clienti.id',$searchValue)
					->orLike('stato_clienti.nome',$searchValue)
					->orLike('stato_clienti.created_at',$searchValue)
					->orLike('stato_clienti.updated_at',$searchValue)
					->orLike('stato_clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Stato_clienti/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Stato_clienti/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"nome"=>$record->nome,
				"created_at"=>$record->created_at,
				"updated_at"=>$record->updated_at,
				"deleted_at"=>$record->deleted_at,
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
