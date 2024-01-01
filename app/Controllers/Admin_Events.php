<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\EventsModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Events extends BaseController {

	private $data_title = ' Gestione '. ucfirst(events).';'

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('events/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $events_model = new EventsModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'clienti_id'=>[
                                                 'label'=>'Clienti id',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Clienti id 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Clienti id 11 caratteri',
                                                            'required'=>'Clienti id obbligatorio'
                                                           ]
                                                ],
                                    'title'=>[
                                                 'label'=>'Title',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Title 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Title 1020 caratteri',
                                                            'required'=>'Title obbligatorio'
                                                           ]
                                                ],
                                    'start'=>[
                                                 'label'=>'Start',
                                                 'rules'=>'required|min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Start 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Start 19 caratteri',
                                                            'required'=>'Start obbligatorio'
                                                           ]
                                                ],
                                    'end'=>[
                                                 'label'=>'End',
                                                 'rules'=>'required|min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima End 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima End 19 caratteri',
                                                            'required'=>'End obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$events_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Events/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Events/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/events/crea_events');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$events_model = new EventsModel();






        $record=$events_model->find($id) ;


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
                                    'clienti_id'=>[
                                                 'label'=>'Clienti id',
                                                 'rules'=>'required|min_length[0]|max_length[11]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Clienti id 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Clienti id 11 caratteri',
                                                            'required'=>'Clienti id obbligatorio'
                                                           ]
                                                ],
                                    'title'=>[
                                                 'label'=>'Title',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Title 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Title 1020 caratteri',
                                                            'required'=>'Title obbligatorio'
                                                           ]
                                                ],
                                    'start'=>[
                                                 'label'=>'Start',
                                                 'rules'=>'required|min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Start 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Start 19 caratteri',
                                                            'required'=>'Start obbligatorio'
                                                           ]
                                                ],
                                    'end'=>[
                                                 'label'=>'End',
                                                 'rules'=>'required|min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima End 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima End 19 caratteri',
                                                            'required'=>'End obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$events_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Events/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Events/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/events/modifica_events');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $events_model = new EventsModel();




        $record=$events_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/events/visualizza_events',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $events_model = new EventsModel();



        $res=$events_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Events/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Events/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $events_model = new EventsModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$events_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Events/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Events/lista_completa/');

            }

    }

	public function lista_completa(){

        $events_model = new EventsModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$events_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/events/lista_eventsajax');

	}//finer lista completa




	public function lista_attivi(){

        $events_model = new EventsModel();

        $data['title'] = $this->data_title;

        $data['lista']=$events_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/events/lista_events',$data);

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
	

        $events_model = new EventsModel();


        $totalRecords   = $events_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $events_model->select('
					events.id,
					events.clienti_id,
					events.title,
					events.start,
					events.end,
					events.created_at,
					events.updated_at,
					events.deleted_at
			')
			->groupStart() // apro una parentesi 
					->orLike('events.id',$searchValue)
					->orLike('events.clienti_id',$searchValue)
					->orLike('events.title',$searchValue)
					->orLike('events.start',$searchValue)
					->orLike('events.end',$searchValue)
					->orLike('events.created_at',$searchValue)
					->orLike('events.updated_at',$searchValue)
					->orLike('events.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $events_model->select('
					events.id,
					events.clienti_id,
					events.title,
					events.start,
					events.end,
					events.created_at,
					events.updated_at,
					events.deleted_at,
			')
			->groupStart() // apro una parentesi 
					->orLike('events.id',$searchValue)
					->orLike('events.clienti_id',$searchValue)
					->orLike('events.title',$searchValue)
					->orLike('events.start',$searchValue)
					->orLike('events.end',$searchValue)
					->orLike('events.created_at',$searchValue)
					->orLike('events.updated_at',$searchValue)
					->orLike('events.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Events/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Events/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"clienti_id"=>$record->clienti_id,
				"title"=>$record->title,
				"start"=>$record->start,
				"end"=>$record->end,
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
