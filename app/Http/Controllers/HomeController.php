<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Annonce;
use App\Models\Artisan;
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
        $villes = Ville::all();
        $categories = Categorie::all();
        $artisans =Artisan::where('statuts', '=', true)->orderBy("created_at", "desc")->take(8)->get();
        $annonces = Annonce::where('statuts', '=', true)->orderBy("created_at", "desc")->take(6)->get();
        return view('home', compact('villes','categories','artisans','annonces'));
    }
}
