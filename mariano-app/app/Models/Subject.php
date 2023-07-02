<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_subjects');
    }


    public function configSubjects(): HasMany
    {
        return $this->hasMany(ConfigSubject::class);
    }


    public function assistences(): HasMany
    {
        return $this->hasMany(Assistence::class);
    }


    protected function name(): Attribute{
        return new Attribute(
            //get: fn($value) => ucwords($value),
            //set: fn($value) => strtolower($value)
        );
    }
}
