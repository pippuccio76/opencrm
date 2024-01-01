<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\ClientiModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Clienti extends BaseController {

	private $data_title = ' Gestione Clienti';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('clienti/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $clienti_model = new ClientiModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'ragione_sociale'=>[
                                                 'label'=>'Ragione sociale',
                                                 'rules'=>'required|min_length[0]|max_length[400]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'p_iva'=>[
                                                 'label'=>'P iva',
                                                 'rules'=>'required|min_length[0]|max_length[44]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'c_f'=>[
                                                 'label'=>'C f',
                                                 'rules'=>'required|min_length[0]|max_length[64]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'telefono'=>[
                                                 'label'=>'Telefono',
                                                 'rules'=>'required|min_length[0]|max_length[80]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'note'=>[
                                                 'label'=>'Note',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$clienti_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Clienti/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/clienti/crea_clienti');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$clienti_model = new ClientiModel();






        $record=$clienti_model->find($id) ;


        $data['record']=$record;

        $validation =  \Config\Services::validation();

        if($this->request->getMethod() === 'post')
        {

            $rules=
                    [
            
                                    'id'=>[
                                                 'label'=>'Id',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'ragione_sociale'=>[
                                                 'label'=>'Ragione sociale',
                                                 'rules'=>'required|min_length[0]|max_length[400]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'p_iva'=>[
                                                 'label'=>'P iva',
                                                 'rules'=>'required|min_length[0]|max_length[44]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'c_f'=>[
                                                 'label'=>'C f',
                                                 'rules'=>'required|min_length[0]|max_length[64]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'telefono'=>[
                                                 'label'=>'Telefono',
                                                 'rules'=>'required|min_length[0]|max_length[80]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'note'=>[
                                                 'label'=>'Note',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$clienti_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Clienti/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/clienti/modifica_clienti');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $clienti_model = new ClientiModel();




        $record=$clienti_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/clienti/visualizza_clienti',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $clienti_model = new ClientiModel();



        $res=$clienti_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Clienti/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Clienti/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $clienti_model = new ClientiModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$clienti_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Clienti/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Clienti/lista_completa/');

            }

    }

	public function lista_completa(){

        $clienti_model = new ClientiModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$clienti_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/clienti/lista_clienti');

	}//finer lista completa




	public function lista_attivi(){

        $clienti_model = new ClientiModel();

        $data['title'] = $this->data_title;

        $data['lista']=$clienti_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/clienti/lista_clienti',$data);

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
	

        $clienti_model = new ClientiModel();


        $totalRecords   = $clienti_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $clienti_model->select('
					clienti.id,
					clienti.ragione_sociale,
					clienti.p_iva,
					clienti.c_f,
					clienti.telefono,
					clienti.note,
					clienti.created_at,
					clienti.updated_at,
					clienti.deleted_at
			')
			->groupStart() // apro una parentesi 
					->orLike('clienti.id',$searchValue)
					->orLike('clienti.ragione_sociale',$searchValue)
					->orLike('clienti.p_iva',$searchValue)
					->orLike('clienti.c_f',$searchValue)
					->orLike('clienti.telefono',$searchValue)
					->orLike('clienti.note',$searchValue)
					->orLike('clienti.created_at',$searchValue)
					->orLike('clienti.updated_at',$searchValue)
					->orLike('clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $clienti_model->select('
					clienti.id,
					clienti.ragione_sociale,
					clienti.p_iva,
					clienti.c_f,
					clienti.telefono,
					clienti.note,
					clienti.created_at,
					clienti.updated_at,
					clienti.deleted_at,
			')
			->groupStart() // apro una parentesi 
					->orLike('clienti.id',$searchValue)
					->orLike('clienti.ragione_sociale',$searchValue)
					->orLike('clienti.p_iva',$searchValue)
					->orLike('clienti.c_f',$searchValue)
					->orLike('clienti.telefono',$searchValue)
					->orLike('clienti.note',$searchValue)
					->orLike('clienti.created_at',$searchValue)
					->orLike('clienti.updated_at',$searchValue)
					->orLike('clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Clienti/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Clienti/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"ragione_sociale"=>$record->ragione_sociale,
				"p_iva"=>$record->p_iva,
				"c_f"=>$record->c_f,
				"telefono"=>$record->telefono,
				"note"=>$record->note,
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
