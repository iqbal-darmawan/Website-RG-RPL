<?php

namespace Database\Factories;

use App\Models\JudulPA;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class JudulPAFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JudulPA::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_judul' => $this->faker->jobTitle(),
            'nama_pembimbing' => $this->faker->name(),
            'deskripsi_judul' => $this->faker->paragraph(),
            'kualifikasi_judul' => $this->faker->word(),
            'tahun_penawaran' => $this->faker->year(),
        ];
    }
}
