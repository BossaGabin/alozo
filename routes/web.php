<?php

use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ArtisanController;
use App\Models\User;
use App\Models\Ville;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [Categorie::class ,'index'] )->name("welcome");
// Route::get('/artisan', [Artisan::class , 'index'] )->name("artisan");


Route::get('/contact', function(){
    return view('contact');
});
// Route::get('/connexion', function(){
//     return view('connexion');
// });
// Route::get('/inscription', function(){
//     return view('inscription');
// });
Route::get('/dashboard', function(){
    return view('admin/dashboard');
})->name("Dashboard");
Route::get('/listeArtisan', function(){
    return view('admin/listeArtisan');
})->name("Artisan");
Route::get('/listeAnnonces', function(){
    return view('admin/listeAnnonces');
})->name("Annonce");

Route::middleware('auth')->group(function(){
    //Les routes GET
    Route::get('/user', function()    {
        $categories = Categorie::all();
        $villes = Ville::all();
        return view('user/accueilUser', compact('categories', 'villes')); 
    });
    Route::get('/artisans', function(){ return view('artisan/artisans');});
    Route::get('/annonces', function(){return view('annonce/annonces');});
    Route::get('/voirAnnonce', function(){return view('annonce/voirAnnonce');});
    Route::get('/artisan', [ArtisanController::class , 'index'] )->name("view_artisan");

    //Les routes POST
    Route::post('/user',[ArtisanController::class, 'store'])->name("create_artisan");;



});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
