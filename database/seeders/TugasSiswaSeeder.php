<?php

namespace Database\Seeders;

use App\Models\TugasSiswa;
use Illuminate\Database\Seeder;

class TugasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TugasSiswa::factory()->count(20)->create();
    }
}
