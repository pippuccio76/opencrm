<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\SettingsModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Settings extends BaseController {

	private $data_title = ' Gestione '. ucfirst(settings).';'

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('settings/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $settings_model = new SettingsModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'class'=>[
                                                 'label'=>'Class',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Class 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Class 1020 caratteri',
                                                            'required'=>'Class obbligatorio'
                                                           ]
                                                ],
                                    'key'=>[
                                                 'label'=>'Key',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Key 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Key 1020 caratteri',
                                                            'required'=>'Key obbligatorio'
                                                           ]
                                                ],
                                    'value'=>[
                                                 'label'=>'Value',
                                                 'rules'=>'min_length[0]|max_length[262140]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Value 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Value 262140 caratteri'
                                                           ]
                                                ],
                                    'type'=>[
                                                 'label'=>'Type',
                                                 'rules'=>'required|min_length[0]|max_length[124]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Type 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Type 124 caratteri',
                                                            'required'=>'Type obbligatorio'
                                                           ]
                                                ],
                                    'context'=>[
                                                 'label'=>'Context',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Context 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Context 1020 caratteri'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$settings_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Settings/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Settings/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/settings/crea_settings');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$settings_model = new SettingsModel();






        $record=$settings_model->find($id) ;


        $data['record']=$record;

        $validation =  \Config\Services::validation();

        if($this->request->getMethod() === 'post')
        {

            $rules=
                    [
            
                                    'id'=>[
                                                 'label'=>'Id',
                                                 'rules'=>'required|min_length[0]|max_length[9]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Id 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Id 9 caratteri',
                                                            'required'=>'Id obbligatorio'
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
                                    'key'=>[
                                                 'label'=>'Key',
                                                 'rules'=>'required|min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Key 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Key 1020 caratteri',
                                                            'required'=>'Key obbligatorio'
                                                           ]
                                                ],
                                    'value'=>[
                                                 'label'=>'Value',
                                                 'rules'=>'min_length[0]|max_length[262140]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Value 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Value 262140 caratteri'
                                                           ]
                                                ],
                                    'type'=>[
                                                 'label'=>'Type',
                                                 'rules'=>'required|min_length[0]|max_length[124]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Type 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Type 124 caratteri',
                                                            'required'=>'Type obbligatorio'
                                                           ]
                                                ],
                                    'context'=>[
                                                 'label'=>'Context',
                                                 'rules'=>'min_length[0]|max_length[1020]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima Context 0 caratteri',  
                                                            'max_length'=>'Lunghezza massima Context 1020 caratteri'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$settings_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Settings/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Settings/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/settings/modifica_settings');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $settings_model = new SettingsModel();




        $record=$settings_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/settings/visualizza_settings',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $settings_model = new SettingsModel();



        $res=$settings_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Settings/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Settings/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $settings_model = new SettingsModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$settings_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Settings/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Settings/lista_completa/');

            }

    }

	public function lista_completa(){

        $settings_model = new SettingsModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$settings_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/settings/lista_settingsajax');

	}//finer lista completa




	public function lista_attivi(){

        $settings_model = new SettingsModel();

        $data['title'] = $this->data_title;

        $data['lista']=$settings_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/settings/lista_settings',$data);

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
	

        $settings_model = new SettingsModel();


        $totalRecords   = $settings_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $settings_model->select('
					settings.id,
					settings.class,
					settings.key,
					settings.value,
					settings.type,
					settings.context,
					settings.created_at,
					settings.updated_at
			')
			->groupStart() // apro una parentesi 
					->orLike('settings.id',$searchValue)
					->orLike('settings.class',$searchValue)
					->orLike('settings.key',$searchValue)
					->orLike('settings.value',$searchValue)
					->orLike('settings.type',$searchValue)
					->orLike('settings.context',$searchValue)
					->orLike('settings.created_at',$searchValue)
					->orLike('settings.updated_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $settings_model->select('
					settings.id,
					settings.class,
					settings.key,
					settings.value,
					settings.type,
					settings.context,
					settings.created_at,
					settings.updated_at,
			')
			->groupStart() // apro una parentesi 
					->orLike('settings.id',$searchValue)
					->orLike('settings.class',$searchValue)
					->orLike('settings.key',$searchValue)
					->orLike('settings.value',$searchValue)
					->orLike('settings.type',$searchValue)
					->orLike('settings.context',$searchValue)
					->orLike('settings.created_at',$searchValue)
					->orLike('settings.updated_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Settings/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Settings/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"class"=>$record->class,
				"key"=>$record->key,
				"value"=>$record->value,
				"type"=>$record->type,
				"context"=>$record->context,
				"created_at"=>$record->created_at,
				"updated_at"=>$record->updated_at,
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
