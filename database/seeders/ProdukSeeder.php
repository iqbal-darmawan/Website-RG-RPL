<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
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
                'nama_produk' => 'ITCompetion',
                'nama_tim' => 'ITION',
                'deskripsi_produk' => 'ITION atau IT Competition merupakan website yang dibuat sebagai project mata kuliah Workshop Produksi Perangkat Lunak Tahun 2021. Website ini bertujuan guna membantu mahasiswa khususnya Teknik Informatika dalam mendapatkan informasi lomba di bidang IT.',
            ],
            [
                'nama_produk' => 'RG RPL',
                'nama_tim' => 'LIZAN',
                'deskripsi_produk' => 'Sebuah wadah untuk memberikan informasi mengenai profile dan kegiatan RG RPL. Meliputi profile dosen RG RPL terkait penelitian dan pengabdian, dokumentasi karya, kerjasama industri, penawaran judul PA, materi  seputar RPL lainnya.',
            ],
            [
                'nama_produk' => 'JobIT',
                'nama_tim' => 'A1',
                'deskripsi_produk' => 'Sebuah website yang berfokus pada pencarian pekerjaan bidang IT',
            ],
            [
                'nama_produk' => 'iDo',
                'nama_tim' => 'B1',
                'deskripsi_produk' => 'website mengenai to do list yang akan kita lakukan',
            ],
            [
                'nama_produk' => 'DTIK Fest',
                'nama_tim' => 'B2',
                'deskripsi_produk' => 'DTIK Fest adalah kegiatan yang diselenggarakan secara virtual oleh Departemen Teknik Informatika dan Komputer (ITCE) sebagai sarana apresiasi kepada mahasiswa yang telah menyalurkan ide kreatifnya.',
            ],
        ];

        foreach ($datas as $data) {
            Produk::create($data);
        }
    }
}
