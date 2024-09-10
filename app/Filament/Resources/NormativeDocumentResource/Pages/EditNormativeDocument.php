<?php

namespace App\Filament\Resources\NormativeDocumentResource\Pages;

use App\Filament\Resources\NormativeDocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNormativeDocument extends EditRecord
{
    protected static string $resource = NormativeDocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
