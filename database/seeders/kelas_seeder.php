<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class kelas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kelas::create([
            'nama_kelas' => 'kelas IPA X-Mia 1'
        ]);
    }
}
