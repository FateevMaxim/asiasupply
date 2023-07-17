<?php

namespace App\Filament\Resources\BoergerCategoriesResource\Pages;

use App\Filament\Resources\BoergerCategoriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBoergerCategories extends EditRecord
{
    protected static string $resource = BoergerCategoriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
