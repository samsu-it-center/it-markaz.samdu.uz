<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'content_en',
        'content_ru',
        'content_uz',
    ];

    public function getContentAttribute($value)
    {
        return [
            'en' => $this->content_en,
            'ru' => $this->content_ru,
            'uz' => $this->content_uz,
        ];
    }
}
