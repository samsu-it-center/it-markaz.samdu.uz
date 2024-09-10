<?php

namespace App\Filament\Resources\NormativeDocumentResource\Pages;

use App\Filament\Resources\NormativeDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNormativeDocuments extends ListRecords
{
    protected static string $resource = NormativeDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
