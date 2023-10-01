<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =['course_name', 'description'];

    public function admissions(){

        return $this->hasMany(Admission::class);
    }
}
