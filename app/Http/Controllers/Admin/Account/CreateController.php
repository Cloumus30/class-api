<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                "role_uuid" => "required|string",
                "nama" => "required|string",
                "username" => "required|string",
                "password" => "required|string",
            ]);

            if($validator->fails()){
                return response()->json([
                    'code' => 400,
                    'message' => 'Your Request Invalid',
                    'error' => $validator->errors(),
                ],400);
            }


            
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
