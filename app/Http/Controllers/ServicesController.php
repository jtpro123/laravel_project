<?php

namespace App\Http\Controllers;
use App\models\servicesmodel;

use Illuminate\Http\Request;

class ServicesController 
{
    public function index(){
        return view ('Services',
        [
            'services' => servicesmodel::all()
        ]); 
        }    
}
