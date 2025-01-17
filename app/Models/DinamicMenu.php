<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinamicMenu extends Model
{
    use HasFactory;

     protected $table = 'dinamic_menus';

    protected $fillable = [
        'name_en',
        'name_ru',
        'name_uz',
    ];
}
