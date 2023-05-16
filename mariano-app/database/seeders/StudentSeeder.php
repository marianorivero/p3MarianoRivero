<?php

namespace Database\Seeders;
//php artisan make:seeder StudentSeeder
//composer dump-autoload
//php artisan migreate:fresh --seed

// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory(20)->create();

        // DB::table('students')->insert([
        //     'name' => 'Mariano',
        //     'last_name' => 'Rivero',
        //     'dni' => '40635415',
        //     'birthday' => '1997-10-18',
        // ]);
        //
    }
}

