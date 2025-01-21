<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySoftware extends Model
{
    use HasFactory;

    protected $table = 'category_softwears';

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_uz',
    ];

    public function softwares()
    {
        return $this->hasMany(SoftwareProduct::class);
    }


}
