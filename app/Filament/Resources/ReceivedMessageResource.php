<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReceivedMessageResource\Pages;
use App\Filament\Resources\ReceivedMessageResource\RelationManagers;
use App\Models\ContactMessage;
use App\Models\ReceivedMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReceivedMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';


    protected static ?string $navigationLabel = 'Kelib tushgan xabarlar';

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
            TextColumn::make('id')
                ->label('ID')
                ->sortable()
                ->searchable(),

            TextColumn::make('name')
                ->label('Fish')
                ->sortable()
                ->searchable(),

            TextColumn::make('phone')
                ->label('Telefon raqam')
                ->sortable()
                ->searchable(),

            TextColumn::make('message')
                ->label('Xabar')
                ->limit(50) // Xabarni qisqartirish (50 belgigacha ko'rsatadi)
                ->searchable(),

            BooleanColumn::make('is_read')
                ->label('Status')
                ->trueIcon('heroicon-o-check-circle') // O'qilgan holat uchun ikona
                ->falseIcon('heroicon-o-x-circle') // O'qilmagan holat uchun ikona
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Kelib tushgan sanasi')
                ->sortable(),
        ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListReceivedMessages::route('/'),
//            'create' => Pages\CreateReceivedMessage::route('/create'),
//            'edit' => Pages\EditReceivedMessage::route('/{record}/edit'),
        ];
    }
}
