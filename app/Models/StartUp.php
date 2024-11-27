<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartUp extends Model
{
    use HasFactory;

    public $table = "startups";
    protected $fillable = [
        'description_en',
        'description_ru',
        'description_uz',
        'project_objective_en',
        'project_objective_ru',
        'project_objective_uz',
        'opportunities_tasks_en',
        'opportunities_tasks_ru',
        'opportunities_tasks_uz',
        'budget_en',
        'budget_ru',
        'budget_uz',
        'image',
        'title_en',
        'title_uz',
        'title_ru',
        'type'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
