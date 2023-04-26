<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::all();
        $villes = Ville::all();
        $categories = Categorie::all();
        $artisans = Artisan::orderBy("created_at", "desc")->get();
        return view("artisan/artisans", compact("users","villes", "categories", "artisans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
        $validateData = $request->validate([

            'name' => 'required',
            'adresse' => 'required',
            'phone' => 'required',
            'certificate' => 'required',
            'categorie_id' => 'required',
            'ville_id' => 'required',           
            'ID_number' => 'required',

        ]);
        $artisan = Artisan::create($validateData);       
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
}
