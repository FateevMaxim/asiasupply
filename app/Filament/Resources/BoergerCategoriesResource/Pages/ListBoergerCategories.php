<?php

namespace App\Filament\Resources\BoergerCategoriesResource\Pages;

use App\Filament\Resources\BoergerCategoriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoergerCategories extends ListRecords
{
    protected static string $resource = BoergerCategoriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
