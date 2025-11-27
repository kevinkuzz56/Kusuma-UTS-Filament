<?php

namespace App\Filament\Resources\Categoryblogs\Pages;

use App\Filament\Resources\Categoryblogs\CategoryblogResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoryblog extends EditRecord
{
    protected static string $resource = CategoryblogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
