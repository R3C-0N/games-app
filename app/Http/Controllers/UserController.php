<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class UserController extends Controller
{
    public static function getAll(){
        return User::all();
    }
    public static function get($id){
        return User::all()->find($id);
    }

    public static function put($id, Request $modif){
        try {
            $user = User::all()->find($id);
            $user->setAttribute('name',$modif->data['name']);
            $user->setAttribute('email',$modif->data['email']);
            //$user->setAttribute('password',$modif->data['password']);
            $user->setAttribute('darkmode',$modif->data['darkmode']);
            $user->save();
            return $user;
        }
        catch (\Exception $e){
            return $e;
        }
    }

    public static function post($id, Request $user){
        $newUser= new User();
        $newUser->setAttribute('name',$user->data['name']);
        $newUser->setAttribute('email',$user->data['email']);
        $newUser->setAttribute('password',$user->data['password']);
        $newUser->save();
        return $newUser;
    }

    public static function delete($id){
        return User::all()->find($id)->delete();
    }
}
