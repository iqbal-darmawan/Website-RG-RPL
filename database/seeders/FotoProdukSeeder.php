<?php

namespace Database\Seeders;

use App\Models\FotoProduk;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class FotoProdukSeeder extends Seeder
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
                'produk_id' => 1,
                'foto_produk' => 'WhatsApp Image 2022-01-02 at 19.08.13.jpeg',
            ],
            [
                'produk_id' => 2,
                'foto_produk' => 'WhatsApp Image 2022-01-02 at 19.08.13 (4).jpeg',
            ],
            [
                'produk_id' => 3,
                'foto_produk' => 'WhatsApp Image 2022-01-02 at 19.08.13 (1).jpeg',
            ],
            [
                'produk_id' => 4,
                'foto_produk' => 'WhatsApp Image 2022-01-02 at 19.08.13 (3).jpeg',
            ],
            [
                'produk_id' => 5,
                'foto_produk' => 'WhatsApp Image 2022-01-03 at 00.05.16.jpeg',
            ],

        ];

        foreach ($datas as $data) {
            FotoProduk::create($data);
        }
    }
}
