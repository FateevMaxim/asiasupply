<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DenairResource\Pages;
use App\Filament\Resources\DenairResource\RelationManagers;
use App\Models\BoergerCategories;
use App\Models\Denair;
use App\Models\DenairCategories;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class DenairResource extends Resource
{
    protected static ?string $model = Denair::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Название'),
                Textarea::make('short_description')->label('Краткое описание')
                    ->maxLength(255),
                TinyEditor::make('intro')->label('Описание')
                    ->columnSpan(2),
                FileUpload::make('avatar')->label('Аватарка'),
                FileUpload::make('media')->label('Фото и видео')
                    ->multiple(),
                Select::make('denair_category_id')
                    ->options(
                        DenairCategories::all()->pluck('title', 'id')
                    )
                    ->required(),
                Repeater::make('description')
                    ->schema([
                        TextInput::make('desc_title')->label('Название'),
                        TinyEditor::make('desc_description')->label('Описание'),
                    ])
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Название'),
                TextColumn::make('category.title')->label('Категория')
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
            'index' => Pages\ListDenairs::route('/'),
            'create' => Pages\CreateDenair::route('/create'),
            'edit' => Pages\EditDenair::route('/{record}/edit'),
        ];
    }
}
