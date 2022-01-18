<?php

namespace App\Http\Controllers\Authentication\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function logout(){
        try {
            auth()->logout();

            return response()->json([
                'code' => 200,
                'message' => 'Berhasil Logout',
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],401);
        }
        
    }
}
