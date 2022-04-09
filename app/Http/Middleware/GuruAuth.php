<?php

namespace App\Http\Middleware;

use App\Models\Guru;
use Closure;
use Illuminate\Http\Request;

class GuruAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            // check user Logged in
            if(!auth()->user()){
                return response()->json([
                    'code' => 400,
                    'error' => "Not Login",
                ],400);
            }

            $guru = Guru::where('account_id',auth()->user()->id)->first();
            // Check if the user not guru
            if(!$guru){
                return response()->json([
                    'code' => 400,
                    'error' => "Unauthorized",
                ],400);
            }
            //give guru id through request
            $request->guruId = $guru->id;
            return $next($request);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
        
    }
}
