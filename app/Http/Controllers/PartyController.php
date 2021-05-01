<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public static function getAll(){
        return Party::all();
    }

    public static function get($id){
        return Party::all()->find($id);
    }

    public static function put($id, Party $modif){
        $party = Party::all()->find($id);
        $party->setAttribute('game',$modif->getAttribute('game'));
        $party->setAttribute('created_at',$modif->getAttribute('created_at'));
        $party->setAttribute('creator',$modif->getAttribute('creator'));
        $party->setAttribute('link',$modif->getAttribute('link'));
        $party->setAttribute('name',$modif->getAttribute('name'));
        $party->save();
        return $party;
    }

    public static function post($id, Party $party){
        $newParty= new Party();
        $newParty->setAttribute('game',$party->getAttribute('game'));
        $newParty->setAttribute('created_at',$party->getAttribute('created_at'));
        $newParty->setAttribute('creator',$party->getAttribute('creator'));
        $newParty->setAttribute('link',$party->getAttribute('link'));
        $newParty->setAttribute('name',$party->getAttribute('name'));
        $newParty->save();
        return $newParty;
    }

    public static function delete($id){
        return Party::all()->find($id)->delete();
    }
}
