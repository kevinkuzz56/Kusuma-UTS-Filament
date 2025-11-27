<?php

namespace App\Filament\Resources\Categoryblogs\Pages;

use App\Filament\Resources\Categoryblogs\CategoryblogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoryblogs extends ListRecords
{
    protected static string $resource = CategoryblogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
