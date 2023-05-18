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
        //DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => 'admin123',
        //]);
    }
}
