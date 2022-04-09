<?php

namespace Database\Factories;

use App\Models\Siswa;
use App\Models\Tugas;
use App\Models\TugasSiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class TugasSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TugasSiswa::class;
    public function definition()
    {
        $siswas = Siswa::all();
        $siswa_id = [];
        foreach ($siswas as $siswa ) {
            array_push($siswa_id, $siswa->id);
        }

        $tugass = Tugas::all();
        $tugas_id = [];
        foreach ($tugass as $tugas ) {
            array_push($tugas_id, $tugas->id);
        }

        return [
            'uuid' => $this->faker->uuid(),
            'tugas_id' => $this->faker->randomElement($tugas_id),
            'siswa_id' => $this->faker->randomElement($siswa_id),
        ];
    }
}
