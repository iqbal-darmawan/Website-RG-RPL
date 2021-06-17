<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\FotoProduk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Produk::factory()
            ->has(FotoProduk::factory()->count(3), 'fotoproduk')
            ->count(12)
            ->create();
        // Produk::factory()->count(15)->create();
    }
}
