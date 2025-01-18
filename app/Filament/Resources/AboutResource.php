<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use AymanAlhattami\FilamentDateScopesFilter\DateScopeFilter;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-c-academic-cap';
    protected static ?string $navigationLabel = "Markaz haqida";
    protected static ?string $label = "Markaz haqida";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    // TextInputlar
                    TextInput::make('contact_it_center_en')
                        ->label('Contact IT Center (English)')
                        ->required()
                        ->default(fn($record) => $record->contact_it_center_en),  // default ma'lumot

                    TextInput::make('contact_it_center_ru')
                        ->label('Contact IT Center (Russian)')
                        ->required()
                        ->default(fn($record) => $record->contact_it_center_ru),  // default ma'lumot

                    TextInput::make('contact_it_center_uz')
                        ->label('Contact IT Center (Uzbek)')
                        ->required()
                        ->default(fn($record) => $record->contact_it_center_uz),  // default ma'lumot

                    // RichEditor komponentlari
                    RichEditor::make('about_center_en')
                        ->label('Content (English)')
                        ->columnSpan('full')
                        ->default(fn($record) => $record->content_en),  // default ma'lumot

                    RichEditor::make('about_center_ru')
                        ->label('Content (Russian)')
                        ->columnSpan('full')
                        ->default(fn($record) => $record->content_ru),  // default ma'lumot

                    RichEditor::make('about_center_uz')
                        ->label('Content (Uzbek)')
                        ->columnSpan('full')
                        ->default(fn($record) => $record->content_uz),  // default ma'lumot

                    // Qolgan TextInputlar
                    TextInput::make('official_name_en')
                        ->label('Official Name (English)')
                        ->required()
                        ->default(fn($record) => $record->official_name_en),  // default ma'lumot

                    TextInput::make('official_name_ru')
                        ->label('Official Name (Russian)')
                        ->required()
                        ->default(fn($record) => $record->official_name_ru),  // default ma'lumot

                    TextInput::make('official_name_uz')
                        ->label('Official Name (Uzbek)')
                        ->required()
                        ->default(fn($record) => $record->official_name_uz),  // default ma'lumot

                    // Boshqa komponentlar
                    TextInput::make('location_en')
                        ->label('Location (English)')
                        ->required()
                        ->default(fn($record) => $record->location_en),  // default ma'lumot

                    TextInput::make('location_ru')
                        ->label('Location (Russian)')
                        ->required()
                        ->default(fn($record) => $record->location_ru),  // default ma'lumot

                    TextInput::make('location_uz')
                        ->label('Location (Uzbek)')
                        ->required()
                        ->default(fn($record) => $record->location_uz),  // default ma'lumot

                    Textarea::make('address_en')
                        ->label('IT Center Address (English)')
                        ->required()
                        ->default(fn($record) => $record->address_en),  // default ma'lumot

                    Textarea::make('address_ru')
                        ->label('IT Center Address (Russian)')
                        ->required()
                        ->default(fn($record) => $record->address_ru),  // default ma'lumot

                    Textarea::make('address_uz')
                        ->label('IT Center Address (Uzbek)')
                        ->required()
                        ->default(fn($record) => $record->address_uz),  // default ma'lumot
                ]),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('official_name_en')->label('Official Name (English)'),
                TextColumn::make('location_en')->label('Location (English)'),
            ])
            ->filters([
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
            'index' => Pages\ListAbouts::route('/'),
//            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
