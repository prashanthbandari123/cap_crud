<?php

namespace App\Http\Controllers;

use App\Models\Cap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Capcontroller extends Controller
{
    //
    public function new(){
     return view('new');
    }
    public function index(){
        $caps = Cap::all();
      return view ('index',['caps' => $caps]);
    }
    
    public function create(){
        return view('create');
    }
    public function store(Request $request){
    
     $data = $request->validate([
        'name' =>'required',
       'price' =>'required',
        'quality' =>'required',
     ]);

     $cap = Cap::create($data);
     $cap -> name = $request->input('name');
    $cap -> price = $request->input('price');
    $cap -> quality = $request->input('quality');
    $cap -> save();

     return redirect ('/index');
      }


    public function edit($cap){
        $caps = cap::find($cap);
        return view('update',['caps' =>$caps]);
        
       
      }

      public function update(Request $request,$cap){
     
    $caps = Cap::find($cap);
    $caps->name = $request->input('name');
    $caps->price = $request->input('price');
    $caps->quality = $request->input('quality');
    $caps->update();
   return redirect('/index');


      }

      public function delete(cap $cap){
        $cap->delete();
        return Redirect('/index');
      }
    
}
