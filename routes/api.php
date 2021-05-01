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

   // GAMES
    Route::get('/user', [GamesController::class, 'getAll']);
    Route::get('/user/{id}', [GamesController::class, 'get']);

   // PARTY
    Route::get('/user', [PartyController::class, 'getAll']);
    Route::get('/user/{id}', [UserController::class, 'get']);





});
