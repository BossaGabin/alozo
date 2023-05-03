<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){  
        
        $villes = Ville::all();
        $categories = Categorie::all();
        $artisans = Artisan::where('statuts', '=', true)->orderBy("created_at", "desc")->get();
        return view('artisan/artisans', compact("villes", "categories", "artisans"));
        // return view('artisan/artisans', compact("artisans"));
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
        $validateData['role_id'] =2;
        $validateData['user_id'] = Auth::user()->id;
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
        $view_artisans = Artisan::findOrFail($id);        
        $categories = Categorie::all();
        $villes = Ville::all();
        return view('artisan/profil', compact('view_artisans','categories','villes'));
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
        $artisans = Artisan::findOrFail($id);
        $artisans->name = $request->input('name');
        $artisans->phone = $request->input('phone');
        $artisans->adresse = $request->input('adresse');
        $artisans->categorie_id = $request->input('categorie_id');
        $artisans->ville_id = $request->input('ville_id');
        $artisans->save();
        return back();
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
        Artisan::find($id)->delete();
        return  back();
    }
    
    public function welcome(){
        $villes = Ville::all();
        $categories = Categorie::all();
        $artisans = Artisan::orderBy("created_at", "desc")->take(8)->get();
        $annonces = Annonce::orderBy("created_at", "desc")->take(6)->get();
        return view('welcome', compact("villes", "categories", "artisans", "annonces"));
    }

   public function listArtisanByAdmin(){
    $villes = Ville::all();
    $categories = Categorie::all();
    $artisans = Artisan::orderBy("created_at", "desc")->get();
    return view('admin/listeArtisan', compact("villes", "categories", "artisans"));
   }
   public function statuts($id){
    $artisan = DB::table('artisans')->select('statuts')->where('id', '=', $id)->first();

    if ($artisan->statuts == '1') {
        $statuts = '0';
    }else{
        $statuts = '1';
    }
    $values = array('statuts' =>$statuts);
    DB::table('artisans')->where('id',$id)->update($values);
    return back();
   }

   public function count(){

    // $artisans = Artisan::orderBy("created_at", "desc")->take(8)->get();
    $artisans = Artisan::count('*');
    $annonces = Annonce::count('*');
    $users = User::count('*');
    return view('admin/dashboard', compact("artisans","annonces","users"));
   }
}
