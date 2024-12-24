<?php
namespace App\Filament\Resources;

use App\Filament\Resources\CategorySoftwareResource\Pages;
use App\Models\CategorySoftware;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CategorySoftwareResource extends Resource
{
    protected static ?string $model = CategorySoftware::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Category Software'; // Menudagi nom

    // Resursni navigatsiyada ko'rsatish uchun
    protected static ?int $navigationSort = 1; // Menuda tartibni belgilash (ixtiyoriy)

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Category Name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Category Name'),
            ])
            ->filters([
                // Qo'shimcha filterni qo'shish (ixtiyoriy)
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
            // Qo'shimcha aloqalar (relations) qo'shish
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategorySoftware::route('/'),
            'create' => Pages\CreateCategorySoftware::route('/create'),
            'edit' => Pages\EditCategorySoftware::route('/{record}/edit'),
        ];
    }
}
