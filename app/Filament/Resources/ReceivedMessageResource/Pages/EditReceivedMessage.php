<?php

namespace App\Filament\Resources\ReceivedMessageResource\Pages;

use App\Filament\Resources\ReceivedMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReceivedMessage extends EditRecord
{
    protected static string $resource = ReceivedMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
