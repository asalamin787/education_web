<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable =['name', 'm_name', 'l_name', 'roll', 'registration', 'course', 'birthday','gender', 'student_id', 'father', 'mother', 'blood', 'country', 'which_country', 'phone', 'email','password', 'street', 'street_2', 'city', 'state', 'postal', 'prs_f_name', 'prs_l_name', 'relationship', 'prs_email', 'prs_phone' ];
}
