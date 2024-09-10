<?php

namespace App\Filament\Resources\NormativeDocumentFileResource\Pages;

use App\Filament\Resources\NormativeDocumentFileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNormativeDocumentFile extends EditRecord
{
    protected static string $resource = NormativeDocumentFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
