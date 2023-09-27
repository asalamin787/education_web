<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable =['name', 'm_name', 'l_name', 'roll', 'registration', 'course_id', 'birthday','gender','father', 'mother', 'blood', 'country','phone','city','postal', 'prs_f_name', 'prs_l_name', 'relationship', 'prs_email', 'prs_phone', 'image', 'email' ];

    public function course()  {
        return $this->belongsTo(Course::class);
    }
}
