<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = "Sahifa";
    protected static ?string $label = "Sahifa";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique()
                    ->maxLength(255),

                RichEditor::make('content_en')
                    ->label('Content (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('content_ru')
                    ->label('Content (Russian)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('content_uz')
                    ->label('Content (Uzbek)')
                    ->nullable()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('content_uz')
                    ->label('Content (uz)')
                    ->limit(50)
                    ->html(),

                TextColumn::make('content_en')
                    ->label('Content (en)')
                    ->limit(50)
                    ->html(),


                TextColumn::make('content_ru')
                    ->label('Content (ru)')
                    ->limit(50)
                    ->html(),

                TextColumn::make('created_at')
                    ->label('Yaratilgan vaqti')
                    ->dateTime('d.m.Y H:i'),
            ])
            ->filters([
                // Agar filtrlar kerak bo'lsa, bu yerga qo'shishingiz mumkin
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
            // Qo'shimcha aloqalar (relations) qo'shish mumkin
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
