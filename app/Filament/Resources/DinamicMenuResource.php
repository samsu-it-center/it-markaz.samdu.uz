<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DinamicMenuResource\Pages;
use App\Models\DinamicMenu;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class DinamicMenuResource extends Resource
{
    protected static ?string $model = DinamicMenu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Menyular';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_uz')
                    ->required()
                    ->label('Name (UZ)'),
                Forms\Components\TextInput::make('name_en')
                    ->label('Name (EN)'),
                Forms\Components\TextInput::make('name_ru')
                    ->label('Name (RU)'),
                Forms\Components\TextInput::make('route')
                    ->required()
                    ->label('Route'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_uz')->label('Name (UZ)')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name_en')->label('Name (EN)')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name_ru')->label('Name (RU)')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('route')->label('Route')->sortable()->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDinamicMenus::route('/'),
            'create' => Pages\CreateDinamicMenu::route('/create'),
            'edit' => Pages\EditDinamicMenu::route('/{record}/edit'),
        ];
    }
}
