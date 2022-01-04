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
        ]);
        // Produk::factory()
        //     ->has(FotoProduk::factory()->count(3), 'fotoproduk')
        //     ->count(12)
        //     ->create();
        // Industri::factory()
        //     ->has(JudulPA::factory()->count(3), 'judulpa')
        //     ->count(5)
        //     ->create();
        // DosenRpl::factory()
        //     ->has(JudulPA::factory()->count(5), 'judulpa')
        //     ->count(9)
        //     ->create();
        // Gallery::factory()->count(10)->create();
        // Materi::factory()
        //     ->has(FileMateri::factory()->count(1), 'fileMateri')
        //     ->count(6)
        //     ->create();
    }
}
