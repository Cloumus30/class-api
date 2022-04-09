<?php

namespace Database\Seeders;

use App\Models\KelasGuru;
use Illuminate\Database\Seeder;

class KelasGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KelasGuru::factory()->count(2)->create();
    }
}
