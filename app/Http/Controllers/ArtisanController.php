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
use Illuminate\Support\Facades\Gate;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request ){
        $categorieId = '';
        $villeId = '';
        if ($request->filled('drone') && $request->filled('ville_id')) {
            
            $categorieId  = (int)$request->drone;

            $villeId = (int)$request->ville_id;
            
            $artisans = Artisan::where('ville_id', $villeId)->where('categorie_id', $categorieId)->where('statuts', '=', true)->get();
        }elseif ($request->filled('drone')){

            $categorieId  = (int)$request->drone ;
            $artisans = Artisan::where('categorie_id', $categorieId)->where('statuts', '=', true)->get();
        }
        // elseif ($request->filled('ville_id') && $request->filled('drone','=', 'all')){

        //     $villeId = (int)$request->ville_id;
        //     $artisans = Artisan::where('ville_id', $villeId)->where('statuts', '=', true)->get();
        // }
        
        else{

            $artisans = Artisan::where('statuts', '=', true)->orderBy("created_at", "desc")->get();
            // return view('artisan/artisans', compact("artisans"));
        }
        // return view('artisan/artisans', compact("artisans"));
        $villes = Ville::all();
        $categories = Categorie::all();
        return view('artisan/artisans', compact("categories","villes",  "artisans","categorieId","villeId" ));

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
            // 'certificate' => 'required',
            'categorie_id' => 'required',
            'ville_id' => 'required',           
            'ID_number' => 'required',

        ]);

        try {
            // $validateData['role_id'] = 2;
            $validateData['user_id'] = Auth::user()->id;
            $artisan = Artisan::create($validateData);       
            return back()->with('success', "Votre demande a été envoyé");
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate(Request $request)
    {
        if(Auth::user()->role_id != 1) abort(403); 

        $artisan = Artisan::findOrFail($request->artisanId);

        if($artisan && ($request->decision =='approuver' || $request->decision =='Rejeter')){
            if($request->decision =='approuver'){

                $artisan->verified = true;
                $artisan->statuts = true;
                $artisan->save();
                $users = User::find($artisan->user_id);
                $users->role_id = 2;
                $users->save();
                return back()->with('success',"Le compte artisan à été validé");

            } else{
                $artisan->delete();
                return back()->with('success',"La demande à été supprimé");
            }

            return back()->with('success');
        }else abort(404);

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

    if (!Gate::allows('access-admin')) {
        abort('403');
     }
    $villes = Ville::all();
    $categories = Categorie::all();
    $artisans = Artisan::orderBy("created_at", "desc")->get();
    return view('admin/listeArtisan', compact("villes", "categories", "artisans"));
   }

   public function statuts($id){
        $artisan = DB::table('artisans')->select('statuts')->where('id', '=', $id)->first();

        if ($artisan->statuts == true) {
            $statuts = false;
        }else{
            $statuts = true;
            // Artisan::find($id)->delete();
        }
        $values = array('statuts' =>$statuts);
        DB::table('artisans')->where('id',$id)->update($values);
        return back();
   }

   public function count(){

    if (!Gate::allows('access-admin')) {
       abort('403');
    }
    // $artisans = Artisan::orderBy("created_at", "desc")->take(8)->get();
    $artisans = Artisan::count('*');
    $annonces = Annonce::count('*');
    $users = User::count('*');
    return view('admin/dashboard', compact("artisans","annonces","users"));
   }
}
