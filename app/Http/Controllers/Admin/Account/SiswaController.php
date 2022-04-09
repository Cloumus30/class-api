<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Resources\SiswaResource;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Ambil Semua Data Siswa Dari Database
     */
    public function index(Request $request){
        try {
            $siswa = Siswa::all();

            return response()->json([
                'code' => 200,
                'message' => 'succesfull get data',
                'data' => SiswaResource::collection($siswa),
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }

    /**
     * Menambahkan Data Siswa Ke dalam Database
     */
    public function store(Request $request){
        try {
            //code...
        } catch (\Throwable $th) {
            return response()->json([
                'code' => 400,
                'error' => $th->getMessage(),
            ],400);
        }
    }
}
