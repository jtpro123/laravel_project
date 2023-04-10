<?php

namespace App\Http\Controllers;

use App\Models\blogmodel;
use Illuminate\Http\Request;

class _BlogController 
{
    public function index(){
        return view ('blog',
        [
            'blog' => blogmodel::all()
        ]); 
    }
}
