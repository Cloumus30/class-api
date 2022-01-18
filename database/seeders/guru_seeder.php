<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'uuid' => Str::uuid(),
            'nama'=>'guru 1',
            'email' => 'guru@gmail.com',
            'foto' => null,
            'account_id' => 2
        ]);
    }
}
