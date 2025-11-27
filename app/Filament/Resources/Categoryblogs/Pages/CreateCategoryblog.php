<?php

namespace App\Filament\Resources\Categoryblogs\Pages;

use App\Filament\Resources\Categoryblogs\CategoryblogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryblog extends CreateRecord
{
    protected static string $resource = CategoryblogResource::class;
}
