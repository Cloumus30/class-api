<?php

namespace Database\Seeders;

use App\Models\Absen;
use Illuminate\Database\Seeder;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absen::factory()->count(20)->create();
    }
}
