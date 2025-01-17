<?php

namespace App\Filament\Resources\DinamicMenuResource\Pages;

use App\Filament\Resources\DinamicMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDinamicMenu extends EditRecord
{
    protected static string $resource = DinamicMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
