<?php

namespace Database\Seeders;

use App\Models\Guru;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $guru = [
            'id' => 1,
            'uuid' => Str::uuid(),
            'nama'=>'guru 1',
            'foto' => null,
            'account_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' =>Carbon::now()->toDateTimeString(),
        ];
        Guru::insert($guru);
    }
}
