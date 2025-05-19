<?php

namespace App\Http\Middleware;

use App\Models\Client;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientAunth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken(),
        $token = Client::where('api_token', $token)->first();
        if(!$client){
            return response()->json([
                 'message'=> 'unathorized'
            ], 401);
           
        }
        return $next($request);
    }
}
