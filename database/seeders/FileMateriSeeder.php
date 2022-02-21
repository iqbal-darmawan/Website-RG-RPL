<?php

namespace Database\Seeders;

use App\Models\FileMateri;
use Illuminate\Database\Seeder;

class FileMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'materi_id' => 1,
                'nama_file' => 'People Management',
            ],
        ];

        foreach ($datas as $data) {
            FileMateri::create($data);
        }
    }
}
