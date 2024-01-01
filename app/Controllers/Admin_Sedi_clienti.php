<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\Sedi_clientiModel;
use App\Models\ClientiModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Sedi_clienti extends BaseController {

	private $data_title = ' Gestione Sedi_clienti';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('sedi_clienti/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $sedi_clienti_model = new Sedi_clientiModel();
        $clienti_model = new ClientiModel();

        $data['tutti_id_clienti'] =  $clienti_model->findAll();


        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'id_clienti'=>[
                                                 'label'=>'Id clienti',
                                                 'rules'=>'required|min_length[0]|max_length[2.75]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'referente'=>[
                                                 'label'=>'Referente',
                                                 'rules'=>'required|min_length[0]|max_length[100]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'email'=>[
                                                 'label'=>'Email',
                                                 'rules'=>'required|min_length[0]|max_length[100]|valid_email|is_unique[users.email]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio',
                                                            'valid_email'=>'Inserisci una mail valida '
                                                           ]
                                                ],
                                    'telefono'=>[
                                                 'label'=>'Telefono',
                                                 'rules'=>'required|min_length[0]|max_length[20]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'note'=>[
                                                 'label'=>'Note',
                                                 'rules'=>'required|min_length[0]|max_length[255]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$sedi_clienti_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Sedi_clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Sedi_clienti/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/sedi_clienti/crea_sedi_clienti');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$sedi_clienti_model = new Sedi_clientiModel();
      $clienti = new ClientiModel();

        $data['tutti_id_clienti'] =  $clienti_model->findAll();





        $record=$sedi_clienti_model->find($id) ;


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
                                    'id_clienti'=>[
                                                 'label'=>'Id clienti',
                                                 'rules'=>'required|min_length[0]|max_length[(11/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'referente'=>[
                                                 'label'=>'Referente',
                                                 'rules'=>'required|min_length[0]|max_length[(400/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'email'=>[
                                                 'label'=>'Email',
                                                 'rules'=>'required|min_length[0]|max_length[(400/4) ]|valid_email|is_unique[users.email]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio',
                                                            'valid_email'=>'Inserisci una mail valida '
                                                           ]
                                                ],
                                    'telefono'=>[
                                                 'label'=>'Telefono',
                                                 'rules'=>'required|min_length[0]|max_length[(80/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'note'=>[
                                                 'label'=>'Note',
                                                 'rules'=>'required|min_length[0]|max_length[(1020/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$sedi_clienti_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Sedi_clienti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Sedi_clienti/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/sedi_clienti/modifica_sedi_clienti');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $sedi_clienti_model = new Sedi_clientiModel();




        $record=$sedi_clienti_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/sedi_clienti/visualizza_sedi_clienti',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $sedi_clienti_model = new Sedi_clientiModel();



        $res=$sedi_clienti_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Sedi_clienti/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Sedi_clienti/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $sedi_clienti_model = new Sedi_clientiModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$sedi_clienti_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Sedi_clienti/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Sedi_clienti/lista_completa/');

            }

    }

	public function lista_completa(){

        $sedi_clienti_model = new Sedi_clientiModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$sedi_clienti_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/sedi_clienti/lista_sedi_clientiajax');

	}//finer lista completa




	public function lista_attivi(){

        $sedi_clienti_model = new Sedi_clientiModel();

        $data['title'] = $this->data_title;

        $data['lista']=$sedi_clienti_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/sedi_clienti/lista_sedi_clienti',$data);

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
	

        $sedi_clienti_model = new Sedi_clientiModel();


        $totalRecords   = $sedi_clienti_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $sedi_clienti_model->select('
					sedi_clienti.id,
					clienti.nome as clienti_nome,
					sedi_clienti.referente,
					sedi_clienti.email,
					sedi_clienti.telefono,
					sedi_clienti.note,
					sedi_clienti.created_at,
					sedi_clienti.updated_at,
					sedi_clienti.deleted_at
			')
			->join('clienti','clienti,sedi_clienti.id_clienti = clienti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('sedi_clienti.id',$searchValue)
					->orLike('clienti.nome' ,$searchValue)
					->orLike('sedi_clienti.referente',$searchValue)
					->orLike('sedi_clienti.email',$searchValue)
					->orLike('sedi_clienti.telefono',$searchValue)
					->orLike('sedi_clienti.note',$searchValue)
					->orLike('sedi_clienti.created_at',$searchValue)
					->orLike('sedi_clienti.updated_at',$searchValue)
					->orLike('sedi_clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $sedi_clienti_model->select('
					sedi_clienti.id,
					clienti.nome as clienti_nome,
					sedi_clienti.referente,
					sedi_clienti.email,
					sedi_clienti.telefono,
					sedi_clienti.note,
					sedi_clienti.created_at,
					sedi_clienti.updated_at,
					sedi_clienti.deleted_at,
			')
			->join('clienti','clienti,sedi_clienti.id_clienti = clienti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('sedi_clienti.id',$searchValue)
					->orLike('clienti.nome' ,$searchValue)
					->orLike('sedi_clienti.referente',$searchValue)
					->orLike('sedi_clienti.email',$searchValue)
					->orLike('sedi_clienti.telefono',$searchValue)
					->orLike('sedi_clienti.note',$searchValue)
					->orLike('sedi_clienti.created_at',$searchValue)
					->orLike('sedi_clienti.updated_at',$searchValue)
					->orLike('sedi_clienti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Sedi_clienti/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Sedi_clienti/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"id_clienti"=>$record->clienti_nome,
				"referente"=>$record->referente,
				"email"=>$record->email,
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
