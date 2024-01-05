<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;
use App\Models\ClientiModel;

class FullcalendarController extends BaseController
{
    public function __construct()
    {
        helper(["html"]);
    }

    public function index()
    {

        $clienti_model = new ClientiModel();

        $data['note'] = 'Calendario Appuntamenti';

        $data['tutti_id_clienti'] = $clienti_model->findAll();

        return view('/admin/fullcalendar',$data);
    }

    public function loadData()
    {
        $event = new EventModel();
        // on page load this ajax code block will be run
        $data = $event->select(
            '
               
                events.id,
                events.start,
                events.end,
                events.note ,
                events.clienti_id,
                clienti.ragione_sociale as title,

            '
        )
        ->where([
            'start >=' => $this->request->getVar('start'),
            'end <='=> $this->request->getVar('end')
        ])
        ->join('clienti','events.clienti_id=clienti.id')
        ->findAll();

        //log_message('debug','Query :' . $event->getLastQuery());

        return json_encode($data);
    }

    public function ajax()
    {
        $event = new EventModel();

        switch ($this->request->getVar('type')) {

                // For add EventModel
            case 'add':
                $data = [

                    'clienti_id' => $this->request->getVar('clienti_id'),
                    'note' => $this->request->getVar('note'),
                    'start' => $this->request->getVar('start'),
                    'end' => $this->request->getVar('end'),
                ];
                $event->insert($data);
                return json_encode($event);
                break;

                // For update EventModel        
            case 'update':
                $data = [

                    'clienti_id' => $this->request->getVar('clienti_id'),
                    'note' => $this->request->getVar('note'),
                    'start' => $this->request->getVar('start'),
                    'end' => $this->request->getVar('end'),
                ];

                $event_id = $this->request->getVar('id');
                
                $event->update($event_id, $data);


                log_message('debug','Query :' . $event->getLastQuery());

                return json_encode($event);
                break;

                // For delete EventModel    
            case 'delete':

                $event_id = $this->request->getVar('id');

                $event->delete($event_id);

                return json_encode($event);
                break;

            default:
                break;
        }
    }
}