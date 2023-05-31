<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'dia',
        'hora_inicio',
        'hora_fin',
        'hora_limite',
    ];
}
