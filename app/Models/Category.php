<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_uz',
    ];


    public function startups()
    {
        return $this->hasMany(Startup::class);
    }
}
