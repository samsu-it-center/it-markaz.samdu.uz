<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalantedStudents extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'info_uz',
        'info_en',
        'info_ru',
        'image',
        'graduated_date',
        'type',
    ];
}
