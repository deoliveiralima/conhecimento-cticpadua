<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
class TutorialController extends Controller
{
    public function index(){
        
    }

    public function list(){
        $tutoriais = Tutorial::all();
        return $tutoriais;
    }
    public function create(){
        $tutorial = new Tutorial();
        return view("tutorial.create", ["tutorial"=>$tutorial]);
        
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);
        $tutorial = new Tutorial();
        $tutorial->titulo = $request->title;
        $tutorial->texto = $request->text; 
        
        
        $tutorial->save();

        return $tutorial;

    }
    public function show($id){
        $tutorial = Tutorial::find($id);
        return $tutorial;
    }
    public function edit ($id){
        $tutorial = Tutorial::find($id);
        return $tutorial;
    }
    public function update (Request $request, $id){
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        $tutorial = Tutorial::find($id);
        $tutorial->titulo = $request->title;
        $tutorial->texto = $request->text;
        $tutorial->save();
        return  $tutorial;
    }
    public function destroy ($id){
        $tutorial = Tutorial::find($id);
        return ($tutorial->delete());
         
    }
    //
} 
