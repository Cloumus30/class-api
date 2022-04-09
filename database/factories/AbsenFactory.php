<?php

namespace Database\Factories;

use App\Models\Absen;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Absen::class;
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
            'nama' => $this->faker->asciify('absen ****'),
            'deskripsi' => $this->faker->text(50),
            'kelas_id' => $this->faker->randomElement($kelas_id),
            'guru_id' => $this->faker->randomElement($guru_id),
            'published' => $this->faker->boolean(),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'time_start' => $this->faker->time(),
            'time_end' => $this->faker->time(),    
        ];
    }
}
