<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class);
    }


}
