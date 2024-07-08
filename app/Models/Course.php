<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
