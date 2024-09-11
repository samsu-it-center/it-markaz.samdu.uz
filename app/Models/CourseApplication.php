<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'course_id',
        'message'
    ];

    // Relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
