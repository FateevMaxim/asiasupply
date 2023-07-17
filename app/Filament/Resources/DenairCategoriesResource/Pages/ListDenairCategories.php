<?php

namespace App\Filament\Resources\DenairCategoriesResource\Pages;

use App\Filament\Resources\DenairCategoriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDenairCategories extends ListRecords
{
    protected static string $resource = DenairCategoriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
