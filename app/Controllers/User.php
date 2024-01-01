<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function test()
    {
        $data = [];

        echo view('empty_view',$data);
        echo view('/user/test');
    }


    public function sing_in_the_rain()
    {
        $user = auth()->user();


        if (auth()->user()->can('users.ballare')) {

            echo 'Sing in the rain';
        
        }else{

            echo 'go Home!!!';
        }

    }
    
        
}
