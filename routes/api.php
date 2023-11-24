<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
Route::post('/ajoutProduit', [ProduitsController::class, "ajouterProduit"]);

Route::get('/clients', [ClientsController::class, "liste"]);
Route::get('/clients/{id}', [ClientsController::class, "detail"]);
Route::post('/ajoutClient', [ClientsController::class, "ajouterClient"]);

Route::get('/commandes', [CommandesController::class, "liste"]);
Route::get('/commandes/{id}', [CommandesController::class, "detail"]);
Route::post('/ajoutCommande', [CommandesController::class, "ajouterCommande"]);
Route::get('/commandesClient/{idClient}', [CommandesController::class, "commandesClient"]);
Route::get('/commandesClientProduits/{idClient}', [CommandesController::class, "commandesClientProduits"]);
Route::delete('/supprimerCommande/{idCommande}', [CommandesController::class, "supprimerCommande"]);
