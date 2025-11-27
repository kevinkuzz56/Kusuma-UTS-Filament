<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_kategori')
                    ->label('Kode_Kategori')
                    ->required(),
                TextInput::make('nama_kategori')
                    ->label('Nama_Kategori')
                    ->required(),
                TextInput::make('status')
                    ->label('Status_Kategori')
                    ->required(),
            ]);
    }
}
