<?php

namespace App\Filament\Resources\DenairResource\Pages;

use App\Filament\Resources\DenairResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDenair extends CreateRecord
{
    protected static string $resource = DenairResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
