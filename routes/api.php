<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\PartyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefi' => 'api'], function () {
   // UTILISATEUR
    Route::get('/user', [UserController::class, 'getAll']);
    Route::get('/user/{id}', [UserController::class, 'get']);
    // Route::put('/user{id}', [UserController::class, 'put']);
    // Route::post('/user/{id}', [UserController::class, 'post']);
    // Route::delete('/user/{id}', [UserController::class, 'delete']);

    // GAMES
    Route::get('/game', [GamesController::class, 'getAll']);
    Route::get('/game/{id}', [GamesController::class, 'get']);
    // Route::put('/game{id}', [GamesController::class, 'put']);
    // Route::post('/game/{id}', [GamesController::class, 'post']);
    // Route::delete('/game/{id}', [GamesController::class, 'delete']);

   // PARTY
    Route::get('/party', [PartyController::class, 'getAll']);
    Route::get('/party/{id}', [PartyController::class, 'get']);
    // Route::put('/party{id}', [PartyController::class, 'put']);
    // Route::post('/party/{id}', [PartyController::class, 'post']);
    // Route::delete('/party/{id}', [PartyController::class, 'delete']);





});
