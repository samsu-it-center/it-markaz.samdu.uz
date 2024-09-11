<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseApplicationResource\Pages;
use App\Filament\Resources\CourseApplicationResource\RelationManagers;
use App\Models\CourseApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseApplicationResource extends Resource
{
    protected static ?string $model = CourseApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $label = "Kurslarga yozilganlar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')->label('First Name')->searchable(),
                TextColumn::make('last_name')->label('Last Name')->searchable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('course.title')->label('Course'),
                TextColumn::make('created_at')->label('Submitted At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourseApplications::route('/'),
            'edit' => Pages\EditCourseApplication::route('/{record}/edit'),
        ];
    }
}
