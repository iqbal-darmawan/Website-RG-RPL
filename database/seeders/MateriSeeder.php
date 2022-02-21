<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
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
                'nama' => 'People Management',
                'category' => 'apa',
                'deskripsi' => 'Pengembangan Aplikasi People Management dalam Software Development dengan Pendekatan Project Management Antipatterns (People Management Application in Software Development Based on Project Management Antipatterns)',
            ],
        ];

        foreach ($datas as $data) {
            Materi::create($data);
        }
    }
}
