<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_uz',
        'description_en',
        'description_ru',
        'description_uz',
        'image',
        'video_url',
        'link',
        'type',
    ];

//    public function softwarecategory()
//    {
//        return $this->belongsTo(Category::class);
//    }

    public function softwareCategory()
    {
        return $this->belongsTo(CategorySoftware::class,'type');
    }
}
