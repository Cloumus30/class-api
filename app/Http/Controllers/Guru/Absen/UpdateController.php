<?php

namespace App\Http\Controllers\Guru\Absen;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Models\Absen;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
    public function update(Request $request,$uuid){
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
            
            $absen = Absen::where('uuid',$uuid)->byGuru($request->guruId)->first();
            if(!$absen){
                return response()->json([
                    'code' => 400,
                    'message' => 'Absen Tidak Ada',
                ],400);
            }

            $absen->nama = $request->nama;
            $absen->deskripsi = $request->deskripsi;
            $absen->kelas_id = $request->kelas_id;
            $absen->guru_id = $request->guru_id;
            $absen->published = $request->published;
            $absen->date_start = $request->date_start;
            $absen->date_end = $request->date_end;
            $absen->time_start = $request->time_start;
            $absen->time_end = $request->time_end;

            $absen->save();

            return response()->json([
                "code" => 200,
                "message" => "success",
                "data" => new AbsenResource($absen),
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
