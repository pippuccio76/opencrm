<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\UsersModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Users extends BaseController {

	private $data_title = ' Gestione '. ucfirst(users).';'

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('users/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $users_model = new UsersModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'username'=>[
                                                 'label'=>'Username',
                                                 'rules'=>'is_unique[users.username]|min_length[0]|max_length[120]|is_unique[users.username]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Username 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Username 120 caratteri',
                                                            'is_unique'=>'Campo Username gia\' presente '
                                                           ]
                                                ],
                                    'status'=>[
                                                 'label'=>'Status',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Status 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Status 1020 caratteri'
                                                           ]
                                                ],
                                    'status_message'=>[
                                                 'label'=>'Status message',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Status message 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Status message 1020 caratteri'
                                                           ]
                                                ],
                                    'active'=>[
                                                 'label'=>'Active',
                                                 'rules'=>'required|min_length[0]|max_length[1]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Active 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Active 1 caratteri',
                                                            'required'=>'Active obbligatorio'
                                                           ]
                                                ],
                                    'last_active'=>[
                                                 'label'=>'Last active',
                                                 'rules'=>'min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Last active 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Last active 19 caratteri'
                                                           ]
                                                ],
                                    'firstname'=>[
                                                 'label'=>'Firstname',
                                                 'rules'=>'required|min_length[0]|max_length[200]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Firstname 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Firstname 200 caratteri',
                                                            'required'=>'Firstname obbligatorio'
                                                           ]
                                                ],
                                    'lastname'=>[
                                                 'label'=>'Lastname',
                                                 'rules'=>'required|min_length[0]|max_length[200]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Lastname 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Lastname 200 caratteri',
                                                            'required'=>'Lastname obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$users_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Users/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Users/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/users/crea_users');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$users_model = new UsersModel();






        $record=$users_model->find($id) ;


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
                                                            'min_length'=>'Lunghezza minima Id 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Id 11 caratteri',
                                                            'required'=>'Id obbligatorio'
                                                           ]
                                                ],
                                    'username'=>[
                                                 'label'=>'Username',
                                                 'rules'=>'is_unique[users.username]|min_length[0]|max_length[120]|is_unique[users.username]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Username 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Username 120 caratteri',
                                                            'is_unique'=>'Campo Username gia\' presente '
                                                           ]
                                                ],
                                    'status'=>[
                                                 'label'=>'Status',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Status 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Status 1020 caratteri'
                                                           ]
                                                ],
                                    'status_message'=>[
                                                 'label'=>'Status message',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Status message 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Status message 1020 caratteri'
                                                           ]
                                                ],
                                    'active'=>[
                                                 'label'=>'Active',
                                                 'rules'=>'required|min_length[0]|max_length[1]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Active 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Active 1 caratteri',
                                                            'required'=>'Active obbligatorio'
                                                           ]
                                                ],
                                    'last_active'=>[
                                                 'label'=>'Last active',
                                                 'rules'=>'min_length[0]|max_length[19]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Last active 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Last active 19 caratteri'
                                                           ]
                                                ],
                                    'firstname'=>[
                                                 'label'=>'Firstname',
                                                 'rules'=>'required|min_length[0]|max_length[200]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Firstname 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Firstname 200 caratteri',
                                                            'required'=>'Firstname obbligatorio'
                                                           ]
                                                ],
                                    'lastname'=>[
                                                 'label'=>'Lastname',
                                                 'rules'=>'required|min_length[0]|max_length[200]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Lastname 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Lastname 200 caratteri',
                                                            'required'=>'Lastname obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$users_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Users/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Users/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/users/modifica_users');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $users_model = new UsersModel();




        $record=$users_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/users/visualizza_users',$data);


    }//fine visualizza


		public function username_unique_on_update(){

			$id=$this->input->post('id');
			$username=$this->input->post('username');

			if($this->users_model
            ->username_unique_on_update($id,$username)){

				return TRUE;

			}else{
				$this->form_validation->set_message('username_unique_on_update', 'Il campo username è già presente ');
				return FALSE;
			}


		}





    public function eliminarecord($id){

        $users_model = new UsersModel();



        $res=$users_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Users/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Users/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $users_model = new UsersModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$users_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Users/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Users/lista_completa/');

            }

    }

	public function lista_completa(){

        $users_model = new UsersModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$users_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/users/lista_usersajax');

	}//finer lista completa




	public function lista_attivi(){

        $users_model = new UsersModel();

        $data['title'] = $this->data_title;

        $data['lista']=$users_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/users/lista_users',$data);

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
	

        $users_model = new UsersModel();


        $totalRecords   = $users_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $users_model->select('
					users.id,
					users.username,
					users.status,
					users.status_message,
					users.active,
					users.last_active,
					users.created_at,
					users.updated_at,
					users.deleted_at,
					users.firstname,
					users.lastname
			')
			->groupStart() // apro una parentesi 
					->orLike('users.id',$searchValue)
					->orLike('users.username',$searchValue)
					->orLike('users.status',$searchValue)
					->orLike('users.status_message',$searchValue)
					->orLike('users.active',$searchValue)
					->orLike('users.last_active',$searchValue)
					->orLike('users.created_at',$searchValue)
					->orLike('users.updated_at',$searchValue)
					->orLike('users.deleted_at',$searchValue)
					->orLike('users.firstname',$searchValue)
					->orLike('users.lastname',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $users_model->select('
					users.id,
					users.username,
					users.status,
					users.status_message,
					users.active,
					users.last_active,
					users.created_at,
					users.updated_at,
					users.deleted_at,
					users.firstname,
					users.lastname,
			')
			->groupStart() // apro una parentesi 
					->orLike('users.id',$searchValue)
					->orLike('users.username',$searchValue)
					->orLike('users.status',$searchValue)
					->orLike('users.status_message',$searchValue)
					->orLike('users.active',$searchValue)
					->orLike('users.last_active',$searchValue)
					->orLike('users.created_at',$searchValue)
					->orLike('users.updated_at',$searchValue)
					->orLike('users.deleted_at',$searchValue)
					->orLike('users.firstname',$searchValue)
					->orLike('users.lastname',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Users/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Users/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"username"=>$record->username,
				"status"=>$record->status,
				"status_message"=>$record->status_message,
				"active"=>$record->active,
				"last_active"=>$record->last_active,
				"created_at"=>$record->created_at,
				"updated_at"=>$record->updated_at,
				"deleted_at"=>$record->deleted_at,
				"firstname"=>$record->firstname,
				"lastname"=>$record->lastname,
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
