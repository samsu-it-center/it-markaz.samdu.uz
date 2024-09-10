<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = "Yangiliklar";
    protected static ?string $label = "Yangiliklar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_en')
                    ->label('Title (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('content_en')
                    ->label('Content (English)')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_ru')
                    ->label('Title (Russian)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('content_ru')
                    ->label('Content (Russian)')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_uz')
                    ->label('Title (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('content_uz')
                    ->label('Content (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                FileUpload::make('image')
                    ->label('News Image')
                    ->image()  // Ensures only image files are allowed
                    ->directory('news-images')  // Optional: specify the directory for image storage
                    ->required()  // If you want to make this field mandatory
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_en')->label('Title (English)')->sortable()->searchable(),
                BadgeColumn::make('views')->label('Views')->sortable(),
                BadgeColumn::make('likes')->label('Likes')->sortable(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
