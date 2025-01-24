<?php

namespace App\Filament\Resources\ReceivedMessageResource\Pages;

use App\Filament\Resources\ReceivedMessageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReceivedMessages extends ListRecords
{
    protected static string $resource = ReceivedMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
