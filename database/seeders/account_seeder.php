<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class account_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Account::create([
            "uuid" => Str::uuid(),
            "username" => "admin",
            "password" => bcrypt('admin'),
        ]);

        Account::create([
            "uuid" => Str::uuid(),
            "username" => "guru",
            "password" => bcrypt('guru'),
        ]);

        Account::create([
            "uuid" => Str::uuid(),
            "username" => "siswa",
            "password" => bcrypt('siswa'),
        ]);
    }
}
