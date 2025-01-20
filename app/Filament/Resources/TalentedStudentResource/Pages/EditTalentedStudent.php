<?php

namespace App\Filament\Resources\TalentedStudentResource\Pages;

use App\Filament\Resources\TalantedStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTalentedStudent extends EditRecord
{
    protected static string $resource = TalantedStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
