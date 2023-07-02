<?php

namespace Database\Seeders;
//php artisan make:seeder StudentSeeder
//composer dump-autoload
//php artisan migreate:fresh --seed

use Illuminate\Support\Facades\DB;
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
        
        DB::table('students')->insert([
            'name' => 'Mariano',
            'last_name' => 'Rivero',
            'dni' => '1',
            'birthday' => '1997-10-18',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('students')->insert([
            'name' => 'Jose',
            'last_name' => 'Dida',
            'dni' => '2',
            'birthday' => '1998-11-08',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('students')->insert([
            'name' => 'Pedro',
            'last_name' => 'Marconi',
            'dni' => '3',
            'birthday' => '1995-02-01',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('students')->insert([
            'name' => 'Adrian',
            'last_name' => 'Pescara',
            'dni' => '4',
            'birthday' => '1999-12-28',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        
        Student::factory(6)->create();
    }
}

