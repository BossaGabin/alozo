<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Artisan;
use App\Models\Ratings;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $this->authorize('create', User::class);
        $user = User::all();
         // $artisans = Artisan::withAvg('ratings', 'score')->where('statuts', '=', true)->orderBy("created_at", "desc")->paginate(8);
         $artisans = Artisan::with('ratings')
         ->select('artisans.*')
         ->withAvg('ratings', 'score')
         ->orderByDesc('ratings_avg_score')
         ->paginate(8);
         // return view('artisan/artisans', compact("artisans"));
     
     // return view('artisan/artisans', compact("artisans"));
        $villes = Ville::all();
        $categories = Categorie::all();
        foreach ($artisans as $artisan) {
            $moyenne = Ratings::where('artisan_id', $artisan->id)->avg('score');
            $artisan->moyenne = $moyenne;
        }
        $annonces = Annonce::where('statuts', '=', true)->orderBy("created_at", "desc")->take(3)->get();
        return view('home', compact('villes','categories','artisans','annonces','user'));
    }
}
