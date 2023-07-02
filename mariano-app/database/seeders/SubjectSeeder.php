<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('subjects')->insert([
            'name' => 'Programacion 1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Matematica 1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Practica Profesionalizante 1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Seminario 1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Derechos Humanos',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Legislacion Informatica',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Base de Datos',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
    }
}
