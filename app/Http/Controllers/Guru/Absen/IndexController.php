<?php

namespace App\Http\Controllers\Guru\Absen;

use App\Http\Controllers\Controller;
use App\Http\Resources\AbsenResource;
use App\Models\Absen;
use App\Models\Guru;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($kelas_uuid){
        try {
            $guru = Guru::where('account_id',auth()->user()->id)->first();
            $absen = Absen::byGuru($guru->id)
            ->whereHas("kelas",function(Builder $query) use($kelas_uuid){
                $query->where('uuid',$kelas_uuid);
            })
            ->get();

            return AbsenResource::collection($absen);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
