<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategorySoftwareResource\Pages;
use App\Models\CategorySoftware;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategorySoftwareResource extends Resource
{
    protected static ?string $model = CategorySoftware::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Category Software';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_uz')
                    ->required()
                    ->label('Category Name'),
                Forms\Components\TextInput::make('name_en')
                    ->nullable()
                    ->label('Category Name (EN)'),
                Forms\Components\TextInput::make('name_ru')
                    ->nullable()
                    ->label('Category Name (RU)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
                ->columns([
                    Tables\Columns\TextColumn::make('name_uz')
                        ->sortable()
                        ->searchable()
                        ->label('Kategoriya nomi(uz)'),
                    Tables\Columns\TextColumn::make('name_uz')
                        ->sortable()
                        ->searchable()
                        ->label('Kategoriya nomi(en)'),
                    Tables\Columns\TextColumn::make('name_uz')
                        ->sortable()
                        ->searchable()
                        ->label('Kategoriya nomi(ru)'),
                ])
            ->filters([
                // Qo'shimcha filterni qo'shish (ixtiyoriy)
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
            // Qo'shimcha aloqalar (relations) qo'shish
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategorySoftware::route('/'),
            'create' => Pages\CreateCategorySoftware::route('/create'),
            'edit' => Pages\EditCategorySoftware::route('/{record}/edit'),
        ];
    }
}
