<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Categorie::all();
        $annonces = Annonce::orderBy("created_at", "desc")->get();
        return view("annonce/annonces", compact("categories","annonces"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('annonce/annonces');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'title'=>'required',
            'budget'=>'required',
            'deadline'=>'required',      
            'content'=>'required',      
            'categorie_id' => ['required'],
        ]);
        $annonce = Annonce::create($validateData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $view_annonces = Annonce::findOrFail($id);        
        $categories = Categorie::all();
        return view('annonce/voirAnnonce', compact('view_annonces','categories'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }
    public function byCategorie($categorie_id){
        $annonces = Annonce::where('categorie_id', '=', $categorie_id)->paginate(3);
        $categories = Categorie::all();
        return view('annonce/annonces', compact('annonces','categories'));
    }
}
