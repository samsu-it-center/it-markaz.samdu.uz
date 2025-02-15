<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_uz')
                    ->label('Kategoriya nomi(uz)')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_en')
                    ->label('Kategoriya nomi (en)')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_ru')
                    ->label('Kategoriya nomi (ru)')
                    ->nullable()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_uz')
                    ->label('Kategoriya nomi(uz)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_en')
                    ->label('Kategoriya nomi(en)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_ru')
                    ->label('Kategoriya nomi(ru)')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Yaratilgan sana')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Tahrirlangan sana')
                    ->dateTime(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
