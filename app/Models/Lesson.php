<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title_en',
        'title_ru',
        'title_uz',
        'description_en',
        'description_ru',
        'description_uz',
        'video_url',
        'video_file',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
