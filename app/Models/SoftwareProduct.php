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
    ];

    public function productTypes()
    {
        return $this->belongsToMany(ProductType::class, 'product_type_software_product');
    }
}
