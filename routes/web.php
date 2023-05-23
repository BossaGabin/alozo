<?php

use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Models\Devis;
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
Route::get('/log', function () {
    return view('connexion');
});
Route::get('/contact', function(){
    return view('contact');
});
// Route::get('/client', function(){
    //     return view('dasboard');
    // });
    
    Route::middleware('auth')->group(function(){
        
    Route::get('/recherche', [ArtisanController::class, 'rechercher'])->name('recherche');
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
    Route::prefix('dashboard')->group(function () {
            // Matches The "/admin/users" URL
            Route::name('dashboard.')->group(function () {
                // Route assigned name "admin.users"...
                Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');
                Route::get('/annonces', [DashboardController::class,'annonces'])->name('annonces');
                Route::get('/devis-recu', [DashboardController::class,'devisRecus'])->name('devis-recu');
                
            });

            Route::resource('devis', DevisController::class)->except(['store']);

    });


    
    Route::post('/devis/{id}', [DevisController::class, 'store'])->name('devis.store');
    // Route::post('/profil', [ArtisanController::class, 'portfolio'])->name('ajout-portfolio');
    Route::post('/upload-image', [ArtisanController::class, 'uploadImage'])->name('upload.image');
    Route::post('/ratings/{id}', [RatingController::class, 'store'])->name('ratings.store');
    Route::resource('users', UserController::class);
    Route::resource('/ratings', RatingController::class)->except((['store']));

    Route::get('/user-annonces', [DashboardController::class,'annonces'])->name('user.annonces');
    Route::get('/user-show', [DashboardController::class,'stats'])->name('user.show');

    Route::get('/admin-update-user/{id}', [UserController::class, 'admin']);
    Route::get('/statuts-update-annonce/{id}', [AnnonceController::class, 'statuts']);
    Route::get('/statuts-update-devis/{id}', [DevisController::class, 'statuts']);
    Route::get('/statuts-update-artisan/{id}', [ArtisanController::class, 'statuts']);
    Route::get('/statuts-verify-artisan/', [ArtisanController::class, 'activate'])->name('artisans.verify');
    Route::get('/dashboard', [ArtisanController::class, 'count'])->name("Dashboard");        
    Route::get('/listeArtisan', [ArtisanController::class, 'listArtisanByAdmin']);
    Route::get('/listeAnnonces', [AnnonceController::class, 'listAnnonceByAdmin']);
    Route::get('/listeArtisan/?decision/{user_id}', [ArtisanController::class, 'activate']);

    Route::get('/tableauDeBord', [DashboardController::class,'count'])->name('admin');

    
        // Route::get('/tableauDeBord', function(){
        //     return view('admin/dashboard');
        // })->name("Dashboard");
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
