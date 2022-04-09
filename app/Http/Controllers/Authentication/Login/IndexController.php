<?php

namespace App\Http\Controllers\Authentication\Login;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class IndexController extends Controller
{

    public function authenticate(Request $request){
        try {
            
            $validator = Validator::make($request->only('username','password'),[
                "username" => "required",
                "password" => "required",
            ]);

            if($validator->fails()){
                return response()->json([
                    'code' => 400,
                    'error' => $validator->errors()->all(),
                ],400);
            }

            if ($token = auth()->attempt($validator->validated())){
                
                // check if guru

                return response()->json([
                    "code" => 200,
                    "message" => "Login Success",
                    "data" => [
                        "Account" => new AccountResource(auth()->user()),
                        "access_token" => $token,
                        "token_type" => 'bearer',
                        "expires_in" => auth()->factory()->getTTL() * 60 * 60,
                    ],
                ]);
            }

            return response()->json([
                'code' => 401,
                'error' => 'Anda Tidak Punya Otoritas',
            ],401);
            

        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
