<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function displayAll(){
        $games = Games::all();
        return view('home', ['games' => $games]);
    }
}
