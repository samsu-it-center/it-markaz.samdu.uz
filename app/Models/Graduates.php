<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduates extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'info_uz',
        'info_en',
        'info_ru',
        'image',
        'graduation_date',
        'type',
    ];


    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'type');
    }

    public  function coursetype($id)
    {
         return CourseCategory::find($id);
    }

}
