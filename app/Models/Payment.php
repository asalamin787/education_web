<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =['admission_id', 'money'];
    
    public function admission() {
        return $this->belongsTo(Admission::class);
        
    }
}
