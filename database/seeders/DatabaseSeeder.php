<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DosenRpl;
use App\Models\FileMateri;
use App\Models\Produk;
use App\Models\FotoProduk;
use App\Models\Gallery;
use App\Models\Industri;
use App\Models\JudulPA;
use App\Models\Materi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IndustriSeeder::class,
            GallerySeeder::class,
            DosenRplSeeder::class,
            ProdukSeeder::class,
            FotoProdukSeeder::class,
            JudulPaSeeder::class,
            MateriSeeder::class,
            FileMateriSeeder::class,
        ]);
    }
}
