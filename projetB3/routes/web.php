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

/* Acceuil */
Route::get('/', function () {
    return view('index');
})->name('index');

/* Boutique */
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

/* Accès au panier */
Route::get('/panier', function () {
    return view('panier');
})->name('panier');

/* Login */
Route::get('/login', function () {
    return view('login');
})->name('login');

/* Gestion des produits */
Route::get('/gestionProduit', function () {
    return view('gestionProduit');
})->name('gestionProduit');

/* Gestion des factures */
Route::get('/gestionFacture', function () {
    return view('gestionFacture');
})->name('gestionFacture');