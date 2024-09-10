<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title_en',
        'title_ru',
        'title_uz',
        'desc_en',
        'desc_ru',
        'desc_uz',
    ];
}
