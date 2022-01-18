<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all();
    
        return view("link.list", ["links"=>$links]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $link = new Link();
       return view("link.create", ["link"=>$link]);

        //
    } 
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {

        
        $request->validate([
            'nome' => 'required',
            'url' => 'required'
        ]);

        //Link::create($request->all());
        $link = new Link;
        $link->nome = $request->nome;
        $link->url = $request->url;
        $link->save();

        return $link;

       //return redirect()->route('links');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Link::find($id);
        return $link;
    
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::find($id);

        return $link;
       
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'url' => 'required'
        ]);

        $link = Link::find($id);
        $link->nome = $request->nome;
        $link->url = $request->url;
        $link->save();
        return $link;

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        

        return $link->delete(); 
        //
    }

    public function linksJson(){

       // $links = '{"link_nome":"Google", "link_url":"www.google.com"}';

        //$links = ['{nome_link: google, url_link: www.google.com }', '{nome_link: bing, url_link: www.bing.com }', '{nome_link: facebook, url_link: www.facebook.com }'];
        
        $links = '{
            "links":[
                {"nome_link": "google", "url_link": "www.google.com" }, 
                {"nome_link": "bing", "url_link": "www.bing.com" },
                {"nome_link": "facebook", "url_link": "www.facebook.com" }

                ] 
            }';
          $links = Link::all();

            return $links;  
    }
}
 