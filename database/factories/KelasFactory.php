<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid(),
            'nama_kelas' => $this->faker->asciify('kelas *****'),
            'deskripsi' => $this->faker->text(50),
        ];
    }
}
