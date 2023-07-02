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
            'nombre' => 'Lunes',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Martes',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Miercoles',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Jueves',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Viernes',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Sabado',
        ]);
        DB::table('days')->insert([
            'nombre' => 'Domingo',
        ]);
        
    }
}
