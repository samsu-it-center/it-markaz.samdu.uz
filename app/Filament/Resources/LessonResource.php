<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = "Dars";
    protected static ?string $label = "Dars";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('course_id')
                    ->label('Course')
                    ->options(\App\Models\Course::all()->pluck('title_en', 'id'))
                    ->required(),

                TextInput::make('title_en')
                    ->label('Title (English)')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_ru')
                    ->label('Title (Russian)')
                    ->nullable()
                    ->columnSpan('full'),

                TextInput::make('title_uz')
                    ->label('Title (Uzbek)')
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

                TextInput::make('video_url')
                    ->label('Video URL')
                    ->nullable()
                    ->url()
                    ->columnSpan('full'),

                FileUpload::make('video_file')
                    ->label('Video File')
                    ->nullable()
                    ->disk('public')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course.title_en')
                    ->label('Kurs')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title_en')
                    ->label('Sarlavha (English)')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title_ru')
                    ->label('Sarlavha (Russian)')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title_uz')
                    ->label('Sarlavha (Uzbek)')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
