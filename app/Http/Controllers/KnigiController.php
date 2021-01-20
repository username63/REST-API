<?php

namespace App\Http\Controllers;

use App\knigi;
use Illuminate\Http\Request;

class KnigiController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('knigi_create');
    }

    
    public function store(Request $request)
    {
        $res=new knigi;
        $res->kniga_name=$request->input('kniga_name');
        $res->avtor_name=$request->input('avtor_name');
        $res->save();

        $request->session()->flash('msg', 'Data submitted');
        return redirect('knigi_show');
    }

    
    public function show(knigi $knigi)
    {
        return view('knigi_show')->with('knigiArr',knigi::all());
    }

    
    public function edit(knigi $knigi,$id)
    {
        return view('knigi_edit')->with('knigiArr',knigi::find($id));
    }

   
    public function update(Request $request, knigi $knigi)
    {
        $res=knigi::find($request->id);
        $res->kniga_name=$request->input('kniga_name');
        $res->avtor_name=$request->input('avtor_name');
        $res->save();

        $request->session()->flash('msg', 'Data updated');
        return redirect('knigi_show');
    }

    
    public function destroy(knigi $knigi,$id)
    {
        knigi::destroy(array('id',$id));

        return redirect('knigi_show'); 
    }
}
