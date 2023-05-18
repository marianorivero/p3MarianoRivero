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
        ]);
        DB::table('subjects')->insert([
            'name' => 'Matematica 1',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Practica 1',
        ]);
    }
}
