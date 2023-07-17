<?php

namespace App\Filament\Resources\BoergerResource\Pages;

use App\Filament\Resources\BoergerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoergers extends ListRecords
{
    protected static string $resource = BoergerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
