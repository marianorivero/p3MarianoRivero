<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '2',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '1',
            'subject_id' => '3',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '2',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '2',
            'subject_id' => '2',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '3',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '3',
            'subject_id' => '3',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '5',
            'subject_id' => '2',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '6',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '21',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '21',
            'subject_id' => '2',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '21',
            'subject_id' => '3',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '22',
            'subject_id' => '1',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
        DB::table('student_subjects')->insert([
            'student_id' => '22',
            'subject_id' => '3',
            'created_at' => '2023-06-08 13:44:18',
            'updated_at' => '2023-06-08 13:44:18',
        ]);
    }
}
