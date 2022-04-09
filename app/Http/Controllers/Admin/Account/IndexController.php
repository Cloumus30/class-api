<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResource;
use App\Models\Account;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        try {
            $data = Account::all();

            return response()->json([
                "code" => 200,
                "message" => "success",
                "data" => AccountResource::collection($data),
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
