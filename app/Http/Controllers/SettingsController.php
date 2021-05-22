<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function settings(Request $request)
    {
        //return Response(json_encode($request->session()));
//        $errors=array(
//            'name' => false,
//            'email' => false,
//            'password' => false,
//        );
//        if ($request->hasheader('errors')){
//            $errors=$request->header('errors');
//        }
        return view('auth.settings');
    }
    public function updateAccount(Request $request)
    {
        $errors = array();
        $name=$request->get('name');
        $email=$request->get('email');
        $password=$request->get('password');

        $user=Auth::user();
        if ($user===null){
            return redirect('home');
        }

        if ($user->name !== $name && $name!==null){
            $user->name = $name;
        }
        if ($user->email !== $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $email!==null){
            $user->email = $email;
        }
        if (!password_verify($password, $user->getAuthPassword()) && $password!==null){
            $user->password = $password;
        }

    if ($errors!==array()){

        }
        $user->save();
        return redirect('settings');
    }
    public function deleteAccount(Request $request)
    {
        $validate = $request->validate([
            'passwordDel' => 'required|string',
            'checkDel' => 'required|true',
            'textDel' => 'required|string',
        ]);
        __('Cocher et écrivez "Je confirme !"');
        return redirect('settings');
    }

}
