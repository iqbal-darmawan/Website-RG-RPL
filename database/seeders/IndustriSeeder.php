<?php

namespace Database\Seeders;

use App\Models\Industri;
use Illuminate\Database\Seeder;

class IndustriSeeder extends Seeder
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
                'nama_industri' => 'PT Maulidan Kreatif',
                'deskripsi_industri' => 'merupakan perusahan industri yang bergerak di bidang IT',
                'foto_industri' => 'PT Maulidan Kreatif.png',
            ],
            [
                'nama_industri' => '	HIMIT',
                'deskripsi_industri' => 'sebuah himpunan mahasiswa IT',
                'foto_industri' => 'HIMIT.png',
            ],
            [
                'nama_industri' => 'Rasyid Institute',
                'deskripsi_industri' => 'sebuah perusahaan yang bergerak di bidang pendidikan IT',
                'foto_industri' => 'Rasyid Institute.jpg',
            ],
        ];

        foreach ($datas as $data) {
            Industri::create($data);
        }
    }
}
