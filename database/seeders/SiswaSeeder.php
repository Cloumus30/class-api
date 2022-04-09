<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa= [
            'uuid' => Str::uuid(),
            'nama'=> 'cloudias',
            'foto' => null,
            'account_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' =>Carbon::now()->toDateTimeString(),
        ];
        Siswa::create($siswa);
    }
}
