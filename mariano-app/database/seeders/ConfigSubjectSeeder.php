<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSubjectSeeder extends Seeder
{

    public function run(): void
    {
        //config_subjects
        DB::table('config_subjects')->insert([
            'subject_id'=>'1',
            'dia'=>'Lunes',
            'hora_inicio'=>'18:00',
            'hora_fin'=>'21:00',
            'hora_limite'=>'18:30',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'2',
            'dia'=>'Martes',
            'hora_inicio'=>'17:00',
            'hora_fin'=>'19:00',
            'hora_limite'=>'17:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'3',
            'dia'=>'Miercoles',
            'hora_inicio'=>'18:00',
            'hora_fin'=>'20:00',
            'hora_limite'=>'18:30',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
    }
}
