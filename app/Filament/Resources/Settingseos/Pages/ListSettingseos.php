<?php

namespace App\Filament\Resources\Settingseos\Pages;

use App\Filament\Resources\Settingseos\SettingseoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSettingseos extends ListRecords
{
    protected static string $resource = SettingseoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
