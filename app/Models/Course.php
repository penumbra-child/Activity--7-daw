<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model

{
    use HasFactory;
    protected $fillable = ['course_key', 'name', 'description', 'robotics_kit_id'];


    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'enrollments');
    }

    public function roboticsKit()
    {
    return $this->belongsTo(RoboticsKit::class);
}
}

