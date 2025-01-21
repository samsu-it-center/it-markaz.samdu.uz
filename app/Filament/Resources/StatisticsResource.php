<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatisticsResource\Pages;
use App\Filament\Resources\StatisticsResource\RelationManagers;
use App\Models\Statistics;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\HtmlColumn; // HtmlColumn qo'shildi
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatisticsResource extends Resource
{
    protected static ?string $model = Statistics::class;

     protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static ?string $navigationLabel = "Statistik ma`lumotlar";
    protected static ?string $label = "Statistik ma`lumotlar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('info_uz')
                    ->label('Statistika (uz)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('info_en')
                    ->label('Statistika (en)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('info_ru')
                    ->label('Statistika (ru)')
                    ->nullable()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('info_uz')
                    ->label('Statistika (uz)')
                    ->html(),  // HTML kontentini to'g'ri ko'rsatish uchunTextColumn ishlatildi

               TextColumn::make('info_en')
                    ->label('Statistika (en)')
                    ->html(),

               TextColumn::make('info_ru')
                    ->label('Statistika (ru)')
                    ->html(),
            ])
            ->filters([
                // Misol uchun, tarix bo'yicha filtr qo'shish
                Tables\Filters\SelectFilter::make('language')
                    ->options([
                        'uz' => 'Uzbek',
                        'en' => 'English',
                        'ru' => 'Russian',
                    ])
                    ->label('Language Filter'),
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
            'index' => Pages\ListStatistics::route('/'),
            'create' => Pages\CreateStatistics::route('/create'),
            'edit' => Pages\EditStatistics::route('/{record}/edit'),
        ];
    }
}
