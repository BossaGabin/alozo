<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Artisan;
use App\Models\ArtisanHasFile;
use App\Models\Ratings;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use RealRashid\SweetAlert\Facades\Alert;

class ArtisanController extends Controller
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
        $artisans = Artisan::where('statuts', '=', true);
        if ($request->filled('categorie') && $request->filled('ville_id')) {

            $categorieId  = (int)$request->categorie;

            $villeId = (int)$request->ville_id;

            $artisans = $artisans->where('ville_id', $villeId)->where('categorie_id', $categorieId);
        } elseif ($request->filled('categorie')) {

            $categorieId  = (int)$request->categorie;
            $artisans = $artisans->where('categorie_id', $categorieId);
        } elseif ($request->filled('ville_id')) {

            $villeId = (int)$request->ville_id;
            $artisans = $artisans->where('ville_id', $villeId);
        }
        // elseif ($request->filled('ville_id') && $request->filled('categorie','=', 'all')){

        //     $villeId = (int)$request->ville_id;
        //     $artisans = Artisan::where('ville_id', $villeId)->where('statuts', '=', true)->get();
        // }

        else {

            // $artisans = Artisan::withAvg('ratings', 'score')->where('statuts', '=', true)->orderBy("created_at", "desc")->paginate(8);
            $artisans = $artisans->with('ratings')
                ->select('artisans.*')
                ->withAvg('ratings', 'score')
                ->orderByDesc('ratings_avg_score');
            // return view('artisan/artisans', compact("artisans"));
        }
        $artisans = $artisans->paginate(8);
        // return view('artisan/artisans', compact("artisans"));
        $villes = Ville::all();
        $categories = Categorie::all();
        foreach ($artisans as $artisan) {
            $moyenne = Ratings::where('artisan_id', $artisan->id)->avg('score');
            $artisan->moyenne = $moyenne;
        }

        return view('artisan/artisans', compact("categories", "villes", "artisans", "categorieId", "villeId"));
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
            Alert::success('Succès!', "Opération réussie");
            return back();
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
        $artisan = Artisan::findOrFail($id);
        // dd($artisans);    
        $categories = Categorie::all();
        $villes = Ville::all();
        // $ratings = $artisan->rating;
        // dd($ratings);
        return view('artisan/profil', compact('artisan', 'categories', 'villes'));
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
        Artisan::find($id)->delete();
        Alert::success('Succès!', "Opération réussie");
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
        if (Auth::user()->role_id != 1) abort(403);

        $artisan = Artisan::findOrFail($request->artisanId);

        if ($artisan && ($request->decision == 'approuver' || $request->decision == 'Rejeter')) {
            if ($request->decision == 'approuver') {

                $artisan->verified = true;
                $artisan->statuts = true;
                $artisan->save();
                $users = User::find($artisan->user_id);
                $users->role_id = 2;
                $users->save();
               Alert::success('Succès!', "Le compte artisan approuvé");
                return back();
            } else {
                // dd('ici');
                $artisan->delete();
               Alert::success('Succès!', "Le compte artisan rejeté");
                return back();
            }

            return back();
        } else abort(404);

        return  back();
    }

    public function welcome()
    {
        $villes = Ville::all();
        $categories = Categorie::all();
        // $artisans = Artisan::withAvg('ratings', 'score')->where('statuts', '=', true)->orderBy("created_at", "desc")->paginate(8);
        $artisans = Artisan::with('ratings')
            ->select('artisans.*')
            ->withAvg('ratings', 'score')
            ->orderByDesc('ratings_avg_score')
            ->paginate(8);
        $villes = Ville::all();
        $categories = Categorie::all();
        foreach ($artisans as $artisan) {
            $moyenne = Ratings::where('artisan_id', $artisan->id)->avg('score');
            $artisan->moyenne = $moyenne;
        }
        $annonces = Annonce::where('statuts', true)->orderBy("created_at", "desc")->take(3)->get();
        return view('welcome', compact("villes", "categories", "artisans", "annonces"));
    }

    public function listArtisanByAdmin()
    {

        $villes = Ville::all();
        $categories = Categorie::all();
        $artisans = Artisan::orderBy("created_at", "desc")->get();
        // dd($artisans);
        return view('admin/listeArtisan', compact("villes", "categories", "artisans"));
    }

    public function statuts($id)
    {
        $artisan = DB::table('artisans')->select('statuts')->where('id', '=', $id)->first();

        if ($artisan->statuts == true) {
            $statuts = false;
        } else {
            $statuts = true;
            // Artisan::find($id)->delete();
        }
        $values = array('statuts' => $statuts);
        DB::table('artisans')->where('id', $id)->update($values);
        return back();
    }

    public function count()
    {
        $artisans = Artisan::count();
        $annonces = Annonce::count();
        $users = User::count();
        return view('admin/dashboard', compact("artisans", "annonces", "users"));
    }

    public function rechercher(Request $request)
    {
        $villes = $request->input('villes');
        $categories = $request->input('categories');
        $name = $request->input('name');

        $artisans = Artisan::where('statuts', true);

        if (!empty($villes)) {
            $artisans->where('ville_id','=',$villes);
        }
        if (!empty($categories)) {
            $artisans->where('categorie_id','=',$categories);
        }
        if (!empty($name)) {
            $artisans->where(function ($req) use ($name) {
                $req->where('name', 'LIKE', '%' . $name . '%')
                    ->orWhere('phone', 'LIKE', '%' . $name . '%')
                    ->orWhere('adresse', 'LIKE', '%' . $name . '%');
            });
        }
        if (empty($villes) && empty($categories) && empty($name)) {
            // Afficher tous les artisans
            // $artisans = Artisan::all();
              // $artisans = Artisan::withAvg('ratings', 'score')->where('statuts', '=', true)->orderBy("created_at", "desc")->paginate(8);
              $artisans = $artisans->with('ratings')
              ->select('artisans.*')
              ->withAvg('ratings', 'score')
              ->orderByDesc('ratings_avg_score');
          // return view('artisan/artisans', compact("artisans"));
          $artisans = $artisans->paginate(8);
          // return view('artisan/artisans', compact("artisans"));
          $villes = Ville::all();
          $categories = Categorie::all();
          foreach ($artisans as $artisan) {
              $moyenne = Ratings::where('artisan_id', $artisan->id)->avg('score');
              $artisan->moyenne = $moyenne;
          }
        }
        else
          {  $artisans = $artisans->get();
                // dd($artisans);
         }
         return view('artisan.recherche', ['artisans' => $artisans]);
    }
    public function uploadImage(Request $request)
    {
        // Valider le formulaire
        $request->validate([
            'images.*' => 'required|image|max:2048', // Limite la taille de chaque image à 2 Mo (2048 Ko)
        ]);

        // Récupérer l'ID de l'artisan
        $artisanId = Auth::user()->artisan->id; // Supposons que l'artisan soit authentifié
        // $artisanId = Auth::user()->artisan->id; // Supposons que l'artisan soit authentifié

        // Parcourir chaque fichier téléchargé
        foreach ($request->file('images') as $image) {
            // Enregistrer l'image dans un dossier de stockage (par exemple, "storage/app/public/images")
            $path = $image->store('public/images');

            // Créer un enregistrement dans la table artisanHasFile pour associer l'image à l'artisan
            ArtisanHasFile::create([
                'artisan_id' => $artisanId,
                'path' => $path,
            ]);
        }
        // Rediriger ou afficher un message de confirmation
        return redirect()->back()->with('success', 'Images téléchargées avec succès.');
    }
}
