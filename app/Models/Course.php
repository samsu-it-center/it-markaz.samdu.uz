<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_uz',
        'description_en',
        'description_ru',
        'description_uz',
        'type',
        'image',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
