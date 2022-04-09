<?php

namespace Database\Factories;

use App\Models\Absen;
use App\Models\AbsenSiswa;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = AbsenSiswa::class;
    public function definition()
    {
        $absens = Absen::all();
        $absen_id = [];
        foreach ($absens as $absen ) {
            array_push($absen_id,$absen->id);
        }

        $siswas = Siswa::all();
        $siswa_id = [];
        foreach ($siswas as $siswa ) {
            array_push($siswa_id, $siswa->id);
        }

        return [
            'uuid' => $this->faker->uuid(),
            'absen_id' => $this->faker->randomElement($absen_id),
            'siswa_id' => $this->faker->randomElement($siswa_id),
        ];
    }
}
