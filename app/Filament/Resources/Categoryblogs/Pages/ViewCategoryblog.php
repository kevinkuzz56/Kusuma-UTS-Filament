<?php

namespace App\Filament\Resources\Categoryblogs\Pages;

use App\Filament\Resources\Categoryblogs\CategoryblogResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCategoryblog extends ViewRecord
{
    protected static string $resource = CategoryblogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
