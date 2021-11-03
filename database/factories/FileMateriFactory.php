<?php

namespace Database\Factories;

use App\Models\FileMateri;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileMateriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FileMateri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $materi = ['RPL', 'WPPL'];
        $r = array_rand($materi);
        return [
            'nama_file' => 'materi-'. rand(0, 4) . '.docx',
            'category' => $materi[$r]
        ];
    }
}
