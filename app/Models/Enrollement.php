<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollement extends Model

{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

