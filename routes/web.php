<?php

use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\CategorieController;
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
Route::get('/', [ArtisanController::class, 'welcome']);

Route::get('/contact', function(){
    return view('contact');
});
// Route::get('/dashboard', function(){
//     return view('admin/dashboard');
// })->name("Dashboard");
// Route::get('/listeArtisan', function(){
//     return view('admin/listeArtisan');
// })->name("Artisan");
// Route::get('/listeAnnonces', function(){
//     return view('admin/listeAnnonces');
// })->name("Annonce");

Route::middleware('auth')->group(function(){
    
    Route::resource('artisan', ArtisanController::class);
    Route::resource('annonces', AnnonceController::class);
    Route::get('/categorie/{id}',[ AnnonceController::class, 'byCategorie']);
    Route::get('/profil', function(){
        return view('artisan/profil');
    });
    // Route::get('annonces/',[AnnonceController::class, 'index'])->name('annonces.index');
    // Route::get('annonces/{id}',[AnnonceController::class, 'show'])->name('annonces.show');
    // Route::get('annonces/create',[AnnonceController::class, 'create'])->name('annonces.create');
    // Route::post('annonces/create',[AnnonceController::class, 'store'])->name('annonces.store');
    // Route::get('annonces/edit/{id}',[AnnonceController::class, 'edit'])->name('annonces.edit');
    // Route::put('annonces/edit/{id}',[AnnonceController::class, 'update'])->name('annonces.update');
    // Route::delete('annonces/{id}',[AnnonceController::class, 'destroy'])->name('annonces.destroy');    
    // Route::resources('artisan', ArtisanController::class);
    Route::resource('user', User::class);
    
    
    
    
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
