<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\KelasGuru;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasGuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = KelasGuru::class;
    public function definition()
    {
        $kelass =Kelas::all();
        $kelas_id = [];
        foreach ($kelass as $kelas ) {
            array_push($kelas_id,$kelas->id);
        }

        $gurus = Guru::all();
        $guru_id = [];
        foreach ($gurus as $guru) {
            array_push($guru_id,$guru->id);
        }

        return [
            'uuid' => $this->faker->uuid(),
            'kelas_id' => $this->faker->randomElement($kelas_id),
            'guru_id' => $this->faker->randomElement($guru_id),
        ];
    }
}
