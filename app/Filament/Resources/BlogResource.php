<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-on-square-stack';
    protected static ?string $label = "Bloglar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_uz')
                    ->label('O\'zbekcha Sarlavha')
                    ->required(),
                TextInput::make('title_en')
                    ->label('Inglizcha Sarlavha')
                    ->required(),
                TextInput::make('title_ru')
                    ->label('Ruscha Sarlavha')
                    ->required(),
                FileUpload::make('image')
                    ->label('Rasm')
                    ->image()
                    ->directory('blog_images'),
                Textarea::make('desc_uz')
                    ->label('O\'zbekcha Qisqacha Tavsif'),
                Textarea::make('desc_en')
                    ->label('Inglizcha Qisqacha Tavsif'),
                Textarea::make('desc_ru')
                    ->label('Ruscha Qisqacha Tavsif'),
                RichEditor::make('content_uz')
                    ->label('O\'zbekcha Matn')
                    ->columnSpan('full'),
                RichEditor::make('content_en')
                    ->label('Inglizcha Matn')
                    ->columnSpan('full'),
                RichEditor::make('content_ru')
                    ->label('Ruscha Matn')
                    ->columnSpan('full'),
                TextInput::make('author')
                    ->label('Muallif')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_uz')->label('Sarlavha (UZ)'),
                TextColumn::make('title_en')->label('Sarlavha (EN)'),
                TextColumn::make('title_ru')->label('Sarlavha (RU)'),
                ImageColumn::make('image')->label('Rasm'),
                TextColumn::make('author')->label('Muallif'),
                TextColumn::make('created_at')->label('Yaratilgan vaqti')->dateTime(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
