<?php

namespace Database\Factories;

use App\Models\DosenRpl;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenRplFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DosenRpl::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kelamin = ['Laki-laki', 'Perempuan'];
        return [
            'nip' => $this->faker->numerify('##################'),
            'nama_lengkap' => $this->faker->firstName(). ' ' . $this->faker->lastName(),
            'jenis_kelamin' => $this->faker->randomElement($kelamin),
            'alamat' => $this->faker->address(),
            'thn_bergabung' => $this->faker->year(),
            'telefon' => '+62 ' . $this->faker->phoneNumber(),
            'foto_dosen' => 'img-'.$this->faker->numberBetween(0, 6).'.jpg',
        ];
    }
}
