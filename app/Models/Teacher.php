<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =['name', 'l_name','job_designation','city', 'region', 'postal', 'country', 'phone', 'email', 'course_id', 'birthday', 'image'];

    public function course() {
        return $this->belongsTo(Course::class);
        
    }
}
