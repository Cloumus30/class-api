<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nama'=> 'cloudias',
            'username' => 'cloudias',
            'password' => Hash::make('cloudias'),
            'foto' => null,
            'role_id' => 2,
        ]);
    }
}
