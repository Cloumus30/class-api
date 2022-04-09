<?php

namespace Database\Seeders;

use App\Models\Tugas;
use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tugas::factory()->count(20)->create();
    }
}
