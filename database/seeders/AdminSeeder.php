<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = [
            'id' => 1,
            'nama'=>'admin',
            'uuid' => Str::uuid(),
            'foto' => null,
            'account_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' =>Carbon::now()->toDateTimeString(),
        ];
        Admin::insert($admin);
    }
}
