<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Teachers extends Model
{
    /** @use HasFactory<\Database\Factories\TeachersFactory> */
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function classes(){
        return $this->hasMany(Classes::class,'teacher_id');
    }
     public function students(){
        return $this->hasManyThrough(Students::class,Classes::class, 'teacher_id','class_id');

    }
}
