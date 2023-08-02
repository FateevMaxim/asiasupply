<?php

namespace App\Filament\Resources\BoergerResource\Pages;

use App\Filament\Resources\BoergerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBoerger extends EditRecord
{
    protected static string $resource = BoergerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
