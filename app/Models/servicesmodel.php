<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicesmodel 
{
    public static function all(){
        $services = [
            [
               'id' => '1',
                 'services_title' => 'What We Do',
                 'services_desc' =>  'It is a long established fact that a reader will be distracted by the readable content of a page when',
            ],
            [
                'id' => '2',
                'services_title' => 'Selection of Business',
                'services_desc' => 'There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised',
                
            ],
            ['id' => '3',
            'services_title' => 'Selection of Business',
            'services_desc' => 'There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised',
            

        ],
        [
            'id' => '3',
            'services_title' => 'Selection of Business',
            'services_desc' => 'There are many variations of passages of Lorem Ipsum available, but the form, by injected humour, or randomised',
            

            
        ]




        ];
        return ($services);


        
    
    
    
    }   
    
    
    
    
    
    
    
}


        