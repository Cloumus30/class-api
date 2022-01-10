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
            admin_seeder::class,
            guru_seeder::class,
            kelas_seeder::class,
            role_seeder::class,
            siswa_seeder::class,
        ]);
    }
}
