<?php
/* php artisan make:model Student
*/ 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Subject;


class Student extends Model
{
 
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'state',
        'dni',
        'birthday',
    ];


    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'student_subjects');
    }

    public function assistence(): HasMany
    {
        return $this->hasMany(Assistence::class);
    }



     
    //$student->roles()->attach("1");
    protected function name(): Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }

    protected function lastName(): Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );
    }
}
