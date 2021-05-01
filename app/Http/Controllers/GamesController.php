<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Party;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public static function getAll(){
        return Games::all();
    }

    public static function get($id){
        return Games::all()->find($id);
    }

    public static function getPartyOfGame($id, $page=1){
        $game = Games::all()->find($id);
        return Party::all()->where('game','=',$game->getAttribute('games_id'));
    }

    public static function put($id, Games $modif){
        $game = Games::all()->find($id);
        $game->setAttribute('name',$modif->getAttribute('name'));
        $game->setAttribute('url',$modif->getAttribute('url'));
        $game->setAttribute('picture',$modif->getAttribute('picture'));
        $game->setAttribute('description',$modif->getAttribute('description'));
        $game->setAttribute('metadata',$modif->getAttribute('metadata'));
        $game->save();
        return $game;
    }

    public static function post($id, Games $game){
        $newGame= new Games();
        $newGame->setAttribute('name',$game->getAttribute('name'));
        $newGame->setAttribute('url',$game->getAttribute('url'));
        $newGame->setAttribute('picture',$game->getAttribute('picture'));
        $newGame->setAttribute('description',$game->getAttribute('description'));
        $newGame->setAttribute('metadata',$game->getAttribute('metadata'));
        $newGame->save();
        return $newGame;
    }

    public static function delete($id){
        return Games::all()->find($id)->delete();
    }
}
