<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ru',
        'title_uz',
        'content_en',
        'content_ru',
        'content_uz',
        'views',
        'image',
        'likes',
    ];

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function incrementLikes()
    {
        $this->increment('likes');
    }
}
