<?php

namespace App\Filament\Resources\DenairResource\Pages;

use App\Filament\Resources\DenairResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDenair extends EditRecord
{
    protected static string $resource = DenairResource::class;

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
