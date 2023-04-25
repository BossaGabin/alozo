<?php

use App\Models\Artisan;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;

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

Route::get('/annonces', function(){
    return view('annonce/annonces');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/artisans', function(){
    return view('artisan/artisans');
});

Route::get('/connexion', function(){
    return view('connexion');
});
Route::get('/inscription', function(){
    return view('inscription');
});

Route::get('/voirAnnonce', function(){
    return view('annonce/voirAnnonce');
});
