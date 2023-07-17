<?php

namespace App\Filament\Resources\DenairResource\Pages;

use App\Filament\Resources\DenairResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDenairs extends ListRecords
{
    protected static string $resource = DenairResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
