<?php

namespace App\Filament\Resources\SoftwareProductResource\Pages;

use App\Filament\Resources\SoftwareProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoftwareProduct extends EditRecord
{
    protected static string $resource = SoftwareProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
