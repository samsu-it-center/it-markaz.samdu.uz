<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DinamicMenuResource\Pages;
use App\Models\DinamicMenu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DinamicMenuResource extends Resource
{
    // Modelni belgilash
    protected static ?string $model = DinamicMenu::class;


    // Menudagi nom
    protected static ?string $navigationLabel = 'Menular';

    // Menudagi tartibni belgilash
    protected static ?int $navigationSort = 1;

    // Formani yaratish
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_uz')
                    ->required()
                    ->label("Menyu nomi (uz)"),
                Forms\Components\TextInput::make('name_en')
                    ->nullable()
                    ->label('Menyu nomi (en)'),
                Forms\Components\TextInput::make('name_ru')
                    ->nullable()
                    ->label('Menyu nomi (ru)'),
            ]);
    }

    // Jadvalni ko'rsatish
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_uz')
                    ->sortable()
                    ->searchable()
                    ->label("Menyu nomi (uz)"),
                Tables\Columns\TextColumn::make('name_en')
                    ->sortable()
                    ->searchable()
                    ->label('Menyu nomi (en)'),
                Tables\Columns\TextColumn::make('name_ru')
                    ->sortable()
                    ->searchable()
                    ->label('Menyu nomi (ru)'),
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

    // Aloqalar (relations) qo'shish
    public static function getRelations(): array
    {
        return [
            // Qo'shimcha aloqalar (relations) qo'shish
        ];
    }

    // Sahifalar (Pages)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDinamicMenus::route('/'),
            'create' => Pages\CreateDinamicMenu::route('/create'),
            'edit' => Pages\EditDinamicMenu::route('/{record}/edit'),
        ];
    }
}
