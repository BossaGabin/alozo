<?php

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
Route::get('/annonces', function(){
    return view('annonces');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/artisans', function(){
    return view('artisans');
});
Route::get('/connexion', function(){
    return view('connexion');
});
Route::get('/inscription', function(){
    return view('inscription');
});
Route::get('/depotAnnonce', function(){
    return view('depotAnnonce');
});
Route::get('/voirAnnonce', function(){
    return view('voirAnnonce');
});
Route::get('/dashboard', function(){
    return view('/admin/dashboard');
})->name("Dashboard");
Route::get('/listeArtisan', function(){
    return view('/admin/listeArtisan');
})->name("Artisan");
Route::get('/listeAnnonces', function(){
    return view('/admin/listeAnnonces');
})->name("Annonce");