<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'classrooms';

    public function students()
    {
        return $this->hasMany(Student::class, 'classroom_id');
    }
}
