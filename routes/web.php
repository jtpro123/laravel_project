<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\_BlogController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Admincontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function(){
    return view('welcome');
});
    
   
Route::get('/', function(){
        return view('index');    
});

Route::get('/services',[ServicesController ::class, 'index'])->name('services.index');
    
Route::get('/blog',[_BlogController ::class, 'index'])->name('blog.index');

Route::resource('/admin',Admincontroller ::class);
    

Route::get('/about', function(){
    return view('about');
    
});
Route::get('/events', function(){
    return view('events');
    
});

Route::get('/contact', function(){
    return view('contact');
    
});
