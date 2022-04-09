<?php

namespace App\Http\Middleware;

use App\Models\Siswa;
use Closure;
use Illuminate\Http\Request;

class SiswaAuth
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
            // check if user has logged in
            if(!auth()->user()){
                return response()->json([
                    'code' => 400,
                    'error' => "Not Login",
                ],400);
            }

            $siswa = Siswa::where('account_id',auth()->user()->id)->first();
            // check if user is not siswa
            if(!$siswa){
                return response()->json([
                    'code' => 400,
                    'error' => "Unauthorized",
                ],400);
            }
            // give siswa id through request
            $request->siswaId = $siswa->id;
            return $next($request);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
