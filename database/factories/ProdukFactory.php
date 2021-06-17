<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    public $model = Produk::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'nama_produk' => 'Project '. $this->faker->jobTitle(),
            'nama_tim' => $this->faker->streetName(),
            'deskripsi_produk' => $this->faker->sentences(3, true),
        ];
    }
}
