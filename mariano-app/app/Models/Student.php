<?php
/* php artisan make:model Student
*/ 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

//importar para el join
//use Illuminate\Database\Eloquent\Relations\HasMany;
//use App\Models\Subject;


class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'state',
        'dni',
        'birthday',
    ];


    //metodo para el join
    //public function subjects(): HasMany
    //{
    //    return $this->hasMany(Subject::class);
    //}





    protected function name(): Attribute{
        return new Attribute(
            //get: fn($value) => ucwords($value),
            //set: fn($value) => strtolower($value)
        );
    }

    protected function lastName(): Attribute{
        return new Attribute(
            //get: fn($value) => ucwords($value),
            //set: fn($value) => strtolower($value)
        );
    }
}
