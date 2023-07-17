<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoergerCategoriesResource\Pages;
use App\Filament\Resources\BoergerCategoriesResource\RelationManagers;
use App\Models\BoergerCategories;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class BoergerCategoriesResource extends Resource
{
    protected static ?string $model = BoergerCategories::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Название'),
                FileUpload::make('avatar')->label('Аватарка'),
                TinyEditor::make('description')->label('Описание')
                ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBoergerCategories::route('/'),
            'create' => Pages\CreateBoergerCategories::route('/create'),
            'edit' => Pages\EditBoergerCategories::route('/{record}/edit'),
        ];
    }
}
