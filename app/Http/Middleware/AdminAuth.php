<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Siswa;
use Closure;
use Illuminate\Http\Request;

class AdminAuth
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
            // check user logged in
            if(!auth()->user()){
                return response()->json([
                    'code' => 400,
                    'error' => "Not Login",
                ],400);
            }

            
            $admin = Admin::where('account_id',auth()->user()->id)->first();
            // check if the user Not Admin            
            if(!$admin){
                return response()->json([
                    'code' => 400,
                    'error' => "Unauthorized",
                ],400);
            }
            // give admin id through request
            $request->adminId = $admin->id;
            return $next($request);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
