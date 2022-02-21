<?php

namespace Database\Seeders;

use App\Models\DosenRpl;
use Illuminate\Database\Seeder;

class DosenRplSeeder extends Seeder
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
                'nip' => '197404162000032003',
                'nama_lengkap' => "Umi Sa'adah, S.Kom, M.Kom",
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 7, 2, 2010)),
                'telefon' => '087751654243',
                'foto_dosen' => "Umi Sa'adah, S.Kom, M.Kom.jpg",
            ],
            [
                'nip' => '198603232015042004',
                'nama_lengkap' => "Desy Intan Permatasari, S.Kom., M.Kom.",
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 1, 2, 2022)),
                'telefon' => '08777777',
                'foto_dosen' => "Desy Intan Permatasari, S.Kom., M.Kom..jpg",
            ],
            [
                'nip' => '2000000061',
                'nama_lengkap' => "Fadilah Fahrul Hardiansyah, S.ST., M. Kom.",
                'jenis_kelamin' => 'Laki Laki',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 1, 2, 2022)),
                'telefon' => '0897777',
                'foto_dosen' => "Fadilah Fahrul Hardiansyah, S.ST., M. Kom..jpg",
            ],
            [
                'nip' => '200000052',
                'nama_lengkap' => "Jauari Akhmad Nur Hasim, S.ST., M.Kom.",
                'jenis_kelamin' => 'Laki Laki',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 1, 2, 2022)),
                'telefon' => '0896666',
                'foto_dosen' => "Jauari Akhmad Nur Hasim, S.ST., M.Kom..jpg",
            ],
            [
                'nip' => '198010032015042001',
                'nama_lengkap' => "Irma Wulandari, S.Si., M.Sc.",
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 12, 31, 2021)),
                'telefon' => '0856775',
                'foto_dosen' => "Irma Wulandari, S.Si., M.Sc..jpg",
            ],
            [
                'nip' => '199208022019031013',
                'nama_lengkap' => "Andhik Ampuh Yunanto, S.Kom, M.Kom",
                'jenis_kelamin' => 'Laki Laki',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 1, 2, 2022)),
                'telefon' => '089765444',
                'foto_dosen' => "Andhik Ampuh Yunanto, S.Kom, M.Kom.jpg",
            ],
            [
                'nip' => '023456789012345',
                'nama_lengkap' => "Nailussa`ada, S.ST., M.Tr.Kom.",
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'surabaya',
                'thn_bergabung' => date('Y-m-d', mktime(0, 0, 0, 1, 2, 2022)),
                'telefon' => '0843212121',
                'foto_dosen' => "Nailussa`ada, S.ST., M.Tr.Kom..jpg",
            ],
        ];

        foreach ($datas as $data) {
            DosenRpl::create($data);
        }
    }
}
