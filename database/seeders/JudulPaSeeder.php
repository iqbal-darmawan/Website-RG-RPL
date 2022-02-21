<?php

namespace Database\Seeders;

use App\Models\JudulPA;
use Illuminate\Database\Seeder;

class JudulPaSeeder extends Seeder
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
                'dosen_id' => 1,
                'industri_id' => 1,
                'nama_judul' => 'Aplikasi Rancang Bangun Research Group',
                'nama_pembimbing' => 'Umi Saadah',
                'deskripsi_judul' => 'aplikasi rancangan bangun research grup adalah aplikasi informasi mengenai research grup',
                'kualifikasi_judul' => 'et',
                'tahun_penawaran' => 2021,

            ],
            [
                'dosen_id' => 1,
                'industri_id' => 1,
                'nama_judul' => 'Aplikasi Rancang Bangun Research Group',
                'nama_pembimbing' => 'Umi Saadah',
                'deskripsi_judul' => 'aplikasi rancangan bangun research grup adalah aplikasi informasi mengenai research grup',
                'kualifikasi_judul' => 'et',
                'tahun_penawaran' => 2021,

            ],
            [
                'dosen_id' => 1,
                'industri_id' => 1,
                'nama_judul' => 'Aplikasi Rancang Bangun Research Group',
                'nama_pembimbing' => 'Umi Saadah',
                'deskripsi_judul' => 'aplikasi rancangan bangun research grup adalah aplikasi informasi mengenai research grup',
                'kualifikasi_judul' => 'et',
                'tahun_penawaran' => 2021,

            ],
        ];

        foreach ($datas as $data) {
            JudulPA::create($data);
        }
    }
}
