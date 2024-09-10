<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_it_center_en',
        'contact_it_center_ru',
        'contact_it_center_uz',
        'about_center_en',
        'about_center_ru',
        'about_center_uz',
        'official_name_en',
        'official_name_ru',
        'official_name_uz',
        'location_en',
        'location_ru',
        'location_uz',
        'address_en',
        'address_ru',
        'address_uz',
    ];
}
