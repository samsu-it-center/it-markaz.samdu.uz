<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TalentedStudentResource\Pages;
use App\Filament\Resources\TalentedStudentResource\RelationManagers;
use App\Models\TalantedStudents;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TalantedStudentResource extends Resource
{
    protected static ?string $model = TalantedStudents::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = "Iqtidorli talabalar";
    protected static ?string $pluralLabel = "Iqtidorli talabalar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fullname')
                    ->required()
                    ->label('Fish'),

                RichEditor::make('info_uz')
                    ->label('Ma`lumot (uz)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('info_en')
                    ->label('Ma`lumot (en)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('info_ru')
                    ->label('Ma`lumot (ru)')
                    ->required()
                    ->columnSpan('full'),

                FileUpload::make('image')
                    ->label('Upload Image')
                    ->disk('public') // Use the public disk
                    ->directory('graduates/images') // Directory to save images
                    ->image() // Validate as an image
                    ->maxSize(2048),// Set max file size in kilobytes

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->label('Full Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('info_en')
                    ->label('Info (English)')
                    ->limit(50) // Ko'rsatiladigan matn uzunligini cheklash
                    ->tooltip(fn($record) => $record->info_en), // Matn to'liq ko'rinishi uchun tooltip

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->rounded(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTalentedStudents::route('/'),
            'create' => Pages\CreateTalentedStudent::route('/create'),
            'edit' => Pages\EditTalentedStudent::route('/{record}/edit'),
        ];
    }
}
