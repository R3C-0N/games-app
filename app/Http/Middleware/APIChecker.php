<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\UserController;

class APIChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (isset($request['userId']) && isset($request['token'])){
            $user = UserController::get($request['userId']);
            $apiToken = $user->getAttribute('api_token');
            if ($apiToken !== $request['token']){
                return Response(null,403);
            }
        } else {
            return Response(null,404);
        }
        return $next($request);
    }
}
