<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
class TutorialController extends Controller
{
    public function create(){

        return view("tutorial.create");
    }

    public function store(Request $request){
        $tutorial = Tutorial::create($request->all());
        
        
        $tutorial->save();

    }
    //
} 
