<?php

namespace App\Filament\Resources\DenairCategoriesResource\Pages;

use App\Filament\Resources\DenairCategoriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDenairCategories extends EditRecord
{
    protected static string $resource = DenairCategoriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
