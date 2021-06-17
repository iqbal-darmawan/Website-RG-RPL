<?php

namespace Database\Factories;

use App\Models\FotoProduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class FotoProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FotoProduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'foto_produk' => $this->faker->imageUrl(1280, 720, 'Foto')
        ];
    }
}
