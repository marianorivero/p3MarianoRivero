<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Day extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function configSubject(): HasMany
    {
        return $this->hasMany(ConfigSubject::class);
    }
}

