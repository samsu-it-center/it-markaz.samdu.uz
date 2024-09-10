<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NormativeDocumentResource\Pages;
use App\Filament\Resources\NormativeDocumentResource\RelationManagers;
use App\Models\NormativeDocument;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NormativeDocumentResource extends Resource
{
    protected static ?string $model = NormativeDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';
    protected static ?string $navigationLabel = "Normativ hujjat";
    protected static ?string $label = "Normativ hujjat";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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

                Repeater::make('files')
                    ->relationship('files')
                    ->schema([
                        FileUpload::make('file')
                            ->label('File')
                            ->required()
                            ->disk('public'),

                        TextInput::make('description')
                            ->label('File Description')
                            ->nullable(),
                    ])
                    ->columns(2)
                    ->minItems(1)
                    ->maxItems(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListNormativeDocuments::route('/'),
            'create' => Pages\CreateNormativeDocument::route('/create'),
            'edit' => Pages\EditNormativeDocument::route('/{record}/edit'),
        ];
    }
}
