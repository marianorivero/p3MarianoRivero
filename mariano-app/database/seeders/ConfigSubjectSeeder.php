<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSubjectSeeder extends Seeder
{

    public function run(): void
    {
//        config_subjects
        DB::table('config_subjects')->insert([
            'subject_id'=>'1',
            'dia'=>'1',
            'hora_inicio'=>'20:00',
            'hora_fin'=>'22:00',
            //'hora_limite'=>'20:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'2',
            'dia'=>'2',
            'hora_inicio'=>'17:00',
            'hora_fin'=>'19:00',
            'hora_limite'=>'17:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'3',
            'dia'=>'3',
            'hora_inicio'=>'16:00',
            'hora_fin'=>'16:40',
            'hora_limite'=>'16:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'4',
            'dia'=>'4',
            'hora_inicio'=>'18:00',
            'hora_fin'=>'20:00',
            'hora_limite'=>'18:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);

        DB::table('config_subjects')->insert([
            'subject_id'=>'5',
            'dia'=>'5',
            'hora_inicio'=>'13:00',
            'hora_fin'=>'15:00',
            'hora_limite'=>'13:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('config_subjects')->insert([
            'subject_id'=>'6',
            'dia'=>'6',
            'hora_inicio'=>'21:00',
            'hora_fin'=>'23:59',
            //'hora_limite'=>'23:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('config_subjects')->insert([
            'subject_id'=>'7',
            'dia'=>'7',
            'hora_inicio'=>'21:00',
            'hora_fin'=>'23:00',
            'hora_limite'=>'11:15',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
    }
}
