<?php
/* php artisan make:model --
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


//importar para el join
//use App\Models\Student;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    //public function student(): BelongsTo
    //{
    //    return $this->belongsTo(Student::class);
    //}


    protected function name(): Attribute{
        return new Attribute(
            //get: fn($value) => ucwords($value),
            //set: fn($value) => strtolower($value)
        );
    }
}
