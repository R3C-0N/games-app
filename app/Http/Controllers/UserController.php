<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public static function getAll(){
        return User::all();
    }
    public static function get($id){
        return User::all()->find($id);
    }

    public static function put($id, User $modif){
        $user = User::all()->find($id);
        $user->setAttribute('name',$modif->getAttribute('name'));
        $user->setAttribute('email',$modif->getAttribute('email'));
        $user->setAttribute('password',$modif->getAttribute('password'));
        $user->save();
        return $user;
    }

    public static function post($id, User $user){
        $newUser= new User();
        $newUser->setAttribute('name',$user->getAttribute('name'));
        $newUser->setAttribute('email',$user->getAttribute('email'));
        $newUser->setAttribute('password',$user->getAttribute('password'));
        $newUser->save();
        return $newUser;
    }

    public static function delete($id){
        return User::all()->find($id)->delete();
    }
}
