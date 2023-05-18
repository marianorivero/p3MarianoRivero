<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('days')->insert([
            'name' => 'Lunes',
        ]);
        DB::table('days')->insert([
            'name' => 'Martes',
        ]);
        DB::table('days')->insert([
            'name' => 'Miercoles',
        ]);
        DB::table('days')->insert([
            'name' => 'Jueves',
        ]);
        DB::table('days')->insert([
            'name' => 'Viernes',
        ]);
        DB::table('days')->insert([
            'name' => 'Sabado',
        ]);
        DB::table('days')->insert([
            'name' => 'Domingo',
        ]);
        
    }
}
