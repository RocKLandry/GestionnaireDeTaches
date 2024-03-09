<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController; //j'indique le chemin de mon controller 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Pour un projet on cree un 1 seul controler dans lequel on mettra toutes nos fnctins
//Creation d'une route avec la fonction get qui prend en parametre:
//1er: l'URL de la route, 2e : le nom du controller et 3e: une fonction qui 
//fera une action
Route::get('/ajouter',[TacheController::class, 'ajouter_tache']);
Route::post('/ajouter/execution',[TacheController::class, 'ajouter_tache_execution']);
Route::get('/tache',[TacheController::class, 'liste_tache']);
Route::get('/modifier/{id}',[TacheController::class, 'modifier_tache']);
Route::post('/modifier/execution',[TacheController::class, 'modifier_tache_execution']);
Route::get('/supprimer/{id}',[TacheController::class, 'supprimer_tache']);
Route::get('/supprimer/{id}',[TacheController::class, 'supprimer_tache_execution']);

