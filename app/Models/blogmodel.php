<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogmodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title',
        'blog_desc',

    ];
}
