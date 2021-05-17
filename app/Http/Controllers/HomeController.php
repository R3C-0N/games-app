<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user() !== null){
            $user = Auth::user();
            $token = csrf_token();
            if ($user['api_token'] !== $token){
                $user = UserController::get($user['id']);
                $user->setAttribute('api_token', $token);
                $user->save();
            }
        }
        return view('home', ['games' => GamesController::getAll()]);
    }
}
