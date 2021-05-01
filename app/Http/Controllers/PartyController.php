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
        return Party::all()->get($id);
    }
}
