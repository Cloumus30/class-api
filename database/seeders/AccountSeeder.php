<?php

namespace Database\Seeders;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account = [
            [
                'id' => 1,
                "uuid" => Str::uuid(),
                "username" => "admin",
                'email' => 'admin@mail.com',
                "password" => bcrypt('admin'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' =>Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 2,
                "uuid" => Str::uuid(),
                "username" => "guru",
                'email' => 'guru@mail.com',
                "password" => bcrypt('guru'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' =>Carbon::now()->toDateTimeString(),
            ],
            [
                'id' => 3,
                "uuid" => Str::uuid(),
                "username" => "siswa",
                'email' => 'siswa@mail.com',
                "password" => bcrypt('siswa'),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' =>Carbon::now()->toDateTimeString(),
            ]
        ];
        

        Account::insert($account);
    }
}
