<?php

namespace App\Http\Controllers;
use App\Models\blogmodel;


use Illuminate\Http\Request;

class Admincontroller extends Controller
{

    public function index()
    {
        //
        return view('admin.blogtable',['blog' => blogmodel::all()]);
    }

    public function create()
    {
        //
        

        return view('admin.blogcreate');
    }

     
    public function store(Request $request)
    {
        //
        $input = $request->all();
        blogmodel::create($input);
        return redirect('/admin');


    }

    public function show($id)
    {
        //
    }

  
    public function edit( string $id)
    {
        //
        return view('admin.blogedit',['blog' => blogmodel::find($id)]);
    } 

    public function update(Request $request, string $id)
    {
        //
        $blog = blogmodel::find($id);
        $input = $request->all();
        $blog->update($input);
        return redirect('/admin');
    }

  
    public function destroy($id)
    {
        //
        blogmodel::destroy($id);
        return redirect('/admin');
    }
}
