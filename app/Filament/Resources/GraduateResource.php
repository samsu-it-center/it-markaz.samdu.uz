<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraduateResource\Pages;
use App\Filament\Resources\GraduateResource\RelationManagers;
use App\Models\Graduates;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class GraduateResource extends Resource
{
    protected static ?string $model = Graduates::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = "Kursni tugatgan talabalar";
    protected static ?string $label = "Kursni tugatgan talaba";
    protected static ?string $pluralLabel = "Kursni tugatgan talabalar";

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


        Forms\Components\DatePicker::make('graduation_date')
            ->label('Tugatgan vaqti'),

                Forms\Components\Select::make('type')
                    ->label('Kurs turi')
                    ->relationship('courseCategory', 'name_en')
                    ->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fullname')->label('Fish'),
                TextColumn::make('info_uz')->label('Ma`lumot (UZ)'),

                ImageColumn::make('image')
                    ->label('Rasm'),

                TextColumn::make('created_at')->label('Yaratilgan vaqti')->dateTime(),
                TextColumn::make('graduation_date')->label('Tamomlagan vaqti'),
                TextColumn::make('type')->label('Kurs turi'),
            ])
            ->filters([
                // Add any filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Enable editing
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Enable bulk delete action
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
            'index' => Pages\ListGraduates::route('/'),
            'create' => Pages\CreateGraduate::route('/create'),
            'edit' => Pages\EditGraduate::route('/{record}/edit'),
        ];
    }
}
