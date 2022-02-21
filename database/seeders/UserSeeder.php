<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'a',
                'email' => 'a@a',
                'password' => Hash::make('a'),
            ],
        ];

        foreach ($datas as $data) {
            User::create($data);
        }
    }
}
