<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
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
                'nama' => 'PENS FEST',
                'foto' => 'a.jpg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a2.jpg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a3.jpg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a4.jpg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a5.png',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a6.jpg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a7.jpeg',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a8.png',
            ],
            [
                'nama' => 'PENS FEST',
                'foto' => 'a9.png',
            ],
        ];

        foreach ($datas as $data) {
            Gallery::create($data);
        }
    }
}
