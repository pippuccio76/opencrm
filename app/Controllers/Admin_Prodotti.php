<?php
namespace App\Controllers;

use CodeIgniter\Controller;

//Model da includere
use App\Models\ProdottiModel;
use App\Models\Prodotti_costi_acquistoModel;
use App\Models\Prodotti_costi_venditaModel;


/**
 * Description of
 *
 * @author stefano
 */ ;

class Admin_Prodotti extends BaseController {

	private $data_title = ' Gestione Prodotti';

    public function __construct() {

    helper(['form', 'url' ,'dateutility_helper']);


        //$this->lang->load('client','italian');


    }

    public function index() {

        $data=[];
        
        $data['title'] = $this->data_title;

        echo view('empty_view',$data );
        echo view('prodotti/index' );



    }

    public function inserisciRecord(){

        $data=[];
        
        $data['title'] = $this->data_title;


        $prodotti_model = new ProdottiModel();
        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();
        $prodotti_costi_vendita_model = new Prodotti_costi_venditaModel();



        if (($this->request->getMethod() === 'post')){

            $validation =  \Config\Services::validation();

            $rules=
            [
                                    'nome'=>[
                                                 'label'=>'Nome',
                                                 'rules'=>'required|min_length[0]|max_length[100]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'codice'=>[
                                                 'label'=>'Codice',
                                                 'rules'=>'required|is_unique[prodotti.codice]|max_length[50]',
                                                 'errors'=>[
                                                            'is_unique'=>'Il campo {field} con il valore  {value} e` già presente ',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'descrizione'=>[
                                                 'label'=>'Descrizione',
                                                 'rules'=>'required|min_length[0]|max_length[255]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'unita_misura'=>[
                                                 'label'=>'Unita misura',
                                                 'rules'=>'required|min_length[0]|max_length[10]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'scorta_minima'=>[
                                                 'label'=>'Scorta minima',
                                                 'rules'=>'required|min_length[0]|max_length[2.75]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto_acquisto'=>[
                                                 'label'=>'Costo unitario netto acquisto',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo_acquisto'=>[
                                                 'label'=>'Costo unitario lordo acquisto',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto_vendita'=>[
                                                 'label'=>'Costo unitario netto vendita',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo_vendita'=>[
                                                 'label'=>'Costo unitario lordo vendita',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

          if($this->validate($rules)){

            $db = \Config\Database::connect();

            $post = $this->request->getPost();

            $db->transStart();

            $res=$prodotti_model->save($post);

            $value_prodotti_costi_acquisto= [
                                                'id_prodotti'=>$prodotti_model->getInsertID(),
                                                'costo_unitario_netto' => $post['costo_unitario_netto_acquisto'],
                                                'costo_unitario_lordo' => $post['costo_unitario_lordo_acquisto'],
 


                                            ];


            $prodotti_costi_acquisto_model->insert($value_prodotti_costi_acquisto);


            $value_prodotti_costi_vendita= [
                                                'id_prodotti'=>$prodotti_model->getInsertID(),
                                                'costo_unitario_netto' => $post['costo_unitario_netto_vendita'],
                                                'costo_unitario_lordo' => $post['costo_unitario_lordo_vendita'],
 


                                            ];


            $prodotti_costi_vendita_model->insert($value_prodotti_costi_vendita);


            $db->transComplete();


            if($db->transStatus() !== false) {


                session()->setFlashdata('gestisciRecordOK', 'Inserimento correttamente effettuato');

                return redirect()->to('/admin_Prodotti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Inserimento ');

                return redirect()->to('/admin_Prodotti/lista_completa/');
            }                   

          }else{
              $data['validation'] = $validation;

          }
        }

      if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

        echo view('empty_view',$data);
        echo view('admin/prodotti/crea_prodotti');

      }



    }//fine crea
       



    public function modificaRecord($id){

        $data['title'] = $this->data_title;

        $prodotti_model = new ProdottiModel();
        $prodotti_costi_acquisto_model = new Prodotti_costi_acquistoModel();
        $prodotti_costi_vendita_model = new Prodotti_costi_venditaModel();


        //$record = $prodotti_model->find($id);
        

        $record=$prodotti_model->select (   'prodotti.id,
                                             prodotti.nome,
                                             prodotti.codice,
                                             prodotti.descrizione,
                                             prodotti.unita_misura,
                                             prodotti.scorta_minima,
                                             prodotti_costi_acquisto.costo_unitario_netto as costo_unitario_acquisto_netto,
                                             prodotti_costi_acquisto.costo_unitario_lordo as costo_unitario_acquisto_lordo,
                                             prodotti_costi_vendita.costo_unitario_netto as costo_unitario_vendita_netto,
                                             prodotti_costi_vendita.costo_unitario_lordo as costo_unitario_vendita_lordo'
                                        )
                               
                               ->where('prodotti.id',$id) 
                               ->where('prodotti_costi_acquisto.deleted_at IS NULL') 
                               ->where('prodotti_costi_vendita.deleted_at IS NULL') 
                               ->join('prodotti_costi_acquisto','prodotti.id=prodotti_costi_acquisto.id_prodotti') 
                               ->join('prodotti_costi_vendita','prodotti.id=prodotti_costi_vendita.id_prodotti') 
                               ->first();
    
        
            
        //dd($prodotti_model->getLastQuery());

        $data['record']=$record;

        $validation =  \Config\Services::validation();

        if($this->request->getMethod() === 'put')
        {

            $rules=
                    [
            
                                    'id'=>[
                                                 'label'=>'Id',
                                                 'rules'=>'required',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'nome'=>[
                                                 'label'=>'Nome',
                                                 'rules'=>'required|min_length[0]|max_length[100]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'codice'=>[
                                                 'label'=>'Codice',
                                                 'rules'=>'required|is_unique[prodotti.codice,id,{id}]|max_length[50]',
                                                 'errors'=>[
                                                            'is_unique'=>'Il campo {field} con il valore  {value} e` già presente ',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'descrizione'=>[
                                                 'label'=>'Descrizione',
                                                 'rules'=>'required|min_length[0]|max_length[255]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'unita_misura'=>[
                                                 'label'=>'Unita misura',
                                                 'rules'=>'required|min_length[0]|max_length[10]',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'scorta_minima'=>[
                                                 'label'=>'Scorta minima',
                                                 'rules'=>'required|decimal',
                                                 'errors'=>[
                                                            'min_length'=>'Lunghezza minima {field} {param} caratteri',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto_acquisto'=>[
                                                 'label'=>'Costo unitario netto acquisto',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo_acquisto'=>[
                                                 'label'=>'Costo unitario lordo acquisto',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_netto_vendita'=>[
                                                 'label'=>'Costo unitario netto vendita',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                    'costo_unitario_lordo_vendita'=>[
                                                 'label'=>'Costo unitario lordo vendita',
                                                 'rules'=>'required|decimal|max_length[10]',
                                                 'errors'=>[
                                                            'decimal'=>'Il campo {field}  deve essere un numero decimale',  
                                                            'max_length'=>'Lunghezza massima {field} {param} caratteri',
                                                            'required'=>'{field} {param} obbligatorio'
                                                           ]
                                                ],
                                  ];

            if($this->validate($rules)){

                $post = $this->request->getPost();

                $db = \Config\Database::connect();


                $res=$prodotti_model->save($post);


                //se c'è una variazione nei costi di acquistp
                if($record->costo_unitario_acquisto_netto !=$post['costo_unitario_netto_acquisto'] OR $record->costo_unitario_acquisto_lordo !=$post['costo_unitario_lordo_acquisto'] ){
                            

                    //elimino il record [softdelete]
                    $prodotti_costi_acquisto_model->where('id_prodotti',$id)->delete();

                    //dd($prodotti_costi_acquisto_model->getLastQuery());


                    //reinserisco il record [per storico costi]
                    $value_prodotti_costi_acquisto= [
                                                    'id_prodotti'=>$id,
                                                    'costo_unitario_netto' => $post['costo_unitario_netto_acquisto'],
                                                    'costo_unitario_lordo' => $post['costo_unitario_lordo_acquisto'],
     


                                                ];


                    $prodotti_costi_acquisto_model->insert($value_prodotti_costi_acquisto);                    
                
                }
                    

                if($record->costo_unitario_vendita_netto !=$post['costo_unitario_netto_vendita'] OR $record->costo_unitario_vendita_lordo !=$post['costo_unitario_lordo_vendita'] ){


                    $prodotti_costi_vendita_model->where('id_prodotti',$id)->delete();

                    $value_prodotti_costi_vendita= [
                                                        'id_prodotti'=>$id,
                                                        'costo_unitario_netto' => $post['costo_unitario_netto_vendita'],
                                                        'costo_unitario_lordo' => $post['costo_unitario_lordo_vendita'],
         


                                                    ];


                    $prodotti_costi_vendita_model->insert($value_prodotti_costi_vendita);

                }

        

            if($res) {

                 

                session()->setFlashdata('gestisciRecordOK', 'Modifica correttamente effettuata');

                return redirect()->to('/admin_Prodotti/lista_completa/');


            }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Modifica ');

                return redirect()->to('/admin_Prodotti/lista_completa/');

            }
                           

        }else{

            $data['validation'] = $validation;



        }
    }

    if (!isset($data['messaggi_errore']) AND !isset($data['messaggi_ok'])) {

      echo view('empty_view',$data);
      echo view('admin/prodotti/modifica_prodotti');

    }

}//fine modifica


       

    public function visualizzaRecord($id){
    
		$data['title'] = $this->data_title;


        $prodotti_model = new ProdottiModel();




        $record=$prodotti_model->find($id) ;


        $data['record']=$record;

        echo view('empty_view',$data);
        echo view('admin/prodotti/visualizza_prodotti',$data);


    }//fine visualizza





    public function eliminarecord($id){

        $prodotti_model = new ProdottiModel();



        $res=$prodotti_model->delete($id);


        $data['res']=$res;




        if($res){

            

            session()->setFlashdata('gestisciRecordOK', 'Eliminazione correttamente effettuata');

            return redirect()->to('/admin_Prodotti/lista_completa/');


            

        }else{

				session()->setFlashdata('gestisciRecordBad', ' Problemi Eliminazione ');

                return redirect()->to('/admin_Prodotti/lista_completa/');

        }

    }//fine delete



    public function attivaRecord($id){

        $prodotti_model = new ProdottiModel();


        //recupero il record



        $data =[
                    'attivo'=>1,
        ];

        $res=$prodotti_model->update($id,$data);

        $data['res']=$res;

            if($res){


				session()->setFlashdata('gestisciRecordOK', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Prodotti/lista_completa/');


            

            }else{

				session()->setFlashdata('gestisciRecordBad', 'Attivazione correttamente effettuata');

				return redirect()->to('/admin_Prodotti/lista_completa/');

            }

    }

	public function lista_completa(){

        $prodotti_model = new ProdottiModel();
			
        $data['title'] = $this->data_title;
	
	    $data['lista']=$prodotti_model->findAll();

      echo view('empty_view',$data);
      echo view('admin/prodotti/lista_prodotti_ajax');

	}//finer lista completa




	public function lista_attivi(){

        $prodotti_model = new ProdottiModel();

        $data['title'] = $this->data_title;

        $data['lista']=$prodotti_model->where('attivo',1)->findAll();

        echo view('empty_view',$data );
        echo view('admin/prodotti/lista_prodotti',$data);

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
	

        $prodotti_model = new ProdottiModel();


        $totalRecords   = $prodotti_model->select('id')
                                         ->where('deleted_at is NULL')
                                         ->countAllResults();

        ## Total number of records with filtering
        $totalRecordwithFilter = $prodotti_model->select('
					prodotti.id,
					prodotti.nome,
					prodotti.codice,
					prodotti.descrizione,
					prodotti.unita_misura,
                    prodotti.scorta_minima,
					prodotti.iva,
                    prodotti_costi_acquisto.costo_unitario_netto as costo_unitario_acquisto_netto,
                    prodotti_costi_acquisto.costo_unitario_lordo as costo_unitario_acquisto_lordo,
                    prodotti_costi_vendita.costo_unitario_netto as costo_unitario_vendita_netto,
                    prodotti_costi_vendita.costo_unitario_lordo as costo_unitario_vendita_lordo,
					prodotti.created_at,
					prodotti.updated_at,
					prodotti.deleted_at
			')
            ->join('prodotti_costi_acquisto', 'prodotti.id=prodotti_costi_acquisto.id_prodotti')
            ->join('prodotti_costi_vendita', 'prodotti.id=prodotti_costi_vendita.id_prodotti')
            ->where('prodotti_costi_acquisto.deleted_at IS NULL') 
            ->where('prodotti_costi_vendita.deleted_at IS NULL') 			
            ->groupStart() // apro una parentesi 
					->orLike('prodotti.id',$searchValue)
					->orLike('prodotti.nome',$searchValue)
					->orLike('prodotti.codice',$searchValue)
					->orLike('prodotti.descrizione',$searchValue)
					->orLike('prodotti.unita_misura',$searchValue)
                    ->orLike('prodotti.scorta_minima',$searchValue)
                    ->orLike('prodotti.iva',$searchValue)
                    ->orLike('prodotti_costi_acquisto.costo_unitario_netto',$searchValue)
                    ->orLike('prodotti_costi_acquisto.costo_unitario_lordo',$searchValue)
                    ->orLike('prodotti_costi_vendita.costo_unitario_netto',$searchValue)
                    ->orLike('prodotti_costi_vendita.costo_unitario_lordo',$searchValue)
					->orLike('prodotti.created_at',$searchValue)
					->orLike('prodotti.updated_at',$searchValue)
					->orLike('prodotti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->countAllResults();

            
            
        ##  records to show
        $records = $prodotti_model->select('
					prodotti.id,
					prodotti.nome,
					prodotti.codice,
					prodotti.descrizione,
					prodotti.unita_misura,
                    prodotti.scorta_minima,
					prodotti.iva,
                    prodotti_costi_acquisto.costo_unitario_netto as costo_unitario_acquisto_netto,
                    prodotti_costi_acquisto.costo_unitario_lordo as costo_unitario_acquisto_lordo,
                    prodotti_costi_vendita.costo_unitario_netto as costo_unitario_vendita_netto,
                    prodotti_costi_vendita.costo_unitario_lordo as costo_unitario_vendita_lordo,
					prodotti.created_at,
					prodotti.updated_at,
					prodotti.deleted_at,
			')
            ->join('prodotti_costi_acquisto', 'prodotti.id=prodotti_costi_acquisto.id_prodotti')
            ->join('prodotti_costi_vendita', 'prodotti.id=prodotti_costi_vendita.id_prodotti')
            ->where('prodotti_costi_acquisto.deleted_at IS NULL') 
            ->where('prodotti_costi_vendita.deleted_at IS NULL') 
			->groupStart() // apro una parentesi 
					->orLike('prodotti.id',$searchValue)
					->orLike('prodotti.nome',$searchValue)
					->orLike('prodotti.codice',$searchValue)
					->orLike('prodotti.descrizione',$searchValue)
					->orLike('prodotti.unita_misura',$searchValue)
                    ->orLike('prodotti.scorta_minima',$searchValue)
					->orLike('prodotti.iva',$searchValue)
                    ->orLike('prodotti_costi_acquisto.costo_unitario_netto',$searchValue)
                    ->orLike('prodotti_costi_acquisto.costo_unitario_lordo',$searchValue)
                    ->orLike('prodotti_costi_vendita.costo_unitario_netto',$searchValue)
                    ->orLike('prodotti_costi_vendita.costo_unitario_lordo',$searchValue)
					->orLike('prodotti.created_at',$searchValue)
					->orLike('prodotti.updated_at',$searchValue)
					->orLike('prodotti.deleted_at',$searchValue)
			->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            
            
            
        $data = array();


        //print_r($records);
        //die();

        foreach($records as $record ){
        
        
			$rec_id ="<a href='/admin_Prodotti/modificaRecord/".$record->id."'  class='btn btn-primary btn-xs'  title='modifica'><i class='fas fa-pencil-alt'></i></a>
                        <a href='/admin_Prodotti/eliminaRecord/".$record->id."' alt='elimina' class='btn btn-danger btn-xs' onClick='return confirm('Sei sicuro di voler eliminare il record?');' title='elimina'><i class='fas fa-trash-alt'></i></a>" ;


            $data[] = array( 
				"id"=>$rec_id,
				"nome"=>$record->nome,
				"codice"=>$record->codice,
				"descrizione"=>$record->descrizione,
				"unita_misura"=>$record->unita_misura,
                "scorta_minima"=>$record->scorta_minima,
                "iva"=>$record->iva,
                "costo_unitario_acquisto_netto"=>$record->costo_unitario_acquisto_netto,
                "costo_unitario_acquisto_lordo"=>$record->costo_unitario_acquisto_lordo,
                "costo_unitario_vendita_netto"=>$record->costo_unitario_vendita_netto,
				"costo_unitario_vendita_lordo"=>$record->costo_unitario_vendita_lordo,
				"created_at"=>date_local_format_from_iso_completa($record->created_at),
				"updated_at"=>date_local_format_from_iso_completa($record->updated_at),
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
