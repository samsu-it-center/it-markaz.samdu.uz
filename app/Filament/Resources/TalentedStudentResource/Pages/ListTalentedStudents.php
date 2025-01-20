<?php

namespace App\Filament\Resources\TalentedStudentResource\Pages;

use App\Filament\Resources\TalantedStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTalentedStudents extends ListRecords
{
    protected static string $resource = TalantedStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
