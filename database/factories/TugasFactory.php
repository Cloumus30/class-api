<?php

namespace Database\Factories;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class TugasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
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
            'nama' => $this->faker->asciify('tugas *****'),
            'deskripsi' => $this->faker->text(50),
            'link' => $this->faker->url(),
            'nilai' => $this->faker->numberBetween(0,100),
            'selesai' => $this->faker->boolean(),
            'available' => $this->faker->boolean(),
            'kelas_id' => $this->faker->randomElement($kelas_id),
            'guru_id' => $this->faker->randomElement($guru_id),
            'start_at' => $this->faker->dateTime(),
            'end_at' => $this->faker->dateTime(),

        ];
    }
}
