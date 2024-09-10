<?php

namespace App\Filament\Resources\SoftwareProductResource\Pages;

use App\Filament\Resources\SoftwareProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoftwareProducts extends ListRecords
{
    protected static string $resource = SoftwareProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
