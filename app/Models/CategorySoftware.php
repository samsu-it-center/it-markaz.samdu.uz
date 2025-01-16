<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySoftware extends Model
{
    use HasFactory;

    protected $table = 'category_softwears';

    protected $fillable = ['name']; // faqat 'name' maydonini qo'shdik

    public function softwares()
    {
        return $this->hasMany(Software::class);
    }


}
