<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StartUpResource\Pages;
use App\Filament\Resources\StartUpResource\RelationManagers;
use App\Models\StartUp;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StartUpResource extends Resource
{
    protected static ?string $model = StartUp::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';
    protected static ?string $navigationLabel = "StartUp";
    protected static ?string $label = "StartUp";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title_en')
                    ->label('Name (English)')
                    ->required(),
                TextInput::make('title_uz')
                    ->label('Name (Uzbek)')
                    ->required(),
                TextInput::make('title_ru')
                    ->label('Name (Russian)')
                    ->required(),
                RichEditor::make('description_en')
                    ->label('Description (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('description_ru')
                    ->label('Description (Russian)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('description_uz')
                    ->label('Description (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('project_objective_en')
                    ->label('Project Objective (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('project_objective_ru')
                    ->label('Project Objective (Russian)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('project_objective_uz')
                    ->label('Project Objective (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('opportunities_tasks_en')
                    ->label('Opportunities and Tasks (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('opportunities_tasks_ru')
                    ->label('Opportunities and Tasks (Russian)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('opportunities_tasks_uz')
                    ->label('Opportunities and Tasks (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('budget_en')
                    ->label('Budget (English)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('budget_ru')
                    ->label('Budget (Russian)')
                    ->required()
                    ->columnSpan('full'),

                RichEditor::make('budget_uz')
                    ->label('Budget (Uzbek)')
                    ->required()
                    ->columnSpan('full'),

                FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('startup-images')
                    ->required() // Set to required if necessary
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_uz'),
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
            'index' => Pages\ListStartUps::route('/'),
            'create' => Pages\CreateStartUp::route('/create'),
            'edit' => Pages\EditStartUp::route('/{record}/edit'),
        ];
    }
}
