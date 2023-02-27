<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogmodel
{
    public static function all(){
        $blogs = [
            [
                'id'  => '1',
                'blog_title' => 'Easily Grow Your Business Earn More Money',
                'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',

            ],
            [
                'id'  => '2',
                'blog_title' => 'Easily',
                'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',
                
            ],
            [
                'id'  => '3',
                'blog_title' => 'hard',
                'blog_desc' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by 
                injected humour, or randomised words There uffered alteration in some form, by injected humour, or randomised words',
                
            ]

            ];
            return ($blogs);
    }
}
