<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
class TutorialController extends Controller
{
    public function index(){
        $tutoriais = Tutorial::all();
        return view("tutorial.index", ["tutoriais"=>$tutoriais]);
    }
    public function create(){
        $tutorial = new Tutorial();
        return view("tutorial.create", ["tutorial"=>$tutorial]);
        
    }

    public function store(Request $request){
        $tutorial = Tutorial::create($request->all());
        
        
        $tutorial->save();

        return  redirect()->route('tutorial');

    }
    public function show($id){
        $tutorial = Tutorial::find($id);
        return view("tutorial.show", ["tutorial"=>$tutorial]);
    }
    public function edit ($id){
        $tutorial = Tutorial::find($id);
        return view("tutorial.create", ["tutorial"=>$tutorial]);
    }
    public function update (Request $request, $id){
        $tutorial = Tutorial::find($id);
        $tutorial->titulo = $request->titulo;
        $tutorial->texto = $request->texto;
        $tutorial->save();
        return  redirect()->route('tutorial');
    }
    public function destroy ($id){
        $tutorial = Tutorial::find($id);
       $tutorial->delete();
        return  redirect()->route('tutorial');
    }
    //
} 
