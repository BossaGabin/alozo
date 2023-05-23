<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\Devis;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //


    public function stats(){
        
        $nombreAnnonces = Annonce::where('user_id','=', Auth::user()->id)->count();
        $devisRecus = Devis::join('annonces','annonces.id','=','devis.annonces_id')->where('user_id',Auth::user()->id);
        $devisEnvoyes = Devis::where('artisans_id',Auth::user()->id);
        $nombreDevisValide = $devisRecus->where('devis.statut', 1)->count();
        $villes = Ville::all();
        $categories = Categorie::all();
        
        if(Auth::user()->role_id == 3){
            $nombreDevis = $devisRecus->count();
            $nombreDevisAttente = $devisRecus->where('devis.statut', 0)->count();
            return view('user.user-show', compact("nombreAnnonces","nombreDevis","nombreDevisAttente","nombreDevisValide","categories","villes"));
        }
        else{
            $nombreDevisRecus = $devisRecus->count();
            $nombreDevisEnvoyes = $devisEnvoyes->count();
            $nombreDevis = $nombreDevisRecus + $nombreDevisEnvoyes;
            return view('user.user-show', compact("nombreAnnonces","nombreDevis","nombreDevisRecus","nombreDevisEnvoyes","nombreDevisValide","categories","villes"));
        }
        // dd($nombreDevis);
    }

    public function annonces(){

        $nombreAnnonces = Annonce::where('user_id','=', Auth::user()->id)->count();
        $annonces = Annonce::where('user_id','=', Auth::user()->id)->paginate(6);
        $categories = Categorie::all();
        $villes = Ville::all();
        return view('user.user-annonces', compact("annonces","categories","villes","nombreAnnonces"));
    }
    public function devisRecus(){
        $devisRecus = Devis::join('annonces','annonces.id','=','devis.annonces_id')->where('user_id',Auth::user()->id)->get();
        // dd($devisRecus);
        return view('user.devis-recus', compact("devisRecus"));
    }
    public function count(){
        $artisans = Artisan::all()->count();
        $annonces = Annonce::all()->count();
        $users = User::all()->count();
        $devis = Devis::all()->count();
        // dd($devis);
        return view('admin/dashboard', compact("artisans","annonces","users","devis"));
    }

}
