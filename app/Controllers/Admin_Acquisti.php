<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\AcquistiModel;
use App\Models\ProdottiModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Acquisti extends BaseController {

	private $data_title = ' Gestione Acquisti';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('acquisti/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $acquisti_model = new AcquistiModel();
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
                                    'fattura'=>[
                                                 'label'=>'Fattura',
                                                 'rules'=>'required|min_length[0]|max_length[100]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'quantita'=>[
                                                 'label'=>'Quantita',
                                                 'rules'=>'required|min_length[0]|max_length[2.75]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_totale_netto'=>[
                                                 'label'=>'Costo totale netto',
                                                 'rules'=>'required|min_length[0]|max_length[3]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_totale_lordo'=>[
                                                 'label'=>'Costo totale lordo',
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


            $res=$acquisti_model->save($post);


            if($res) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Acquisti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Acquisti/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/acquisti/crea_acquisti');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

		$acquisti_model = new AcquistiModel();
      $prodotti = new ProdottiModel();

        $data['tutti_id_prodotti'] =  $prodotti_model->findAll();





        $record=$acquisti_model->find($id) ;


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
                                    'fattura'=>[
                                                 'label'=>'Fattura',
                                                 'rules'=>'required|min_length[0]|max_length[(400/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'quantita'=>[
                                                 'label'=>'Quantita',
                                                 'rules'=>'required|min_length[0]|max_length[(11/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'costo_totale_netto'=>[
                                                 'label'=>'Costo totale netto',
                                                 'rules'=>'required|min_length[0]|max_length[(12/4) ]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'costo_totale_lordo'=>[
                                                 'label'=>'Costo totale lordo',
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


                $res=$acquisti_model->save($post);


        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Acquisti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Acquisti/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/acquisti/modifica_acquisti');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $acquisti_model = new AcquistiModel();




        $record=$acquisti_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/acquisti/visualizza_acquisti',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $acquisti_model = new AcquistiModel();



        $res=$acquisti_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Acquisti/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Acquisti/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $acquisti_model = new AcquistiModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$acquisti_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Acquisti/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Acquisti/lista_completa/');

            }

    }

	public function lista_completa(){

        $acquisti_model = new AcquistiModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$acquisti_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/acquisti/lista_acquisti_ajax');

	}//finer lista completa




	public function lista_attivi(){

        $acquisti_model = new AcquistiModel();

        $data['title'] = $this->data_title;

        $data['lista']=$acquisti_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/acquisti/lista_acquisti',$data);

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
	

        $acquisti_model = new AcquistiModel();


        $totalRecords   = $acquisti_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $acquisti_model->select('
					acquisti.id,
					prodotti.nome as prodotti_nome,
					acquisti.fattura,
					acquisti.quantita,
					acquisti.costo_totale_netto,
					acquisti.costo_totale_lordo,
					acquisti.created_at,
					acquisti.updated_at,
					acquisti.deleted_at
			')
			->join('prodotti','prodotti,acquisti.id_prodotti = prodotti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('acquisti.id',$searchValue)
					->orLike('prodotti.nome' ,$searchValue)
					->orLike('acquisti.fattura',$searchValue)
					->orLike('acquisti.quantita',$searchValue)
					->orLike('acquisti.costo_totale_netto',$searchValue)
					->orLike('acquisti.costo_totale_lordo',$searchValue)
					->orLike('acquisti.created_at',$searchValue)
					->orLike('acquisti.updated_at',$searchValue)
					->orLike('acquisti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();
            
            
        ##  records to show
        $records = $acquisti_model->select('
					acquisti.id,
					prodotti.nome as prodotti_nome,
					acquisti.fattura,
					acquisti.quantita,
					acquisti.costo_totale_netto,
					acquisti.costo_totale_lordo,
					acquisti.created_at,
					acquisti.updated_at,
					acquisti.deleted_at,
			')
			->join('prodotti','prodotti,acquisti.id_prodotti = prodotti.id','left')
			->groupStart() // apro una parentesi 
					->orLike('acquisti.id',$searchValue)
					->orLike('prodotti.nome' ,$searchValue)
					->orLike('acquisti.fattura',$searchValue)
					->orLike('acquisti.quantita',$searchValue)
					->orLike('acquisti.costo_totale_netto',$searchValue)
					->orLike('acquisti.costo_totale_lordo',$searchValue)
					->orLike('acquisti.created_at',$searchValue)
					->orLike('acquisti.updated_at',$searchValue)
					->orLike('acquisti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Acquisti/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Acquisti/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"id_prodotti"=>$record->prodotti_nome,
				"fattura"=>$record->fattura,
				"quantita"=>$record->quantita,
				"costo_totale_netto"=>$record->costo_totale_netto,
				"costo_totale_lordo"=>$record->costo_totale_lordo,
				"created_at"=>$record->created_at,
				"updated_at"=>$record->updated_at,
				//"deleted_at"=>$record->deleted_at,
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
