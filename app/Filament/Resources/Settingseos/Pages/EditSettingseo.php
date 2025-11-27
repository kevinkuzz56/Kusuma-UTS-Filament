<?php

namespace App\Filament\Resources\Settingseos\Pages;

use App\Filament\Resources\Settingseos\SettingseoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSettingseo extends EditRecord
{
    protected static string $resource = SettingseoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
