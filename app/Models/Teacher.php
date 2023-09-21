<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =['f_name', 'l_name', 'school_name', 'job_title', 'street', 'street_2', 'city', 'region', 'postal', 'country', 'phone', 'email', 'course_name', 'course_date'];

    public function course() {
        return $this->belongsTo(Course::class);
        
    }
}
