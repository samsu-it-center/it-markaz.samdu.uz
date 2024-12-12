<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function softwareProducts()
    {
        return $this->belongsToMany(SoftwareProduct::class, 'product_type_software_product');
    }
}
