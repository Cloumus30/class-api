<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class guru_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Guru::create([
            'nama'=>'guru 1',
            'username' => 'guru1',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('guru'),
            'foto' => null,
            'role_id' => 1
        ]);
    }
}
