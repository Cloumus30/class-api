<?php

namespace App\Http\Controllers\Guru\Absen;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Models\Absen;
use App\Models\Account;
use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    // "uuid",
    // "nama",
    // "deskripsi",
    // "kelas_id",
    // "guru_id",
    // "siswa_id",
    // "available",
    // "start_at",
    // "end_at",
    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                "nama" => "required|string",
                "deskripsi" => "nullable|string",
                "kelas_id" => "required|integer",
                "guru_id" => "required|integer",
                "published" => "required|boolean",
                "date_start" => "required|date",
                "date_end" => "required|date",
                "time_start" => "required",
                "time_end" => "required"
            ]);

            if($validator->fails()){
                return response()->json([
                    'code' => 400,
                    'message' => 'Your Request Invalid',
                    'error' => $validator->errors(),
                ],400);
            }

            

            // jika user adalah siswa
            $siswa = Siswa::where('account_id',auth()->user()->id)->first();
            // dd($siswa);
            if(!is_null($siswa)){
                return response()->json([
                    "code" => 400,
                    "message" => "Siswa tidak punya Hak",
                ],400);
            }

            //jika user adalah admin
            $admin = Admin::where('account_id', auth()->user()->id)->first();
            if(!is_null($admin)){
                return response()->json([
                    "code" => 400,
                    "message" => "Admin tidak punya Hak",
                ],400);
            }
            
            // DB::commit();
            $data = Absen::create([
                "uuid" => Str::uuid(),
                "nama" => $request->nama,
                "deskripsi" => $request->deskripsi,
                "kelas_id" =>$request->kelas_id,
                "guru_id" => $request->guru_id,
                "published" => $request->published,
                "date_start" => $request->date_start,
                "date_end" => $request->date_end,
                "time_start" => $request->time_start,
                "time_end" => $request->time_end,
            ]);

            return response()->json([
                "code" => 200,
                "message" => "success",
                "data" => new AbsenResource($data),
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
