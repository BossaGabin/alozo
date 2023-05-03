<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\AnnonceHasFile;
use App\Models\Annonces_has_file;
use Illuminate\Support\Facades\DB;

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
        $annonces = Annonce::where('statuts', '=', true)->orderBy("created_at", "desc")->take(6)->get();
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
        
        // $filename = time(). '.' .$request->picture->extension();
        // // dd($filename);
        // $path = $request->file('picture')->storeAs(
        //     'ImagesAnnoncs',
        //     $filename,
        //     'public'            
        // );
        $annonce = Annonce::create($validateData);
        // $picture = new AnnonceHasFile();
        // $picture->path = $path;
        // $annonce->picture()->save($picture);
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
        $annonce = Annonce::findOrFail($id);
        $annonce->title = $request->input('title');
        $annonce->budget = $request->input('budget');
        $annonce->content = $request->input('content');
        $annonce->categorie_id = $request->input('categorie_id');
        $annonce->deadline = $request->input('deadline');
        $annonce->save();
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
        Annonce::find($id)->delete();
        return  back();
    }
    public function byCategorie($categorie_id){
        $annonces = Annonce::where('categorie_id', '=', $categorie_id)->paginate(5);
        $categories = Categorie::all();
        return view('annonce/annonces', compact('annonces','categories'));
    }
    public function listAnnonceByAdmin(){
        $villes = Ville::all();
        $categories = Categorie::all();
        $annonces = Annonce::orderBy("created_at", "desc")->get();
        return view('admin/listeAnnonces', compact("villes", "categories", "annonces"));
       }
       public function statuts($id){
        $annonce = DB::table('annonces')->select('statuts')->where('id', '=', $id)->first();
    
        if ($annonce->statuts == '1') {
            $statuts = '0';
        }else{
            $statuts = '1';
        }
        $values = array('statuts' =>$statuts);
        DB::table('annonces')->where('id',$id)->update($values);
        return back();
    }
}
