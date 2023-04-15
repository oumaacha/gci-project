<?php

use App\Http\Controllers\ProduitCotroller;
use Illuminate\Support\Facades\Route;



Route::get('/produits',[ProduitCotroller::class,'lsProduits'])->name('produits');
Route::get('/produit/{id}',[ProduitCotroller::class,'lsOneProduit'])->name('produit');
Route::get('/prod/ajoutform',[ProduitCotroller::class,'ajoutForm'])->name('ajoutform');
Route::post('/prod/ajouter',[ProduitCotroller::class,'ajouterProduit'])->name('ajouterproduit');
Route::get('/prod/supprimer/{id}',[ProduitCotroller::class,'supprimerProduit'])->name('deleteproduit');
Route::get('/prod/chercher',[ProduitCotroller::class,'chercherProduit'])->name('chercherproduit');
Route::get('/prod/modifierform/{id}',[ProduitCotroller::class,'modifierProduitForm'])->name('modifierproduitform');
Route::post('/prod/modifier/{id}',[ProduitCotroller::class,'modifierProduit'])->name('modifierproduit');
Route::get('/prod/vendre',[ProduitCotroller::class,'ventePage'])->name('vendre');
