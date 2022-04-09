<?php

namespace App\Http\Controllers\Admin\Account\Guru;

use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResource;
use App\Http\Resources\GuruResource;
use App\Models\Account;
use App\Models\Guru;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                "role_uuid" => "required|string",
                "nama" => "required|string",
                "email" => "required|email",
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

            $role = Role::where('uuid',$request->role_uuid)->first();

            DB::beginTransaction();
            $account = Account::create([
                "uuid" => Str::uuid(),
                "username" => $request->username,
                "password" => bcrypt($request->password),
            ]);

            $guru = Guru::create([
                "uuid" => Str::uuid(),
                "nama" => $request->nama,
                "email" => $request->email,
                "foto" => $request->foto ?? null,
                "account_id" => $account->id,
            ]);

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Success',
                'account' => new AccountResource($account),
                'data' => new GuruResource($guru),
            ]);

            
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
