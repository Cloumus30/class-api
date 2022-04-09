<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuruResource;
use App\Models\Account;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Ambil Semua Data Guru dari Database
     */
    public function index(){
        try {
            $guru = Guru::all();

            return response()->json([
                'code' => 200,
                'message' => 'success get data',
                'data' => GuruResource::collection($guru),
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'message' => 'there is a problem',
                'error' => $th->getMessage(),
            ],400);
        }
    }

    /**
     * Menambahkan Data Guru ke Dalam Database
     */
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                "nama" => "required|string",
                'email' => 'required|string|email|unique:accounts,email',
                "username" => "required|string|unique:accounts,username",
                "password" => "required|string",
            ]);

            if($validator->fails()){
                return response()->json([
                    'code' => 400,
                    'message' => 'Your Request Invalid',
                    'error' => $validator->errors()->all(),
                ],400);
            }

            DB::beginTransaction();
            $account = Account::create([
                "uuid" => Str::uuid(),
                "username" => $request->username,
                'email' => $request->email,
                "password" => bcrypt($request->password),
            ]);

            $guru = Guru::create([
                "uuid" => Str::uuid(),
                "nama" => $request->nama,
                "foto" => $request->foto ?? null,
                "account_id" => $account->id,
            ]);

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Success',
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

    /**
     * Update Data Guru Di Database
     */
    public function update(Request $request,$uuid){
        try {
            $validator = Validator::make($request->all(),[
                "nama" => "required|string",
                'email' => 'required|string|email|unique:accounts,email',
                "username" => "required|string|unique:accounts,username",
                "password" => "required|string",
            ]);

            if($validator->fails()){
                return response()->json([
                    'code' => 400,
                    'message' => 'Your Request Invalid',
                    'error' => $validator->errors()->all(),
                ],400);
            }

            $guru = Guru::where('uuid',$uuid)->first();
            if(!$guru){
                return response()->json([
                    'code' => 400,
                    'message' => 'guru not found',
                    'error' => 'Guru Tidak Ditemukan',
                ],400);
            }

            $account = Account::find($guru->account_id);
            if(!$account){
                return response()->json([
                    'code' => 400,
                    'message' => 'Account not found',
                    'error' => 'Account Tidak Ditemukan',
                ],400);
            }

            DB::beginTransaction();
            $guru->nama = $request->nama;
            $guru->foto = $request->foto;

            $guru->save();

            $account->username = $request->username;
            $account->email = $request->email;

            $account->save();

            DB::commit();

            return response()->json([
                'code' => 200,
                'message' => 'Success',
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
