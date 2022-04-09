<?php

namespace App\Http\Controllers\Guru\Absen;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Models\Absen;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy(Request $request, $uuid){
        try {
            $absen = Absen::byGuru($request->guruId)->where('uuid',$uuid)->first();
            // dd($absen);
            if(!$absen){
                return response()->json([
                    'code' => 400,
                    'message' => 'Absen Tidak Ada',
                ],400);
            }

            $absen->delete();

            return response()->json([
                "code" => 200,
                "message" => "delete success",
                "data" => new AbsenResource($absen),
            ],200);

        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
