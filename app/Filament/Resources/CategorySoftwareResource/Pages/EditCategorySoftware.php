<?php

namespace App\Filament\Resources\CategorySoftwareResource\Pages;

use App\Filament\Resources\CategorySoftwareResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategorySoftware extends EditRecord
{
    protected static string $resource = CategorySoftwareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
