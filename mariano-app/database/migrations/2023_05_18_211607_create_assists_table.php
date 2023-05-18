<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assists', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('student_id');
            //$table->unsignedBigInteger('subject_id');
            $table->timestamps();//con esto comparo si coincide con el horario en que se da la materia en calendar, si el alumno en tal materia y tal dia hace asistencia
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assists');
    }
};
