<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NormativeDocumentFileResource\Pages;
use App\Filament\Resources\NormativeDocumentFileResource\RelationManagers;
use App\Models\NormativeDocument;
use App\Models\NormativeDocumentFile;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NormativeDocumentFileResource extends Resource
{
    protected static ?string $model = NormativeDocumentFile::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';
    protected static ?string $navigationLabel = "Normativ hujjat fayli";
    protected static ?string $label = "Normativ hujjat fayli";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('normative_document_id')
                    ->label('Normative Document')
                    ->options(NormativeDocument::all()->pluck('description_en', 'id'))
                    ->required(),

                FileUpload::make('file')
                    ->label('File')
                    ->required()
                    ->disk('public')
                    ->multiple()
                    ->preserveFilenames()
                    ->directory('normative-documents')
                    ->maxFiles(10),
                TextInput::make('description')
                    ->label('File Description')
                    ->nullable(),
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
            'index' => Pages\ListNormativeDocumentFiles::route('/'),
            'create' => Pages\CreateNormativeDocumentFile::route('/create'),
            'edit' => Pages\EditNormativeDocumentFile::route('/{record}/edit'),
        ];
    }
}
