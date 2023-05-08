<?php

use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
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
// */
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ArtisanController::class, 'welcome']);
// Route::get('/', [ArtisanController::class, 'gab']);

Route::get('/contact', function(){
    return view('contact');
});

Route::middleware('auth')->group(function(){
    
    Route::resource('artisans', ArtisanController::class);
    Route::resource('annonces', AnnonceController::class);
    Route::get('/categorie/{id}',[ AnnonceController::class, 'byCategorie']);
    // Route::get('/profil',[ ArtisanController::class, 'profil_artisan']);
    
    // Route::get('annonces/',[AnnonceController::class, 'index'])->name('annonces.index');
    // Route::get('annonces/{id}',[AnnonceController::class, 'show'])->name('annonces.show');
    // Route::get('annonces/create',[AnnonceController::class, 'create'])->name('annonces.create');
    // Route::post('annonces/create',[AnnonceController::class, 'store'])->name('annonces.store');
    // Route::get('annonces/edit/{id}',[AnnonceController::class, 'edit'])->name('annonces.edit');
    // Route::put('annonces/edit/{id}',[AnnonceController::class, 'update'])->name('annonces.update');
    // Route::delete('annonces/{id}',[AnnonceController::class, 'destroy'])->name('annonces.destroy');    
    // Route::resources('artisan', ArtisanController::class);
    Route::resource('users', UserController::class);
    Route::get('/admin-update-user/{id}', [UserController::class, 'admin']);
        
    Route::get('/listeArtisan', [ArtisanController::class, 'listArtisanByAdmin']);
    Route::get('/listeAnnonces', [AnnonceController::class, 'listAnnonceByAdmin']);
    // Route::get('/listeArtisan/?decision/{user_id}', [ArtisanController::class, 'activate']);
    Route::get('/statuts-update-annonce/{id}', [AnnonceController::class, 'statuts']);
    Route::get('/statuts-update-artisan/{id}', [ArtisanController::class, 'statuts']);
    Route::get('/statuts-verify-artisan/', [ArtisanController::class, 'activate'])->name('artisans.verify');
    Route::get('/dashboard', [ArtisanController::class, 'count'])->name("Dashboard");
    
        // Route::get('/dashboard', function(){
        //     return view('admin/dashboard');
        // })->name("Dashboard");
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
