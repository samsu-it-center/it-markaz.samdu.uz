<?php

namespace App\Providers;

use App\Filament\Resources\DinamicMenuResource;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Filament resurslarini qo'shish
        Filament::registerResources([
            DinamicMenuResource::class,
        ]);
    }
}
