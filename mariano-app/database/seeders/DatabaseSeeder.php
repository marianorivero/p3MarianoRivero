<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        //php artisan migrate:fresh --seed
        // Le digo que use el StudentSeeder
        $this->call([
            StudentSeeder::class,
            // UserSeeder::class,
        ]);

    }
}
