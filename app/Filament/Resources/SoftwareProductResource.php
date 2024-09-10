<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoftwareProductResource\Pages;
use App\Filament\Resources\SoftwareProductResource\RelationManagers;
use App\Models\ProductType;
use App\Models\SoftwareProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SoftwareProductResource extends Resource
{
    protected static ?string $model = SoftwareProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-circle';
    protected static ?string $navigationLabel = "Dasturiy mahsuloti";
    protected static ?string $label = "Dasturiy mahsuloti";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_en')
                    ->label('Name (English)')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('name_ru')
                    ->label('Name (Russian)')
                    ->nullable()
                    ->columnSpan('full'),

                TextInput::make('name_uz')
                    ->label('Name (Uzbek)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('description_en')
                    ->label('Description (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('description_ru')
                    ->label('Description (Russian)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('description_uz')
                    ->label('Description (Uzbek)')
                    ->nullable()
                    ->columnSpan('full'),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('software-images')
                    ->nullable()
                    ->columnSpan('full'),

                TextInput::make('video_url')
                    ->label('Video URL')
                    ->nullable()
                    ->url()
                    ->columnSpan('full'),

                TextInput::make('link')
                    ->label('Link')
                    ->nullable()
                    ->url()
                    ->columnSpan('full'),

//                Select::make('productTypes')
//                    ->label('Product Types')
//                    ->options(ProductType::all()->pluck('name', 'id'))
//                    ->multiple() // Enable multi-select
//                    ->required()
//                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Rasm'),
                TextColumn::make('name_uz')
                    ->label('Nomi (Uzbek)'),
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
            'index' => Pages\ListSoftwareProducts::route('/'),
            'create' => Pages\CreateSoftwareProduct::route('/create'),
            'edit' => Pages\EditSoftwareProduct::route('/{record}/edit'),
        ];
    }
}
