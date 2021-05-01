<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public static function getAll(){
        return Games::all();
    }
    public static function get($id){
        return Games::all()->get($id);
    }
    public static function getPartyOfGame($gameId){
        $Game = Games::all()->get($gameId);
        return $Game;
    }
}
