<?php

namespace Database\Seeders;

use App\Models\AbsenSiswa;
use Illuminate\Database\Seeder;

class AbsenSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AbsenSiswa::factory()->count(20)->create();
    }
}
