<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
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
use Illuminate\Support\Facades\Storage;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-c-document-duplicate';
    protected static ?string $navigationLabel = "Kurslar";
    protected static ?string $label = "Kurslar";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_en')
                    ->label('Sarlavha (inglizcha)')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_ru')
                    ->label('Sarlavha (ruscha)')
                    ->nullable()
                    ->columnSpan('full'),

                TextInput::make('title_uz')
                    ->label('Sarlavha (o\'zbek)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('description_en')
                    ->label('Tavsif (inglizcha)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('description_ru')
                    ->label('Tavsif (ruscha)')
                    ->nullable()
                    ->columnSpan('full'),

                RichEditor::make('description_uz')
                    ->label('Tavsif (o\'zbek)')
                    ->nullable()
                    ->columnSpan('full'),

                Select::make('type')
                    ->label('Kurs turi')
                    ->options([
                        'online' => 'Online',
                        'offline' => 'Offline',
                    ])
                    ->required(),

                FileUpload::make('image')
                    ->label('Kurs')
                    ->image()
                    ->directory('course-images')
                    ->nullable()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_en')->label('Sarlavha (English)'),
                TextColumn::make('title_ru')->label('Sarlavha (Russian)'),
                TextColumn::make('title_uz')->label('Sarlavha (Uzbek)'),
                TextColumn::make('type')->label('Kurs turi'),
                ImageColumn::make('image')->circular()
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
