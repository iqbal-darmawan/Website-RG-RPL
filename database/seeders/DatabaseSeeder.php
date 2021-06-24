<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DosenRpl;
use App\Models\Produk;
use App\Models\FotoProduk;
use App\Models\Gallery;
use App\Models\Industri;

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

        DosenRpl::factory()->count(19)->create();
        Gallery::factory()->count(10)->create();
        Industri::factory()->count(10)->create();
    }
}
