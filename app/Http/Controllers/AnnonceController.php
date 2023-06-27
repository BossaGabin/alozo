<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\AnnonceHasFile;
use App\Models\Annonces_has_file;
use App\Models\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $categorieId = '';
        $villeId = '';
        if ($request->filled('categorie') && $request->filled('ville_id')) {
            
            $categorieId  = (int)$request->categorie;

            $villeId = (int)$request->ville_id;
            
            $annonces = Annonce::where('ville_id', $villeId)->where('categorie_id', $categorieId)->where('statuts', '=', true)->paginate(6);
        }elseif ($request->filled('categorie')){

            $categorieId  = (int)$request->categorie ;
            $annonces = Annonce::where('categorie_id', $categorieId)->where('statuts', '=', true)->paginate(6);
        }
        elseif ($request->filled('ville_id')){

            $villeId = (int)$request->ville_id;
            $annonces = Annonce::where('ville_id', $villeId)->where('statuts', '=', true)->paginate(6);
        }
        
        else{

            // $annonces = Annonce::orderBy("created_at", "desc")->paginate(6);
            $annonces = Annonce::where('statuts', '=', true)->orderBy("created_at", "desc")->paginate(6);
            // return view('artisan/artisans', compact("artisans"));
        }
        // return view('artisan/artisans', compact("artisans"));
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('annonce/annonces', compact("categories","villes",  "annonces","categorieId","villeId" ));        
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
            'ville_id'=>'required',      
            'categorie_id' => ['required'],
        ]);
        
        // $filename = time(). '.' .$request->picture->extension();
        // // dd($filename);
        // $path = $request->file('picture')->storeAs(
        //     'ImagesAnnoncs',
        //     $filename,
        //     'public'            
        // );
        $validateData['user_id'] = Auth::user()->id;
        $annonce = Annonce::create($validateData);
        if($request->filled('images')){
            foreach ($request->file('images') as $image) {
                $path =  Storage::disk('public')->put('annonce', $image);
                // dd($path, $devis->id);
                AnnonceHasFile::create([
                    'path' => $path,
                    'annonce_id' => $annonce->id
                ]);
    
            }
        }

        Alert::success('Succès!', "Opération réussie");
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
        $annonce = Annonce::findOrFail($id);        
        
        $categories = Categorie::all();
        return view('annonce/voirAnnonce', compact('annonce','categories'));
       
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

        Alert::success('Succès!', "Opération réussie");
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
        Alert::success('Succès!', "Opération réussie");
        return  back();
    }
    public function byCategorie($categorie_id){
        $annonces = Annonce::where('categorie_id', '=', $categorie_id)->paginate(5);
        $categories = Categorie::all();
        return view('annonce/annonces', compact('annonces','categories'));
    }
    public function listAnnonceByAdmin(){
        
        // if (!Gate::allows('access-admin')) {
        //     abort('403');
        //  }
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
        Alert::success('Succès!', "Opération réussie");
        return back();
    }
}
