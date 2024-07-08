<?php

use Illuminate\Http\Request;
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

/* Acceuil */
Route::get('/', function () {
    return view('index');
})->name('index');


/* Sign IN */
Route::get('/signin', function () {
    return view('signin');
})->name('signin');

/* Sign UP */
Route::get('/signup', function () {
    return view('signup');
})->name('signup');


/* Boutique */
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

/* Accès au panier */
Route::get('/panier', function () {
    return view('panier');
})->name('panier');


/* Gestion des produits */
Route::get('/gestionProduit', function () {
    return view('gestionProduit');
})->name('gestionProduit');

/* Gestion des clients */
Route::get('/gestionClient', function () {
    return view('gestionClient');
})->name('gestionClient');


/* RGPD CDV */
Route::get('/conditionVente', function () {
    return view('conditionVente');
})->name('conditionVente');

/* RGPD PDC */
Route::get('/politiqueConfidentialite', function () {
    return view('politiqueConfidentialite');
})->name('politiqueConfidentialite');


/* 
    Je ne sais pas si c'est bon, ça devrait ressembler à ça pour avoir la page d'un produit en particulier
*/
Route::prefix('/produits')->name('detailProduit.')->group(function () {
    /* 
        CECI EST UN EXEMPLE

        Récupérer un produit choisi pour voir son détail
    */
    Route::get('/', function (Request $request) {
        return [
            "link" => \route('detailProduit.show', ['genre' => 'horreur', 'slug' => 'arcane']),
        ];
    })->name('index');

    /* 
        Ajouter des paramètres dans url
        ATTENTION : Les params doivent être dans le bon ordre

        Exemple : http://localhost:8000/produits/horreur/detail-de-mon-premier-produit?id=20
    */
    Route::get('/{genre}/{slug}', function (string $genre, string $slug, Request $request) {
        return [
            "genre" => $genre,
            "titreProduit" => $slug,
            "id" => $request->input('id')
        ];
    })->where([
        'genre' => '[a-z0-9\-]+',
        'slug' => '[a-z0-9\-]+',
        'id' => '[0-9]+'
    ])->name('show');
});


