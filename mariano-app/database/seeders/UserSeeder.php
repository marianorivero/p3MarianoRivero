<?php

namespace Database\Seeders;
//php artisan make:seeder StudentSeeder
//composer dump-autoload
//php artisan migreate:fresh --seed

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'a',
            'email' => 'a@a',
            'password' => bcrypt('a'),
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
    }
}
