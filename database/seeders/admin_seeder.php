<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'nama'=>'admin',
            'username'=>'admin',
            'password' => Hash::make('admin'),
            'foto' => null,
            'role_id' => 3,
        ]);
    }
}
