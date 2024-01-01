<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProdottiModel;


class Admin extends BaseController
{
    public function test()
    {   
        $prodotti_model = new ProdottiModel();

        $searchValue = '';
        $sorting ='id ASC';
        $rowperpage=100;
        $start =0;

        ##  records to show
        $records = $prodotti_model->select('
                    prodotti.id,
                    prodotti.nome,
                    prodotti.codice,
                    prodotti.descrizione,
                    prodotti.unita_misura,
                    prodotti.scorta_minima,
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
            ->groupStart() // apro una parentesi 
                    ->orLike('prodotti.id',$searchValue)
                    ->orLike('prodotti.nome',$searchValue)
                    ->orLike('prodotti.codice',$searchValue)
                    ->orLike('prodotti.descrizione',$searchValue)
                    ->orLike('prodotti.unita_misura',$searchValue)
                    ->orLike('prodotti.scorta_minima',$searchValue)
                    ->orLike('prodotti.created_at',$searchValue)
                    ->orLike('prodotti.updated_at',$searchValue)
                    ->orLike('prodotti.deleted_at',$searchValue)
            ->groupEnd() // chiudo la parentesi
            ->orderBy($sorting)
            ->findAll($rowperpage, $start);
            

        dd($prodotti_model->getLastQuery());
    }



    public function assegna_permesso($id_user,$permission){

        $users = auth()->getProvider();

        $user = $users->findById($id_user);

        $res = $user->addPermission($permission);

        if($res){

            echo 'permesso settato';

        }else{

            echo 'problema permesso';
        }

    }

    public function controlla_user($id_user){



        print_r($id_user);

    }


}
