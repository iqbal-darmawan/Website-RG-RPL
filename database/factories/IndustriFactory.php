<?php

namespace Database\Factories;

use App\Models\Industri;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndustriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Industri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_industri' => $this->faker->company(),
            'deskripsi_industri' => $this->faker->paragraph(),
            'foto_industri' => $this->faker->imageUrl(1280, 720),
        ];
    }
}
