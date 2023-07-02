<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assistence extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'subject_id',

    ];

    public function students(): BelongsTo
    {
        return $this->belongsToMany(Student::class);
    }

    public function subjects(): BelongsTo
    {
        return $this->belongsTo(Subject::class,);
    }

}

