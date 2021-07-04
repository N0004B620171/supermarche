<?php

use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\ProduitController;
use App\Models\Produit;
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
//offset
//b4
Route::get('/', function () {
    $code = rand(12, 1000000);
    Produit::create(
        [
            'nom' => $code . 'pressea',
            'prix' => '1000',
            'quantiteEnStock' => '152',
            'code' => $code . "produit",
            'couleur' => 'vert',
            'etat' => true,
        ]
    );
   
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");
Route::get('/contact', function () {
    return view('contact');
})->name("contact");
Route::resource('produit', ProduitController::class);
Route::resource('boutique', BoutiqueController::class);
