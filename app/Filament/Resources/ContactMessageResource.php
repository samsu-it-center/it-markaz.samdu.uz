<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $label = "Aloqa xabari";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Ism')
                    ->disabled(),
                TextInput::make('email')
                    ->label('Email')
                    ->disabled(),
                Textarea::make('message')
                    ->label('Xabar')
                    ->disabled(),
                Toggle::make('is_read')
                    ->label('O‘qilgan')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Ism'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('message')->label('Xabar')->limit(50),
                BooleanColumn::make('is_read')->label('O‘qilgan'),
                TextColumn::make('created_at')->label('Yuborilgan sana')->dateTime(),
            ])
            ->filters([
                SelectFilter::make('is_read')
                    ->options([
                        '0' => 'O‘qilmagan',
                        '1' => 'O‘qilgan',
                    ]),
            ])
            ->actions([
                Action::make('markAsRead')
                    ->label('O‘qilgan deb belgilash')
                    ->action(function (ContactMessage $record) {
                        $record->is_read = true;
                        $record->save();
                        Notification::make()
                            ->title('Xabar o‘qilgan deb belgilandi!')
                            ->success()
                            ->send();
                    })
                    ->visible(fn(ContactMessage $record) => !$record->is_read),
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
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
