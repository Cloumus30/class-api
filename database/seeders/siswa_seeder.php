<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class siswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::create([
            'uuid' => Str::uuid(),
            'nama'=> 'cloudias',
            'foto' => null,
            'account_id' => 3,
        ]);
    }
}
