<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DosenRpl;
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
        Produk::factory()
            ->has(FotoProduk::factory()->count(3), 'fotoproduk')
            ->count(12)
            ->create();
        Industri::factory()
            ->has(JudulPA::factory()->count(3), 'judulpa')
            ->count(12)
            ->create();
        DosenRpl::factory()
            ->has(JudulPA::factory()->count(5), 'judulpa')
            ->count(12)
            ->create();
        Gallery::factory()->count(10)->create();
        Materi::factory()->count(4)->create();
    }
}
