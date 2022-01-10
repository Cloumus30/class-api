<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'nama_role' => 'guru',
        ],);
        Role::create([
            'nama_role' => 'siswa',
        ],);
        Role::create([
            'nama_role' => 'superAdmin',
        ],);
    }
}
