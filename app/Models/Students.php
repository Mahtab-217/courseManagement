<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Students extends Model
{
    /** @use HasFactory<\Database\Factories\StudentsFactory> */
    use HasFactory;
    public function user(){
       return $this->belongsTo(User::class, 'user_id','id');
    
    }
    public function subject(){
        return $this->belongsToMany(Subject::class,'grades','student_id','subject_id');
    }
}
