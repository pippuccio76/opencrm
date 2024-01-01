<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\Prodotti_costi_acquistoModel;
use App\Models\ProdottiModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Prodotti_costi_acquisto extends BaseController {

	private $data_title = ' Gestione Prodotti_costi_acquisto';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('prodotti_costi_acquisto/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();
        $prodotti_model = new ProdottiModel();

        $data['tutti_id_prodotti'] =  $prodotti_model->findAll();


        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'id_prodotti'=>[
                                                 'label'=>'Id prodotti',
                                                 'rules'=>'required|min_length[0]|max_length[2.75]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto'=>[
                                                 'label'=>'Costo unitario netto',
                                                 'rules'=>'required|min_length[0]|max_length[3]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo'=>[
                                                 'label'=>'Costo unitario lordo',
                                                 'rules'=>'required|min_length[0]|max_length[3]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $post = $this->request->getPost();


            $res=$prodotti_costi_acquisto_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/prodotti_costi_acquisto/crea_prodotti_costi_acquisto');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();
      $prodotti = new ProdottiModel();

        $data['tutti_id_prodotti'] =  $prodotti_model->findAll();





        $record=$prodotti_costi_acquisto_model->find($id) ;


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
                                    'id_prodotti'=>[
                                                 'label'=>'Id prodotti',
                                                 'rules'=>'required|min_length[0]|max_length[(11/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto'=>[
                                                 'label'=>'Costo unitario netto',
                                                 'rules'=>'required|min_length[0]|max_length[(12/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo'=>[
                                                 'label'=>'Costo unitario lordo',
                                                 'rules'=>'required|min_length[0]|max_length[(12/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();


                $res=$prodotti_costi_acquisto_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/prodotti_costi_acquisto/modifica_prodotti_costi_acquisto');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();




        $record=$prodotti_costi_acquisto_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/prodotti_costi_acquisto/visualizza_prodotti_costi_acquisto',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();



        $res=$prodotti_costi_acquisto_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$prodotti_costi_acquisto_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Prodotti_costi_acquisto/lista_completa/');

            }

    }

	public function lista_completa(){

        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$prodotti_costi_acquisto_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/prodotti_costi_acquisto/lista_prodotti_costi_acquistoajax');

	}//finer lista completa




	public function lista_attivi(){

        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();

        $data['title'] = $this->data_title;

        $data['lista']=$prodotti_costi_acquisto_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/prodotti_costi_acquisto/lista_prodotti_costi_acquisto',$data);

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
	

        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();


        $totalRecords   = $prodotti_costi_acquisto_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $prodotti_costi_acquisto_model->select('
					prodotti_costi_acquisto.id,
					prodotti.nome as prodotti_nome,
					prodotti_costi_acquisto.costo_unitario_netto,
					prodotti_costi_acquisto.costo_unitario_lordo,
					prodotti_costi_acquisto.created_at,
					prodotti_costi_acquisto.updated_at,
					prodotti_costi_acquisto.deleted_at
			')
			->join('prodotti','prodotti,prodotti_costi_acquisto.id_prodotti = prodotti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('prodotti_costi_acquisto.id',$searchValue)
					->orLike('prodotti.nome' ,$searchValue)
					->orLike('prodotti_costi_acquisto.costo_unitario_netto',$searchValue)
					->orLike('prodotti_costi_acquisto.costo_unitario_lordo',$searchValue)
					->orLike('prodotti_costi_acquisto.created_at',$searchValue)
					->orLike('prodotti_costi_acquisto.updated_at',$searchValue)
					->orLike('prodotti_costi_acquisto.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $prodotti_costi_acquisto_model->select('
					prodotti_costi_acquisto.id,
					prodotti.nome as prodotti_nome,
					prodotti_costi_acquisto.costo_unitario_netto,
					prodotti_costi_acquisto.costo_unitario_lordo,
					prodotti_costi_acquisto.created_at,
					prodotti_costi_acquisto.updated_at,
					prodotti_costi_acquisto.deleted_at,
			')
			->join('prodotti','prodotti,prodotti_costi_acquisto.id_prodotti = prodotti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('prodotti_costi_acquisto.id',$searchValue)
					->orLike('prodotti.nome' ,$searchValue)
					->orLike('prodotti_costi_acquisto.costo_unitario_netto',$searchValue)
					->orLike('prodotti_costi_acquisto.costo_unitario_lordo',$searchValue)
					->orLike('prodotti_costi_acquisto.created_at',$searchValue)
					->orLike('prodotti_costi_acquisto.updated_at',$searchValue)
					->orLike('prodotti_costi_acquisto.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Prodotti_costi_acquisto/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Prodotti_costi_acquisto/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"id_prodotti"=>$record->prodotti_nome,
				"costo_unitario_netto"=>$record->costo_unitario_netto,
				"costo_unitario_lordo"=>$record->costo_unitario_lordo,
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
