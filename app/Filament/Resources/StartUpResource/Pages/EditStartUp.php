<?php

namespace App\Filament\Resources\StartUpResource\Pages;

use App\Filament\Resources\StartUpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStartUp extends EditRecord
{
    protected static string $resource = StartUpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
