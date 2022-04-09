<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AccountSeeder::class,
            AdminSeeder::class,
            GuruSeeder::class,
            SiswaSeeder::class,
            KelasSeeder::class,
            AbsenSeeder::class,
            TugasSeeder::class,
            AbsenSiswaSeeder::class,
            KelasGuruSeeder::class,
            TugasSiswaSeeder::class,
        ]);
    }
}
