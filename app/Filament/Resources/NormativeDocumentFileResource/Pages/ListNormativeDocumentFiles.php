<?php

namespace App\Filament\Resources\NormativeDocumentFileResource\Pages;

use App\Filament\Resources\NormativeDocumentFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNormativeDocumentFiles extends ListRecords
{
    protected static string $resource = NormativeDocumentFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
